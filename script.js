// Feedback

const btn = document.querySelector('.telephone'),
      feedback = document.querySelector('.feedback'),
      ex = document.querySelector('.modal__close');
      let pos = 0;

function openAnimation () {
    pos+=10;
    feedback.style.bottom = pos + 'px';

    if (pos < 10) {
        requestAnimationFrame(openAnimation);
    }
 
    btn.style.display = 'none';
}

function closeAnimation () {
    pos-=10;
    feedback.style.bottom = pos + 'px';
    if(pos > -500){
        requestAnimationFrame(closeAnimation);
    }else{
        btn.style.display = '';
    }
   
}

btn.addEventListener('click', () => requestAnimationFrame(openAnimation));
ex.addEventListener('click', () => requestAnimationFrame(closeAnimation));


