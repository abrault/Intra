<?php

class UserController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($login = NULL)
	{
		// if the login value is null, redirect to your page
		if (!$login)
			return Redirect::to('/'.Auth::user()->login);

		// else if login doesn't exist
		if (!User::where('login', $login)->count())
		{
			// find the first matching with this login
			$matching = User::where('login', 'like','%'.$login.'%')->first();

			if ($matching)	// if it exist then return to it
				return Redirect::to('/'.$matching->login);
			else			// else redirect to your page
				return Redirect::to('/'.Auth::user()->login);
		}

		// else return to the $login page
		return View::make('users/show')
			->with('title', 'User login')
			->with('login', $login);
	}


	/**
	 * Display the login page.
	 *
	 * @return Response
	 */
	public function login()
	{
		Auth::loginUsingId(1);

		return View::make('users/login')
			->with('title', 'Welcome to the 42\'s intra');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


}
