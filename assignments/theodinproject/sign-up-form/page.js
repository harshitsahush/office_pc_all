addEventListener("DOMContentLoaded", ()=>{

    document.addEventListener("input", ()=>{
        if(document.getElementById("pass").value != "") {
            if(document.getElementById("pass").value != document.getElementById("pass2").value){
                document.getElementById("not_match_msg").innerText = "Passwords do not match."
            }
            else{
                document.getElementById("not_match_msg").innerText = "";
            }
        }
    })

});