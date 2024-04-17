<?php
namespace App\Models\Validators;

class FormValidation {
    protected $rules = [];
    protected $errors = [];

    public function isNotEmpty($data) {
        if (empty($data)) {
            return "Поле не должно быть пустым.";
        }
        return null;
    }

    public function isInteger($data) {
        if (!is_numeric($data) || intval($data) != $data) {
            return "Значение должно быть целым числом.";
        }
        return null;
    }

    public function isLess($data, $value) {
        if ($this->isInteger($data)) {
            if (intval($data) >= $value) {
                return "Значение должно быть меньше $value.";
            }
        }
        return null;
    }

    public function isGreater($data, $value = 0) {
        if ($this->isInteger($data)) {
            if (intval($data) <= $value) {
                return "Значение должно быть больше $value.";
            }
        }
        return null;
    }

    public function isEmail($data) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return "Значение должно быть действительным адресом электронной почты.";
        }
        return null;
    }

    public function setRule($field_name, $validator_name) {
        $this->rules[$field_name] = $validator_name;
    }

    public function validate($post_array) {
        foreach ($this->rules as $field_name => $validator_name) {
            $data = isset($post_array[$field_name]) ? $post_array[$field_name] : null;
            $error = null;

            switch ($validator_name) {
                case 'isNotEmpty':
                    $error = $this->isNotEmpty($data);
                    break;
                case 'isInteger':
                    $error = $this->isInteger($data);
                    break;
                case 'isLess':
                    $value = isset($post_array[$field_name . '_value']) ? $post_array[$field_name . '_value'] : null;
                    $error = $this->isLess($data, $value);
                    break;
                case 'isGreater':
                    $value = isset($post_array[$field_name . '_value']) ? $post_array[$field_name . '_value'] : null;
                    $error = $this->isGreater($data, $value);
                    break;
                case 'isEmail':
                    $error = $this->isEmail($data);
                    break;
            }

            if ($error) {
                $this->errors[$field_name] = $error;
            }
        }
    }

    public function getRules()
    {
        return $this->rules;
    }
    public function showErrors() {
        $html = '<ul>';
        foreach ($this->errors as $field_name => $error) {
            $html .= '<li>' . $error . '</li>';
        }
        $html .= '</ul>';
        return $html;

    }

    public function hasErrors() {
        return !empty($this->errors);
    }
    
}
