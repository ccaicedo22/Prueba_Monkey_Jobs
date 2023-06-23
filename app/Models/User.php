<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps =False;
    protected $fillable = ['name','lastname','email','password','id_type_document'];

    public function typeDocument()
{
    return $this->belongsTo(TypeDocument::class , 'id');
}
}
