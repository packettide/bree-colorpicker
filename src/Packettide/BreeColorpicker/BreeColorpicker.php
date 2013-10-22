<?php namespace Packettide\BreeColorpicker;

use Packettide\Bree\FieldType;

class BreeColorpicker extends FieldType {

	public function field($attributes = array())
	{
		$attrs = $this->getFieldAttributes($attributes);
		return '<input name="'.$this->name.'" value="'.$this->data.'" type="color" '.$attrs.'/>';
	}


}