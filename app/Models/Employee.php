<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $emp_id
 * @property string $emp_firstname
 * @property string $emp_lastname
 * @property DateTime $emp_birth_date
 * @property \Carbon\Carbon $emp_hire_date
 * @property float $salary
 */
class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'emp_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['emp_id', 'emp_firstname', 'emp_lastname', 'emp_birth_date', 'emp_hire_date', 'salary'];
    protected $dates = ['emp_birth_date', 'emp_hire_date'];
    protected $hidden = ['created_at', 'updated_at'];
}
