<?php namespace Acme\Forms;

class Login extends FormValidator {

	/**
	 * Validation rules for logging in
	 *
	 * @var array
	 */
	protected $rules = [
		'username' => 'required',
		'password' => 'required'
	];

} 