$(document).ready(function () {
  document.requestFullscreen();
});

$(".owl-carousel").owlCarousel({
  singleItem: true,
  loop: false,
  nav: false,
  items: 1,
  margin: 30,
  dots: false,
  navText: [
    '<button class="btn btn-primary"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></button>',
    '<button class="btn btn-primary"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></button>',
  ],
});
var input = document.querySelector("#phone");
window.intlTelInput(input, {
  utilsScript: "assets/vendors/intl-tel-input-master/build/js/utils.js",
});

// $(function(){
// 	var form = $("#form_submit");
// 	form.submit(function(e){
// 		$(this).attr("disabled", "disabled");
// 		e.preventDefault();

// 		$.ajax({
// 			type: form.attr("method"), //post
// 			url: form.attr("action"), //post.php
// 			data: form.serialize(), //values of all field
// 			dataType: "json",
// 			success: function(data){
// 				$(".response").text(data.content);
// 			},
// 			error: function(data){
// 				$(".response").text("An error occured");
// 			}
// 		});
// 	});
// });
