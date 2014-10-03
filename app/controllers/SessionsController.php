<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//muestra el form de login
 		return View::make('login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$email = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return Redirect::route('welcome');
        }

        return Redirect::route('login');
	}

	public function welcome()
    {
        return View::make('welcome')
            ->withUser(Auth::user());
    }


}
