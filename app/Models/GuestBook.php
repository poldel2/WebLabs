<?php

namespace App\Models;

class GuestBook extends BaseActiveRecord
{
    protected $table = 'guestbook';
    protected $fillable = ['idguestbook', 'created_at', 'surname', 'name', 'email', 'message'];
}