	<footer class=" container-fluid">

	</footer>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src='<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js'></script>

<script src='<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js'></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- ================Move main menu================ -->
<script>
	var aTop = $('#top_header').height();
	$(document).ready(function(){
	  $(window).scroll(function(){


	  	 if($(this).scrollTop()>=aTop)
	  	 	{
		    	$("#menu_fix nav").css("margin-top", "0px");

			}
			else
			{
				$("#menu_fix nav").css("margin-top", "30px");
			}	

	  });
	});
</script>

<!-- toggle button -->
<script type="text/javascript">
	$("#formButton").click(function(){
    $("#form1").toggle();
    
	});
</script>
</body>
</html>