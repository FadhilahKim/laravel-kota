<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kota extends Model
{
	use SoftDeletes;
    protected $table = 'kota';
    protected $fillable = [
    	'namakota',
    	'namapemimpin',
    	'jmlpenduduk',
    	'luaswilayah',
    	'jeniskota'
    ];
}
