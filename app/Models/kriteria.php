<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $fillable = ['code','nama_kriteria','code'];
    protected $table = 'kriteria';
    use HasFactory;
}
