function pasMatch(){
    let pass1 = document.getElementsByName("password")[0].value;
    let pass2 = document.getElementsByName("passwordRep")[0].value;
    let badgDiv = document.getElementById("passBadgSpan");

    if (pass1.length > 0 && pass2.length>0) {
        if (pass1===pass2){
            badgDiv.setAttribute("hidden","");
            return true;
        }else{
            badgDiv.removeAttribute("hidden");
            return false;
        }

    }else{
        badgDiv.setAttribute("hidden","");
        return false;
    };
}

function validationPassRep(){
    let pass1 = document.getElementsByName("password")[0].value;
    let pass2 = document.getElementsByName("passwordRep")[0].value;
    let badgDiv = document.getElementById("passBadgSpan");

    if (pass1.length > 0 && pass2.length>0) {
        if (pass1===pass2){
            return true;
        }else{
            alert('De ingevulde wachtwoorden zijn niet gelijk');
            return false;
        }

    }else{
        badgDiv.setAttribute("hidden","");
        alert('Vull de alle velden in');
    };
}

function confirmation(){
    a =  confirm("Weet u zeker dat u uw account wilt verwijderen?");
    return a;
}