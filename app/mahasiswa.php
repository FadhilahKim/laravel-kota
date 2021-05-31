<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mahasiswa extends Model
{
    use SoftDeletes;
    protected $table = 'mahasiswa';
    protected $fillable = [
    	'nama',
    	'nim',
    	'email',
    	'jurusan'
    ];
}
