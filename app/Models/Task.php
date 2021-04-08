<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TaskController;
use Laravel\Sanctum\HasApiTokens;
class Task extends Model
{
	protected $table='task';
	protected $fillable=['id','user_id','task_details','status'];
	//public $timestamps=false;
    use HasApiTokens, HasFactory;
    
}
