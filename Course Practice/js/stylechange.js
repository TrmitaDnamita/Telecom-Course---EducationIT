function switchStyle() {
  const link = document.getElementById('theme-style');
  if (link.getAttribute('href') === '../CSS/challenge2n_style.css') {
    link.setAttribute('href', '../CSS/challenge2b_style.css');
  } else {
    link.setAttribute('href', '../CSS/challenge2n_style.css');
  }
}