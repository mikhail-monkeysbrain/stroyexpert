function responseCarousel () {
    /*Выставляем высоту и отступ второго блока*/
    $('.sl-right-part').height($('.sl-left-part .owl-item.active img').height());
    $('.sl-right-part').css('margin-top', $('.sl-left-part .owl-item.active .sl-title').height());

    /*Выставляем ширину для пролистывания второй галереи*/
    workWidth = $('.sl-right-part .sl-container a').eq(0).width() * $('.sl-right-part .sl-container a').length;
    $('.sl-right-part .sl-container').width(workWidth);

    /*Выставляем ширину элементов галереи*/
    var boxWidth = $('.sl-right-part').width();
    $('.sl-right-part').find('a').each(function() {
        $(this).width(Math.round(boxWidth/3));
    })

    var maxWidth = workWidth - boxWidth;
    var boxOffset = $('.sl-right-part').offset();

    //console.log('shift');
    /*Устанавливаем начальное смещение*/
    var moveX = 0;
    $('.sl-right-part .sl-container').css('left', -moveX);

    $('.sl-right-part').mousemove(function(e){
        // положение элемента
        var pos = $(this).offset();
        var elem_left = pos.left;
        var elem_top = pos.top;
        // положение курсора внутри элемента
        var Xinner = e.pageX - elem_left;
        //var Yinner = e.pageY - elem_top;
        //console.log("X: " + Xinner + " Y: " + Yinner);

        /*Шпаргалка с пропорциями размеров и сдвигов*/
        //Xinner / boxWidth = moveX / maxWidth;

        moveX = Math.round((Xinner * maxWidth)/boxWidth);
        $('.sl-right-part .sl-container').css('left', -moveX);
    })
}

function activeEl () {
    var number = $('.sl-left-part').find('.owl-item.active > div').data('cnt');
    if(!$('.sl-right-part .sl-container a[data-pos='+number+']').hasClass('sl-act')) {
        $('.sl-right-part .sl-container a').removeClass('sl-act');
        $('.sl-right-part .sl-container a[data-pos='+number+']').addClass('sl-act');
    }
}

$(document)
    .on('ready', function () {
        var owl = $('.sl-left-part');
        owl.owlCarousel({
            items: 1,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'zoomIn',
            loop: true,
            nav: true,
            navRewind: false,
            autoHeight: true,
            navText: ["prev","next"],
            dots: false,
            callbacks: true,
        });
        $('.sl-left-part .owl-stage-outer').height($('.sl-left-part .owl-item.active').height());

        owl.on('changed.owl.carousel', function() {
            setTimeout(function () {
                activeEl ();
                /*Выставляем высоту и отступ второго блока*/
                $('.sl-right-part').height($('.sl-left-part .owl-item.active img').height());
                $('.sl-right-part').css('margin-top', $('.sl-left-part .owl-item.active .sl-title').height());

                /*Выставляем ширину для пролистывания второй галереи*/
                workWidth = $('.sl-right-part .sl-container a').eq(0).width() * $('.sl-right-part .sl-container a').length;
                $('.sl-right-part .sl-container').width(workWidth);

                /*Выставляем ширину элементов галереи*/
                var boxWidth = $('.sl-right-part').width();
                $('.sl-right-part').find('a').each(function() {
                    $(this).width(Math.round(boxWidth/3));
                })
            }, 100);
        });

        $('.sl-right-part a').on('click', function() {
            var position = $(this).data('pos');
            owl.trigger('to.owl.carousel', [position, 300, true]);
        });

        activeEl();
        responseCarousel();
    })
$(window)
    .on('load', function () {
        responseCarousel();
        $('.sl-left-part .owl-stage-outer').height($('.sl-left-part .owl-item.active').height());
    })
    .on('resize', function() {
        setTimeout(function () {
            responseCarousel();
        }, 100);
    })