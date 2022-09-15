<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'type' => 'required|in:income, expense'
        ];
    }
}


// $table->id();
// $table->string('name', 20)->unique()->nullable(false);
// $table->enum('type', ['income', 'expense'])->nullable(false);
// $table->timestamps();