<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shortlink extends Model
{
    protected $fillable = ['url', 'key'];

    public function getShortenUrl()
    {
        return config('app.url') . '/' . $this->key;
    }
}
