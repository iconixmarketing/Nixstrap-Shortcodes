//	<div class="rotate" data-type="nix-rotate" data-speed="1" style="transform: rotate(0deg);"></div>
jQuery(document).ready(function ($) {
    var $window = $(window);
    $('div[data-type="nix-rotate"]').each(function () {
        var $bgobj = $(this);
        $(window).scroll(function () {
            var yPos = -($window.scrollTop() * $bgobj.data('speed'));
            var coords = 'rotate(' + yPos + 'deg)';
            $bgobj.css({
                transform: coords
            });
        });
    });
});

// 	<div data-type="nix-transform" data-stopx="300" data-stopy="1100" data-stopz="300" data-speedy="1" data-speedx="1" data-speedz="1" class="moves" style="transform: translate3d(0,0,0);"></div>
jQuery(document).ready(function ($) {
    var $window = $(window);
    $('div[data-type="nix-transform"]').each(function () {
        var $bgobj = $(this);
        $(window).scroll(function () {
            var yPos = ($window.scrollTop() * $bgobj.data('speedy'));
            var xPos = ($window.scrollTop() * $bgobj.data('speedx'));
            var zPos = ($window.scrollTop() * $bgobj.data('speedz'));
            var movestopx = $bgobj.data('stopx');
            var movestopy = $bgobj.data('stopy');
            var movestopz = $bgobj.data('stopz');
            var xTargetPos, yTargetPos, zTargetPos;
            if (xPos <= movestopx) {
                xTargetPos = xPos;
            } else {
                xTargetPos = movestopx;
            }
            if (yPos <= movestopy) {
                yTargetPos = yPos;
            } else {
                yTargetPos = movestopy;
            }
            if (zPos <= movestopz) {
                zTargetPos = zPos;
            } else {
                zTargetPos = movestopz;
            }
            $bgobj.css({transform: 'translate3d(' + xTargetPos + 'px, ' + yTargetPos + 'px, ' + zTargetPos + 'px)'});
        });
    });
});

// <div data-type="nix-background" data-start="-40" data-speedx="50" data-speedy="0.1" class="div-background" style="background-position: 50% 0;"> </div>
jQuery(document).ready(function ($) {
    var $window = $(window);
    $('section[data-type="nix-background"]').each(function () {
        var $bgobj = $(this);
        $(window).scroll(function () {
            var xPos = $bgobj.data('speedx');
            var yPos = -($window.scrollTop() * $bgobj.data('speedy'));
            var pStart = $bgobj.data('start');
            var yTargetPos;
            if (yPos < pStart) {
                yTargetPos = yPos;
            } else {
                yTargetPos = 0;
            }
            $bgobj.css({backgroundPosition: xPos + '% ' + yTargetPos + 'px'});
        }); // window scroll Ends
    });
});