<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => 'required|max:100|unique:product,name',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'cate_id' => 'required|numeric|exists:App\Models\Category,id'
        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'name is required',
            'name.unique' => 'name is exists ',
            'price.numeric' => 'item price must be in numbers',
            'price.required' => 'price is required',
            'description.required' => 'description is required',
        ];
    }
}
