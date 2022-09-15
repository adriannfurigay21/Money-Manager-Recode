<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'id' => 'required|exists:transfers,id',
            'sender' => 'required|exists:accounts,id',
            'receiver' => 'required|exists:accounts,id',
            'amount' => 'required|between: 0, 99999999.9999',
            'note' => 'nullable|max:250'
        ];
    }
}
