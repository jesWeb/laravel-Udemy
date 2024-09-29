<?php

namespace App\Http\Requests\Category;
use Illuminate\Foundation\Http\FormRequest;


class PutRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        //definir reglas aqui colocamos los campos del form el unique es unico y hace la referencia a el compact
        return [
            //
            "title" => "required|min:5|max:100",
            "slug" => "required|min:5|max:400|unique:categories,slug," . $this->route("Category")->id,
        ];
    }
}
