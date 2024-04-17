@extends('template')

@section('content')
<title>Учеба</title>
<link rel="stylesheet" type="text/css" href="css/Study.css">
<div class="Information"> 
                  <div class = "header"> 
                    <h1 id="Name"> Учеба </h1>
                </div>
                    <p> Я обучаюсь в университете Севастопольском Государственном Университете.</p>
                    <p> Кафедра Информационные Системы </p>
                    <p> Изучал следующие Дисциплины: </p>
                    <table>
                        <tr>
                          <th colspan="1" rowspan="3">№</th>
                          <th colspan="1" rowspan="3" type="second-column"> Дисциплина </th>
                          <th colspan="12"> Часов в неделю (Лекций, Л.Р. П.Р.)</th>
                        </tr>
                        <tr>
                          <th colspan="6">1 курс</th>
                          <th colspan="6">2 курс</th>
                        </tr>
                        <tr>
                          <th colspan="3">1 сем</th>
                          <th colspan="3">2 сем</th>
                          <th colspan="3">3 сем</th>
                          <th colspan="3">4 сем</th>
                        </tr>
                        <tr>
                          <th> 1 </th>
                          <th second-column> Алгоритмизация и программирование </th>
                          <th class="equal-width"> 1 </th>
                          <th class="equal-width">  1</th>
                          <th class="equal-width"> 1 </th>
                          <th class="equal-width"> 1 </th>
                          <th class="equal-width"> 1 </th>
                          <th class="equal-width">  0</th>
                          <th class="equal-width">  0</th>
                          <th class="equal-width"> 0 </th>
                          <th class="equal-width"> 1 </th>
                          <th class="equal-width">  </th>
                          <th class="equal-width">  </th>
                          <th class="equal-width">  </th>
                        </tr>
                        <tr>
                            <th> 2 </th>
                            <th second-column> Высшая математика </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 3 </th>
                            <th second-column> Фиолософия </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 4 </th>
                            <th second-column> Введение в современные цифровые технологии </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 5 </th>
                            <th second-column> Технологии личностного развития </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 6 </th>
                            <th second-column> Эллективные курсы по физической культуре </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                          </tr>
                          <tr>
                            <th> 7 </th>
                            <th second-column> Иностранный язык </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 3 </th>
                          </tr>
                          <tr>
                            <th> 8 </th>
                            <th second-column> Дискретная математика для программистов</th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 9 </th>
                            <th second-column> История </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 10 </th>
                            <th second-column> Основы проектной деятельности </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 11 </th>
                            <th second-column> Основы цифрового проектирования </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 12 </th>
                            <th second-column> Физика </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 12 </th>
                            <th second-column> Компьютерная графика </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 13 </th>
                            <th second-column> Объектно-ориентированное программирование </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 14 </th>
                            <th second-column> Операционные системы и среды </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 15 </th>
                            <th second-column> Введение в программирование в среде Microsoft Visual Studio </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 16 </th>
                            <th second-column> Правоведение </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 17 </th>
                            <th second-column> Экономика и организация IT предприятия </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 18 </th>
                            <th second-column> Безопасность жизнедеятельности </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                          </tr>
                          <tr>
                            <th> 19 </th>
                            <th second-column> Компьютерная схемотехника </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                          </tr>
                          <tr>
                            <th> 20 </th>
                            <th second-column> Теория алгоритмов </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                          </tr>
                          <tr>
                            <th> 21 </th>
                            <th second-column> Теория вероятностей и математической статистики </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 22 </th>
                            <th second-column> Технология создания программных продуктов </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 23 </th>
                            <th second-column> Школа международных финансов </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 24 </th>
                            <th second-column> Технология проектной деятельноти </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 25 </th>
                            <th second-column> Русский язык делового общения </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                          <tr>
                            <th> 26 </th>
                            <th second-column> Управление данными </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width">  </th>
                            <th class="equal-width"> 1 </th>
                            <th class="equal-width"> 0 </th>
                            <th class="equal-width"> 1 </th>
                          </tr>
                      </table>  


                </div>
@endsection