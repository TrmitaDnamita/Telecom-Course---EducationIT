function switchStyle() {
  const actualStyle = document.getElementById('theme-style');
  if (actualStyle.getAttribute('href') === '../../css/module-1/challenge2n_style.css') {
    actualStyle.setAttribute('href', '../../css/module-1/challenge2b_style.css');
  } else {
    actualStyle.setAttribute('href', '../../css/module-1/challenge2n_style.css');
  }
}