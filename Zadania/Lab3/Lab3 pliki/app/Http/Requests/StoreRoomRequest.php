<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'number' => 'required|integer|min:1|max:999',
            'name' => 'sometimes|nullable|string|min:2|max:30',
            'occupancy' => 'required|integer|min:1|max:4',
            'price' => 'required|decimal:0,2|min:0',
        ];
    }
}
