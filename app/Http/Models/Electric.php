<?php

namespace App\Http\Models;

use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Electric extends UnicodeModel
{

    use HasTranslations;

    public $translatable = [
        'title',
        'summary'

    ];

    protected $table = "electrics";
    protected $fillable = [
        'title',
        'image',
        'summary',
        'user_id',
        'client_id',
        'status',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;

}
