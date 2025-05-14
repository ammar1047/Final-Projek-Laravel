<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneratedLetter extends Model
{
    protected $fillable = ['letter_request_id', 'letter_number', 'issued_at'];
}
