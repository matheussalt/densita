function openMenu() {
  const menuHamb = document.querySelector('.menu-hamb');
  const menu = document.querySelector('.menu');
  const header = document.querySelector('.header');
  const menuItens = document.querySelectorAll('.menu a');

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menuHamb.classList.toggle('ativo');
    menu.classList.toggle('ativo');
    header.classList.toggle('ativo');
  });

  menu.addEventListener('click', e => {
    if (e.currentTarget === e.target) menu.remove;
  });

  menuItens.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();

      const destin = document.querySelector(item.getAttribute('href'));

      menuHamb.classList.remove('ativo');
      menu.classList.remove('ativo');
      header.classList.remove('ativo');

      window.scrollTo({
        top: destin.offsetTop,
        left: 0,
        behavior: 'smooth'
      });
    });
  });
}
openMenu();
