import '../css/app.css';

const langToggle = document.querySelector('[data-lang-toggle]');
const langMenu = document.querySelector('[data-lang-menu]');
const langLabel = document.querySelector('[data-lang-label]');

if (langToggle && langMenu) {
  langToggle.addEventListener('click', (event) => {
    event.stopPropagation();
    langMenu.classList.toggle('hidden');
  });

  langMenu.querySelectorAll('button').forEach((button) => {
    button.addEventListener('click', () => {
      if (langLabel) {
        langLabel.textContent = button.dataset.lang || 'English';
      }
      langMenu.classList.add('hidden');
    });
  });

  document.addEventListener('click', () => {
    langMenu.classList.add('hidden');
  });
}
