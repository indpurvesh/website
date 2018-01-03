<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        if(!$this->request->get('parent_slug')) {
            $rule['title'] = 'required|max:255';
        }
        $rule['content'] = 'required';

        /**
         *
         @todo think about post slug....
        if(strtolower($this->method()) == "post") {
            $rule['slug'] = 'required|max:255|unique:categories';
        }

        if(strtolower($this->method()) == "put") {
            $rule['slug'] = 'required|max:255';
        }
         */


        return $rule;
    }
}
