const navSlide = () =>
{
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

	burger.addEventListener('click',() =>{
		//nav sliding
		nav.classList.toggle('nav-active');
        //links transition
		navLinks.forEach((link, index) => {
		 if(link.style.animation)
		  {
			link.style.animation='';
		  }
		 else 
		  {
			link.style.animation=`navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
		  }
	     }); 
         //burger transformation
         burger.classList.toggle('toggle');
         
     })
}
navSlide();	

/*js recipe*/
$(document).ready(function(){

	$(".filter-button").click(function(){
	var value = $(this).attr('data-filter');
	
	if(value == "all")
	{
	
	$('.filter').show('1000');
	}
	else
	{
	
	$(".filter").not('.'+value).hide('3000');
	$('.filter').filter('.'+value).show('3000');
	
	}
	});
	
	if ($(".filter-button").removeClass("active")) {
	$(this).removeClass("active");
	}
	$(this).addClass("active");
	
	});
/*end js recipe*/

/*chams program js*/
$('#modal1').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
	});
	
	$('#modal6').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
	});
	
	$('#modal4').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
	});
	/*end chams program js*/

	// sliding cart
	/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
	document.getElementById("mySidebar").style.width = "100%";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
  }