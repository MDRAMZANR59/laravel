<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CustomerNote;
use App\Http\Controllers\Api\BaseController;

class CustomerNoteController extends BaseController
{
     //rel
    public function index(){
        $data=CustomerNote::with('customer','employee')->get();
        return $this->sendResponse($data,"Customer Note Data");
        //
    }
    public function store(Request $request){

        /* for files */
        $input=$request->all();
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $photoname=time().rand(1111,9999).".".$f->extension();
                $photoPath=public_path().'/customerNote';
                if($f->move($photoPath,$photoname)){
                    array_push($files,$photoname);
                }
            }
        }

        $input['attachment']=implode(',',$files);
        /* /for files */
        $data=CustomerNote::create($input);

        return $this->sendResponse($data,"Customer Note created successfully");
    }
    public function show(CustomerNote $customerNote){
        return $this->sendResponse($customerNote,"Customer Note created successfully");
    }
    public function update(Request $request,$id){
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $photoname=time().rand(1111,9999).".".$f->extension();
                $photoPath=public_path().'/customerNote';
                if($f->move($photoPath,$photoname)){
                    array_push($files,$photoname);
                }
            }
            $input['attachment']=implode(',',$files);
        }
        unset($input['files']);
        $data=CustomerNote::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Customer Note updated successfully");
    }

    public function destroy(CustomerNote $customerNote)
    {
        $customerNote=$customerNote->delete();
        return $this->sendResponse($customerNote,"Customer Note deleted successfully");
    }
}
