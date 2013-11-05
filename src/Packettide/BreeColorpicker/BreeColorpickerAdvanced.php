<?php namespace Packettide\BreeColorpicker;

use Packettide\Bree\FieldType;

class BreeColorpickerAdvanced extends FieldType {

	protected static $assets = array(
			'packettide/bree-colorpicker/spectrum.css',
			'packettide/bree-colorpicker/spectrum.js',
			'packettide/bree-colorpicker/colorpicker.init.js'
		);

	public function __construct($name, $data, $options=array())
	{
		parent::__construct($name, $data, $options);

		// add a class for javascript to attach
		$this->attributes['class'][] = 'pt-colorpicker';
	}

	public function generateField($name, $data, $attributes = array())
	{
		return '<input name="'.$name.'" value="'.$data.'" type="text" id="'.$name.'" '.$attributes.'/>';
	}

}