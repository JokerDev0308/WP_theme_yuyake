'use strict';

let isNarrowViewport = matchMedia('(max-width: 1023px)').matches;

// Register gsap ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

(function() {
  document.addEventListener('DOMContentLoaded', () => {
    UIBehaviors();
    globalMotion();
    startingMotion();
    ScrollTrigger.refresh();
  });

  window.addEventListener('load', () => {
    conceptMotion();
    menuMotion();

    // Form initialization
    initForm();
  });
})();

/**
 * UI Behaviors
 */
function UIBehaviors() {
  const $navTrigger = document.getElementById('js-nav-trigger');
  const $navLinks = document.querySelectorAll('.nav-link');

  $navTrigger.addEventListener('click', function(e) {
    document.documentElement.classList.toggle('ui-state-nav-opened');
    document.querySelector('.g-nav .c-outskirt').classList.toggle('is-animated');
    
    let disableNav = () => {
      if (document.documentElement.classList.contains('ui-state-nav-opened')) {
        document.documentElement.classList.remove('ui-state-nav-opened');
        document.removeEventListener('click', disableNav);
      }
    };

    $navLinks.forEach(link => link.addEventListener('click', disableNav));
    e.preventDefault();
  });
}

/** 
 * Global motions (text & image fadein)
 */
function globalMotion() {
  const $headings = document.querySelectorAll('.js-heading-motion');
  const $accordions = document.querySelectorAll('.js-acc');
  const $outskirtFrames = document.querySelectorAll('.js-outskirt-hook');

  $headings.forEach(el => {
    const linePath = el.querySelector('.js-heading-path');
    const length = linePath.getTotalLength();

    gsap.set(linePath, {
      opacity: 0,
      strokeDasharray: 0,
    });
  
    gsap.to(linePath, {
      scrollTrigger: {
        trigger: el,
        start: 'top bottom',
        onEnter: () => {
          gsap.to(linePath, {
            opacity: 0.15,
            strokeDasharray: 0,
            duration: 0
          });
        }
      },
      opacity: 1,
      strokeDasharray: length,
      duration: 2,
      delay: 0.25,
      ease: 'sine.in'
    });
  });

  $accordions.forEach(el => {
    const $trigger = el.querySelector('.acc-trigger');

    $trigger.addEventListener('click', e => {
      el.classList.toggle('is-folded');

      e.preventDefault();
    });
  });

  !isNarrowViewport && $outskirtFrames.forEach(el => {
    ScrollTrigger.create({
      trigger: el,
      start: 'top bottom',
      toggleClass: 'is-animated'
    });
  });
}

/** 
 * Starting motion
 */
function startingMotion() {
  const $mvCopy = document.getElementById('js-mv-copy');
  const $swiperContainer = document.querySelector('.swiper-container');
  let swiper;

  swiper = new Swiper($swiperContainer, {
    effect: 'slide',
    direction: 'vertical',
    loop: true,
    speed: 1000,
    autoplay: true,
    parallax: true,
    mousewheelControl: 1,
    paginationClickable: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    on: {
    init: function () {
        $swiperContainer.classList.remove('is-fadeout');

        setTimeout(() => {
          $mvCopy.classList.add('is-animated');
        }, 1000);
      },
    },
  });
}

/** 
 * Concept area motion
 */
function conceptMotion() {
  const $concept = document.getElementById('concept');
  const $parallaxElems = $concept.querySelectorAll('.js-jarallax');

  $parallaxElems.forEach((el, i) => {
    const $parallaxElem = el && el.querySelector('.jarallax-bg');

    gsap.set($parallaxElem, {
      scale: 1.35,
      yPercent: 25 * (i + 1),
      opacity: 0
    });

    gsap.to($parallaxElem, {
      scale: 1,
      yPercent: 0,
      opacity: 1,
      ease: 'sine.in',
      scrollTrigger: {
        trigger: el,
        start: 'top bottom',
        end: 'bottom bottom',
        scrub: 1
      }
    });
  });
}

/** 
 * Menu area motion
 */
function menuMotion() {
  const $menu = document.getElementById('menu');
  // const $stickyVisuals = $menu.querySelectorAll('.js-menu-sticky-visual');

  if (isNarrowViewport) return;
  
  // $stickyVisuals && $stickyVisuals.forEach(el => {
  //   const $fig = el.querySelector('figure');
  //   const $label = el.querySelector('.menu-vertical-label');

  //   gsap.to($fig, {
  //     scrollTrigger: {
  //       trigger: el.parentElement,
  //       start: 'top top',
  //       end: 'bottom center',
  //       scrub: 1.5
  //     },
  //     y: el.parentElement.offsetHeight - window.innerHeight + 200
  //   });

  //   gsap.to($label, {
  //     scrollTrigger: {
  //       trigger: el.parentElement,
  //       start: 'center bottom',
  //       scrub: 1
  //     },
  //     y: el.parentElement.offsetHeight - window.innerHeight - $label.offsetHeight
  //   });

  // });
}


/**
 * Vuejsのリアルタイムフォーム
 */
function initForm() {
  let $formAnchor;

  new Vue({
    el: '#form',
    data: {
      confirmMode: false,
      thanksMode: false,
      processingStatus: false,
      processingStatusMsg: '送信中…',
      form: {
        // type: {
        //   label: 'お問い合わせ種別',
        //   value: ''
        // },
        // prefecture: {
        //   label: 'サンプルチェックリスト',
        //   value: ''
        // },
        // checkme: {
        //   label: 'チェックME',
        //   value: []
        // },
        name: {
          label: 'お名前',
          value: ''
        },
        email: {
          label: 'メールアドレス',
          value: ''
        },
        tel: {
          label: '電話番号',
          value: ''
        },
        message: {
          label: 'お問い合わせ内容',
          value: ''
        },
        acceptance: false
      }
    },
    mounted() {
      const $errTxt = document.querySelectorAll('#form .is-hidden');
      const $submitBtn = document.getElementById('js-submit');
      $formAnchor = document.getElementById('form');

      $submitBtn.addEventListener('click', () => {
        document.documentElement.style.scrollBehavior = 'auto';
        setTimeout(() => {
          document.documentElement.style.scrollBehavior = 'smooth';
        }, 500);
      });

      Array.from($errTxt).forEach(function(el) {
        el.classList.remove('is-hidden');
      });
    },
    methods: {
      onSubmit() {
        const botIdentified = sessionStorage.getItem('botIdentified');

        if (document.getElementById('js-honeypot').value === '' && !botIdentified) {
          this.confirmMode = true;
          $formAnchor.scrollIntoView({ behavior: 'smooth' });
        } else {
          sessionStorage.setItem('botIdentified', true);
          return false;
        }
      },
      sendForm() {
        this.thanksMode = true;
        this.confirmMode = false;
        $formAnchor.scrollIntoView({ behavior: 'smooth' });

        // MEMO: for testing
        // setTimeout(() => {
        //   alert('送信しました。');
        //   this.processingStatus = true,
        //   this.processingStatusMsg = 'お問い合わせ<br class="u-hide-pc">ありがとうございます。';
        // }, 2000);
        // return;

        const options = {
          method: 'POST',
          mode: 'cors',
          body: JSON.stringify({
            ...this.form,
            send: 1
          }),
          headers: new Headers({
            'Content-Type': 'application/json; charset=UTF-8',
            'Access-Control-Request-Method': 'POST',
            'Access-Control-Request-Headers': 'Content-Type'
          })
        };

        fetch('/api/contact/', options)
          .then(response => {
            if(response.status !== 200) throw new Error(`system Error: ${response.status}`);
            if (response.redirected) console.log(window.location.href = response.url);

            return response.json();
          })
          .then(data => {
            const {send_flag: sendFlag} = data;

            if (sendFlag) {
              this.processingStatus = true,
              this.processingStatusMsg = 'お問い合わせ<br class="u-hide-pc">ありがとうございます。';
            } else {
              alert(data.message);
            }
          })
          .catch(e => console.log(e))
          .finally(() => console.log('送信完了'));
      },
      backToCorrect() {
        this.confirmMode = false;
      }
    }
  });
}