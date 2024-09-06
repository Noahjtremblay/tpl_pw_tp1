export default class Header {
  constructor(element) {
    this.element = element;
    this.options = {
      treshold: 0.1,
      noScroll: true,
    };
    this.scrollPosition = 0;
    this.lastScrollPosition = 0;
    this.html = document.documentElement;

    this.init();
    this.initNavMobile();
  }

  init() {
    this.setOptions();

    window.addEventListener('scroll', this.onScroll.bind(this));
  }

  setOptions() {
    if ('scrollpercent' in this.html.dataset) {
      this.options.treshold = parseFloat(this.html.dataset.scrollpercent);
    }
    if ('noScroll' in this.html.dataset) {
      this.options.noScroll = false;
    }
    //vérifier les différent éléments data sur la composante
  }

  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');

    toggle.addEventListener('click', this.onToggleNav.bind(this));
  }

  onScroll() {
    this.lastScrollPosition = this.scrollPosition;
    this.scrollPosition = document.scrollingElement.scrollTop;

    this.setDirections();
    if (this.options.noScroll) {
      this.setHeaderState();
    }
  }

  setHeaderState() {
    if (
      this.scrollPosition >
      document.scrollingElement.scrollHeight * this.options.treshold
    ) {
      console.log(this.options.treshold);
      console.log(this.scrollPosition);
      console.log(document.scrollingElement.scrollHeight);
      this.html.classList.add('header-is-hidden');
    } else {
      this.html.classList.remove('header-is-hidden');
    }
  }

  setDirections() {
    if (this.scrollPosition >= this.lastScrollPosition) {
      //Sroll bas
      this.html.classList.add('is-scrolling-down');
      this.html.classList.remove('is-scrolling-up');
    } else {
      //scroll haut
      this.html.classList.remove('is-scrolling-down');
      this.html.classList.add('is-scrolling-up');
    }
  }

  onToggleNav() {
    this.html.classList.toggle('nav-is-active');
  }
}
