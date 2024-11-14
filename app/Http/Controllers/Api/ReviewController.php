<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Controllers\Api\BaseController;

class ReviewController extends BaseController
{
    public function index(Request $request){
        //rel
        $data=Review::with('reciver')->get();
        return $this->sendResponse($data,"Review Data");
        //
    }
    public function store(Request $request){
        $data=Review::create($request->all());
        return $this->sendResponse($data,"Review created successfully");
    }
    public function show(Review $review){
        return $this->sendResponse($review,"Review created successfully");
    }
    public function update(Request $request,$id){
        $data=Review::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Review updated successfully");
    }

    public function destroy(Review $review)
    {
        $review=$review->delete();
        return $this->sendResponse($review,"Review deleted successfully");
    }
}
