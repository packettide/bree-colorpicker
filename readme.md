#Colorpicker

Colorpicker is a field package for [Bree](https://github.com/packettide/bree) which provides a basic fieldset implementation using the HTML input type="color" as well as an advanced fieldset implementation utilizing [Spectrum](https://github.com/bgrins/spectrum).

##Installation

1. Install with composer by adding this line to your 'require' block: `"packettide/bree-colorpicker": "@dev"`
2. Run `composer update`
3. In Laravel4 add `'Packettide\BreeColorpicker\BreeColorpickerServiceProvider',` to the providers array in app/config/app.php
4. Publish the package assets:	`php artisan bree:assets`

##Usage


    $book = new Bree('Book', array(
			'jacketcolor'  => array('type' => 'Colorpicker', 'fieldset' => 'advanced')
		));

	$book->find(1);
	echo $book;

For more examples on how to setup fieldtypes for a model refer to the [Bree documentation](https://github.com/packettide/bree/blob/master/readme.md)