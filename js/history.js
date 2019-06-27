$(document).ready(function(){

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
	// new WOW({
	// 	mobile: false,
	// 	offset: 50
    // }).init();  


});

