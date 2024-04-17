@extends('template')

@section('content')
    <title>Тест</title>
    <link rel="stylesheet" type="text/css" href="css/Test.css">
    <link rel="stylesheet" type="text/css" href="css/modalTest.css">
    <div class="Information">
        <div class="header">
            <div class="header">
                <h1 id="Name"> Тест по дисциплине </h1>
            </div>
        </div>
        <form method="post" action="{{ route('test') }}" id="TestForm">
            @csrf
            <div class="form-group">
                <label for="full-name">Фамилия Имя Отчество:</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>

            <div class="form-group">
                <label for="food">Выберите свою группу:</label>
                <select name="food" id="food">
                    <optgroup label="1 курс">
                        <option value="r1">ИТ/б-23-1-о</option>
                        <option value="r2">ИТ/б-23-2-о</option>
                        <option value="r3">ИТ/б-23-3-о</option>
                        <option value="r3">ИТ/б-23-4-о</option>
                    </optgroup>
                    <optgroup label="2 курс">
                        <option value="r1">ИТ/б-22-1-о</option>
                        <option value="r2">ИТ/б-22-2-о</option>
                        <option value="r3">ИТ/б-22-3-о</option>
                        <option value="r3">ИТ/б-23-4-о</option>
                    </optgroup>
                    <optgroup label="3 курс">
                        <option value="r1">ИС/б-21-1-о</option>
                        <option value="r2">ИС/б-21-2-о</option>
                        <option value="r3">ИС/б-21-3-о</option>
                        <option value="r3">ПИ/б-21-1-о</option>
                    </optgroup>
                    <optgroup label="4 курс">
                        <option value="r1">ИС/б-20-1-о</option>
                        <option value="r2">ИС/б-20-2-о</option>
                        <option value="r3">ИС/б-20-3-о</option>
                        <option value="r3">ПИ/б-20-1-о</option>
                    </optgroup>
                </select>
            </div>

            <div class="form-group">
                <label for="Question1">Какова вероятность выпадения суммы очков, равной 7, при бросании двух симметричных
                    игральных костей (шестигранных)?:</label>
                <textarea id="Question1" name="Question1" rows="5" required></textarea>
            </div>


            <div class="form-group">
                <label>Какова вероятность получить решку при подбрасывании симметричной монеты?:</label>
                <label for="option1" type="Answers">
                    <input type="radio" id="option1" name="radio4" value="option1" required> 0.25
                </label>
                <label for="option2" type="Answers">
                    <input type="radio" id="option2" name="radio4" value="option2" required> 0.5
                </label>
                <label for="option3" type="Answers">
                    <input type="radio" id="option3" name="radio4" value="option3" required> 0.125
                </label>
                <label for="option4" type="Answers">
                    <input type="radio" id="option4" name="radio4" value="option4" required> 0.75
                </label>
            </div>

            <div class="form-group">
                <label for="select2">Вероятность события всегда находится в интервале от 0 до 1.</label>
                <select id="select2">
                    <option value="option1">Правда</option>
                    <option value="option2">Неправда</option>
                </select>
            </div>


            <button type="submit">Отправить</button>
            <button type="reset" id="clear-button">Очистить</button>
            <div id="myModal" class="modal">

                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p id="results">Здесь будут результаты...</p>
                </div>

            </div>

            <script src="js/modalTest.js"></script>



        </form>


    </div>
@endsection
