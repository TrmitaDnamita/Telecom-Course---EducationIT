function switchStyle() {
  const link = document.getElementById('theme-style');
  if (link.getAttribute('href') === '../../css/module-1/challenge2n_style.css') {
    link.setAttribute('href', '../../css/module-1/challenge2b_style.css');
  } else {
    link.setAttribute('href', '../../css/module-1/challenge2n_style.css');
  }
}