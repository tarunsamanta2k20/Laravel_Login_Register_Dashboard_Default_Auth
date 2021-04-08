<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    //
    public function add(Request $request){
     
     $tasks =new Task();

     $tasks->user_id = $request->input('user_id');
     $tasks->task_details = $request->input('task_details');
     

     $tasks->save();
     $token=$tasks->createToken('my-app-token')->plainTextToken;
     $response=[
    				'tasks'=>$tasks,
    				'status'=>1,
    				'message'=>'successfully created a task.',
    				'token'=>$token

    			];
    			return response($response);
    
     
    }
    public function status(Request $request)
    {
    	$task1=Task::find($request->input('id'));
    	if(!$task1)
    	{
    		$response=[
    				
    				'status'=>0,
    				'message'=>'Invalid API key.',
    				
    			];
    		return response($response);
    	}
    	else
    	{
    		$task1->status=$request->input('status');
    		$task1->save();
    		//$token=$task1->createToken('my-app-token')->plainTextToken;

    		if($task1->status=="pending")
    		{
    			$response=[
    				'task1'=>$task1,
    				'status'=>1,
    				'message'=>['Marked task as pending.'],
    				//'token'=>$token
    			];
    			return response($response);
    			
    		
    		}
    		else
    		{
    			$response=[
    				'task1'=>$task1,
    				'status'=>1,
    				'message'=>['Marked task as done.'],
    				//'token'=>$token
    			];
    			 return response($response);
    		}
	       
	       
    	}
        


    }
}
