$(document).ready(function() {
	function loadCategory(url, section) {
		$.ajax({
			url: url,
			data: {
				section: section
			},
			type: 'post',
			beforeSend: function() {
				$('#inventory-loader').show();
			},
			success: function(data) {
				$('#fetched-content').html(data);
				$('#inventory-loader').hide();
			},
			error: function() {
				alert('error');
			}
		});
	}
	$('#btn-reload').attr('data-section', $('#category-select').val());
	$('#category-select').on('change', function() {
		var category = $(this).val();
		// alert(category);
		$('#btn-reload').attr('data-section', category);
	});
	$('#btn-reload').on('click', function() {
		var section = $(this).attr('data-section');
		const url = 'inventory/fetch-Master.php';
		loadCategory(url, section);
	});
});
