$(document).ready(function(){
    $(".xem").on('click',function(){     
       var mssv = this.value;
       $('.changeContent').toggle(); 
       $.post("display_admin.php",{mssv:mssv},function(data){
        $(".receive").html(data);
       })
        })
})


