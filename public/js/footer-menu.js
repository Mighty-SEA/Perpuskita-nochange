const cookieBtn = document.querySelector('.footer__cookies-popup');
cookieBtn.addEventListener('click', () => cookieBtn.classList.toggle('tool--show'));
cookieBtn.addEventListener('mouseout', () => {
  if (cookieBtn.classList.contains('tool--show')) {
    cookieBtn.classList.remove('tool--show');
  }
});
