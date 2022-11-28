$(document).ready(function() {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.parallax').parallax();
  $('img').materialbox();
  $('.dropdown-trigger').dropdown({
    coverTrigger: false
  });
  $('.carousel').carousel({
    fullWidth: true,
    indicators: true,
    duration: 350
  });
  restartCarousel()
});

function sidenavClose(){
  $('.sidenav').sidenav('close');
};

function changeButton() {
  if ($('.carousel-item.gb').hasClass('active')) {
    $('.btn-change').prop('href', 'gang-beasts.html');
  };
  if ($('.carousel-item.am').hasClass('active')) {
    $('.btn-change').prop('href', 'a_mazing.html');
  };
  if ($('.carousel-item.rl').hasClass('active')) {
    $('.btn-change').prop('href', 'rocket-league.html');
  };
  if ($('.carousel-item.pm').hasClass('active')) {
    $('.btn-change').prop('href', 'pacman.html');
  };
};
setInterval(changeButton, 10);


var carouselWait;
var carouselTimer;

function nextCarousel() {
  $('.carousel.carousel-slider').carousel('next');
};

function restartCarousel() {
  carouselTimer = setInterval(nextCarousel, 5000);
};

$('.carousel').click(function() {
  clearInterval(carouselTimer);
  clearTimeout(carouselWait);
  carouselWait = setTimeout(restartCarousel, 8000);
});

$('.parallax-container').click(function() {
    document.location.href="../html/easter-egg-01.html";
});

var durationRick;
var durationNyan;

function rickNone() {
  $(".easter-gif").css("display","none");
}  

$(document).keydown(function() {
  if (event.key == '²') {
    new Audio('../misc/nyan-cat.mp3').play();
    $('img').attr('src','../img/nyan-cat.gif');
    setTimeout(refresh, durationNyan);
  };
});

function refresh() {
  document.location.href="";
}


$(new Audio('../misc/rick-roll.mp3')).on("canplay", function () {
        durationRick = this.duration * 1000;
});

$(new Audio('../misc/nyan-cat.mp3')).on("canplay", function () {
        durationNyan = this.duration * 1000;
});

let openedWindow;

function openWindow() {
  openedWindow = window.open('../index.html');
}

function closeOpenedWindow() {
  openedWindow.close();
}

function destroy() {
  openWindow();
  setTimeout(closeOpenedWindow, 20000);
};
  
$('#suprise').click(function() {
  
  var inpName = $('#name-input').val();
  var inpObject = $('#object-input').val();
  
  if (inpName == "ASTLEY Rick") {
    new Audio('../misc/rick-roll.mp3').play();
    $(".easter-gif").css("display","block");
    setTimeout(rickNone, durationRick);
  };
  
  if (inpObject == "DESTROY") {
    for (let i = 0; i < 3; i++) {
      destroy()
    }
  };
});