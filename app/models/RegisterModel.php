<?php

namespace App\models;

use App\core\CoreMainModel;
//use App\helpers\DataRules;

class RegisterModel extends CoreMainModel
{
	public string $firstName;
	public string $lastName;
	//public Date $birthDate;
	public string $email;
	public string $tel;
	public string $password;
	public string $confirmPassword;


	public function getFirstName(): string
	{
		return $this->firstName;
	}

	public function setFirstName(string $firstName): void
	{
		$this->firstName = $firstName;
	}

	public function getLastName(): string
	{
		return $this->lastName;
	}

	public function setLastName(string $lastName): void
	{
		$this->lastName = $lastName;
	}

	//	public function getBirthDate(): Date
	//	{
	//		return $this->birthDate;
	//	}
	//
	//	public function setBirthDate(Date $birthDate): void
	//	{
	//		$this->birthDate = $birthDate;
	//	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getTel(): int
	{
		return $this->tel;
	}

	public function setTel(int $tel): void
	{
		$this->tel = $tel;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

	public function setPassword(string $password): void
	{
		$this->password = $password;
	}

	public function getConfirmPassword(): string
	{
		return $this->confirmPassword;
	}

	public function setConfirmPassword(string $confirmPassword): void
	{
		$this->confirmPassword = $confirmPassword;
	}

	public function register()
	{
		echo "create new user";
	}


	public function rules(): array
	{
		return [
			'firstName' => [self::RULE_REQUIRED],
			'lastName' => [self::RULE_REQUIRED],
			'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
			'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
			'$confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
		];
	}
}
