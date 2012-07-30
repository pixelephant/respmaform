$(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true
      });
    });




$(document).ready(function(){

	$("#form .clearfix a").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		if($(this).data("type") === "contact"){
			
		}
		return false;
	})

	$("#offer-form").submit(function(){
		$(this).find("input[type='submit']").css("background","green").attr("disabled","disabled").val("Hamarosan jelentkezünk.");
		return false;
	});

});
