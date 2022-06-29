<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use HasFactory;

	protected $primaryKey = 'leave_type_id';

	protected $fillable = [
		'leave_type_code',
		'leave_type_desc'
	];

}
