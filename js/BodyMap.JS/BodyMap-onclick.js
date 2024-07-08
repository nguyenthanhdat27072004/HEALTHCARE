document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("rollback2");
    const div1 = document.getElementById("body-font-woman");
    const div2 = document.getElementById("body-back-woman");

    button.addEventListener("click", function() {
        if (div1.style.display === "block") {
            div1.style.display = "none";
			div2.style.display = "block";
        } else {
			div1.style.display = "block";
            div2.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("rollback");
    const div1 = document.getElementById("body-font-man");
    const div2 = document.getElementById("body-back-man");

    button.addEventListener("click", function() {
        if (div1.style.display === "block") {
            div1.style.display = "none";
			div2.style.display = "block";
        } else {
			div1.style.display = "block";
            div2.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const button1 = document.getElementById("button1");
    const button2 = document.getElementById("button2");
    const content1 = document.getElementById("body-font-man");
    const content2 = document.getElementById("body-font-woman");
	const content3 = document.getElementById("buttonrollback");
	const content4 = document.getElementById("buttonrollback2");
	const content5 = document.getElementById("body-back-man");
    const content6 = document.getElementById("body-back-woman");

    button1.addEventListener("click", function() {
        content1.style.display = "block";
        content2.style.display = "none";
		content3.style.display = "block";
		content4.style.display = "none";
		content5.style.display = "none";
		content6.style.display = "none";
    });

    button2.addEventListener("click", function() {
        content1.style.display = "none";
        content2.style.display = "block";
		content3.style.display = "none";
		content4.style.display = "block";
		content5.style.display = "none";
    });
});


(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('interactivePath')[0]
    , $menu_trigger2 = $body.getElementsByClassName('interactivePath')[1]
    , $menu_trigger3 = $body.getElementsByClassName('interactivePath')[2]
    , $menu_trigger4 = $body.getElementsByClassName('interactivePath')[3]
    , $menu_trigger5 = $body.getElementsByClassName('interactivePath')[4]
    , $menu_trigger6 = $body.getElementsByClassName('interactivePath')[5]
    , $menu_trigger7 = $body.getElementsByClassName('interactivePath')[6]
    , $menu_trigger8 = $body.getElementsByClassName('interactivePath')[7]
    , $menu_trigger9 = $body.getElementsByClassName('interactivePath')[8];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger2 !== 'undefined' ) {
		$menu_trigger2.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger3 !== 'undefined' ) {
		$menu_trigger3.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger4 !== 'undefined' ) {
		$menu_trigger4.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger5 !== 'undefined' ) {
		$menu_trigger5.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger6 !== 'undefined' ) {
		$menu_trigger6.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger7 !== 'undefined' ) {
		$menu_trigger7.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger8 !== 'undefined' ) {
		$menu_trigger8.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger9 !== 'undefined' ) {
		$menu_trigger9.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('interactivePath2')[0]
    , $menu_trigger2 = $body.getElementsByClassName('interactivePath2')[1]
    , $menu_trigger3 = $body.getElementsByClassName('interactivePath2')[2]
    , $menu_trigger4 = $body.getElementsByClassName('interactivePath2')[3]
    , $menu_trigger5 = $body.getElementsByClassName('interactivePath2')[4]
    , $menu_trigger6 = $body.getElementsByClassName('interactivePath2')[5]
    , $menu_trigger7 = $body.getElementsByClassName('interactivePath2')[6]
    , $menu_trigger8 = $body.getElementsByClassName('interactivePath2')[7]
    , $menu_trigger9 = $body.getElementsByClassName('interactivePath2')[8];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger2 !== 'undefined' ) {
		$menu_trigger2.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger3 !== 'undefined' ) {
		$menu_trigger3.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger4 !== 'undefined' ) {
		$menu_trigger4.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger5 !== 'undefined' ) {
		$menu_trigger5.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger6 !== 'undefined' ) {
		$menu_trigger6.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger7 !== 'undefined' ) {
		$menu_trigger7.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger8 !== 'undefined' ) {
		$menu_trigger8.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger9 !== 'undefined' ) {
		$menu_trigger9.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('interactivePath3')[0]
    , $menu_trigger2 = $body.getElementsByClassName('interactivePath3')[1]
    , $menu_trigger3 = $body.getElementsByClassName('interactivePath3')[2]
    , $menu_trigger4 = $body.getElementsByClassName('interactivePath3')[3]
    , $menu_trigger5 = $body.getElementsByClassName('interactivePath3')[4]
    , $menu_trigger6 = $body.getElementsByClassName('interactivePath3')[5]
    , $menu_trigger7 = $body.getElementsByClassName('interactivePath3')[6]
    , $menu_trigger8 = $body.getElementsByClassName('interactivePath3')[7]
    , $menu_trigger9 = $body.getElementsByClassName('interactivePath3')[8];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger2 !== 'undefined' ) {
		$menu_trigger2.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger3 !== 'undefined' ) {
		$menu_trigger3.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger4 !== 'undefined' ) {
		$menu_trigger4.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger5 !== 'undefined' ) {
		$menu_trigger5.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger6 !== 'undefined' ) {
		$menu_trigger6.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger7 !== 'undefined' ) {
		$menu_trigger7.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger8 !== 'undefined' ) {
		$menu_trigger8.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger9 !== 'undefined' ) {
		$menu_trigger9.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('interactivePath4')[0]
    , $menu_trigger2 = $body.getElementsByClassName('interactivePath4')[1]
    , $menu_trigger3 = $body.getElementsByClassName('interactivePath4')[2]
    , $menu_trigger4 = $body.getElementsByClassName('interactivePath4')[3]
    , $menu_trigger5 = $body.getElementsByClassName('interactivePath4')[4]
    , $menu_trigger6 = $body.getElementsByClassName('interactivePath4')[5]
    , $menu_trigger7 = $body.getElementsByClassName('interactivePath4')[6]
    , $menu_trigger8 = $body.getElementsByClassName('interactivePath4')[7]
    , $menu_trigger9 = $body.getElementsByClassName('interactivePath4')[8];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger2 !== 'undefined' ) {
		$menu_trigger2.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger3 !== 'undefined' ) {
		$menu_trigger3.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger4 !== 'undefined' ) {
		$menu_trigger4.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger5 !== 'undefined' ) {
		$menu_trigger5.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger6 !== 'undefined' ) {
		$menu_trigger6.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger7 !== 'undefined' ) {
		$menu_trigger7.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger8 !== 'undefined' ) {
		$menu_trigger8.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

    if ( typeof $menu_trigger9 !== 'undefined' ) {
		$menu_trigger9.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

// (function() {
// 	var $body = document.body
// 	, $menu_trigger = $body.getElementsByClassName('hoang-clicktocloselist')[0];

// 	if ( typeof $menu_trigger !== 'undefined' ) {
// 		$menu_trigger.addEventListener('click', function() {
// 			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
// 		});
// 	}

// }).call(this);

function showContent(contentNumber) {

    // Hide all content divs
    document.querySelectorAll('.hoang-content').forEach(function(content) {
        content.style.display = 'none';
    });

    // Show the selected content div
    var contentToShow = document.getElementById('content' + contentNumber);
    contentToShow.style.display = 'block';

    // Scroll to the content div
	// ScrollReveal().clean(content);
	// ScrollReveal().reveal(contentToShow, {duration: 0, delay: 0});
	// ScrollReveal().reveal('.hoang-imgdescription', {duration: 1000, delay: 200, origin: 'left', distance: '70px'});
	// ScrollReveal().reveal('.hoang-khaiquat', {duration: 1000, delay: 200, origin: 'right', distance: '150px'});
	// ScrollReveal().reveal('.hoang-khainiem', { delay: 400, origin: 'bottom', distance: '50px'});
	// ScrollReveal().reveal('.hoang-titlelistsymptomshead', { delay: 300, origin: 'left', distance: '300px', reset: false});
	// ScrollReveal().reveal('.hoang-whitespace4', { delay: 300, origin: 'right', distance: '300px', reset: false});
	// ScrollReveal().reveal('#benh1', { delay: 300, origin: 'bottom', reset: false});
	// ScrollReveal().reveal('#benh2', { delay: 400, origin: 'bottom', reset: false});
	// ScrollReveal().reveal('#benh3', { delay: 500, origin: 'bottom', reset: false});
	// ScrollReveal().reveal('.hoang-conclusion', { delay: 100, origin: 'top', duration: 1000, distance: '75px'});
}

ScrollReveal({
	reset: true,
	distance: '150px',
	duration: 2000,
	delay: 400, 
	easing: 'ease-in-out'
});

ScrollReveal().reveal('.hoang-title', {duration: 1000, delay: 200, origin: 'left', distance: '200px'});
ScrollReveal().reveal('.hoang-whitespace', {duration: 1000, delay: 600, origin: 'right'});
ScrollReveal().reveal('.hoang-video', {duration: 1000, delay: 800, origin: 'bottom', distance: '50px'});
ScrollReveal().reveal('.hoang-introduction', {duration: 1000, delay: 1000, origin: 'top', distance: '50px'})
ScrollReveal().reveal('.hoang-step1', {duration: 1000, delay: 2200, origin: 'right'});
ScrollReveal().reveal('.hoang-step2', {duration: 1000, delay: 2400, origin: 'right'});
ScrollReveal().reveal('.hoang-step3', {duration: 1000, delay: 2600, origin: 'right'});
ScrollReveal().reveal('.hoang-step4', {duration: 1000, delay: 2800, origin: 'right'});
