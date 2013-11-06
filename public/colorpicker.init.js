$(function() {
	$(".pt-colorpicker").spectrum();

	$('body').on('bree.cell.add', function() {
		$(".pt-colorpicker").spectrum();
	});
});