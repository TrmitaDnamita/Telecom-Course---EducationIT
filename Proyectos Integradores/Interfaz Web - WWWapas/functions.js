function switchStyle(style, styleOld, targetID) {
  const actualStyle = document.getElementById(targetID);
  if (actualStyle.getAttribute('href') === style) {
    actualStyle.setAttribute('href', styleOld);
  } else {
    actualStyle.setAttribute('href', style);
  }
}

window.addEventListener("scroll", () => {
  const goUp = document.getElementById("goUp");
  if (window.scrollY > window.innerHeight * 0.5) {
    goUp.style.display = "block";
  } else {
    goUp.style.display = "none";
  }
});