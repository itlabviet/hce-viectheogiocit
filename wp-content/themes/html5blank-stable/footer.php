	<footer>
		<div class="container">
	      <div class="copyright">
	        <a href="https://www.facebook.com/vieclamtheogiocit/"><h5><strong>Bản quyền thuộc về C-IT</strong></h5></a> 
	      </div>
	    </div>
		
	</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src='<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.min.js'></script>

<script src='<?php echo get_stylesheet_directory_uri() ?>/assets/js/bootstrap.min.js'></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src='<?php echo get_stylesheet_directory_uri() ?>/assets/lib/slick/slick.js'></script>

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

<!-- Sub Menu -->
<script>
  $('.sub-menu').addClass('dropdown-menu'); 
</script>
<!-- ================== slide member ( slick ) ====================== -->
<script type="text/javascript">
    $(document).on('ready', function() {

      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
</script>


<!--============== toggle button ================ -->
<script type="text/javascript">
	$("#formButton").click(function(){
    $("#form1").toggle();
    
	});
</script>
<!-- ============ Top to button======= -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>