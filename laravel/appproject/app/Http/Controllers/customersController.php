<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Session;
class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $data=Customer::all();
         return view('admin.manage_customer',["cust_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data=Country::all();
        return view('web.signup',['country_arr'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Customer;
		$data->name=$request->name;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		$data->mobile=$request->mobile;
		$res=$data->save();
		if($res)
		{
			return redirect('/signup')->with('success',"Register success");
		}
    }
	
	public function login()
    {
        return view('web.signin');
    }
	public function auth(Request $request)
	{
		$data=Customer::where('username', '=', $request->username)->first();
		if($data)
		{
							// request  , hash pass
			if(Hash::check($request->password,$data->password))
			{
				// session create
				if($data->status=="Unblock")
				{
					$request->session()->put('name', $data->name);
					$request->session()->put('id', $data->id);
					
					return redirect('/index')->with('Success',"Login Success!");
				}
				else
				{
					return redirect('/signin')->with('failed',"User Blocked !");
				}
			}
			else
			{
				return redirect('/signin')->with('failed',"Password is Wrong !");
			}
		}
		else
		{
			return redirect('/signin')->with('failed',"UserName Not Found !");
		}
	}
	public function logout(Request $request)
	{
		$request->session()->forget('name');
		$request->session()->forget('id');
		return redirect('/index');
	}
	
	public function profile(Request $request)
	{
		$id=session()->get('id');
		$data=Customer::where('id','=',$id)->first();
		return view('web.profile',['fetch'=>$data]);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data=Country::all();
        $data1=Customer::find($id);
		return view('web.cust_edit',['country_arr'=>$data],['fetch'=>$data1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Customer::find($id);
		$data->name=$request->name;
		$data->username=$request->username;
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		$data->mobile=$request->mobile;
		$res=$data->update();
		if($res)
		{
			return redirect('/profile')->with('success',"Update success");
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Customer::find($id);
		$data->delete();
		return redirect('/manage_customer')->with('success',"Delete success");
    }
	
	public function status($id)
    {
        $data=Customer::find($id);
		$status=$data->status;
		if($status=="Unblock")
		{
			$data->status="Block";
			$data->update();
			return redirect('/manage_customer')->with('success',"Block success");
		}
		else
		{
			$data->status="Unblock";
			$data->update();
			return redirect('/manage_customer')->with('success',"Unblock success");
		}
		
    }
	
}
