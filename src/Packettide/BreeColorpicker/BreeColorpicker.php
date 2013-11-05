<?php namespace Packettide\BreeColorpicker;

use Packettide\Bree\FieldType;

class BreeColorpicker extends FieldType {

	public function generateField($name, $data, $attributes = array())
	{
		return '<input name="'.$name.'" value="'.$data.'" type="color" '.$attributes.'/>';
	}

}