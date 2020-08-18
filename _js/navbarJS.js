if($(".index_body").length >0){
    $(".nav-link").addClass("hvr-rectangle-out");
    $("#homeClick").addClass("active");
    $("#home").css({"background-color":"#375a7f","border-radius":"0.25rem"});
    $("#home").html('首頁');
    $("#aboutMe").hover(function() {
    $("#aboutMe").html('關於我');
  }, function() {
    $("#aboutMe").html('ABOUT ME');
  })
  $("#portfolio").hover(function() {
    $("#portfolio").html('作品集');
  }, function() {
    $("#portfolio").html('PORTFOLIO');
  })
  $("#contact").hover(function() {
    $("#contact").html('與我聯繫');
  }, function() {
    $("#contact").html('CONTACT ME');
  })
  };


if($(".portfolio_body").length >0){
    $(".nav-link").addClass("hvr-rectangle-out");
    $("#portfolioClick").addClass("active");
    $("#portfolio").css({"background-color":"#375a7f","border-radius":"0.25rem"});
    $("#portfolio").html('作品集');

    $("#home").hover(function() {
        $("#home").html('首頁');
    }, function() {
        $("#home").html('HOME');
    })

    $("#aboutMe").hover(function() {
        $("#aboutMe").html('關於我');
    }, function() {
    $("#aboutMe").html('ABOUT ME');
    })
    
    $("#contact").hover(function() {
        $("#contact").html('與我聯繫');
    }, function() {
        $("#contact").html('CONTACT ME');
    })
    };


if($(".aboutMe_body").length >0){
    $(".nav-link").addClass("hvr-rectangle-out");
    $("#aboutClick").addClass("active");
    $("#aboutMe").css({"background-color":"#375a7f","border-radius":"0.25rem"});
    $("#aboutMe").html('關於我');

    $("#home").hover(function() {
        $("#home").html('首頁');
    }, function() {
        $("#home").html('HOME');
    })

    $("#portfolio").hover(function() {
        $("#portfolio").html('作品集');
      }, function() {
        $("#portfolio").html('PORTFOLIO');
      })

    $("#contact").hover(function() {
        $("#contact").html('與我聯繫');
    }, function() {
        $("#contact").html('CONTACT ME');
    })
    };


if($(".contact_body").length >0){
    $(".nav-link").addClass("hvr-rectangle-out");
    $("#contactClick").addClass("active");
    $("#contact").css({"background-color":"#375a7f","border-radius":"0.25rem"});
    $("#contact").html('與我聯繫');

    $("#home").hover(function() {
        $("#home").html('首頁');
    }, function() {
        $("#home").html('HOME');
    })

    $("#portfolio").hover(function() {
        $("#portfolio").html('作品集');
      }, function() {
        $("#portfolio").html('PORTFOLIO');
      })

      $("#aboutMe").hover(function() {
        $("#aboutMe").html('關於我');
    }, function() {
    $("#aboutMe").html('ABOUT ME');
    })};