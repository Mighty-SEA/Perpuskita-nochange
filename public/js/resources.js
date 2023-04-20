'use strict';

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) arr2[i] = arr[i]; return arr2; } else { return Array.from(arr); } }

var PAGE_NAME = 'resources';

var resourcesGroups = Array.from(document.getElementsByClassName('resource-group'));
var resourcesList = Array.from(document.getElementsByClassName('resource-group__list'));
var groupedResources = resourcesGroups.map(function (group) {
  return Array.from(group.getElementsByClassName('resource-item'));
});
var resourcesItems = Array.from(document.getElementsByClassName('resource-item'));
var podcastButton = document.getElementById('btnPodcast');
var extraPodcasts = document.getElementById('more-podcasts');
var extraPodcastsHeight = document.getElementById('more-podcasts-height-wrapper');

var breadcrumbWrapper = document.querySelector('.' + PAGE_NAME + '__breadcrumb');
var sectionContainers = [].concat(_toConsumableArray(document.querySelectorAll('.' + PAGE_NAME + '__main-section')));
var breadcrumbItems = [].concat(_toConsumableArray(document.querySelectorAll('.' + PAGE_NAME + '__breadcrumb-item')));
var progressBar = document.querySelector('.' + PAGE_NAME + '__breadcrumb-progress-bar--main');

var currentSection = 0;
var isScrollingUp = false;
var heightSectionSeparator = window.innerHeight >= 1680 ? window.innerHeight / 2 : window.innerHeight / 4;

if (window.innerWidth >= 1024) {
  orderResources();
  activeFirstResource();
}

setBreadcrumbVisibility();

window.addEventListener('DOMContentLoaded', function () {
  setMobileBreadcrumbs();
});

window.addEventListener('scroll', function () {
  setisScrollingUp();
  setCurrentSection();
  setBreadcrumbs();
  animateBreadcrumbProgressBars();
});

window.addEventListener('resize', function () {
  setMobileBreadcrumbs();
  orderResources();
  setHeightSeparator();
});

podcastButton.addEventListener('click', toggleMorePodcast);
resourcesList.forEach(function (resourceList) {
  resourceList.addEventListener('mouseenter', deactiveResourceItems);
  resourceList.addEventListener('mouseleave', activeFirstResource);
});
window.addEventListener('hashchange', function () {
  closeMenu();
  removeHash();
});

function orderResources() {
  resourcesGroups.forEach(function (group, index) {
    var numberOfResources = groupedResources[index].length;
    var groupWidth = group.offsetWidth;
    var resourceWidth = 180;
    group.style = '--resource-margin: calc(((' + groupWidth + 'px - ' + resourceWidth + 'px) / ' + (numberOfResources - 1) + ') - ' + resourceWidth + 'px);\n  --resources-group-margin: calc(' + resourceWidth + 'px - ((' + groupWidth + 'px - ' + resourceWidth + 'px) / ' + (numberOfResources - 1) + '));';
  });
}

function activeFirstResource() {
  groupedResources.forEach(function (group, i) {
    var numberOfResources = groupedResources[i].length;
    group.forEach(function (item, j) {
      if (j === numberOfResources - 1) {
        item.classList.add('resource-item--active');
      }
    });
  });
}

function deactiveResourceItems() {
  resourcesItems.forEach(function (resource) {
    return resource.classList.remove('resource-item--active');
  });
}

function toggleMorePodcast() {
  var activeClass = 'resources__more-podcasts--open';
  if (!extraPodcasts.classList.contains(activeClass)) {
    extraPodcasts.style.height = extraPodcastsHeight.offsetHeight + 40 + 'px';
    podcastButton.innerText = 'View less';
  } else {
    extraPodcasts.style.height = 0;
    podcastButton.innerText = 'View all';
  }
  extraPodcasts.classList.toggle(activeClass);
}

// Remove classes that avoid scroll and expand menu when mobile menu is open
function closeMenu() {
  document.querySelector('html').classList.remove('html--fixed');
  document.querySelector('nav.header-menu').classList.remove('header-menu--expanded');
}

function setBreadcrumbs() {
  setBreadcrumbVisibility();
  setBreadcrumbActiveItem();
}

function setBreadcrumbVisibility() {
  var wrapperBottom = document.querySelector('.resources__breadcrumb ul').getBoundingClientRect().bottom;
  var linesTop = document.querySelector('.bg-animated-lines').getBoundingClientRect().top;

  if (wrapperBottom >= linesTop - 30) {
    breadcrumbWrapper.classList.add(PAGE_NAME + '__breadcrumb--hidden');
  } else {
    breadcrumbWrapper.classList.remove(PAGE_NAME + '__breadcrumb--hidden');
  }
}

function setBreadcrumbActiveItem() {
  if (currentSection >= 0 && currentSection <= sectionContainers.length + 1) {
    breadcrumbItems.forEach(function (breadCrumb, index) {
      if (index <= currentSection) {
        breadCrumb.classList.add(PAGE_NAME + '__breadcrumb-item--active');
      } else {
        breadCrumb.classList.remove(PAGE_NAME + '__breadcrumb-item--active');
      }
    });
  }
}

function animateBreadcrumbProgressBars() {
  var breadcrumbHeight = breadcrumbWrapper.querySelector('ul').getBoundingClientRect().height;
  var scrollPercent = Math.round(100 * currentScroll / (document.body.clientHeight - window.innerHeight));
  var sizeInPx = scrollPercent / 100 * breadcrumbHeight;

  progressBar.style.height = (sizeInPx <= 58 ? sizeInPx : 58) + 'px';
}

function setMobileBreadcrumbs() {
  if (window.innerWidth <= 1680) {
    breadcrumbItems.forEach(function (item) {
      item.addEventListener('click', function () {
        mobileBreadcrumbLogic(item);
      });
    });
  } else {
    breadcrumbItems.forEach(function (item) {
      item.removeEventListener('click', function () {
        mobileBreadcrumbLogic(item);
      });
    });
  }
}

var mobileBreadcrumbLogic = function mobileBreadcrumbLogic(item) {
  var hash = '#' + item.getAttribute('data-link');

  if (hash === '#') {
    var locationWithoutHash = location.protocol + '//' + location.host + location.pathname;
    window.location = locationWithoutHash;
    return;
  }

  var anchorElement = document.querySelector(hash);

  if (!anchorElement) {
    return;
  }

  if (window.location.hash = '#' + anchorElement.id) {
    return;
  }

  if (window.location.hash = '#documents') {
    window.location = '/' + PAGE_NAME;
    return;
  }

  window.location = '/' + PAGE_NAME + '/#' + anchorElement.id;
};

function setCurrentSection() {
  var sectionContainersRect = sectionContainers.map(function (item, index) {
    return {
      index: index,
      position: item.getBoundingClientRect()
    };
  });

  var sectionHover = undefined;
  if (isScrollingUp) {
    sectionHover = sectionContainersRect.find(function (container) {
      return container.position.top < window.innerHeight / 4 && container.position.bottom >= heightSectionSeparator;
    });
  } else {
    sectionHover = sectionContainersRect.find(function (container) {
      return container.position.top > 0 && container.position.top <= heightSectionSeparator && container.position.bottom >= 0;
    });
  }

  currentSection = sectionHover ? sectionHover.index : -1;
}

function getCurrentSection(subsections) {
  var sectionContainersRect = [].concat(_toConsumableArray(subsections)).map(function (item, index) {
    return {
      index: index,
      position: item.getBoundingClientRect()
    };
  });

  var sectionHover = sectionContainersRect.find(function (container) {
    return container.position.top <= window.innerHeight / 4 && container.position.bottom >= window.innerHeight;
  });

  return sectionHover ? sectionHover.index : -1;
}

function setisScrollingUp() {
  var actualScroll = Math.abs(document.body.getBoundingClientRect().top);
  isScrollingUp = actualScroll < currentScroll;
}

function setHeightSeparator() {
  heightSectionSeparator = window.innerHeight >= 1680 ? window.innerHeight / 4 : window.innerHeight / 2;
}
function removeHash() {
  var scrollV,
      scrollH,
      loc = window.location;
  if ("pushState" in history) history.pushState("", document.title, loc.pathname + loc.search);else {
    // Prevent scrolling by storing the page's current scroll offset
    scrollV = document.body.scrollTop;
    scrollH = document.body.scrollLeft;

    loc.hash = "";

    // Restore the scroll offset, should be flicker free
    document.body.scrollTop = scrollV;
    document.body.scrollLeft = scrollH;
  }
}