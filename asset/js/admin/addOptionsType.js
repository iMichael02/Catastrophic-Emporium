const typeContainer = document.getElementById('add-type');
const typeButton = document.getElementById('add-type-button');
var i = 1;
if (typeButton != null) {
    typeButton.addEventListener('click', function(e) {
        const el = document.createElement('div');
        el.innerHTML = 
        `<select name="type[`+ i + `]" placeholder="Pick a type...">
            <option value="">Select a type...</option>
            <option value="t_shirt">T-Shirt</option>
            <option value="sweatshirt">Sweatshirt</option>
            <option value="hoodie">Hoodie</option>
            <option value="shorts">Shorts</option>
            <option value="pants">Pants</option>
            <option value="shoes">Shoes</option>
            <option value="sweatshirt">Sweatshirt</option>
            <option value="hat">Hat</option>
            <option value="tank_top">Tank-Top</option>
            <option value="mask">Mask</option>
            <option value="necklace">Necklace</option>
            <option value="ring">Ring</option>
            <option value="bracelet">Bracelet</option>
            <option value="earring">Earring</option>
            <option value="nose_ring">Nose Ring</option>
            <option value="figure">Figure</option>
            <option value="guitar_pick">Guitar Pick</option>
            <option value="patch">Patch</option>
            <option value="banner">Banner</option>
            <option value="picture_frame">Picture Frame</option>
            <option value="other">Other</option>
        </select>`;
        typeContainer.appendChild(el);
        $('select').selectize({
            sortField: 'text'
        });
        i++;
    });
}
