'use strict';

var TRANSITION_DURATION = 500;

document.addEventListener('DOMContentLoaded', function () {
  var media = document.querySelectorAll('.lightbox');

  if (document.querySelectorAll('.lightbox').length > 0) {
    initLightboxBehaviour();
    window.addEventListener('resize', initLightboxBehaviour);
  }

  function onClickMediaElement(e) {
    e.preventDefault();
    openLightBox(e.target);
    disableScroll();
  }

  function initLightboxBehaviour() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width <= 1023) {
      media.forEach(function (mediaElement) {
        return mediaElement.removeEventListener('click', onClickMediaElement);
      });
    } else {
      media.forEach(function (mediaElement) {
        return mediaElement.addEventListener('click', onClickMediaElement);
      });
    }
  }
});

var lightBox = {};

function openLightBox(mediaElement) {
  if (!document.getElementById('lightbox')) {
    createLightbox(mediaElement);
    var mediaElementPosition = mediaElement.getBoundingClientRect();
    createCloneInLightBox(mediaElement);
    var lightboxMediaPosition = lightBox.media.getBoundingClientRect();
    moveTo(lightboxMediaPosition, mediaElementPosition);
    setTimeout(function () {
      lightBox.media.style.transitionDuration = TRANSITION_DURATION + 'ms';
      lightBox.media.classList.toggle('lightbox__media--initial-position');
    }, TRANSITION_DURATION);
  }
}

function createLightbox() {
  var lightBoxContainer = document.createElement('aside');
  var lightBoxContent = document.createElement('figure');
  var lightBoxCloseBtn = document.createElement('span');

  lightBox.container = lightBoxContainer;
  lightBox.content = lightBoxContent;
  lightBox.closeBtn = lightBoxCloseBtn;

  lightBox.container.className = 'lightbox__container';
  lightBox.content.className = 'lightbox__content';
  lightBox.closeBtn.className = 'lightbox__close-btn eicon-close';

  lightBoxContainer.appendChild(lightBoxContent);
  lightBoxContent.appendChild(lightBoxCloseBtn);
  document.body.appendChild(lightBoxContainer);

  lightBoxContainer.addEventListener('click', function (e) {
    if (e.target !== lightBox.media) {
      closeLightBox();
    }
  });
}

function closeLightBox() {
  lightBox.container.classList.add('lightbox__container--animation-close');
  setTimeout(function () {
    lightBox.media.classList.remove('lightbox__media--initial-position');
  }, 500);
  deleteLightBox();
}

function createCloneInLightBox(mediaElement) {
  var tag = mediaElement.tagName;
  var lightBoxMedia = undefined;
  if (tag === 'VIDEO') {
    lightBoxMedia = mediaElement.cloneNode(true, 'lightbox__media');
    lightBoxMedia.style.width = mediaElement.clientWidth + 'px';
    lightBoxMedia.style.height = mediaElement.clientHeight + 'px';
    lightBoxMedia.setAttribute('controls', '');
  } else {
    var image = new Image(mediaElement.offsetWidth, mediaElement.offsetHeight);
    image.src = mediaElement.src;
    lightBoxMedia = image;
    lightBoxMedia.classList.add('lightbox__media--images');
  }
  lightBox.content.appendChild(lightBoxMedia);
  lightBox.media = lightBoxMedia;
  lightBox.media.className = 'lightbox__media';
}

function moveTo(initialPosition, finalPosition) {
  lightBox.media.style.transform = 'translate3d(' + (finalPosition.left - initialPosition.left) + 'px,' + (finalPosition.top - initialPosition.top) + 'px,0)  scale(' + finalPosition.width / initialPosition.width + ',' + finalPosition.height / initialPosition.height + ')';
}

function deleteLightBox() {
  setTimeout(function () {
    lightBox.content.removeChild(lightBox.media);
    document.body.removeChild(lightBox.container);
    enableScroll();
  }, TRANSITION_DURATION * 2);
}

var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault) {
    e.preventDefault();
  }
  e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

function disableScroll() {
  if (window.addEventListener) {
    window.addEventListener('DOMMouseScroll', preventDefault, false);
  }
  document.addEventListener('wheel', preventDefault, { passive: false });
  window.onwheel = preventDefault;
  window.onmousewheel = document.onmousewheel = preventDefault;
  window.ontouchmove = preventDefault;
  document.onkeydown = preventDefaultForScrollKeys;
}

function enableScroll() {
  if (window.removeEventListener) {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
  }
  document.removeEventListener('wheel', preventDefault, { passive: false });
  window.onmousewheel = document.onmousewheel = null;
  window.onwheel = null;
  window.ontouchmove = null;
  document.onkeydown = null;
}