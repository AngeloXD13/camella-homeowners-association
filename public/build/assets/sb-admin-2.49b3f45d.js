(function(e){e("#sidebarToggle, #sidebarToggleTop").on("click",function(o){e("body").toggleClass("sidebar-toggled"),e(".sidebar").toggleClass("toggled"),e(".sidebar").hasClass("toggled")&&e(".sidebar .collapse").collapse("hide")}),e(window).resize(function(){e(window).width()<768&&e(".sidebar .collapse").collapse("hide"),e(window).width()<480&&!e(".sidebar").hasClass("toggled")&&(e("body").addClass("sidebar-toggled"),e(".sidebar").addClass("toggled"),e(".sidebar .collapse").collapse("hide"))}),e("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel",function(o){if(e(window).width()>768){var l=o.originalEvent,s=l.wheelDelta||-l.detail;this.scrollTop+=(s<0?1:-1)*30,o.preventDefault()}}),e(document).on("scroll",function(){var o=e(this).scrollTop();o>100?e(".scroll-to-top").fadeIn():e(".scroll-to-top").fadeOut()}),e(document).on("click","a.scroll-to-top",function(o){var l=e(this);e("html, body").stop().animate({scrollTop:e(l.attr("href")).offset().top},1e3,"easeInOutExpo"),o.preventDefault()})})(jQuery);
