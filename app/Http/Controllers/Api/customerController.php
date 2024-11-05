<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Http\Controllers\Api\BaseController;

class CustomerController extends BaseController
{
    public function index(){
        $data=Customer::get();
        return $this->sendResponse($data,"Customer Data");
    }

    public function store(Request $request){
        $input=$request->all();
         /* for files */
         if($request->hasFile('photo')){
            $f=$request->file('photo');
            $photoname=time().rand(1111,9999).".".$f->extension();
            $photoPath=public_path().'/customer';
            if($f->move($photoPath,$photoname)){
                $input['photo']=$photoname;
            }
        }

        $data=[];
        $input=$request->all();
        $input['role_id']=4;//customer role
        $user=User::create($input);
        if($user){
            $input['user_id']=$user->id;
            $data=Customer::create($input);
        }

        return $this->sendResponse($data,"Customer created successfully");
    }

    public function show(Customer $customer){
        return $this->sendResponse($customer,"Customer created successfully");
    }

    public function update(Request $request,$id){
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $photoname=time().rand(1111,9999).".".$f->extension();
                $photoPath=public_path().'/customer';
                if($f->move($photoPath,$photoname)){
                    array_push($files,$photoname);
                }
            }
            $input['photo']=implode(',',$files);
        }
        unset($input['files']);
        $data=Customer::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Customer updated successfully");
    }

    public function destroy(Customer $customer)
    {
        $customer=$customer->delete();
        return $this->sendResponse($customer,"Customer deleted successfully");
    }

}
