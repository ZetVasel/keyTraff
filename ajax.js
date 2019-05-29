$(function () {

        $('tr').hover(function () {
            $(this).addClass('info');
        },function () {
            $(this).removeClass('info');
        });


        $('#first').on('click',function () {
                $.ajax({
                    url:"index2.php",
                    type:"POST",
                    data:{type:1},
                    success:function (data) {
                        doContent(data);
                    }
                });
        });
        $('#second').on('click',function () {
                $.ajax({
                    url:"index2.php",
                    type:"POST",
                    data:{type:2},
                    success:function (data) {
                        doContent(data);
                    }
                });
        });

});


function doContent(data) {
        if(data=='')
        {
            $('#result').html('<h1>Нет данных по вашему запросу</h1>');
        }
        else
        {
            $('#result').html(data);
        }
}