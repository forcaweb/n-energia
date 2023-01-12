const menuMobile = document.querySelector('.menu-mobile');
const line = document.querySelectorAll('.line');
menuMobile.addEventListener('click', (e)=>{
  e.preventDefault();
  document.querySelector('.line:nth-child(3)').classList.toggle('hiddenline')
  document.querySelector('.line:nth-child(1)').classList.toggle('positionline1')
  document.querySelector('.line:nth-child(2)').classList.toggle('positionline2')
  document.querySelector('.menulist').classList.toggle('showmenu')
})

