<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'total_product_value' => 'required|numeric',
            'total_shipping_value' => 'required|numeric',
            'client_name' => 'required|string|max:100',
            'client_address' => 'required|string|max:100',
        ];
    }
}