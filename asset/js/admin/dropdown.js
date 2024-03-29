var products = document.querySelector(".side-bar-item.products");
var productDropdown = document.querySelector(".side-bar-dropdown.products");
products.addEventListener("click", function(e) {
    this.classList.toggle("active");
    productDropdown.classList.toggle("active");
});
products.addEventListener("blur", function(e) {
    this.classList.remove("active");
});

var bands = document.querySelector(".side-bar-item.bands");
var bandDropdown = document.querySelector(".side-bar-dropdown.bands");
bands.addEventListener("click", function(e) {
    this.classList.toggle("active");
    bandDropdown.classList.toggle("active");
});
bands.addEventListener("blur", function(e) {
    this.classList.remove("active");
});

var blogs = document.querySelector(".side-bar-item.blogs");
var blogDropdown = document.querySelector(".side-bar-dropdown.blogs");
blogs.addEventListener("click", function(e) {
    this.classList.toggle("active");
    blogDropdown.classList.toggle("active");
});
blogs.addEventListener("blur", function(e) {
    this.classList.remove("active");
});

var mails = document.querySelector(".dropbtn.mails");
var mailsContent = document.querySelector(".dropdown-content.mails");
mails.addEventListener("click", function(e) {
    mailsContent.classList.toggle("active");
});
mails.addEventListener("blur", function(e) {
    mailsContent.classList.remove("active");
});

var notif = document.querySelector(".dropbtn.notifications");
var notifContent = document.querySelector(".dropdown-content.notifications");
notif.addEventListener("click", function(e) {
    notifContent.classList.toggle("active");
});
notif.addEventListener("blur", function(e) {
    notifContent.classList.remove("active");
});

var admin = document.querySelector(".dropbtn.admin");
var adminContent = document.querySelector(".dropdown-content.admin");
admin.addEventListener("click", function(e) {
    adminContent.classList.toggle("active");
});
admin.addEventListener("blur", function(e) {
    adminContent.classList.remove("active");
});