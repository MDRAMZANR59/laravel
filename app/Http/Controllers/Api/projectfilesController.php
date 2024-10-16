<?php

namespace App\Http\Controllers\Api;



use Illuminate\Http\Request;
use App\Models\Projectfile;
use App\Http\Controllers\Api\BaseController;

class projectfilesController extends BaseController
{
    public function index(){
        $data=Projectfile::get();
        return $this->sendResponse($data,"Projectfile Data");
    }
    public function store(Request $request){
        $data=Projectfile::create($request->all());
        return $this->sendResponse($data,"Projectfile created successfully");
    }
    public function show(Projectfile $customer){
        return $this->sendResponse($customer,"Projectfile created successfully");
    }
    public function update(Request $request,$id){
        $data=Projectfile::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Projectfile updated successfully");
    }
    
    public function destroy(Projectfile $customer)
    {
        $customer=$customer->delete();
        return $this->sendResponse($customer,"Projectfile deleted successfully");
    }
}
