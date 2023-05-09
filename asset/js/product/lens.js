const lens = document.getElementById("lens");
const imageContainer = document.getElementById("product-image");
const img = document.getElementById("featured");

imageContainer.addEventListener("mouseenter", function() {
	lens.style.display = "block";
    imageZoom(3);
});
imageContainer.addEventListener("mouseleave", function() {
	lens.style.display = "none";
});

function imageZoom(ratio) {
	const imgWidth = img.width;
	const imgHeight = img.height;
	const halfLensWidth = lens.offsetWidth / 2;
	const halfLensHeight = lens.offsetHeight / 2;

	lens.style.backgroundImage = `url(${img.src})`;
	lens.style.backgroundSize = `${imgWidth * ratio}px ${imgHeight * ratio}px`;

	img.addEventListener("mousemove", moveLens);
	lens.addEventListener("mousemove", moveLens);

	function moveLens() {
		const pos = getCursor();
		let cursorX = pos.x;
		let cursorY = pos.y;

		if (cursorX < halfLensWidth / ratio) {
			cursorX = halfLensWidth / ratio;
		}

		if (cursorX > imgWidth - halfLensWidth / ratio) {
			cursorX = imgHeight - halfLensWidth / ratio;
		}

		if (cursorY < halfLensHeight / ratio) {
			cursorY = halfLensHeight / ratio;
		}

		if (cursorY > imgHeight - halfLensHeight / ratio) {
			cursorY = imgHeight - halfLensHeight / ratio;
		}

		lens.style.left = cursorX - halfLensWidth + "px";
		lens.style.top = cursorY - halfLensHeight + "px";

		lens.style.backgroundPosition = `-${cursorX * ratio - halfLensWidth}px -${cursorY * ratio - halfLensHeight}px`;
	}

	function getCursor() {
        let e = window.event;
        let bounds = img.getBoundingClientRect();

        let x = e.pageX - bounds.left;
		let y = e.pageY - bounds.top;
		x = x - window.pageXOffset;
		y = y - window.pageYOffset;
		
		return {x, y};
	}

}
