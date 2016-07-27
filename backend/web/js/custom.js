
$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-preview img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#user-imagefile").change(function () {
        readURL(this);
    });
	
	$('#select-post').on('change', function() {
		var value = $(this).val();
		$.post('index.php?r=site/ajax-all-post&select_id='+value, function (data) {
			console.log(data);
		});
	})

    $('#select-new-post').on('change', function() {
        var value = $(this).val();
        var text = $('#select-new-post option:selected').text();
        $('#title-post').text(text);
        
        if (value == 8) {
            $('.new-post').hide();
            $('#form-tourism-destination').show();
        } else if (value == 9) {
            $('.new-post').hide();
            $('#form-culinary').show();
        } else {
            $('.new-post').hide();
        }
    });


});