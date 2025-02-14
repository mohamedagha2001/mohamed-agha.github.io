<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'image'=>'nullable|mimes:jpg,bmp,png',
            'hero_img'=>'nullable|mimes:jpg,bmp,png',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'address'=>'required|',
            'degree'=>'required|string',
            'age'=>'required|numeric',
            'facebook'=>'nullable|url',
            'instagram'=>'nullable|url',
            'x'=>'nullable|url',
            'linkedin'=>'nullable|url',
        ];
    }
    
    public function attributes() {
    return [
    'name'=>__('keywords.name'),
    'description'=>__('keywords.description'),
    'job_title'=>__('keywords.job_title'),
    'image'=>__('keywords.image'),
    'hero_img'=>__('keywords.hero_img'),
    'email'=>__('keywords.email'),
    'phone'=>__('keywords.phone'),
    'address'=>__('keywords.address'),
    'degree'=>__('keywords.degree'),
    'age'=>__('keywords.age'),
    'facebook'=>__('keywords.facebook'),
    'instagram'=>__('keywords.instagram'),
    'x'=>__('keywords.x'),
    'linkedin'=>__('keywords.linkedin'),
    ];
    }

}
