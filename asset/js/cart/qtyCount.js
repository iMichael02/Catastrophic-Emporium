var item = document.getElementsByClassName("item");
function increaseCount(elmnt) {
    var input = elmnt.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
    for (var i = 0; i < item.length; i++) {
        if (item[i].isEqualNode(elmnt.parentElement.parentElement.parentElement)) {
            calTotalPrice(i);
        }
    }
}
function decreaseCount(elmnt) {
    var input = elmnt.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
    for (var i = 0; i < item.length; i++) {
        if (item[i].isEqualNode(elmnt.parentElement.parentElement.parentElement)) {
            calTotalPrice(i);
        }
    }
}
function calTotalPrice(index) {
    var price = item[index].children[3].innerHTML.replace(".", "");
    price = price.replace(" VND", "");
    price = price.replace("<p>", "");
    price = price.replace("</p>", "");
    var totalPrice = "" + (parseInt(item[index].children[4].children[0].children[1].value) * parseInt(price));
    totalPrice = totalPrice.slice(0, totalPrice.length-3) + "." + totalPrice.slice(3) + " VND";
    item[index].children[5].innerHTML = totalPrice;
}
for (var i = 0; i < item.length; i++) {
    var price = item[i].children[3].innerHTML.replace(".", "");
    price = price.replace(" VND", "");
    price = price.replace("<p>", "");
    price = price.replace("</p>", "");
    var totalPrice = "" + (parseInt(item[i].children[4].children[0].children[1].value) * parseInt(price));
    totalPrice = totalPrice.slice(0, totalPrice.length-3) + "." + totalPrice.slice(3) + " VND";
    item[i].children[5].innerHTML = totalPrice;
}