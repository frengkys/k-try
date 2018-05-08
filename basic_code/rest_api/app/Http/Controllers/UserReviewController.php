<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserReview;

class UserReviewController extends Controller
{
    protected $reviews;

    public function __construct(UserReview $reviews)
    {
        $this->reviews = $reviews;
    }

    public function index()
    {
        return $reviews = $this->reviews::all();
    }

    /**
     * @method POST
     * @link user-reviews/
     * @param
     *  order_id
     *  product_id
     *  user_id
     *  rating
     *  review
     * @return data
     */
    public function store(Request $request)
    {   
        $data =  $this->reviews::create($request->all());
        if ($data) {
            return response()
            ->json(['message' => 'success created',
                    'data' => $data], 200);
        }
        return response()
            ->json(['message' => 'something wrong in the server'], 400);
    }

    /**
     * @method POST
     * @link user-reviews/{id}
     * @param
     *  order_id
     *  product_id
     *  user_id
     *  rating
     *  review
     * @return data
     */
    public function update(Request $request, $id)
    {
        $review = $this->reviews::findOrFail($id);
        $review->update($request->all());

        if ($review) {
            return response()
            ->json(['message' => 'success updated',
                    'data' => $review], 200);
        }
        return response()
            ->json(['message' => 'something wrong in the server'], 400);
    }

    /**
     * @method DELETE
     * @link user-reviews/{id}
     * @return data
     */
    public function delete(Request $request, $id)
    {
        $review = $this->reviews::findOrFail($id);
        $review->delete();
        
        if ($review) {
            return response()
            ->json(['message' => 'success deleted',
                    'data' => $review], 200);
        }
        return response()
            ->json(['message' => 'something wrong in the server'], 400);
    }
}
