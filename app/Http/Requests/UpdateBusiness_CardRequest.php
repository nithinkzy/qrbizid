<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBusiness_CardRequest extends FormRequest
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
            'business_name' => '',
            'tagline' => '',
            'your_name' => 'required',
            'business_category' => '',
            'job_title' => '',
            'phone' => '',
            'email' => '',
            'website' => '',
            'physical_address' => '',
            'linkedin' => '',
            'twitter' => '',
            'facebook' => '',
            'instagram' => '',
            'youtube' => '',
            'pinterest' => '',
            'logo' => '',
            'profile_picture' => '',
            'document' => '',
        ];
    }
}
