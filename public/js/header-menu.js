'use strict';

var openBtn = document.querySelector('.header__open-icon');
var closeBtn = document.querySelector('.header__close-icon');
var headerMenu = document.querySelector('.header-menu');
var dropDownItems = Array.from(document.getElementsByClassName('header-menu__list-item--dropdown'));
var subItemsLists = Array.from(document.getElementsByClassName('header-menu__subitem-list'));
var MAX_WIDTH_FULLSCREEN = 767;
var MAX_WIDTH_HOVERABLE = 1023;
var MAX_WIDTH_BIGSCREEN = 1920;
var HEADER_MARGIN_TOP_MOBILE = 34;
var HEADER_MARGIN_TOP_DESKTOP = 4;
var HEADER_MARGIN_TOP_BIGSCREEN = 150;
var edocsLinkButton = document.querySelector('.header-menu__list-item--docs > a');
var windowResolution = getWindowResolution();

window.addEventListener('resize', checkWindowResize);
window.addEventListener('scroll', checkFixedHeader);

openBtn.addEventListener('click', function () {
  return toggleMenu();
});
closeBtn.addEventListener('click', function () {
  return toggleMenu();
});
checkWindowResize();

header = document.querySelector('header');

function toggleMenu() {
  headerMenu.classList.toggle('header-menu--expanded');
  checkDisableOverflowY();
}

function checkFixedHeader() {
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var marginTop = undefined;
  if (width > MAX_WIDTH_BIGSCREEN) {
    marginTop = HEADER_MARGIN_TOP_BIGSCREEN;
  } else if (width > MAX_WIDTH_HOVERABLE) {
    marginTop = HEADER_MARGIN_TOP_DESKTOP;
  } else {
    marginTop = HEADER_MARGIN_TOP_MOBILE;
  }
  fixedHeaderManagement(marginTop);
}

function fixedHeaderManagement(marginTop) {
  if (document.documentElement.scrollTop >= marginTop || document.body.scrollTop >= marginTop) {
    if (!header.classList.contains('header--fixed')) {
      header.classList.add('header--fixed');
    }
  } else {
    if (header.classList.contains('header--fixed')) {
      header.classList.remove('header--fixed');
    }
  }
}

function checkWindowResize() {
  windowResolution = getWindowResolution();

  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  if (width <= MAX_WIDTH_HOVERABLE) {
    setClickableMenu();
    checkDisableOverflowY();
  } else {
    removeClickableMenu();
  }

  if (isTouchDevice() && width > MAX_WIDTH_HOVERABLE) {
    setTabletClickableMenu();
  } else {
    removeTabletClickableMenu();
  }
}

function checkDisableOverflowY() {
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  document.documentElement.classList.remove('html--fixed');
  if (width <= MAX_WIDTH_FULLSCREEN && headerMenu.classList.contains('header-menu--expanded')) {
    document.documentElement.classList.add('html--fixed');
  }
}

function setClickableMenu() {
  dropDownItems.map(function (dropDownItem) {
    dropDownItem.firstElementChild.outerHTML = dropDownItem.firstElementChild.outerHTML.replace(/<a/g, '<span');
    dropDownItem.addEventListener('click', toggleShowSubItemList);
  });
}

function removeClickableMenu() {
  dropDownItems.map(function (dropDownItem) {
    dropDownItem.firstElementChild.outerHTML = dropDownItem.firstElementChild.outerHTML.replace(/<span/g, '<a');
    dropDownItem.querySelector('.header-menu__subitem-list').removeAttribute('style');
    dropDownItem.removeEventListener('click', toggleShowSubItemList);
  });
}

function toggleShowSubItemList() {
  var _this = this;

  if (!this.querySelector('.header-menu__subitem-list').getAttribute('style')) {
    if (this.classList.contains('header-menu__list-item--docs')) {
      this.firstElementChild.outerHTML = this.firstElementChild.outerHTML.replace(/<span/g, '<a');
    }

    this.querySelector('.header-menu__subitem-list').setAttribute('style', 'display: block; position: initial');
    subItemsLists.filter(function (subItemList) {
      return subItemList !== _this.querySelector('.header-menu__subitem-list');
    }).map(function (itemFiltered) {
      itemFiltered.removeAttribute('style');
      if (itemFiltered.classList.contains('header-menu__edocs-submenu')) {
        itemFiltered.previousElementSibling.outerHTML = itemFiltered.previousElementSibling.outerHTML.replace(/<a/g, '<span');
      }
    });
  } else {
    if (this.classList.contains('header-menu__list-item--docs')) {
      this.firstElementChild.outerHTML = this.firstElementChild.outerHTML.replace(/<a/g, '<span');
    }

    this.querySelector('.header-menu__subitem-list').removeAttribute('style');
  }
}

function setTabletClickableMenu() {
  dropDownItems.forEach(function (dropDownItem) {
    dropDownItem.classList.add('header-menu__list-item--dropdown--tablet');
    dropDownItem.addEventListener('click', openCloseMenuItem);
    dropDownItem.addEventListener('mouseover', preventDefault);
  });
}

function removeTabletClickableMenu() {
  dropDownItems.forEach(function (dropDownItem) {
    dropDownItem.classList.remove('header-menu__list-item--dropdown--tablet', 'header-menu__list-item--dropdown--tablet-open');
    dropDownItem.removeEventListener('click', openCloseMenuItem);
    dropDownItem.removeEventListener('mouseover', preventDefault);
  });
}

function openCloseMenuItem() {
  var isOpened = this.classList.contains('header-menu__list-item--dropdown--tablet-open');
  dropDownItems.forEach(function (item) {
    return item.classList.remove('header-menu__list-item--dropdown--tablet-open');
  });
  if (!isOpened) {
    this.classList.add('header-menu__list-item--dropdown--tablet-open');
  }
}

function isTouchDevice() {
  var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
  var mq = function mq(query) {
    return window.matchMedia(query).matches;
  };
  if ('ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch) {
    return true;
  }
  var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
  return mq(query);
}

function preventDefault(event) {
  event.preventDefault();
}

function getWindowResolution() {
  return {
    width: window.innerWidth,
    height: window.innerHeight
  };
}