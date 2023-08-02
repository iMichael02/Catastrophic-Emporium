const questionContainer = document.getElementById('add-question');
const questionButton = document.getElementById('add-question-button');
if (questionButton != null) {
    questionButton.addEventListener('click', function(e) {
        const el = document.createElement('div');
        if (k <= 4) {
            el.innerHTML = `<input type="text" name="question[` + k + `]"><br>`;
            questionContainer.appendChild(el);
            console.log(k);
            k++;
        }
    });
}