<?php

namespace App\core\form;

use App\core\CoreMainModel;

class Field
{
	public const TYPE_TEXT ='text';
	public const TYPE_PASSWORD ='password';
	public const TYPE_NUMBER ='number';
	public const TYPE_EMAIL ='email';

	public string $type;
	public CoreMainModel $coreMainModel;
	public string $attribute;


	public function __construct(CoreMainModel $coreMainModel, string $attribute)
	{
		$this->type = self::TYPE_TEXT;
		$this->coreMainModel = $coreMainModel;
		$this->attribute = $attribute;
	}

	public function __toString(): string
	{
		return sprintf('
		<div class="col"> 
			<label>%s</label>
            <input type="%s" name="%s" value="%s" class="form-control">
        </div>
        <div class="invalid-feedback">
        	
		</div>
		',
		$this->attribute,
		$this->type,
		$this->attribute,
		$this->model->{$this->attribute},
//		$this->model->hasError($this->attribute) ? ' is-invalid' : '',
//		$this->model->getFieldError($this->attribute)
		);
	}
	public function passwordField(): string
	{
		 $this->type = self::TYPE_PASSWORD;
		return $this;
	}
	public function emailField(): string
	{
		 $this->type = self::TYPE_EMAIL;
		return $this;
	}
	public function numberField(): string
	{
		 $this->type = self::TYPE_NUMBER;
		return $this;
	}
}