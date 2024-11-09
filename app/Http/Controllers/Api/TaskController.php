<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\Api\BaseController;


class TaskController extends BaseController
{
    //filter
    public function index(Request $request){
        $data=Task::with('projectfiles','employee')->latest();

        if($request->projectId){
            $data=Task::where('projectId',$request->projectId);
        }

        $data=$data->get();
//
        return $this->sendResponse($data,"Task Data");
    }
    public function store(Request $request){
        $data=Task::create($request->all());
        return $this->sendResponse($data,"Task created successfully");
    }
    public function show(Task $task){
        return $this->sendResponse($task,"Task created successfully");
    }
    public function update(Request $request,$id){
        $data=Task::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Task updated successfully");
    }

    public function destroy(Task $task)
    {
        $task=$task->delete();
        return $this->sendResponse($task,"Task deleted successfully");
    }
}