 <footer class=" container-fluid background7">
	<p>All Rights Reserved © Brandroot 2018</p>
</footer>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='<?php bloginfo('template_url'); ?>/js/jquery.min.js'></script>
<script src='<?php bloginfo('template_url'); ?>/js/bootstrap.min.js'></script>
<script src='<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js'></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>//slick/slick.js" type="text/javascript" charset="utf-8"></script>

<!-- topmenu -->
	<script>
	function openNav() {
    document.getElementById("mySidenav").style.width = "50%";
	}

	function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	}



</script>

	<script type="text/javascript">
	$('body').click(function(evt){    
       if(evt.target.id == "menu_content")
          return;
       //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
       if($(evt.target).closest('#menu_content').length)
          return;             

      //Do processing of click event here for every element except with id menu_content
          document.getElementById("mySidenav").style.width = "0";

	});
	</script>

		<!-- toggle form -->
	<script type="text/javascript">
		$("#formButton").click(function(){
        $("#form1").toggle();
        
    	});
	</script>


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



	<script type="text/javascript">
		//slideshow style interval
			// var autoSwap = setInterval( swap,3500);

			// //pause slideshow and reinstantiate on mouseout
			// $('ul, span').hover(
			//   function () {
			//     clearInterval(autoSwap);
			// }, 
			//   function () {
			//    autoSwap = setInterval( swap,3500);
			// });

			//global variables
			var items = [];
			var startItem = 1;
			var position = 0;
			var itemCount = $('.carousel li.items').length;
			var leftpos = itemCount;
			var resetCount = itemCount;

			//unused: gather text inside items class
			$('li.items').each(function(index) {
			    items[index] = $(this).text();
			});

			//swap images function
			function swap(action) {
			  var direction = action;
			  
			  //moving carousel backwards
			  if(direction == 'counter-clockwise') {
			    var leftitem = $('.left-pos').attr('id') - 1;
			    if(leftitem == 0) {
			      leftitem = itemCount;
			    }
			    
			    $('.right-pos').removeClass('right-pos').addClass('back-pos');
			    $('.main-pos').removeClass('main-pos').addClass('right-pos');
			    $('.left-pos').removeClass('left-pos').addClass('main-pos');
			    $('#'+leftitem+'').removeClass('back-pos').addClass('left-pos');
			    
			    startItem--;
			    if(startItem < 1) {
			      startItem = itemCount;
			    }
			  }
			  
			  //moving carousel forward
			  if(direction == 'clockwise' || direction == '' || direction == null ) {
			    function pos(positionvalue) {
			      if(positionvalue != 'leftposition') {
			        //increment image list id
			        position++;
			        
			        //if final result is greater than image count, reset position.
			        if((startItem+position) > resetCount) {
			          position = 1-startItem;
			        }
			      }
			    
			      //setting the left positioned item
			      if(positionvalue == 'leftposition') {
			        //left positioned image should always be one left than main positioned image.
			        position = startItem - 1;
			      
			        //reset last image in list to left position if first image is in main position
			        if(position < 1) {
			          position = itemCount;
			        }
			      }
			   
			      return position;
			    }  
			  
			   $('#'+ startItem +'').removeClass('main-pos').addClass('left-pos');
			   $('#'+ (startItem+pos()) +'').removeClass('right-pos').addClass('main-pos');
			   $('#'+ (startItem+pos()) +'').removeClass('back-pos').addClass('right-pos');
			   $('#'+ pos('leftposition') +'').removeClass('left-pos').addClass('back-pos');

			    startItem++;
			    position=0;
			    if(startItem > itemCount) {
			      startItem = 1;
			    }
			  }
			}

			//next button click function
			$('#next').click(function() {
			  swap('clockwise');
			});

			//prev button click function
			$('#prev').click(function() {
			  swap('counter-clockwise');
			});

			//if any visible items are clicked
			$('li').click(function() {
			  if($(this).attr('class') == 'items left-pos') {
			     swap('counter-clockwise'); 
			  }
			  else {
			    swap('clockwise'); 
			  }
			});
	</script>
</body>
</html>