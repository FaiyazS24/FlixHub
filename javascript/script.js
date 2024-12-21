// Carousal starts
$(document).ready(function() {

    var slidediv = $('.slidein'); // Getting the outer div
  
    // Click to go to the previous slide
    $('.prev').on('click', function() {
  
      // Animation for previous slide to apprear
      slidediv.animate({left: '0%'}, 300, function(){
  
        slidediv.css('left', '-100%');
  
        $('.slide').first().before($('.slide').last());
  
      });
  
  
    });
  
  
    // Click to go to the next slide
    $('.next').on('click', function() {
  
      // Animation for next slide to apprear
      slidediv.animate({left: '-200%'}, 300, function(){
  
        slidediv.css('left', '-100%');
  
        $('.slide').last().after($('.slide').first());
  
      });
  
  
    });

// Carousal Ends

// Movie Click to about.html
    $(".movie-link").on("click", function(e) {
      e.preventDefault(); // Prevent the default link behavior

      // Get the movie information from the clicked element
      const movieTitle = $(this).data("title");
      const movieImage = $(this).data("image");
      const movieTrailer = $(this).data("trailer");
      const movieHeadline = $(this).data("headline");
      const movieStoryline = $(this).data("storyline");
      const movieCast = {
        cast1: $(this).data("cast1"),
        cast1Image: $(this).data("cast1-image"), // Add cast image
        cast2: $(this).data("cast2"),
        cast2Image: $(this).data("cast2-image"), // Add cast image
        cast3: $(this).data("cast3"),
        cast3Image: $(this).data("cast3-image"), // Add cast image
        cast4: $(this).data("cast4"),
        cast4Image: $(this).data("cast4-image"), // Add cast image
        cast5: $(this).data("cast5"),
        cast5Image: $(this).data("cast5-image") // Add cast image
      };

      localStorage.setItem("movieTitle", movieTitle);
      localStorage.setItem("movieImage", movieImage);
      localStorage.setItem("movieTrailer", movieTrailer);
      localStorage.setItem("movieHeadline", movieHeadline);
      localStorage.setItem("movieStoryline", movieStoryline);
      localStorage.setItem("movieCast", JSON.stringify(movieCast));

      // Redirect to about.html
      window.location.href = "about.html";
    });

// Movie Click Ends

// To Top button
    const toTop = document.querySelector(".to-top");

    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {
        toTop.classList.add("active");
      } else {
        toTop.classList.remove("active");
      }
    })

// To Top Ends

// Genre Selection
    $("#all").click( evt => {
      
      $('.g1').addClass('active');
      $('.g2').removeClass('active').css('background-color', 'transparent');
      $('.g3').removeClass('active').css('background-color', 'transparent');
      $('.g4').removeClass('active').css('background-color', 'transparent');
      $('.g5').removeClass('active').css('background-color', 'transparent');
      $(".content1").show(); // Shows the selected section
    });

    $("#ani").click( evt => {
     
      $('.g2').addClass('active').css('background-color', 'rgb(104, 197, 226)'); // Sets background to highlight
      $('.g1').removeClass('active');
      $('.g3').removeClass('active').css('background-color', 'transparent');
      $('.g4').removeClass('active').css('background-color', 'transparent');
      $('.g5').removeClass('active').css('background-color', 'transparent');
      $(".ani").show(); // Shows the selected section
      $(".chris").hide();
      $(".com").hide();
      $(".thrill").hide();
    });

    $("#chris").click( evt => {
      
      $('.g3').addClass('active').css('background-color', 'rgb(104, 197, 226)'); // Sets background to highlight
      $('.g1').removeClass('active');
      $('.g2').removeClass('active').css('background-color', 'transparent');
      $('.g4').removeClass('active').css('background-color', 'transparent');
      $('.g5').removeClass('active').css('background-color', 'transparent');
      $(".ani").hide();
      $(".chris").show(); // Shows the selected section
      $(".com").hide();
      $(".thrill").hide();
    });

    $("#com").click( evt => {
     
      $('.g4').addClass('active').css('background-color', 'rgb(104, 197, 226)'); // Sets background to highlight
      $('.g1').removeClass('active');
      $('.g2').removeClass('active').css('background-color', 'transparent');
      $('.g3').removeClass('active').css('background-color', 'transparent');
      $('.g5').removeClass('active').css('background-color', 'transparent');
      $(".ani").hide();
      $(".chris").hide();
      $(".com").show(); // Shows the selected section
      $(".thrill").hide();
    });

    $("#thrill").click( evt => {
      
      $('.g5').addClass('active').css('background-color', 'rgb(104, 197, 226)'); // Sets background to highlight
      $('.g1').removeClass('active');
      $('.g2').removeClass('active').css('background-color', 'transparent');
      $('.g3').removeClass('active').css('background-color', 'transparent');
      $('.g4').removeClass('active').css('background-color', 'transparent');
      $(".ani").hide();
      $(".chris").hide();
      $(".com").hide();
      $(".thrill").show(); // Shows the selected section
    });
// Genre Selection Ends

});