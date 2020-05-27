<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
        $id = $this->route('item');
        switch ($this->method()) {
            case 'GET':
            case 'POST':
            case 'PUT':
            case 'PATCH':
            case 'DELETE':
            default:
                return [];
                break;
        }
    }
}
