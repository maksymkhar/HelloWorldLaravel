/**
 * Created by max on 20/10/15.
 */

function hello()
{
    console.log("HOLA!");
}

function bye()
{
    console.log("ADEU!");}

function helloButton()
{
    alert("HOLA HOLA!!");
}

function byeButton()
{
    alert("ADIÓS!");
}



$(function () {

    $('#sayhello').click( function() {

            $('#helloworld').show();
        }
    );
});

