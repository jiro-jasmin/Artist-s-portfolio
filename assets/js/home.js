window.onresize = function () { location.reload(); }
// so that the animation restarts with the right screen size

const xAnimated = document.querySelector(".x");
const img1 = document.getElementById("1");
const img2 = document.getElementById("2");
const img3 = document.getElementById("3");
const img4 = document.getElementById("4");
const img5 = document.getElementById("5");

let xIterationCount = 0;

xAnimated.addEventListener('animationiteration', () => {
  xIterationCount++;

  switch (xIterationCount) {
    case 1: img3.classList.remove('display');
      if (img4) {
        img4.classList.remove('display');
      }
      if (img5) {
        img5.classList.remove('display');
      }
      img1.classList.add('display');
      break;

    case 2: img1.classList.remove('display');
      img2.classList.add('display');
      break;

    case 3: img2.classList.remove('display');
      img3.classList.add('display');
      break;

    case 4: img3.classList.remove('display');
      if (img4) {
        img4.classList.add('display');
      } else {
        xIterationCount = 1;
        img1.classList.add('display');
      }
      break;

    case 5: img4.classList.remove('display');
      if (img5) {
        img5.classList.add('display');
      } else {
        xIterationCount = 1;
        img1.classList.add('display');
      }
      xIterationCount = 1;
    default:
      break;
  }
});
