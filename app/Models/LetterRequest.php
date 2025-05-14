<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterRequest extends Model
{
    protected $fillable = ['employee_user_id', 'letter_template_id', 'content', 'status'];
}
