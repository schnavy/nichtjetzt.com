//Scrollify neu
$(document).ready(function() {

  var is_mobile = false;
  var is_home = false;

  function testMobile() {
    if ($('nav').css('display') == 'none') {
      is_mobile = true;
    }
  }
  testMobile();

  //SWIPE NAVIGATION

  if (is_mobile == true) {

    delete Hammer.defaults.cssProps.userSelect;


    var panel = document.getElementById('panel');
    var menu = document.getElementById('menu');

    var mc2 = new Hammer(panel);
    var mc = new Hammer(menu);

    mc2.get('swipe').set({
      threshold: 20,
      velocity: 0.1,
      // direction:Hammer.DIRECTION_HORIZONTAL,
    });


    // listen to events...
    mc2.on("swipeleft", function(ev) {
      menu.classList.remove('nav-closed');
      menu.classList.add('nav-open');
    });
    mc.on("swiperight", function(ev) {
      menu.classList.remove('nav-open');
      menu.classList.add('nav-closed');
    });


    $(".nav-icon").click(function() {
      menu.classList.remove('nav-closed');
      menu.classList.add('nav-open');
    });
    $(".close-button").click(function() {
      menu.classList.remove('nav-open');
      menu.classList.add('nav-closed');
      console.log('Hallonichttitele');

    });
  }

});

var i = 0;


function nextImg() {
  if (i < images.length - 1) {
    i++;
    console.log(i + "next");
  } else {
    i = 0;
  }
  document.slide.src = images[i];
}

function prevImg() {
  if (i > 0) {
    i--;
    console.log(i + "prev");
  } else {
    i = images.length - 1;
  }
  document.slide.src = images[i];
}

var video = document.getElementById('video-overlay');

function openVideo() {
  video.style.display = "block";
  console.log("23");
}

function closeVideo() {
  video.style.display = "none";
  console.log("83");
}
