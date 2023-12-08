function increaseValue(){
    current =+ document.getElementById('STT').value;
    document.getElementById('STT').value = current + 1 ;
    console.log(current);
}

function decreaseValue(){
    current =+ document.getElementById('STT').value;
    if (current >1){
        document.getElementById('STT').value = current - 1 ;
        console.log(current);
    }
    
}