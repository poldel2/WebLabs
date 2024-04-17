<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    use HasFactory;

    private $photos = [
        [
            'imgSrc' => 'photos/cat.jpg',
            'imgAlt' => 'Пышный я',
            'title' => 'Пышный я'
        ],
        [
            'imgSrc' => 'photos/cat2.jpg',
            'imgAlt' => 'Лежащий я',
            'title' => 'Лежащий я'
        ],
        [
            'imgSrc' => 'photos/cat3.jpg',
            'imgAlt' => 'Я на полу',
            'title' => 'Я на полу'
        ],
        [
            'imgSrc' => 'photos/cat4.jpg',
            'imgAlt' => 'Я с заколкой',
            'title' => 'Я с заколкой'
        ],
        [
            'imgSrc' => 'photos/cat5.jpg',
            'imgAlt' => 'Прыгающий я',
            'title' => 'Прыгающий я'
        ],
        [
            'imgSrc' => 'photos/cat6.jpg',
            'imgAlt' => 'Я уставший',
            'title' => 'Я уставший'
        ],
        [
            'imgSrc' => 'photos/cat7.jpg',
            'imgAlt' => 'Внимательный я',
            'title' => 'Внимательный я'
        ],
        [
            'imgSrc' => 'photos/cat8.jpg',
            'imgAlt' => 'Я на паспорт',
            'title' => 'Я на паспорт'
        ],
        [
            'imgSrc' => 'photos/cat9.jpg',
            'imgAlt' => 'Я угрюмый',
            'title' => 'Я угрюмый'
        ],
        [
            'imgSrc' => 'photos/cat10.jpg',
            'imgAlt' => 'Я с семьей',
            'title' => 'Я с семьей'
        ],
        [
            'imgSrc' => 'photos/cat11.jpg',
            'imgAlt' => 'Я делаю уроки',
            'title' => 'Я делаю уроки'
        ],
        [
            'imgSrc' => 'photos/cat12.jpg',
            'imgAlt' => 'Я только проснулся',
            'title' => 'Я только проснулся'
        ],
        [
            'imgSrc' => 'photos/cat13.jpg',
            'imgAlt' => 'Я обиженный',
            'title' => 'Я обиженный'
        ],
        [
            'imgSrc' => 'photos/cat14.jpg',
            'imgAlt' => 'Я в шоке',
            'title' => 'Я в шоке'
        ],
        [
            'imgSrc' => 'photos/cat15.jpg',
            'imgAlt' => 'Я во время удара в 10000 вольт',
            'title' => 'Я во время удара в 10000 вольт'
        ]
    ];
    public function get_data()
    {
        return $this->photos;
    }
}
