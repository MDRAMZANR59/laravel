<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Controllers\Api\BaseController;

class CustomerController extends BaseController
{
    public function index(){
        $data=Customer::get();
        return $this->sendResponse($data,"Customer Data");
    }
    public function store(Request $request){
        $data=Customer::create($request->all());
        return $this->sendResponse($data,"Customer created successfully");
    }
    public function show(Customer $customer){
        return $this->sendResponse($customer,"Customer Show successfully");
    }
}
