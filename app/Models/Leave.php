<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

	protected $primaryKey = 'leave_id';

	protected $fillable = [
		'leave_from',
		'leave_to',
		'leave_leave_type_id',
		'leave_reason',
		'leave_user_id',
	];
}
