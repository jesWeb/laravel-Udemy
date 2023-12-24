<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

use  Illuminate\Support\Str;

class StoretRequest extends FormRequest
{
    //funcion de url limpia
    protected function prepareForValidation()
    {
        $this->merge(
            [
                  'slug' => Str::slug($this->title)
                //  'slug' => Str($this->title)->slug()
            ]
        );
    }



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
        //definir reglas aqui colocamos los campos del form
        return [
            //
            "title" => "required|min:5|max:100",
            "slug" => "required|min:5|max:400|unique:posts",
            "categories_id" => "required",
            "posted" => "required",
            "description" => "required|min:10",
            "content" => "required|min:15|max:200"

        ];
    }
}
