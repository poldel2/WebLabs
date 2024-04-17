<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UploadGuestBookController extends Controller
{
    function action_index()
    {
        return view('uploadGuestBook');
    }

    public function uploadFile(Request $request)
    {
        try {
            $request->validate([
                'messages_file' => 'required|mimes:json', 
            ]);

            $file = $request->file('messages_file');

            $file->move(public_path(), 'messages.inc');

            return redirect('/uploadguestbook')->with('success', 'Файл успешно загружен.');
        } catch (ValidationException $e) {
            return redirect('/uploadguestbook')->with('error', 'Ошибка валидации файла. Пожалуйста, загрузите файл в формате JSON.');
        } catch (FileException $e) {
            return redirect('/uploadguestbook')->with('error', 'Ошибка при сохранении файла.');
        }
    }
}
