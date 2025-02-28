<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class ShortUrl extends Model
// {
//     //
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;

    protected $fillable = ['original_url', 'short_code'];
}

// ShortUrl::create([
//     'original_url' => $request->original_url,
//     'short_code' => $shortCode
// ]);

