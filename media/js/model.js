$(function () {
    var fx = {
        'initModel': function () {
            if ($('.model-window').length == 0) {
                $('<div>').attr('id', 'jquery-overlay').fadeIn('slow').appendTo('body');
                return $('<div>').addClass('model-window').fadeIn('slow').appendTo('body');

            } else {
                return $('.model-window');
            }
        }
    }
    $('.sm_pic').bind('click', function (e) {
        e.preventDefault()
        data_id = $(this).attr('data_id'); //this - обращение к первому вводному параметру - клик
        //console.log(data_id);
        model = fx.initModel();
        $('<a>').attr('href', '#').addClass('model-close-btn').html('&times;').click(function (event) {
            event.preventDefault();
            $('.model-window').fadeOut('slow', function () {
                $('.model-window').remove();
            });

            $('#jquery-overlay').fadeOut('slow', function () {
                $('#jquery-overlay').remove();
            });
        }).appendTo(model);
        $.ajax({ //привязываемся ко всей странице через $.
            url: 'ajax.php',
            type: 'POST',
            data: 'id=' + data_id,
            success: function (msg) { //в msg передаются данные из ajax.php
                model.append(msg);

            },
            //beforeSend: function(){} в этой функции определяется действие в браузере пока клиенту че то грузится (часимки там и всякая хрень)
        });
    });
});


//$('.model-window').remove();
//
//$('.model-window').fadeOut('slow', function(){
//    $('.model-window').remove();
//});
//
//$('.jquery-overlay').fadeOut('slow', function(){
//    $('#jquery-overlay').remove();
//});