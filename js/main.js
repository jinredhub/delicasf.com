$(document).ready(function(){

    // $('.visitPinterestButton').on('click', function(){
    //     window.location.href = "https://sprung-pinterest.herokuapp.com/";
    // });

    // smooth scrolling
    $('a[href^="#"]').on("click", function(event){
        if(this.hash !== ""){
            // event.preventDefault();
            var hash = this.hash;

            $("html, body").stop().animate({
                scrollTop: $(hash).offset().top-57
            }, 500, function(){
                window.location.hash = hash;
            });
        }
    });

    // toggle between show/hide the mobile navbar menu
    $('.hamburgerIcon').on('click', function(){
        const container = document.querySelector('.myLinks');
        if(container.style.display === 'block'){
            container.style.display = "none";
        }
        else{
            container.style.display = 'block';
        }
    });

    // close mobile navbar when user click outside
    const linkContainer = document.querySelector('.myLinks');
    const hamburgerButton = document.querySelector('.hamburgerIcon');

    // need to put all of them in same function
    window.onclick = function(event){
        console.log('t or f: ', event.target.closest('.myLinks') == linkContainer);
        if(event.target != linkContainer && event.target.closest('.myLinks') != linkContainer && event.target.closest('.hamburgerIcon') != hamburgerButton){
            linkContainer.style.display = 'none';
        }
    }

    // initialize wow.js scroll animation
	new WOW({
		mobile: false,
		offset: 50
    }).init();  

    // slideshow=====================================================
    let currentSlideIndex = 0;

    nextSlide = (n) =>{
        const slides = document.querySelectorAll('.slide');
        slides[currentSlideIndex].className = 'slide';

        console.log('currentSlideIndex: ', currentSlideIndex);
        if(n === 'previous'){
            if(currentSlideIndex-1 < 0){
                currentSlideIndex = slides.length;
            }
            currentSlideIndex = (currentSlideIndex-1)%slides.length;
        }
        else{
            currentSlideIndex = (currentSlideIndex+1)%slides.length;
        }

        slides[currentSlideIndex].className = 'slide showing'
    }

    autoSlideV2 = () =>{
        nextSlide();
        setTimeout(autoSlideV2, 5000);
    }

    setTimeout(autoSlideV2, 5000);

    $('.prev').on('click', function(){
      nextSlide('previous');
    });
    $('.next').on('click', function(){
      nextSlide();
    });
    
    // parallax ================================================

    // 1. check if the el is in the viewport
    function isInViewport(node){
        // getBoundingClientRect will retuns size of an el and its position relative to the viewport
        const rect = node.getBoundingClientRect();
        // console.log('rect: ', rect);
        return(
            // easy explanation of below: Is the parallax node inside the viewport?
            (rect.height > 0 || rect.width > 0) && 
            rect.bottom >= 0 && 
            rect.right >= 0 && 
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) && 
            rect.left <= (window.innerWidth || document.documentElement.clientWidht)
        )
    }

    // it is better to create callback function for throttle
    function callback(){
        // jquery scrollTop returns vertical scrollbar position for that el
        // when scrollbar is on the top, position is 0.
        const scrolled = $(window).scrollTop();

        // jquery each: fun function for each matched el
        $('.parallax').each(function(index, el){
            // jquery offset return offset coordinations for selected el, relative to the document. Top and Left position in pixels.
            const initY = $(this).offset().top;
            // jquery height: height of the el
            const height = $(this).height();
            // end position of parallax
            const endY = initY + $(this).height();

            // check if the el is in the viewport
            const visible = isInViewport(this);
            if(visible){
                // console.log('yes throttle');
                const diff = scrolled - initY;
                const ratio = Math.round((diff/height)*100);
                $(this).css('background-position', 'center ' + parseInt(-(ratio*1.5))+'px');
            }
        });      
    }


    // JS throttle function
    function throttle(fn, wait){
        let time = Date.now();
        return function(){
            if((time + wait - Date.now()) < 0){
                fn();
                time = Date.now();
            }
        }
    }

    $(window).scroll(throttle(callback, 35));


});

