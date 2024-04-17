<?php

namespace App\Models\Validators;

class ResultsVerification extends СustomFormValidation {
    private $correctAnswers = [
        'Question1' => '1/6', 
        'radio4' => 'option2', 
        'select2' => 'option1' 
    ];
    
    private $questionNames = [
        'Question1' => 'Первый вопрос',
        'radio4' => 'Второй вопрос',
        'select2' => 'Третий вопрос',
    ];
    
    private $answerOptions = [
        'option1' => 'первый',
        'option2' => 'второй',
        'option3' => 'третий',
        'option4' => 'четвертый',
    ];
    

    public function setCorrectAnswer($field_name, $correct_answer) {
        $this->correctAnswers[$field_name] = $correct_answer;
    }

    // ...
    
    public function checkAnswers($post_array) {
        $results = [];
        foreach ($this->correctAnswers as $field_name => $correct_answer) {
            $user_answer = isset($post_array[$field_name]) ? $post_array[$field_name] : null;
            $results[$field_name] = ($user_answer == $correct_answer);
        }
        return $results;
    }
    
    
    
    public function showResults($results) {
        $html = '<ul>';
        foreach ($results as $field_name => $result) {
            $html .= '<li>' . $result . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
