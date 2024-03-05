<script src="jquery.js"></script>
<script type="text/javascript">
function submitProduct(action){
    $(document).ready(function(){
        var data = {
            action:action,
            id:$("#id").val(),
            product_name:$("#product_name").val(),
            weight:$("#weight").val(),
            certification:$("#certification").val(),
            price:$("#price").val(),
            int_date:$("#int_date").val(),
            exp_date:$("#exp_date").val()
        };
        $.ajax({
            url:'function.php',
            type:"post",
            data:data,
            success:function(response){
                console.log(response)
                if(response=="DELETED SUCCESSFULLY"){
                    $("#"+action).css("display","none")
                }
            }
        })
    })
}
// $.ajax({
//     url:"function.php",
//     type:"post",
//     data:data,
//     success:function(response){
//         alert(response)
//     }
// })

</script>