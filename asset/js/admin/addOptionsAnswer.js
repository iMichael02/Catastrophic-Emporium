const answerContainer = document.getElementById('add-answer');
const answerButton = document.getElementById('add-answer-button');
var l = 1;
if (answerButton != null) {
    answerButton.addEventListener('click', function(e) {
        const el = document.createElement('div');
        if (l < 4) {
            el.innerHTML = `<input type="text" name="answer[` + l + `]"><br>`;
            answerContainer.appendChild(el);
            l++;
        }
    });
}