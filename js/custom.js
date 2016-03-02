// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 150) {
      $(".navbar-fixed-top").hide();
    }
    else {
      $(".navbar-fixed-top").show();
    }
    if ($(".navbar").offset().top > 650) {
        $(".navbar-fixed-top").show();
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});