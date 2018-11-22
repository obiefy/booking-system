<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Menu;
use App\Photo;
use App\Service;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::all();

        return view('agents.index', [
            'agents' => $agents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $agent_types = Menu::get_menu("agentType")->options;
        $cities = Menu::get_menu("city")->options;
        return view('agents.create',[
            'agent_types' => $agent_types,
            'cities' => $cities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent = new User($request->all());
        $agent->save();

        Session::flash('success', 'تمت اضافة القاعة بنجاح');
        return redirect()->route('agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('agents.show', [
            'agent' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /* FRONT END FUNCTIONS */

    // show search form
    public function search_form(){
        $agents = User::all();
        return view('agents.search', [
            "agents" => $agents
        ]);
    }

    // show search by name
    public function agents_search_name(Request $request){
        $agents = User::name($request->name)->get();
        return view('agents.search', [
            "agents" => $agents
        ]);
    }

    // search
    public function search(Request $request){

        $agents = User::filter($request->all());

        return response()->json([
            "agents_count" => count($agents),
            "agents" => $agents,
        ],200);


        // address result
        $city_result = User::where([
            "city" => $request->city
        ])->get();

        // type result
        $type_result = User::where([
            "agent_type" => $request->agent_type
        ])->get();

         // price result
         $price_result = User::whereHas('prices', function ($query) use ($request) {
            $query->where('price', '<',$request->price);
        })->get();

        // address result
        $address_result = User::where("address" ,'LIKE',"%". $request->agent_type ."%")->get();


        $result = $city_result->merge($address_result);
        
        $result = $city_result->merge($type_result);
        $result = $city_result->merge($price_result);

        $result = $result->unique();

        return view('agents.search', [
            "agents" => $result
        ]);
    }


    // show edit form
    public function edit_profile(){
        $user = Auth::user();

        $agent_types = Menu::get_menu("agentType")->options;
        $cities = Menu::get_menu("city")->options;
        $services = Service::all();
        return view('agents.edit_profile',[
            'user' => $user,
            'agent_types' => $agent_types,
            'cities' => $cities,
            'services' => $services,
        ]);
    }

    // update info
    public function update_info(Request $request)
    {
        
        $user = Auth::user();
        $user->services()->sync($request->services);
        $user->update($request->all());
        
        return redirect()->route('agent.edit_profile');
    }

    public function add_photo(Request $request){

        if ($request->hasFile('image')) {

            $defaultPath = "default.jpeg";
            $photo = new Photo();
            $photo->path = $defaultPath;
            $photo->user_id = Auth::id();
            $photo->save();
            $imageName = "image-". Auth::id().'-'. $photo->id .'.'.$request->image->getClientOriginalExtension();

            
            \Storage::disk('public')->put($imageName,  \File::get($request->file('image')));
            
            $photo->path = $imageName;
            $photo->update();
            
            Session::flash('success', 'تمت اضافة الصورة بنجاح');

        }

        return redirect()->route("agent.edit_profile");
    }
}
