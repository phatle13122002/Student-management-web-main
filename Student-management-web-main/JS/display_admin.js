$(document).ready(function(){
    $(".exit").on('click',function(){     
        $('.changeContent').toggle(); 
        var stt = $("#STT").val();
        $.post("send_admin.php",{thuTu:stt},function(data){
        $(".receive").html(data);
        })
        })
})

$(document).ready(function(){
    $(".delete").on('click',function(){
        if (confirm("Bạn chắc muốn xóa")){
            var action = 'delete';
            $.post("update.php",{action:action},alert("Đã xóa xong"))
        }
        else console.log('Hủy thao tác xóa');
        
    })
})

$(document).ready(function(){
    $(".add").on('click',function(){
        var lop = $(".lop").val();
        var birth = $(".birth").val();
        var id = $(".studentID").val();
        var cmnd = $(".id-card").val();
        var ho = $('.ho').val();
        var ten = $(".ten").val();
        var khoa = $(".khoa").val();
        var phai = $(".phai").val();
        var nganh = $(".nganh").val();
        var action = "add";
        if (lop >=12001 && lop <= 12012 && id.length >5 && ho.length >3 && ten.length >5)
        {
        if (confirm("Bạn xác nhận muốn cập nhật thông tin này?"))
        {
            
            $.post('add_db.php',{action:action,masv:id,cmnd:cmnd,birth:birth,ho:ho,ten:ten,khoa:khoa,phai:phai,lop:lop}
            ,function(data){
                $(".search_result").html(data);
            });
        
        }
        else console.log('hủy thêm học sinh');
    }
        else {
        alert('Chỉ có mã lớp từ 12001 đến 12012. Các thông tin khác không được bỏ trống')
        }
    })

})

$(document).ready(function(){
    $(".update").on('click',function(){  
        if($('.disabled').is(':disabled')){
            $(".disabled").removeAttr('disabled');
       }
        else 
        {   
            var lop = $(".lop").val();
            if (lop >=12001 && lop <= 12012)
            {
                $(".disabled").attr('disabled','disabled');
            if (confirm("Bạn xác nhận muốn cập nhật thông tin này?"))
            {
                var ho = $('.ho').val();
                var ten = $(".ten").val();
                var khoa = $(".khoa").val();
                var phai = $(".phai").val();
                var nganh = $(".nganh").val();
                var action = "update";
                console.log('Thực hiện updata mysql' + ho + ten + phai + khoa + nganh + lop);
                $.post('update.php',{action:action,ho:ho,ten:ten,khoa:khoa,phai:phai,lop:lop},console.log('Đã gửi thông tin qua trang updata.php'));
            
            }
            else console.log('hủy tác vụ');
        }
            else {

            alert('Chỉ có mã lớp từ 12001 đến 12012')
            }
            
        }
        })
})




function disabled(){
    var elements = document.getElementsByClassName('disabled');
    for (let i=0;i<=elements.length;i++)
    {
        elements[i].disabled =true;
    }
}

