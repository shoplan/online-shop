
// добавляем прослужку
window.addEventListener('click', function(event){

  let counter;

  // проверка клика сторого кнопка - и +
  if(event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus'){

      // находим обертку счетчика
      const counterWrapper = event.target.closest('.counter-wrapper'); 
// находим див с числом
       counter = counterWrapper.querySelector('[data-counter]');

  }

  if(event.target.dataset.action === 'plus'){
      counter.innerText = ++counter.innerText;
    }

    if(event.target.dataset.action === 'minus'){
    // провека счетчика >1
    if(parseInt(counter.innerText) > 1){    
      //изменняем текст счетчика уменшая его
      counter.innerText = --counter.innerText;

    } else if(event.target.closest('.cart-wrapper') && parseInt(counter.innerText) === 1){
      console.log('in cart');
      // удаляем товар из корзины
      event.target.closest('.cart-item').remove();

      toggleCartStatus();

      calCartPriceAndDelivery();

    }

  }

     if(event.target.hasAttribute('data-action') && event.target.closest('.cart-wrapper')){
      calCartPriceAndDelivery();
     }

});                                               