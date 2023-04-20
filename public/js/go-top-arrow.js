const arrowItem = document.querySelector('.go-top');


window.addEventListener('DOMContentLoaded', () => {
  initButtonEvent();
  setScrollPosition();
  checkButtonVisibility();
})

arrowItem.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  })
});

window.addEventListener('scroll', () => {
  setScrollPosition();
  checkButtonVisibility();
});

function initButtonEvent() {

};

function checkButtonVisibility() {
  const totalDomHeight = document.body.scrollHeight;

  if (currentScroll > totalDomHeight / 3) {
    arrowItem.classList.remove('go-top--hidden');
  } else {
    arrowItem.classList.add('go-top--hidden');
  }
}

function setScrollPosition() {
  currentScroll = Math.abs((document.body.getBoundingClientRect()).top);
}
