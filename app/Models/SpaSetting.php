<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'banner_image',
        'meta_title',
        'meta_description',
        'operating_hour',
        'booking_rules',
        'contact_email',
        'contact_phone',
        'button_text',
        'button_link',
        'status',
    ];
}
