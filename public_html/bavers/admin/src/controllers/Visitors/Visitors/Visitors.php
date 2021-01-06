<?php
namespace controller;
use ControllerScheme;
use Api\ApiInterface;

class Visitors extends ControllerScheme {
	use ApiInterface;
    const name = 'بازاریاب';
	
	public function SignUp() {
		$gender = $this->ApiParam('gender');
		$name = $this->ApiParam('name');
		$lastName = $this->ApiParam('lastName');
		$nationalCode = $this->ApiParam('nationalCode');
		$referer = $this->ApiParam('referer');
		$birthDate = $this->ApiParam('birthDate');
		$mobile = $this->ApiParam('mobile');
		$telephone = $this->ApiParam('telephone');
		$postCode = $this->ApiParam('postCode');
		$stateId = $this->ApiParam('stateId');
		$cityId = $this->ApiParam('cityId');
		$address = $this->ApiParam('address');
		$email = $this->ApiParam('email');
		$username = $this->ApiParam('username');
		$password = $this->ApiParam('password');
    }
    
}
