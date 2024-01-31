<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Rating;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingsController extends Controller
{


    public function addRating(Request $request)
    {
      
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rating = new Rating();
            // echo"<pre>";print_r($data);die;
          if (!Auth::check()) {

                return redirect('login');
            }
         if (!isset($data['rating'])) {

                return redirect()->back()->with('error_message','Add atleast one star rating for this product');
            }
            $ratingCount = Rating::where(['user_id' => Auth::user()->id, 'prod_id' => $data['prod_id']])->count();

           if ($ratingCount > 0 ) {

                return redirect()->back()->with('error_message2', 'your rating arating already exixst for this Product');
            } else {
                $rating = new Rating();
                $rating->user_id = Auth::user()->id;
                $rating->prod_id = $data['prod_id'];
                $rating->review = $data['review'];
                $rating->rating = $data['rating'] ;
                $rating->status = 0;
                $rating->save();

                return redirect()->back()->with('success_messag','thunks for  rating this product ! it will be shown once approved.');
            }

        }

    }



}

