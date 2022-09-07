<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
class Contact extends Model
{
    use HasFactory;
        protected $table = 'contact';
    protected $fillable =[
        'name',
        'email',
        'phone',
        'message'
    ];

}