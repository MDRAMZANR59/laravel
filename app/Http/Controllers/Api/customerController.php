<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Http\Controllers\Api\BaseController;

class customerController extends BaseController
{
    public function index(){
        $data=customer::get();
        return $this->sendResponse($data,"customer data");
    }

    public function store(Request $request){
        $data=customer::create($request->all());
        return $this->sendResponse($data,"customer created successfully");
    }
    public function show(customer $customer){
        return $this->sendResponse($customer,"customer created successfully");
    }

    public function update(Request $request,$id){

        $data=customer::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"customer updated successfully");
    }

    public function destroy(customer $customer)
    {
        $customer=$customer->delete();
        return $this->sendResponse($customer,"customer deleted successfully");
    }
}
