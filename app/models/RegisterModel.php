<?php

namespace App\models;

use App\core\CoreMainModel;
use Cassandra\Date;

class RegisterModel extends CoreMainModel
{
	private string $firstName ;
	private string $lastName;
	private Date $birthDate;
	private string $email ;
	private int $tel;
	private string $password;
	private string $confirmPassword ;


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

	public function getBirthDate(): Date
	{
		return $this->birthDate;
	}

	public function setBirthDate(Date $birthDate): void
	{
		$this->birthDate = $birthDate;
	}

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


}