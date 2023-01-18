"use strict";
document.addEventListener("DOMContentLoaded", ()=>{
    var exp="";                                         //will contain the expression

    document.addEventListener("click", (e)=>{           //if any button is pressed, update the content
        if(e.target.classList.contains("button"))
        {
            if(e.target.classList.contains("all-clear"))
            {
                exp="";
                document.getElementsByClassName("result-area")[0].innerText = "";
                document.getElementsByClassName("input-area")[0].innerText = "";
            }

            if(e.target.classList.contains("clear"))
            {
                exp = exp.slice(0, -1);
                document.getElementsByClassName("input-area")[0].innerText = exp;
            }

            if(e.target.classList.contains("equal")) //end expression and show result
                {
                    exp = math.evaluate(exp);            //evalute previous expression
                    document.getElementsByClassName("result-area")[0].innerText = exp;
                }

            if(e.target.classList.contains("operator"))
            {
                exp = math.evaluate(exp);               //evalute previous expression
            }
            
            exp = exp + e.target.value;                 //add operator/operand to the expression
            document.getElementsByClassName("input-area")[0].innerText = exp;
        }
    });
    
});
