function scroll(btn, to) {
  const trigger = document.querySelector(btn);
  const destin = document.querySelector(to);

  trigger.addEventListener('click', e => {
    e.preventDefault();

    window.scrollTo({
      top: destin.offsetTop,
      left: 0,
      behavior: 'smooth'
    });
  });
}

scroll('.go-down', '#sobre');
scroll('.to-top', '.banner');
