import Swiper from 'swiper/bundle';
export default class Carousel {
  constructor(element) {
    this.element = element;

    this.options = {
      slidesPerView: 1.5,
      spaceBetween: 140,
      pagination: {
        el: this.element.querySelector('.swiper-pagination'),
      },
      navigation: {
        nextEl: this.element.querySelector('.swiper-button-next'),
        prevEl: this.element.querySelector('.swiper-button-prev'),
      },
    };

    this.init();
  }

  init() {
    this.setOptions();

    new Swiper(this.element, this.options);
  }

  setOptions() {
    if (this.element.dataset.split) {
      this.options.breakpoints = {
        768: {
          slidesPerView: 1,
        },
      };
    }

    if (this.element.dataset.autoplay) {
      this.options.autoplay = {
        autoplay: {
          delay: 5000,
          pauseOnMouseEnter: true,
          disableOnInteraction: false,
        },
      };
    }

    if (this.element.dataset.loop) {
      this.options.loop = true;
    }

    if (this.element.dataset.slides != '') {
      this.options.slidesPerView =
        this.element.dataset.slides || this.options.slidesPerView;
      console.log(this.options.slidesPerView);
    }
  }
}
