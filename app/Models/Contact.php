<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'contacts';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'contact', 'email'
    ];

    protected $searchable = [
        'name' => 'like',
        'contact' => '=',
        'email' => 'like'
    ];
}
