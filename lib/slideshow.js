let elementen = document.getElementsByClassName('home-slideshow');
let a = 0;

elementen[0].style.display = "block";
function showText(){
    if (a > 0){
        let prev = a-1;
        elementen[prev].style.display = "none";
    }
    if (a == 3){
        a = 0;
    }
    elementen[a].style.display = "block";
    a++;
}

// Slideshow maken die elke 3000 miliseconden wisselt
setInterval(showText, 5000);

console.log("hoi");

//Hamburger menu
function myDropdownfunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}


var modal = document.getElementById("modal");

//MODAL AAN/UIT
function modalAan(){
    var modal = document.getElementById("modal");
    modal.showModal();
}

function modelUit(){
    var modal = document.getElementById("modal");
    modal.close();
}


