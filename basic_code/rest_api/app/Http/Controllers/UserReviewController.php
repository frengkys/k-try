<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserReview;

class UserReviewController extends Controller
{
    public function index()
    {
        return UserReview::all();
    }

    /**
     * POST
     * order_id=2
     * &product_id=1
     * &user_id=5
     * &rating=3
     * &review=mantap%20beuds
     */
    public function store(Request $request)
    {
        return UserReview::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $review = UserReview::findOrFail($id);
        $review->update($request->all());
        // if($review){
        //     $review->order_id = $request->order_id;
        //     $review->product_id = $request->product_id;
        //     $review->user_id = $request->user_id;
        //     $review->rating = $request->rating;
        //     $review->review = $request->review;
        //     $page->save();
        // }

        return $review;
    }

    public function delete(Request $request, $id)
    {
        $review = UserReview::findOrFail($id);
        $review->delete();
        
        return response()
            ->json(['message' => 'Deleted!']);
    }
}
