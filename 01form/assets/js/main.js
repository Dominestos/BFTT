$(document).ready(function(){

    // var auto = $('#auto').val();
    // var model = document.querySelector("#model");

    var audi = $('#audi');
    var renault = $('#renault');
    var bmw = $('#bmw');
    var model = $('#model');

    $('#phone').mask("+375(99) 999-99-99");

    $('option[value="audi"]').click(function() {
        model.html('<option value="A4">A4</option><option value="A6">A6</option><option value="A7">A7</option><option value="Q3">Q3</option><option value="Q5">Q5</option><option value="TT">TT</option>');
    });

    $('option[value="renault"]').click(function() {
        model.html('<option value="Scenic">Scenic</option><option value="Duster">Duster</option><option value="Fluence">Fluence</option><option value="Megane">Megane</option><option value="Sandero">Sandero</option><option value="Logan">Logan</option>');
    });

    $('option[value="bmw"]').click(function() {
        model.html('<option value="1">1</option><option value="3">3</option><option value="5">5</option><option value="7">7</option><option value="X1">X1</option><option value="X3">X3</option><option value="X5">X5</option>');
    });
    $('option[value="default"]').click(function() {
        model.html('<option value="default" selected>Модель</option>');
    });

    $('form').on("submit", function(event) {

        event.preventDefault();

        let data = $('form').serialize();

        $.ajax({
            url: '/01form/action.php',
            method: 'post',
            dataType: 'html',
            data: data,
            success: function(data){
                
                alert(data);
            }
        })
    })
});

