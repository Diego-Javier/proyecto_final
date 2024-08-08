(function(){
    const titleQuestions = [...document.querySelectorAll('.titulo_preg')];
    console.log(titleQuestions)

    titleQuestions.forEach(question =>{
        question.addEventListener('click', ()=>{
            let height = 0;
            let answer = question.nextElementSibling;
            let addPadding = question.parentElement.parentElement;

            addPadding.classList.toggle('padding--add');

            question.children[0].classList.toggle('preguntas_flec--rotate');

            if(answer.clientHeight === 0)
            {
                height = answer.scrollHeight;
            }

            answer.style.height = `${height}px`;

        });
    });
})();