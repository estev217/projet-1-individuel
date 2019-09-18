
function changePlace() {
    document.getElementById('formbutton').style.transform = "translate(850px, 0px)";
}

function hiddenMenu(){
    var x = document.getElementById("mobile_menu"); 
    console.log('ok')
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    hiddenMenu();