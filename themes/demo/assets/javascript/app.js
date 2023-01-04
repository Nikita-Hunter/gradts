const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    autoResize: false,
    navigation: {
        nextEl: '.swiper-main-next',
        prevEl: '.swiper-main-prev',
      },
      autoplay: {
        delay: 3000,
      },
  });

//loader

let mask = document.querySelector('.loader-mask');
window.addEventListener('load', () => {
  mask.classList.add('loader-mask--hide');
})
//phone

var number  = document.querySelectorAll('.my-number');
for(x = 0; x < number.length; x++){
  var textNumber = number[x].getAttribute('data-number');
  if(textNumber.length == 12){
    textNumber = textNumber.replace(/\D+/g, '');
    textNumber = '+' + textNumber.substr(0, 1) + ' (' + textNumber.substr(1, 3)+ ') ' + textNumber.substr(4, 3) + '-' + textNumber.substr(7, 2) + '-' + textNumber.substr(9, 2);
    number[x].innerHTML = textNumber;
  }else{
    console.log('Не верный формат моб.телефона')
  }
}
// let namePeople = document.querySelectorAll('.people-name');
// for(let i = 0; i < namePeople.length; i++){
// let bigName = namePeople[i].getAttribute('data-name');
// let smallName = bigName.split(' ');
// let nameResult = smallName[0] + ' ' + smallName[1][0] + '.' + smallName[2][0] + '.';
// namePeople[i].innerHTML = nameResult;
// }