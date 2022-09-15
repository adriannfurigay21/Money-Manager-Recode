<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountCreateRequest extends FormRequest
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
            'name' => 'required|unique|max:20',
            'type' => 'required|in:savings, personal',
            'note' => 'nullable|max:250'
        ];
    }
}


// $table->id();
// // $table->bigInteger('user_id');
//  $table->string('name', 35)->unique()->nullable(false);
//  $table->enum('type', ['savings', 'personal'])->nullable(false);
//  $table->string('note', 250)->nullable();
//  $table->timestamps();