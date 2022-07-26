

document.getElementById("btn-tog").addEventListener("click", function(){

    var div1 = document.getElementById("div1");
    var div2 = document.getElementById("div2");

    if(div1.style.display == "block"){
        div1.style.display = "none";
        div2.style.display = "block";
    }
    else{
        
        div1.style.display = "block";
        div2.style.display = "none";
    }
})



// document.getElementById("btn-submit").addEventListener("click", function(){

//     var div1 = document.getElementById("div1");
//     var div2 = document.getElementById("div2");

//     if(div1.style.display == "block"){
//         div1.style.display = "none";
//         div2.style.display = "block";
//     }
//     else{
        
//         div1.style.display = "block";
//         div2.style.display = "none";
//     }


// })

function myFunction(){
    if(div1.style.display == "block"){
        div1.style.display = "none";
        div2.style.display = "block";
    }
    else{
        
        div1.style.display = "block";
        div2.style.display = "none";
    }
}
