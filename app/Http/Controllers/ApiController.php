<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CreateUserApiRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	// create user vie API call
    public function create(CreateUserApiRequest $request)
    {
    	$users = new User();

    	$users->name = $request->input('name');
    	$users->email = $request->input('email');
    	$users->phone_number = $request->input('phone_number');
    	$users->password = bcrypt($request->input('password'));
    	$users->profile_image = $request->input('profile_image');

    	$users->save();
    	return response()->json($users);
    }

    // Fetching data in JSON format
    public function show()
    {
    	$users = User::all();
    	return response()->json($users);
    }

    // update by ID
    public function updateById(Request $request, $id)
    {
    	$users = User::findOrFail($id);

    	$users->name = $request->input('name');
    	$users->email = $request->input('email');
    	$users->phone_number = $request->input('phone_number');
    	$users->password = $request->input('password');
    	$users->profile_image = $request->input('profile_image');

    	$users->save();
    	return response()->json($users);
    }
}
