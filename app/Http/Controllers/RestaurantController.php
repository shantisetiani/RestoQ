<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurant;
use App\Review;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function GetTopRestaurant(){
        $restaurant = Restaurant::where('rating','>','3')->paginate(8);
        return view('index',compact('restaurant'));
    }

    public function GetAllRestaurant(){
        $restaurant = Restaurant::paginate(8);
        return view('menu.restaurantList',compact('restaurant'));
    }

    public function SearchRestaurant(Request $req){
        $search = $req->search;
        $restaurant = Restaurant::where('restaurant_name','like','%'.$search.'%')
        	->orwhere('type','like','%'.$search.'%')
        	->orwhere('address','like','%'.$search.'%')
        	->orwhere('city','like','%'.$search.'%')
        	->paginate(8);
        return view('menu.restaurantList',compact('restaurant','search'));
    }

    public function GetRestaurantDetail($id){
        $restaurant = Restaurant::where('restaurant_id','=',$id)->get();

        $review = Review::where('restaurant_id','=',$id)->get();

        return view('menu.restaurantDetail',compact('restaurant','review'));
    }

    public function GetRestaurantInfo($id){
        $restaurant = Restaurant::where('restaurant_id','=',$id)->get();
        if(Auth::check()){
	        return view('menu.reserve',compact('restaurant'));
	    }

        return redirect('/Login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'restaurant_name' => 'required|max:255',
            'on_behalf_of' => 'required|max:255',
            'phone' => 'required|min:10',
            'address' => 'required',
            'reservation_time' => 'required'
        ]);
    }

	public function Reserve(Request $req){
		$table = new Reservation();
		$table->user_id = Auth()->user()->id;
		$table->restaurant_id = $req->restaurant_id;
		$table->restaurant_name = $req->restaurant_name;
		$table->on_behalf_of = $req->name;
		$table->phone = $req->phone;
		$table->address = $req->address;
		$table->reservation_time = $req->time;
		$table->table = $req->table;
		$table->status = "Upcoming";
		$table->save();

		return redirect('/RestaurantList');
	}

    public function GetUpcomingReservation(){
        $rsv = Reservation::where('status','<>','Done')
            ->where('user_id','=',Auth()->user()->id)
            ->get();

        return view('reservation.ongoing',compact('rsv'));
    }

    public function GetReservationHistory(){
        $rsv = Reservation::where('status','=','Done')
            ->where('user_id','=',Auth()->user()->id)
            ->get();

        return view('reservation.history',compact('rsv'));
    }

    public function PostReview(Request $req){
        $table = new Review();
        $table->restaurant_id = $req->restaurant_id;
        $table->username = $req->name;
        $table->title = $req->title;
        $table->rating = $req->rate;
        $table->comment = $req->comment;
        $table->save();

        return redirect('/RestaurantList');
    }
}
