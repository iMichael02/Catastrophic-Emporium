var pagenav = document.getElementsByClassName("page-nav-item");
var elements = document.getElementsByClassName("blog");
var colorPrimaryRed = "#570000";
var colorPrimaryLightGrey = "#dedede";
var colorWhite = "#ffffff";
var colorPrimaryBlack = "#111111";
window.onload = function() {
    for (var i = 6; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
}
function pageChange(elmnt) {
    for (var i = 0; i < pagenav.length; i++) {
        if (elmnt.id === pagenav[i].id) {
            elmnt.style.backgroundColor = colorPrimaryRed;
            elmnt.style.color = colorWhite;
            switch(i) {
                case 0:
                    for (var j = 0; j < 6; j++) {
                        elements[j].style.display = "block";
                    }
                    for (var j = 6; j < elements.length; j++) {
                        elements[j].style.display = "none";
                    }
                    break;
                case 1:
                    for (var j = 0; j < 6; j++) {
                        elements[j].style.display = "none";
                    }
                    for (var j = 6; j < 12; j++) {
                        elements[j].style.display = "block";
                    }
                    for (var j = 12; j < 18; j++) {
                        elements[j].style.display = "none";
                    }
                    break;
                case 2:
                    for (var j = 0; j < 12; j++) {
                        elements[j].style.display = "none";
                    }
                    for (var j = 12; j < 18; j++) {
                        elements[j].style.display = "block";
                    }
                    break;
            }
        }
        else {
            pagenav[i].style.backgroundColor = colorPrimaryLightGrey;
            pagenav[i].style.color = colorPrimaryBlack;
        }
    }
}