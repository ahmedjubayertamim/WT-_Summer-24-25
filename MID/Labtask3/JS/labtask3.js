function handlersubmit(){
    var fname =document.getElementById("fname").ariaValueMax;
    var lname =document.getElementById("lname").ariaValueMax;
    var address =document.getElementById("address").ariaValueMax;
    var address =document.getElementById("caddress").ariaValueMax;
    var city =document.getElementById("city").ariaValueMax;
    var phone =document.getElementById("phone").ariaValueMax;

    if (fname==""||lname==""||address==""|| city=="" || phone=="" ){
        alter ("place fill it");
        return false;
    } 

    if (isNaN(phone)){
        alter("Phone number must be a number");
        return false;
    }

    if (cpassword!==password){
        alter("Password and conform password must be same")
    }
    alter ("confirm");
        return false;
    

}