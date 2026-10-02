<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $fillable = [
        'title',
        'number_questions',
        'description',
        'image',
        'text_file'

    ];
}
