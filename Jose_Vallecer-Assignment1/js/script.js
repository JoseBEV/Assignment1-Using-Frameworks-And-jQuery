 $(window).scroll(function() {
    $('video').each(function(){
        if ($(this).is(":in-viewport")) {
            $(this)[0].play();
        } else {
            $(this)[0].pause();
        }
    })
});

function playclip(){
     var audio = document.getElementsByClassName("redemption")[0];
              audio.play();

            }
 $(function() {
        $('.portrait').on('click',function(){
        if(!$(this).hasClass('.played')){
        playclip();
        $(this).addClass('.played');
        }
        });

        $('.h5').on('mouseenter',function(){
        if(!$(this).hasClass('.played')){
        playclip();
        $(this).addClass('.played');
        }
        });


        $('.portrait','.h5').on('mouseleave',function(){
        if($(this).hasClass('.played')){
        $(this).removeClass('.played');
        }
        });
        });

function playclip2(){
     var audio2 = document.getElementsByClassName("dispense")[0];
              audio2.play();

            }
 $(function() {
        $('.portrait-2').on('click',function(){
        if(!$(this).hasClass('.played2')){
        playclip2();
        $(this).addClass('.played2');
        }
        });

        $('.h5-2').on('mouseenter',function(){
        if(!$(this).hasClass('.played2')){
        playclip2();
        $(this).addClass('.played2');
        }
        });


        $('.portrait-2','.h5-2').on('mouseleave',function(){
        if($(this).hasClass('.played2')){
        $(this).removeClass('.played2');
        }
        });
        });







