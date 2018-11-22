<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use App\Menu;
use App\Meal;
use App\Review;
use App\Bank;
use Auth;
use Session;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_admin()
    {
        $bookings = Booking::all();
        $agents = User::all();
        return view('booking.index_admin', [
            'bookings' => $bookings,
            'agents' => $agents,
        ]);
    }

    public function filter(Request $request)
    {

        $bookings = Booking::where('agent_id', $request->agent)
            ->whereBetween("date", array($request->year."-".$request->month."-1", $request->year."-".$request->month."-30"))
            ->get();
        $agents = User::all();
        return view('booking.index_admin', [
            'bookings' => $bookings,
            'agents' => $agents,
        ]);
    }

    public function index()
    {
        $bookings = Auth::user()->get_bookings;
        return view('booking.index', [
            'bookings' => $bookings
        ]);
    }

    public function complete()
    {
        $bookings = Auth::user()->get_bookings->where('status', 1);
        return view('booking.index', [
            'bookings' => $bookings
        ]);
    }


    public function requested()
    {
        $bookings = Auth::user()->get_bookings->where('status', 0);
        return view('booking.index', [
            'bookings' => $bookings
        ]);
    }


    public function calendar()
    {
        $bookings = Auth::user()->get_bookings;
        // $bookings = Booking::all();
        


        
        return view('booking.calendar', [
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        
        return view('booking.booking', [
            'agent' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_info(Request $request, User $user)
    {
        $this->validate($request, [
            
            'first_name' => 'required',
            'second_name' => 'required',
            'third_name' => 'required',
            'fourth_name' => 'required',
            'ssn' => 'required|size:11',
            'phone' => 'required|size:10',
            'date' => 'required',
        ]);
        $booking  = new Booking($request->all());

        $booking->agent_id = $user->id;
        $booking->steps = "info";
        $booking->save();
        
        $meal_types = Menu::get_menu("mealType")->options;
        
        $meals = $user->meals;
        $cocktail = $meals->where('type', "cocktail");
        $buffet = $meals->where('type', "buffet");
        
        return view('booking.booking', [
            'booking' => $booking,
            'agent' => $user,
            'meals' => $meals,
            'cocktail' => $cocktail,
            'buffet' => $buffet,
            'meal_types' => $meal_types,
        ]);


    }

    public function store_meal(Request $request, Booking $booking)
    {
        $this->validate($request, [
            
            'meal' => 'required'
        ]);
        
        
        $booking->steps = "meal";
        $booking->meal_id = $request->meal;

        $agent_price = $booking->agent->get_price() ?? 0;
        $meal_price = Meal::find($request->meal)->price ?? 0;

        $meal_price = $meal_price * $request->number;

        $total = $agent_price + $meal_price;

        $booking->total = $total;
        $booking->save();
        
        
        return redirect()->route('booking.store.payment_form',$booking);


    }

    public function show_payment(Booking $booking)
    {
        // $this->validate($request, [
        //     'card' => 'required|size:6',
        //     'expired' => 'required',
        // ]);
        
        // return redirect()->route('booking.store.payment', $booking);
        
        
        
        return view('booking.booking', [
            'booking' => $booking,
            'agent' => $booking->agent,
        ]);


    }

    public function store_payment(Request $request, Booking $booking)
    {
        if($request->payment == "bank"){
            $this->validate($request, [
                'card' => 'required|size:6'
            ]);

            $account = Bank::where("number", $request->card)->first();
            if($account){
                
                if($account->credit < $booking->total){
                    Session::flash('danger', 'لا يوجدج رصيد كافي في حسابك');
                    return redirect()->back();
                }
            }else{
                Session::flash('danger', 'لم يتم العثور على بطاقتك');
                return redirect()->back();
            }
            
            $booking->payment_type = "cash";
            $booking->bank_id = $account->id;
            $booking->status = 1;
            $account->credit = $account->credit - $booking->total;
            $account->update();
        }
        
        
        $booking->steps = "payment";
        $booking->save();
        
        
        return view('booking.booking', [
            'booking' => $booking,
            'agent' => $booking->agent,
        ]);


    }

    public function store_review(Request $request, Booking $booking)
    {
        $review = new Review();
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->user_id = $booking->agent->id;
        $review->booking_id = $booking->id;
        $review->review = $request->review;
        $review->name = $booking->name();
        $review->save();
        
        Session::flash('success', 'تم تسجيل تقييمك بنجاح');
        

        return redirect()->route('agent.show_profile',$booking->agent);


    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
