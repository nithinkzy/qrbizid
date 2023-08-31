<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business_Card extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'business_name',
        'tagline',
        'your_name',
        'job_title',
        'phone',
        'email',
        'website',
        'physical_address',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'youtube',
        'pinterest',
        'date_of_entry',
        'qr',
        'logo',
        'profile_picture',
        'document',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
