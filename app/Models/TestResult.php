<?php

namespace App\Models;

class TestResult extends BaseActiveRecord {
    protected $table = 'TestResult';
    protected $fillable = ['idtestresults', 'created_at', 'name', 'question1', 'question2', 'question3'];
}