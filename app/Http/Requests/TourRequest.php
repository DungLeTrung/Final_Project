<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'number_of_guests' => 'required|integer|min:1',
            'departure_time' => 'required|date',
            'departure_point' => 'required|string',
            'duration' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'tour_price' => 'required|numeric|min:0',
            'destination_id' => 'required|integer',
            'services' => 'required|array',
            'tour_rule' => 'required|string',
            'tour_type' => 'required|array',
            'tour_type.*' => 'exists:tour_type,id',
        ];
    }
}
