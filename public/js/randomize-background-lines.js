'use strict';

function getRandomValues() {
  var a = [1, 2, 3, 4, 5, 6, 7];
  var randomList = [];
  for (var n = 1; n <= 3; n++) {
    var random = Math.floor(Math.random() * (a.length - 1));
    randomList.push(a[random]);
    a.splice(random, 1);
  }
  return randomList;
};

setTimeout(function () {
  var lineContainer = document.getElementsByClassName('bg-animated-lines')[0];
  if (lineContainer) {
    (function () {
      var lineDelayIncremental = parseFloat(lineContainer.getAttribute('line-delay-incremental'));
      var lineDurationIncremental = parseFloat(lineContainer.getAttribute('line-duration-incremental'));
      var lineYcoordinate = parseFloat(lineContainer.getAttribute('line-y-coordinate'));
      var iAnimationDuration = parseFloat(lineContainer.getAttribute('line-duration'));
      var iAnimationDelay = parseFloat(lineContainer.getAttribute('line-delay'));

      getRandomValues().forEach(function (value) {
        var line = document.createElementNS('http://www.w3.org/2000/svg', 'use');
        line.classList.add('bg-animated-lines__wave', 'bg-animated-lines__wave--' + value);
        line.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '#wave');
        line.setAttribute('x', '0');
        line.style.animationDelay = iAnimationDelay + 's';
        line.style.animationDuration = iAnimationDuration + 's';
        line.setAttribute('y', lineYcoordinate);
        document.getElementsByClassName('bg-animated-lines_svg')[0].appendChild(line);
        lineYcoordinate += .5;
        iAnimationDelay += lineDelayIncremental;
        iAnimationDuration += lineDurationIncremental;
      });
    })();
  }
});

Array.from(document.getElementsByClassName('bg-animated-lines')).map(function (linesContainer) {
  return linesContainer.parentElement.style.position = 'relative';
});