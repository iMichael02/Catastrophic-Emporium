let thumbnails = document.getElementsByClassName("thumbnail");
let activeImages = document.getElementsByClassName("active");
for (var i=0; i < thumbnails.length; i++){
	thumbnails[i].addEventListener("click", function(){
		if (activeImages.length > 0){
			activeImages[0].classList.remove("active");
		}
		this.classList.add("active");
		document.getElementById("featured").src = this.src;
	})
}
let buttonRight = document.getElementById("slide-right");
let buttonLeft = document.getElementById("slide-left");
buttonLeft.addEventListener("click", function(){
    for (var i=0; i < thumbnails.length; i++) {
        if (thumbnails[i].className == "thumbnail active") {
            thumbnails[i].classList.remove("active");
            if (i > 0) {
                thumbnails[i-1].classList.add("active");
                document.getElementById("featured").src = thumbnails[i-1].src;
                break;
            } else {
                thumbnails[thumbnails.length-1].classList.add("active");
                document.getElementById("featured").src = thumbnails[thumbnails.length-1].src;
                break;
            }
        }
    }
});
buttonRight.addEventListener("click", function(){
	for (var i=0; i < thumbnails.length; i++) {
        if (thumbnails[i].className == "thumbnail active") {
            thumbnails[i].classList.remove("active");
            if (i < thumbnails.length - 1) {
                thumbnails[i+1].classList.add("active");
                document.getElementById("featured").src = thumbnails[i+1].src;
                break;
            } else {
                thumbnails[0].classList.add("active");
                document.getElementById("featured").src = thumbnails[0].src;
                break;
            }
        }
    }
});