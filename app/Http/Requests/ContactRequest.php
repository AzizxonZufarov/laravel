<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest{
/**

    *@return bool
    **/

    public function authorize(){
      return true;
    }

    /**
        *    @return array
        **/


    public function rules(){
      return [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required|min:5|max:50',
        'message' => 'required|min:15|max:500'
      ];
    }
    public function attributes(){
      return [
        'name' => 'имя'
      ];
    }
    public function messages(){
      return [
        'name.required' => 'Поле имя обязательная',
        'message.required' => 'Поле сообщение обязательная'
      ];
    }

}
