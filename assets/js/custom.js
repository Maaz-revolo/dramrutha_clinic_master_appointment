$(window).on("load", function () {  
    $(".testimonial-slider").removeClass("d-none-c"), 
    $(".certificate-doctor-all").removeClass("d-none-c"), 
    $(".doc-cer-slider").removeClass("d-none-c"), 
    $(".icons-all-img-cal").removeClass("d-none-c"), 
   
    $(".testimonial-slider").slick({
        dots: !1,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: !0,
        draggable: !0,
        speed: 1e3,
        autoplaySpeed: 4e3,
        autoplay: !0,
        swipeToSlide: !0,
        pauseOnHover: !0,
        arrows: !1,
        dots: !0,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 567,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: !0,
                arrows: !1
            }
        }]
    }), 
    
    $(".certificate-doctor-all").slick({
        dots: !0,
        arrows: !1,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: !0,
        draggable: !0,
        speed: 2e3,
        autoplaySpeed: 2e3,
        autoplay: !0,
        swipeToSlide: !0,
        pauseOnHover: !0,
        // variableWidth: !0,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 767,
            settings: {
                arrows: !1,
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: !0
            }
        }, {
            breakpoint: 567,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: !0,
                arrows: !1
            }
        }]
    })

    $(".doc-cer-slider").slick({
        dots: !0,
        arrows: !1,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: !0,
        draggable: !0,
        speed: 2e3,
        autoplaySpeed: 2e3,
        autoplay: !0,
        swipeToSlide: !0,
        pauseOnHover: !0,
        // variableWidth: !0,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 767,
            settings: {
                arrows: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: !0
            }
        }, {
            breakpoint: 567,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: !0,
                arrows: !1
            }
        }]
    })

    $(".icons-all-img-cal").slick({
        arrows: !1,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 8000,
        pauseOnHover: false,
        cssEase: 'linear',
        // variableWidth: !0,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 767,
            settings: {
                arrows: !1,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: !0
            }
        }, {
            breakpoint: 567,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1
            }
        }]
    })
    
});

// $(".clint-case-all").slick({
//     dots: !0,
//     arrows: !1,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     infinite: !0,
//     draggable: !0,
//     speed: 2e3,
//     autoplaySpeed: 2e3,
//     autoplay: !0,
//     swipeToSlide: !0,
//     pauseOnHover: !0     
  
// })
// .on("setPosition", function () {
//     resizeSlider();
//   });

// $(window).on("resize", function (e) {
//   resizeSlider();
// });

// var slickHeight = $(".clint-case-all .slick-track").outerHeight();

// var slideHeight = $(".slick-track").find(".clint-case-single").outerHeight();

// function resizeSlider() {
//   $(".slick-track")
//     .find(".clint-case-single")
//     .css("height", slickHeight + "px");
// }

const header = document.querySelector(".header_area");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 150) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});


$(function () { 
    $(".faq-accordian-single-2:not(:first-of-type) .accordion-content-2").css("display", "none");
    $(".faq-accordian-single-2:first-of-type .js-accordion-title-2").addClass("open-2");
    $(".js-accordion-title-2").click(function () {
      $(".open-2").not(this).removeClass("open-2").next().slideUp(300);
     $(this).toggleClass("open-2").next().slideToggle(300);
    });
  });


  $(function () { 
    $(".faq-accordian-single:not(:first-of-type) .accordion-content").css("display", "none");
    $(".faq-accordian-single:first-of-type .js-accordion-title").addClass("open");
    $(".js-accordion-title").click(function () {
      $(".open").not(this).removeClass("open").next().slideUp(300);
     $(this).toggleClass("open").next().slideToggle(300);
    });
  });



$(document).ready(function(){
    if(loadEnquiryModalPopup){
    showPopup();
}
  });


function showPopup(){
 if(localStorage.getItem('YesBtn') !== 1){
    
  setTimeout(() => {  
    $('body').addClass('modal-open-auto');
   
  }, 45000);
 }
}



(function($) {
    // "use strict";
        $(document).ready(function() {
                $('.modal-link').on('click', function() {
                $('body').addClass("modal-open");
            });
            $('.close-modal-x').on('click', function() {
                $('body').removeClass("modal-open");
            });
        });
}(jQuery));


(function($) {
    // "use strict";
        $(document).ready(function() {
                $('.modal-link-wa').on('click', function() {
                $('body').addClass("modal-open-wa");
            });
            $('.close-modal-x').on('click', function() {
                $('body').removeClass("modal-open-wa");
            });
        });
}(jQuery));


(function($) {
//   "use strict";
      $(document).ready(function() {
              $('.modal-link-score').on('click', function() {
              $('body').addClass("modal-open-score");
          });
          $('.modal-link-score-dtl , .close-modal-x').on('click', function() {
              $('body').removeClass("modal-open-score");
          });
      });
}(jQuery));

(function($) {
//   "use strict";
      $(document).ready(function() {
              $('.modal-link-score-dtl').on('click', function() {
              $('body').addClass("modal-open-score-dtl");
          });
          $('.close-modal-x').on('click', function() {
              $('body').removeClass("modal-open-score-dtl");
          });
      });
}(jQuery));


(function($) {
    // "use strict";
        $(document).ready(function() {
                $('.modal-link-auto').on('click', function() {
                $('body').addClass("modal-open-auto");

            });
            $('.close-modal-auto').on('click', function() {
                $('body').removeClass("modal-open-auto");
            });
        });
  }(jQuery));


  


// $(document).ready(function() {
//     // Get today's date in YYYY-MM-DD format
//     var today = new Date().toISOString().split('T')[0];

//     // Set min attribute for all elements with class "datePicker"
//     $('.mob-date-picker').attr('min', today);
//   });
  

//   $(document).ready(function () {
//     var today = new Date().toISOString().split('T')[0];
//     $('.mob-date-picker').attr('min', today);
//   });

//   document.addEventListener('DOMContentLoaded', function () {
//     var today = new Date().toISOString().split('T')[0];
//     var dateInputs = document.querySelectorAll('.mob-date-picker');
//     dateInputs.forEach(function(input) {
//       input.setAttribute('min', today);
//     });
//   });




// $(document).ready(function () {
//   var today = new Date();
//   var dd = String(today.getDate()).padStart(2, '0');
//   var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0
//   var yyyy = today.getFullYear();

//   var formattedDate = yyyy + '-' + mm + '-' + dd;

//   $('.mob-date-picker').attr('min', formattedDate);
// });



//   $(document).ready(function() {
//     // Get today's date
//     var today = new Date();

//     // Format as YYYY-MM-DD
//     var yyyy = today.getFullYear();
//     var mm = String(today.getMonth() + 1).padStart(2, '0');
//     var dd = String(today.getDate()).padStart(2, '0');
//     var formattedDate = `${yyyy}-${mm}-${dd}`;

//     // Set value to all inputs with class 'todayDate'
//     $('.mob-date-picker').val(formattedDate);
//   });


 $( function() {
    const today = new Date();
    $( "#quick_appointment_date" ).datepicker({     
        dateFormat: 'd M, y',
		minDate: 0,
         defaultDate: today,
        showOn: "focus"        
    });
    $("#quick_appointment_date").datepicker("setDate", today);
    $("#quick_appointment_date").attr("readonly", "readonly"); // Disable manual input
  } );

  

   $( function() {
    const today = new Date();
    $( "#footer_appointment_date" ).datepicker({     
        dateFormat: 'd M, y',
		minDate: 0,
         defaultDate: today,
        showOn: "focus"        
    });
    $("#footer_appointment_date").datepicker("setDate", today);
    $("#footer_appointment_date").attr("readonly", "readonly"); // Disable manual input
  } );

  $( function() {
     
    const today = new Date();
    $( "#simple_modal_popup_appointment_date" ).datepicker({     
        dateFormat: 'd M, y',
		minDate: 0,
        defaultDate: today,
        showOn: "focus" ,
        showButtonPanel: true ,
        appendTo: '.customModal',
        beforeShow: function(input, inst) {
    setTimeout(function () {
      inst.dpDiv.css({
        top: $(input).offset().top + $(input).outerHeight(),
        left: $(input).offset().left,
        position: 'absolute'
      });
    }, 0);
  }
    });
    $("#simple_modal_popup_appointment_date").datepicker("setDate", today);
    $("#simple_modal_popup_appointment_date").attr("readonly", "readonly"); // Disable manual input
    
  } );


