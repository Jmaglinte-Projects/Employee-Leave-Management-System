<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'users';
	// protected $primaryKey = 'leave_type_id';

	protected $fillable = [
		'name',
		'user_first_name',
		'user_last_name',
		'user_gender',
		'user_birthdate',
		'user_dep_id',
		'user_mobile',
		'email',
		'password',
	];

}
