function especialista() {
  const popup = document.querySelector('.popup-especialista');
  const buttons = document.querySelectorAll('.especialista-item .ver-mais');

  buttons.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();

      btn.setAttribute('disabled', 'disabled');

      console.log(siteURL);

      fetch(`${siteURL}wp-json/wp/v2/pages/${btn.getAttribute('data-href')}`)
        .then(r => r.json())
        .then(r => {
          fetch(`${siteURL}wp-json/wp/v2/media/${r.featured_media}`)
            .then(img => img.json())
            .then(img => {
              console.log(img, r);

              const popupWrapper = document.createElement('div');
              popupWrapper.classList.add('popup-wrapper');
              popupWrapper.innerHTML = `
                <img src="${img.media_details.sizes.full.source_url}" alt="${r.title.rendered}" />
                <div class="popup-content">
                  <h3 class="title">${r.title.rendered}</h3>
                  ${r.content.rendered}
                </div>
              `;

              const popupClose = document.createElement('button');
              popupClose.classList.add('close-popup');
              popupClose.innerText = 'x';

              popupWrapper.appendChild(popupClose);
              popup.appendChild(popupWrapper);
              popup.classList.add('ativo');

              popup.addEventListener('click', e => {
                if (e.target === e.currentTarget) {
                  popup.classList.remove('ativo');
                  popup.innerHTML = '';
                  btn.removeAttribute('disabled');
                }
              });

              popupClose.addEventListener('click', e => {
                popup.classList.remove('ativo');
                popup.innerHTML = '';
                btn.removeAttribute('disabled');
              });
            });
        });
    });
  });
}
especialista();
