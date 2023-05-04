function showBlog() {
    var x = document.getElementById("blogs-content");
    x.style.display = "flex";
    var y = document.getElementById("achievements-content");
    y.style.display = "none";
}
function showAchievement() {
    var x = document.getElementById("blogs-content");
    x.style.display = "none";
    var y = document.getElementById("achievements-content");
    y.style.display = "flex";
}