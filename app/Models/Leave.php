<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

<<<<<<< HEAD
	protected $primaryKey = 'leave_id';

	protected $fillable = [
		'leave_from',
		'leave_to',
		'leave_leave_type_id',
		'leave_reason',
		'leave_user_id',
=======
    protected $primaryKey = 'leave_id';

	protected $fillable = [
        'leave_user_id',
        'leave_from',
        'leave_to',
        'leave_leave_type_id',
        'leave_reason',
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
	];
}
