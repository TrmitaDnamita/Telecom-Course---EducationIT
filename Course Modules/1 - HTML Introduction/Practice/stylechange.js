function switchStyle() {
  const link = document.getElementById('theme-style');
  if (link.getAttribute('href') === 'challenge2n_style.css') {
    link.setAttribute('href', 'challenge2b_style.css');
  } else {
    link.setAttribute('href', 'challenge2n_style.css');
  }
}