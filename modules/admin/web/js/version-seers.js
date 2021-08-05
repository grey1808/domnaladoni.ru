$(document).ready(function(){



    // if($.cookie('sv_on') == 'true'){
    //     $.cookie('sv_on', 'true');
    //     $('#sv_settings').css('display','block');
    // }else {
    //     $('#sv_settings').css('display','none');
    // }
    //
    // $('#sv_on').click(
    //     function(){
    //         if ($.cookie('sv_on')!='true'){
    //             $.cookie('sv_on', 'true');
    //
    //             $('#sv_settings').css('display','block');
    //         }
    //         else
    //         {
    //             $.cookie('sv_on', 'false');
    //             $('#sv_settings').css('display','none');
    //         }
    //     }
    // );
    //
    //
    // $('.fs-outer button').click(function(){
    //     $.cookie('font-size',$(this).attr('id'));
    //     $(this).addClass("active");
    //
    // });



































// sv_settings
   var selector='section, #content, #content *, .navbar, .navbar *, .nav, .nav*, .container,  .container *, body';






    $('.fs-outer button').click(function(){
        $(selector).css('font-size',$(this).css('font-size'));
        $.cookie('font-size',$(this).attr('id'));
        $('.fs-outer button').removeClass('active');
        $(this).addClass("active");

    });

    $('.cs-outer button').click(function(){
        $(selector).css('color',$(this).css('color'));
        $(selector).css('background-color',$(this).css('background-color'));
        $.cookie('cs',$(this).attr('id'));
        $('.cs-outer button').removeClass('active');
        $(this).addClass("active");

    });

    $('.img-outer button').click(function(){
        if ($.cookie('img')!='on'){
            $('img').css('opacity','0');
            $.cookie('img','on');
            $('#img-onoff-text').text(' Включить');
            $(this).addClass("active");
        } else
        {
            $('img').css('opacity','1');
            $.cookie('img','off');
            $('#img-onoff-text').text(' Выключить');
            $(this).removeClass("active");
        }
    });

    if ($.cookie('sv_on')=='true'){
        $('#sv_on').addClass('active').text(" Обычная версия").prepend("<img src='/web/img/eye.png'>");

        $('#seers').css('display','block');
        if ($.cookie('font-size')!==null){
            $('#'+$.cookie('font-size')).click();
        }
        if ($.cookie('cs')!==null){
            $('#'+$.cookie('cs')).click();
        }

    }


    $('#sv_on').click(
        function(){
            if ($.cookie('sv_on')!='true'){
                $.cookie('sv_on', 'true');
                if ($.cookie('font-size')=="null"){
                    $('.fs-n').click();
                }
                if ($.cookie('cs')=="null"){
                    $('.cs-bw').click();
                }
            }
            else
            {
                $.cookie('sv_on', 'false');
            }
            location.reload();
        }
    );
    $('#off').click(function(){

            $.cookie('cs', null);
            $.cookie('img', null);
            $.cookie('font-size', null);
            location.reload();
        }
    );

});