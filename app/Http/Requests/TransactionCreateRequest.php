<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionCreateRequest extends FormRequest
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
            'account_id' => 'required|exists:accounts,id',
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|between: 0, 99999999.99',
            'type' => 'required|in:income, expense',
            'note' => 'nullable|max:250'
        ];
    }
}



// $table->id();
// // $table->bigInteger('user_id')->nullable(false);
//  $table->bigInteger('account_id')->nullable(false);
//  $table->bigInteger('category_id')->nullable(false);
//  $table->decimal('amount', 8,4)->nullable(false)->unsignedBigInteger();
//  $table->enum('type', ['income', 'expense'])->nullable(false);
//  $table->string('note', 250)->nullable();
//  $table->timestamps();