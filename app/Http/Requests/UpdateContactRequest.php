<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
  public function rules(): array
    {
        return [
            'name'=>'required|string',
            'description'=>'required|string',
            'job_title'=>'required|string',
            'image'=>'required|mimes:jpg,bmp,png',
            'email'=>'required|email',
            'phone'=>'required|numeric|integer',
            'address'=>'required|',
            'degree'=>'required|string',
        ];
    }
    
    public function attributes() {
    return [
    'name'=>__('name'),
    'description'=>__('description'),
    'job_title'=>__('keyword.job_title'),
    'image'=>__('image'),
    'email'=>__('email'),
    'phone'=>__('phone'),
    'address'=>__('address'),
    'degree'=>__('keyword.degree'),
    ];
    }

}
