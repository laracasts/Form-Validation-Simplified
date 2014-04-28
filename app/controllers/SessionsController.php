<?php

use Acme\Forms\Login;

class SessionsController extends \BaseController {

	/**
	 * @var \Acme\Forms\Login
	 */
	protected $loginForm;

	/**
	 * @param Login $loginForm
	 */
	function __construct(Login $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->loginForm->validate(Input::all());

		return 'Success!';
	}

}
