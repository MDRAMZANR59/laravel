<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CustomerNote;
use App\Http\Controllers\Api\BaseController;

class CustomerNoteController extends BaseController
{
    public function index(){
        $data=CustomerNote::get();
        return $this->sendResponse($data,"Customer Note Data");
    }
    public function store(Request $request){
        $data=CustomerNote::create($request->all());
        return $this->sendResponse($data,"Customer Note created successfully");
    }
    public function show(CustomerNote $customerNote){
        return $this->sendResponse($customerNote,"Customer Note created successfully");
    }
    public function update(Request $request,$id){
        $data=CustomerNote::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Customer Note updated successfully");
    }
    
    public function destroy(CustomerNote $customerNote)
    {
        $customerNote=$customerNote->delete();
        return $this->sendResponse($customerNote,"Customer Note deleted successfully");
    }
}
