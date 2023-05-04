window.onload = function() {
    var img = document.getElementById("thumbnail-pic");
    var container = document.getElementById("thumbnail");
    var title = document.getElementById("post-title");
    if (img.offsetHeight > 500) {
        img.style.clipPath = "inset(0 0 " + (img.offsetHeight - 500) + "px 0";
        container.style.height = "500px";
        title.style.transform = "translateY(-" + (img.offsetHeight - 497 + title.offsetHeight) + "px)";
    }
};