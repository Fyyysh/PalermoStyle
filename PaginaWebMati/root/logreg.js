function pass(){
    var x=document.getElementById("inputss");
    let y=document.getElementById("pass-icon");
    if(x.type=="password"){
        x.type="text"
        y.src="./img/login_register/bx-show.svg"
    }
    else{
        x.type="password";
        y.src="./img/login_register/bx-hide.svg"
    }
}

function pass2(){
    var a=document.getElementById("inputss2");
    let b=document.getElementById("pass-icon2");
    if(a.type=="password"){
        a.type="text"
        b.src="./img/login_register/bx-show.svg"
    }
    else{
        a.type="password";
        b.src="./img/login_register/bx-hide.svg"
    }
}