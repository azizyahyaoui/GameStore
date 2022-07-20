<?php

namespace App\core\form;

use App\core\CoreMainModel;

class Field
{
	public CoreMainModel $coreMainModel;
	public string $attribute;


	public function __construct(CoreMainModel $coreMainModel, string $attribute)
	{
		$this->coreMainModel = $coreMainModel;
		$this->attribute = $attribute;
	}

	public function __toString(): string
	{
		return sprintf('
		<div class="col"> 
			<label>%s</label>
            <input type="text" name="%s" value="%s" class="form-control">
        </div>
        <div class="invalid-feedback">
        	
		</div>
		',
		$this->attribute,
		$this->attribute,
		$this->model->{$this->attribute},
//		$this->model->hasError($this->attribute) ? ' is-invalid' : '',
//		$this->model->getFieldError($this->attribute)
		);
	}

}