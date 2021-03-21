<!-- costum js file include -->
<script type="text/javascript">
		$(document).ready(function(){
			$('.dropdown-trigger').dropdown({
				coverTrigger:false,
				hover:true,
			});

			//sidenav menu script
			$('.sidenav').sidenav();

			var instance = M.Carousel.init({
				fullWidth: true
			});
			//image slider script start
			$('.carousel.carousel-slider').carousel({
				fullWidth: true,
				indicators: true
			});

			//modal
			$('.modal').modal();
							
			//collapsible menu
			$('.collapsible').collapsible();

			//tooltips
			$('.tooltipped').tooltip();

			//select form
			$('select').formSelect();
			
		});
</script>


<!-- pembatasan angka -->
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>

<!-- option register -->
<!-- costum js file include -->
<script type="text/javascript">
	$(document).ready(function(){
		//validasi email
	function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
    }
    $("#email").keyup(function () {
        if (!ValidateEmail($("#email").val())) {
          $('#btn_register').prop('disabled', true)
        }
        else {
         $('#btn_register').prop('disabled', false)
        }
    });

	// mobile no validation start
	$('#no_telp').keyup(function(){
		var no_telp = $('#no_telp').val();
		var no_telp_len = $('#no_telp').val().length;
		if (no_telp > 0) {
			if (no_telp_len >= 11) {
				$('#btn_register').prop('disabled',false);
			}
			else{
				$('#btn_register').prop('disabled',true);
			}
		}
		else{
			$('#btn_register').prop('disabled',true);
		}
	});
	});
</script>