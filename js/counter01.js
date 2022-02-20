// эдементы на старице
const btnMinus = document.querySelector('[data-action="minus"]');
const btnPlus = document.querySelector('[data-action="plus"]');
const counter = document.querySelector('[data-counter]');


// Отслеживание кнопок
btnMinus.addEventListener('click', function(){
  console.log('Minus click');

  // провека счетчика >1
    if(parseInt(counter.innerText) > 1){
        
        //изменняем текст счетчика уменшая его
        counter.innerText = --counter.innerText;
    } 
});

btnPlus.addEventListener('click', function(){
    console.log('Plus click');
    counter.innerText = ++counter.innerText;
  });

