<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePreOrderRequest extends FormRequest
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
            'name' => ['required', 'max:250'],
            'email' => ['required'],
            'phone' => ['nullable'],
            'image' => ['nullable'],
            'address' => ['nullable'],
            'product_name' => ['required'],
            'product_size' => ['nullable'],
            'details' => ['nullable'],
        ];
    }
}
