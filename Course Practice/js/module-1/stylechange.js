function switchStyle() {
  const actual-style = document.getElementById('theme-style');
  if (actual-style.getAttribute('href') === '../../css/module-1/challenge2n_style.css') {
    actual-style.setAttribute('href', '../../css/module-1/challenge2b_style.css');
  } else {
    actual-style.setAttribute('href', '../../css/module-1/challenge2n_style.css');
  }
}
