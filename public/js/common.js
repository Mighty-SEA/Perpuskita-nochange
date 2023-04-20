let currentScroll = 0;
let isMobileDevice = isHandheldDevice();
let isDesktopResolution = isDesktopOrBigger();

let header;
let setHeaderHeightCssProperty = () => {};

document.addEventListener('DOMContentLoaded', () => {
  header = document.querySelector('header');

  setHeaderHeightCssProperty = () => {
    document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
  }

  isMobileDevice = isHandheldDevice();
  setHeaderHeightCssProperty();
  setCurrentScroll();
})

document.addEventListener('scroll', () => {
  setCurrentScroll();
})

window.addEventListener('resize', () => {
  isDesktopResolution = isDesktopOrBigger();
  isMobileDevice = isHandheldDevice();

  setHeaderHeightCssProperty();
});


function isDesktopOrBigger() {
  return window.innerWidth > 1023
}

function isHandheldDevice() {
  const width = window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;
  return width < 1024;
}

function setCurrentScroll() {
  currentScroll = Math.abs((document.body.getBoundingClientRect()).top);
}
