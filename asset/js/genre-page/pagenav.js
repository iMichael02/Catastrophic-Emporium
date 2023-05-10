var pagenav = document.getElementsByClassName("page-nav-item");
var colorPrimaryRed = "#570000";
var colorPrimaryLightGrey = "#dedede";
var colorWhite = "#ffffff";
var colorPrimaryBlack = "#111111";
var page = "page";
function pageChange(elmnt) {
    for (var i = 0; i < pagenav.length; i++) {
        pageNum = page + (i + 1);
        if (elmnt.id === pagenav[i].id) {
            elmnt.style.backgroundColor = colorPrimaryRed;
            elmnt.style.color = colorWhite;
            document.getElementById(pageNum).style.display = "grid";
        }
        else {
            pagenav[i].style.backgroundColor = colorPrimaryLightGrey;
            pagenav[i].style.color = colorPrimaryBlack;
            document.getElementById(pageNum).style.display = "none";
        }
    }
}