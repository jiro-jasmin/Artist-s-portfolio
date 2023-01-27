const projectsMenu = document.querySelector('.projects-menu');
const scrollElEnd = document.getElementById("end");
const lastEl = document.querySelector('.projects-menu li:last-child');
const currentProject = document.querySelector('.current-project');

const scrollElStart = document.getElementById("start");
const firstEl = document.querySelector('.projects-menu li:first-child');

function isOverflown(el) {
    return el.scrollHeight > el.clientHeight || el.scrollWidth > el.clientWidth;
    // true = there is a scrollbar
}

function displayWhenScrollable(el) {
    let bool = isOverflown(projectsMenu);

    if (bool) {
        el.style.opacity = 1;
    } else {
        el.style.opacity = 0;
    }
}

function checkScrollPosition(start, end) {
    // Check if the element is viewed on screen

    if (window.innerWidth < 992) {
        // On tablets & mobile phones
        let positionFromLeft = start.getBoundingClientRect().left;
        let positionFromRight = end.getBoundingClientRect().right;

        if (positionFromLeft < 15) {
            scrollElStart.style.opacity = 1;
        } else {
            scrollElStart.style.opacity = 0;
        }

        if (positionFromRight - window.innerWidth <= -35) {
            scrollElEnd.style.opacity = 0;
        } else {
            scrollElEnd.style.opacity = 1;
        }
    } else {
        // On desktops
        let positionFromTop = start.getBoundingClientRect().top;
        let positionFromBtm = end.getBoundingClientRect().bottom;

         // Standard wide screen
        if (window.innerHeight >= 450) {
            if (positionFromTop < 115) {
                scrollElStart.style.opacity = 1;
            } else {
                scrollElStart.style.opacity = 0;
            }
            if (positionFromBtm - window.innerHeight <= 0) {
                scrollElEnd.style.opacity = 0;
            } else {
                scrollElEnd.style.opacity = 1;
            }
        }

        // Height media query: for narrow & large window
        if (window.innerHeight < 450) {
            if (positionFromTop < 80) {
                scrollElStart.style.opacity = 1;
            } else {
                scrollElStart.style.opacity = 0;
            } if (positionFromBtm - window.innerHeight <= 10) {
                scrollElEnd.style.opacity = 0;
            } else {
                scrollElEnd.style.opacity = 1;
            }
        }
    }
}

window.onresize = function () {
    displayWhenScrollable(scrollElEnd);
    checkScrollPosition(firstEl, lastEl);
}

projectsMenu.addEventListener('scroll', () => {
    checkScrollPosition(firstEl, lastEl);
});

currentProject.scrollIntoView({block: "center", inline: "center"});
displayWhenScrollable(scrollElEnd);
checkScrollPosition(firstEl, lastEl);