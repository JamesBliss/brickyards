var stickerTop=parseInt($(".nav").offset().top);$(window).scroll(function(){$(".nav").css(parseInt($(window).scrollTop())+parseInt($(".nav").css("margin-top"))>stickerTop?{position:"fixed",top:"0px"}:{position:"relative"})});