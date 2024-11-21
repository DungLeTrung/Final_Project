<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TourItineraryRequest extends FormRequest
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
            'day' => [
                'required',
                'integer',
                Rule::unique('tour_itinerary')
                    ->where('tour_id', $this->tour_id)
            ],
            'place' => 'required|string',
            'description' => 'required|string|max: 255',
            'tour_id' => 'required',
        ];
    }
}
