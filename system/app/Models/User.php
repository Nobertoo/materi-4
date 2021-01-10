<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

	protected $table = 'user';

	function getJenisKelaminStringAttribute(){
		return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
	}
	function setPasswordAttribute($value){
		$this->attributes['password'] = bcrypt($value);
	}
}
