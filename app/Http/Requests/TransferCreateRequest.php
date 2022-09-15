<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferCreateRequest extends FormRequest
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
            'sender' => 'required|exists:accounts,id',
            'receiver' => 'required|exists:accounts,id',
            'amount' => 'required|between: 0, 99999999.9999|integer',
            'note' => 'nullable|max:250'
        ];
    }
}


// $table->id();
// //   $table->bigInteger('user_id')->nullable(false);
//    $table->bigInteger('sender')->nullable(false);
//    $table->bigInteger('receiver')->nullable(false);
//    $table->decimal('amount', 8,4)->nullable(false)->unsignedBigInteger();
//    $table->string('note', 250)->nullable();
//    $table->timestamps();