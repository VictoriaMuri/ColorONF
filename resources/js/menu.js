const burger = document.querySelector('.burger');
const profile = document.querySelector('.profile');
const activeBlock = document.querySelector('.filter');
const menu = document.querySelector('.menu');
const submenu = document.querySelector('.submenu');

let burgerBtn = false;
let profileBtn = false;

burger.addEventListener('click', burgerChangeClass);
profile.addEventListener('click', profileChangeClass);
activeBlock.addEventListener('click', () => {
  burgerCloseMenu();
  profileCloseMenu();
});

function burgerChangeClass() {
  burgerBtn = !burgerBtn;
  profileCloseMenu();

  if (!burgerBtn) {
    return burgerCloseMenu();
  }

  if (burgerBtn) {
    document.body.classList.add('no-scroll');
    burger.classList.add('open');
    activeBlock.classList.add('open');
    menu.classList.add('open');
  }
}

function profileChangeClass() {
  profileBtn = !profileBtn;
  burgerCloseMenu();

  if (!profileBtn) {
    return profileCloseMenu();
  }

  if (profileBtn) {
    document.body.classList.add('no-scroll');
    profile.classList.add('open');
    activeBlock.classList.add('open');
    submenu.classList.add('open');
  }
}

function burgerCloseMenu() {
  burgerBtn = false;
  document.body.classList.remove('no-scroll');
  burger.classList.remove('open');
  activeBlock.classList.remove('open');
  menu.classList.remove('open');
}

function profileCloseMenu() {
  profileBtn = false;
  document.body.classList.remove('no-scroll');
  profile.classList.remove('open');
  activeBlock.classList.remove('open');
  submenu.classList.remove('open');
}
