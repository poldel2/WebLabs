@extends('template')

@section('content')
<title>Контакт</title>
<link rel="stylesheet" type="text/css" href="css/Contact.css">
<div class="Information">
    <div class="header">
        <h1> Контакт </h1>
    </div>
    <form method="post" action="{{ route('contact') }}" id="contactForm">
        <div class="form-group">
            <label for="full-name">Фамилия Имя Отчество:</label>
            <input type="text" id="full-name" name="full-name" required class="tooltip-element" title="Введите ваше ФИО">
        </div>
        <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" required class="tooltip-element" title="Номер должен начинатся с +7/+3 и содержать от 8 до 11 цифр">
        </div>

        <div class="form-group">
            <label>Пол:</label>
            <label for="male">
                <input type="radio" id="male" name="gender" value="male" required> Мужской
            </label>
            <label for="female">
                <input type="radio" id="female" name="gender" value="female" required> Женский
            </label>
        </div>

        <div class="form-group">
            <label for="age">Возраст:</label>
            <select id="age" name="age" required>
                <option value="">Выберите возраст</option>
                <option value="18-25">18-25</option>
                <option value="26-35">26-35</option>
                <option value="36-45">36-45</option>
                <option value="46+">46+</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="birthdate">Дата рождения:</label>
            <input type="text" id="birthdateInput" name="birthdate" required class="tooltip-element" title="Введите день рождения в формате ГГГГ-ММ-ДД">
            <div id="calendarPopup" class="calendar-popup">
                <div class="calendar-header">
                    <select id="monthSelect"></select>
                    <select id="yearSelect"></select>
                </div>
                <div id="calendarDays" class="calendar-days"></div>
            </div>
        </div>

        <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="5" required class="tooltip-element" title="Введите сообщение которое хотите отправить"></textarea>
        </div>

        <button type="submit" id="submitButton">Отправить</button>
        <button type="reset" id="clear-button">Очистить</button>

        <div id="modalOverlay">
            <div id="modalWindow">
                <p>Вы действительно хотите отправить сообщение?</p>
                <div id="modalButtons">
                    <button id="modalYes">Да</button>
                    <button id="modalNo">Нет</button>
                </div>
            </div>
        </div>

    </form>


</div>
@endsection