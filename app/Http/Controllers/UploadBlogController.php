<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\Validators\FormValidation;

class UploadBlogController extends Controller
{
    public function action_index()
    {
        return view('uploadblog');
    }

    public function uploadFile(Request $request)
    {
        try {
            $request->validate([
                'messages_file' => 'required|mimetypes:text/plain,text/csv',
            ]);
            
            $file = $request->file('messages_file');

            $filePath = $file->getPathname();

            if (($handle = fopen($filePath, 'r')) !== false) {
                $columns = fgetcsv($handle); 

                $validator = new FormValidation();
                $validator->setRule('title', 'isNotEmpty');
                $validator->setRule('content', 'isNotEmpty');
                $validator->setRule('created_at', 'isNotEmpty');

                while (($data = fgetcsv($handle)) !== false) {
                    $message = array_combine($columns, $data); 

                    $validator->validate($message);

                    if ($validator->hasErrors()) {
                        $errors = $validator->showErrors();
                        return redirect('/uploadblog')->with('error', $errors);
                    }

                    $this->addBlogPost($message);
                }

                fclose($handle);
            }   

            return redirect('/uploadblog')->with('success', 'Файл успешно загружен.');
        } catch (ValidationException $e) {
            return redirect('/uploadblog')->with('error', 'Ошибка валидации файла. Пожалуйста, загрузите файл в формате CSV.');
        } catch (\Exception $e) {
            return redirect('/uploadblog')->with('error', 'Ошибка при обработке файла: ' . $e->getMessage());
        }
    }

    private function addBlogPost($data)
    {
        DB::table('blog_posts')->insert($data);
    }
}