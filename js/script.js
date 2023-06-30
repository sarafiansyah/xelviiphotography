var owl = $('.owl-carousel');
owl.owlCarousel({
  margin: 10,
  loop: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})

$(document).on("click", ".action-buttons .dropdown-menu", function(e){
e.stopPropagation();
});

function checkScroll(){
var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

if($(window).scrollTop() > startY){
$('.navbar').addClass("scrolled");
}else{
$('.navbar').removeClass("scrolled");
}
}

function myFunction(x) {
if (x.matches) { // If media query matches
$('.navbar').addClass("scrolled");
}
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

if($('.navbar').length > 0){
$(window).on("scroll load resize", function(){
checkScroll();
myFunction(x);
});
}

document.getElementById('opacity-slider').addEventListener('input', function (e) {
    document.body.style.opacity = this.value;
  });
  
  $(document).ready(function (e) {
    $("#form").on('submit',(function(e) {
     e.preventDefault();
     $.ajax({
            url: "ajaxupload.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
            cache: false,
      processData:false,
      beforeSend : function()
      {
       //$("#preview").fadeOut();
       $("#err").fadeOut();
      },
      success: function(data)
         {
       if(data=='invalid')
       {
        // invalid file format.
        $("#err").html("Invalid File !").fadeIn();
       }
       else
       {
        // view uploaded file.
        $("#preview").html(data).fadeIn();
        $("#form")[0].reset(); 
       }
         },
        error: function(e) 
         {
       $("#err").html(e).fadeIn();
         }          
       });
    }));
   });


   
