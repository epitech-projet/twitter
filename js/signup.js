$("form").submit(function(event){
    $("#rien").html("");
        event.preventDefault();
        $.ajax({
            url : '../controller/envoie.php',
            type : 'POST', 
            dataType : 'json',
            data : $(this).serialize(),
            success : function (data) {
                $.each(data, function(key, value){
                    $("#rien").append(key + " " + value +"<br>");

                })
               
            }
        });

});
