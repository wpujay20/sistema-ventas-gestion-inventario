
function hablitar(){
    // direc = $('#direc').val();
    // refe = $('#refe').val();
    // distrito = $('#distrito').val();
    direc= document.getElementById('direc').value;
    refe= document.getElementById('refe').value;
    distrito= document.getElementById('distrito').value;


    val = 0;
      if( direc  ==""){
        val++;
    }
    if( refe  ==""){
        val++;
    }
    if( distrito  == ""){
        val++;
    }

    if(val==0){
        document.getElementById('btn').disabled=false;

    }else{
        document.getElementById('btn').disabled=true;

    }
}
document.getElementById('refe').addEventListener("keyup", hablitar);
document.getElementById('distrito').addEventListener("change", hablitar);
document.getElementById('direc').addEventListener("keyup", hablitar);


// document.getElementById('direc').addEventListener("keyup", hablitar);
// document.getElementById('refe').addEventListener("keyup", hablitar);
// document.getElementById('distrito').addEventListener("change", hablitar);

$(document).ready(function(){
    $('#btn').click(function(){
        $.ajaxSetup({
        url:'miJqueryAjax',
        data:{'name':"luis"},
        type:'post',
        success: function (response) {
                    alert(response);
        },
        statusCode: {
        404: function() {
                alert('web not found');
        }
        },
        error:function(x,xs,xt){
              //nos dara el error si es que hay alguno
            window.open(JSON.stringify(x));
              //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
        },

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });

});
