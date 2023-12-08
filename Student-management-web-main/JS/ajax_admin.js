$(document).ready(function(){
    $(".btn").click(function(){
        var stt = $("#STT").val();
        $.post("send_admin.php",{thuTu:stt},function(data){
           $(".receive").html(data);
           
        })
    })
})

$(document).ready(function(){
    $(".search_input").change(function(){
        var key = $(".search_input").val();
        console.log('Tiến hành tiềm kiếm ' + key)
        $.post("search_result.php",{key:key},function(data){
        $(".search_result").html(data); 
        })
    })
})

$(document).ready(function(){
    $(".displayadd").click(function(){
        var action ='add';
        $(".changeContent").toggle();
        $.get("add_st.php",function(data){
            $(".receive").html(data)
        })
    })
})
