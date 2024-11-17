<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Projectfile;
use App\Http\Controllers\Api\BaseController;

class projectfilesController extends BaseController
{
    //filter
    public function index(Request $request){
        //filter
        $data=Projectfile::with(['task','comtask','prolider','customer']);
       //filter
        if($request->status){
            $data=$data->where('status',$request->status);
        }
        $data=$data->get();
        //filter
        return $this->sendResponse($data,"Projectfile Data");
    }
    public function store(Request $request){
        $data=Projectfile::create($request->all());
        return $this->sendResponse($data,"Projectfile created successfully");
    }
    public function show(Projectfile $projectfile){
        return $this->sendResponse($projectfile,"Projectfile created successfully");
    }
    public function update(Request $request,$id){
        $data=Projectfile::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Projectfile updated successfully");
    }

    public function destroy(Projectfile $projectfile)
    {
        $projectfile=$projectfile->delete();
        return $this->sendResponse($projectfile,"Projectfile deleted successfully");
    }
    public function project_review(Request $request,$id){
        $data=Projectfile::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Projectfile updated successfully");
    }
}
