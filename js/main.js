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
                scrollTop: $(hash).offset().top
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
        // jquery each: fun function for each matched el
        $('.imgContainer').each(function(index, el){
            // check if the el is in the viewport
            const visible = isInViewport(this);
            
            if(visible){
              $(this).find('div').css('opacity', '1');
              console.log('this: ', this);
            }
            else{
              $(this).find('div').css('opacity', '0');
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

    // end parallax=================================================
    
    // change image when hover on category button
    $('.categoryButton').on('mouseover', function(){
        console.log('hover');
        const imgFile = $(this).attr('data-image');
        $('#menuSectionImage').attr('src', imgFile);
    });

    // open instagram link when click on thumbnail
    $('.insta').on('click', function(){
        const url = $(this).attr('data-link');
        window.open(url);
    })


});

