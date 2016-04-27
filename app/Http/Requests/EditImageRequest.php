<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Product;

class EditImageRequest extends Request
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
        return [
        'object_name' => 'required|max:50',
        'price' => 'required|Numeric|',
        'description'=>'required|max:1000',
        // 'image' => 'required|image',
        ];
    }
}
