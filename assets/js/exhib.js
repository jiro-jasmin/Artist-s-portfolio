const exhibTitle = document.querySelectorAll(".exhib-title");
const exhibImage = document.querySelectorAll(".exhib-img");
const shape = document.querySelector(".default");

for (let i = 0; i < exhibTitle.length; i++) {
    let thisTitle = exhibTitle[i];
    let thisImg = exhibImage[i];

    thisTitle.addEventListener("mouseenter", function () {
        if (thisTitle.id == thisImg.id) {
            thisImg.classList.add('display');
            shape.style.transition = "opacity .4s ease-in-out";
            shape.style.opacity = '0';
        }
    });

    thisTitle.addEventListener("mouseleave", function () {
        if (thisTitle.id == thisImg.id) {
            thisImg.classList.remove('display');
            shape.style.transition = "opacity .4s ease-in-out";
            shape.style.opacity = '1';
        }
    });
}
