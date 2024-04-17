<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validators\FormValidation;

class ContantController extends Controller
{
    public function action_index()
    {
        return view('contact');
    }
    public function submitForm(Request $request)
    {
        $validator = new FormValidation();

        $validator->setRule('full-name', 'isNotEmpty');
        $validator->setRule('phone', 'isNotEmpty');
        $validator->setRule('phone', 'isInteger');
        $validator->setRule('phone', 'isGreater');
        $validator->setRule('gender', 'isNotEmpty');
        $validator->setRule('age', 'isNotEmpty');
        $validator->setRule('email', 'isNotEmpty');
        $validator->setRule('email', 'isEmail');
        $validator->setRule('birthdate', 'isNotEmpty');
        $validator->setRule('message', 'isNotEmpty');

        if ($request->isMethod('post')) {
            $validator->validate($request->all());

            if ($validator->hasErrors()) {
                return $validator->showErrors();
            } else {
                $fullName = $request->input('full-name');
                $phone = $request->input('phone');
                $gender = $request->input('gender');
                $age = $request->input('age');
                $email = $request->input('email');
                $birthdate = $request->input('birthdate');
                $message = $request->input('message');

                $to = 'povlik2206@yandex.ru';
                $subject = 'Новое сообщение от ' . $fullName;
                $body = "ФИО: $fullName\n";
                $body .= "Телефон: $phone\n";
                $body .= "Пол: $gender\n";
                $body .= "Возраст: $age\n";
                $body .= "E-mail: $email\n";
                $body .= "Дата рождения: $birthdate\n";
                $body .= "Сообщение: $message\n";

                // Отправка электронной почты
                // mail($to, $subject, $body);

                return 'Сообщение успешно отправлено.';
            }
        }

        return view('contact-form');
    }
}