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
            'business_name' => 'required',
            'tagline' => '',
            'your_name' => 'required',
            'job_title' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'website' => '',
            'physical_address' => 'required',
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
