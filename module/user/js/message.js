$(function() {
  $("#selectAll").click(
    function(){
        if(this.checked){
            $("input[name='messages[]']").each(function(){this.checked=true;});
        }
        else{
            $("input[name='messages[]']").each(function(){this.checked=false;});
        }
    });
});
