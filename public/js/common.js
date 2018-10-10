$(document).ready(function(){
    var count = 0;

    //ADD btn
    $('.addbutton').click(function() {

        $( ".addInput" ).append( "<div class='col'>"+"<input name='select3"+count+"[]' type='text' class='form-control' id='value"+count+"' placeholder='Value'>"+"</div>");
        count++;
        console.log(count);
    });

//DEL btn
    $('.delbutton').click(function() {
        $( ".addInput" ).detach();

    });

    $('.clearbutton').click(function() {

//возможно в задании вы имели ввиду добавление правила как добавление всей строки, но понял я это уже поздно

    });

    //Apply BTN
    $("#apply").click(function (e) {
        e.preventDefault();

        $.ajax({
           type: "POST",
           url: "gitSearch.php",
           data: $('form').serialize(),

             success: function(result){
                console.log(result);
             },

        });
    });
});