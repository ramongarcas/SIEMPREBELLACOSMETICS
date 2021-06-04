var btnEmail = document.querySelector('#btn-email');
var counter = 0;
btnEmail.addEventListener('click', sendEmail);

function sendEmail(){

    
    if(counter == 0){
        document.getElementById('cal').style.visibility = "hidden";
        counter ++;
        console.log(counter);
    }else if(counter == 1) {
        document.getElementById('cal').style.visibility = "visible";
        counter --;
        console.log(counter);
    }
    
}