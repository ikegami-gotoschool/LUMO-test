// const { compileString } = require("sass");

(()=>{
  gsap.registerPlugin(ScrollTrigger);

  /**
   * mv animation
   *
   */
  function mvAnimation(){
    if(document.querySelector('.mv_animation') != null && document.querySelector('.mv_animation') != undefined) {

      const master = gsap.timeline();

      gsap.set('.homeMv_point .pointbar_bar',{
        width: 0
      })
      gsap.set('.homeMv_imgWrapper',{
        opacity: 0,
        filter: "blur(10px)",
        x: 10,
        y: -10
      })

      const tl = gsap.timeline();
      tl.to('.homeMv_imgWrapper',{
        opacity: 1,
        filter: "blur(0px)",
        x: 0,
        y: 0,
        duration: 1.5
      })
      .add(barAnimation())

      function barAnimation(){
        const tl = gsap.timeline({repeat: -1, repeatDelay: 1});

        if(window.innerWidth > 768){
          // PC
          // ----------------------------------------
          tl.to('.homeMv_point._point1 ._blue',{
            width: 64,
            duration: 0.85,
            ease: "power3.out"
          })
          .to('.homeMv_point._point1 ._green',{
            width: 44,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .to('.homeMv_point._point3 ._green',{
            width: 68,
            duration: 0.95,
            ease: "power3.out"
          })
          .to('.homeMv_point._point3 ._blue',{
            width: 35,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .to('.homeMv_point._point2 ._blue',{
            width: 64,
            duration: 0.95,
            ease: "power3.out"
          })
          .set('.homeMv_point._point1 ._blue',{
            right: '44px',
            left: 'auto',
            opacity: .57
          },'-=0.2')
          .to('.homeMv_point._point1 ._blue',{
            width: 0,
            opacity: 0,
            duration: 0.5,
          },'-=0.2')
          .set('.homeMv_point._point1 ._green',{
            right: '0px',
            left: 'auto',
            opacity: .57
          },'-=0.2')
          .to('.homeMv_point._point1 ._green',{
            width: 0,
            duration: 0.5,
            opacity: 0,
          },'-=0.2')
          .to('.homeMv_point._point2 ._green',{
            width: 42,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .set('.homeMv_point._point3 ._green',{
            right: '35px',
            left: 'auto',
            opacity: .57
          })
          .to('.homeMv_point._point3 ._green',{
            width: 0,
            duration: 0.5,
            opacity: 0,
          })
          .set('.homeMv_point._point3 ._blue',{
            right: '0',
            left: 'auto',
            opacity: .57
          },'-=0.25')
          .to('.homeMv_point._point3 ._blue',{
            width: 0,
            opacity: 0,
            duration: 0.5,
          },'-=0.25')
          .set('.homeMv_point._point1 ._blue',{
            opacity: 1,
            right: 'auto',
            left: 0
          })
          .set('.homeMv_point._point1 ._green',{
            opacity: 1,
            right: 'auto',
            left: 64
          })
          .to('.homeMv_point._point1 ._blue',{
            width: 64,
            duration: 0.85,
            ease: "power3.out"
          })
          .to('.homeMv_point._point1 ._green',{
            width: 44,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .set('.homeMv_point._point2 ._blue',{
            right: '42px',
            left: 'auto',
            opacity: .57,
            delay: 2
          })
          .to('.homeMv_point._point2 ._blue',{
            width: 0,
            opacity: 0,
            duration: 0.5,
          })
          .set('.homeMv_point._point2 ._green',{
            right: '0px',
            left: 'auto',
            opacity: .57
          },'-=0.2')
          .to('.homeMv_point._point2 ._green',{
            width: 0,
            duration: 0.5,
            opacity: 0,
          },'-=0.2')
        }else{
          // SP
          // ----------------------------------------
          tl.to('.homeMv_point._point1 ._blue',{
            width: 64,
            duration: 0.85,
            ease: "power3.out"
          })
          .to('.homeMv_point._point1 ._green',{
            width: 45,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .to('.homeMv_point._point3 ._blue',{
            width: 35,
            duration: 0.95,
            ease: "power3.out"
          })
          .to('.homeMv_point._point3 ._green',{
            width: 68,
            duration: 0.95,
            ease: "power3.out"
          },'-=0.4')
          .to('.homeMv_point._point2 ._blue',{
            width: 64,
            duration: 0.95,
            ease: "power3.out"
          })
          .set('.homeMv_point._point1 ._blue',{
            right: '45px',
            left: 'auto',
            opacity: .57
          },'-=0.2')
          .to('.homeMv_point._point1 ._blue',{
            width: 0,
            opacity: 0,
            duration: 0.5,
          },'-=0.2')
          .set('.homeMv_point._point1 ._green',{
            right: '0px',
            left: 'auto',
            opacity: .57
          },'-=0.2')
          .to('.homeMv_point._point1 ._green',{
            width: 0,
            duration: 0.5,
            opacity: 0,
          },'-=0.2')
          .set('.homeMv_point._point3 ._blue',{
            right: '62px',
            left: 'auto',
            opacity: .57
          })
          .to('.homeMv_point._point3 ._blue',{
            width: 0,
            opacity: 0,
            duration: 0.5,
          })
          .set('.homeMv_point._point3 ._green',{
            right: '0',
            left: 'auto',
            opacity: .57
          },'-=0.25')
          .to('.homeMv_point._point3 ._green',{
            width: 0,
            duration: 0.5,
            opacity: 0,
          },'-=0.25')
        }
        return tl;
      }
    }
  }

  /**
   * mid page animation
   *
   */
  function midMvAnimation(){
    if(document.querySelector('.mv [data-bar1]') != null && document.querySelector('.mv [data-bar1]') != undefined){

      if(window.innerWidth > 1080){

        const tl = gsap.timeline();

        const bar1 = document.querySelector('[data-bar1]');
        const bar2 = document.querySelector('[data-bar2]');
        const bar3 = document.querySelector('[data-bar3]');
        const bar4 = document.querySelector('[data-bar4]');

        gsap.set('.mv._page .pointbar_bar',{
          width: 0
        });

        window.addEventListener('load',()=>{
          tl.to(bar1,{
            width: bar1.getAttribute('data-bar1')
          })
          .to(bar2,{
            width: bar2.getAttribute('data-bar2')
          },"-=0.08")
          .to(bar3,{
            width: bar3.getAttribute('data-bar3')
          })
          .to(bar4,{
            width: bar4.getAttribute('data-bar4')
          },"-=0.08")
        })

      }
    }
  }


  /**
   * top page Cta animation
   *
   */
  function topCtanimation(){
    if(document.querySelector('.home_cta [data-bar1]') != null && document.querySelector('.home_cta [data-bar1]') != undefined){

      if(window.innerWidth > 1080){
        const bar1 = document.querySelector('.home_cta [data-bar1]');
        const bar2 = document.querySelector('.home_cta [data-bar2]');
        const bar3 = document.querySelector('.home_cta [data-bar3]');
        const bar4 = document.querySelector('.home_cta [data-bar4]');

        gsap.set('.home_cta .pointbar_bar',{
          width: 0
        });


        gsap.timeline({
          scrollTrigger: {
            trigger: ".home_cta",
          }
        })
        .to(bar1,{
          width: bar1.getAttribute('data-bar1')
        })
        .to(bar2,{
          width: bar2.getAttribute('data-bar2')
        },"-=0.08")
        .to(bar3,{
          width: bar3.getAttribute('data-bar3')
        })
        .to(bar4,{
          width: bar4.getAttribute('data-bar4')
        },"-=0.08");
      }
    }
  }

  /**
   * button animation
   *
   */
  function initButton(){
    document.querySelectorAll('.js-button').forEach((item)=>{

      // console.log(item.clientWidth)

      const span = document.createElement('span');
      span.classList.add('copy');
      const spanInner = document.createElement('span');
      spanInner.innerText = item.innerText;
      spanInner.style.width = item.clientWidth + 'px';
      span.appendChild(spanInner);
      item.querySelector('a').appendChild(span);
    });
  }

  /**
   * accordion
   *
   */
  function Accordion(){
    document.querySelectorAll('.faqItem').forEach((item)=>{

      const ansbody = item.querySelector('.faqItem_a');
      const ansbodyH = ansbody.clientHeight;
      item.addEventListener("click",()=>{
        item.classList.toggle("is-open");
        if (ansbody.style.height) {
          ansbody.style.height = null;
        } else {
          ansbody.style.height = ansbody.scrollHeight + 'px';
        }
      });
    });
  }
  /**
   * accordion
   *
   */
  function serviceAccordion(){
    document.querySelectorAll('.js-serviceAccordion').forEach((item)=>{

      const ansbody = item.querySelector('.js-serviceAccordion-ans');
      const ansbodyH = ansbody.clientHeight;
      item.querySelector('.js-serviceAccordionButton').addEventListener("click",()=>{
        item.classList.toggle("is-open");
        if (ansbody.style.height) {
          ansbody.style.height = null;
        } else {
          ansbody.style.height = ansbody.scrollHeight + 'px';
        }
      });


      window.addEventListener('resize',()=>{
        if(window.innerWidth > 768){
          ansbody.style.height = null;
          item.classList.remove('is-open')
        }
      })

    });
  }

  /**
   * drawer menu
   */

  const html = document.querySelector('html');
  const hamburger = document.querySelector('.js-hamburger');
  let expand;

  const subnavbtn = document.querySelector('.js-subnavbtn');

  hamburger.addEventListener('click', function () {
    expand = hamburger.getAttribute('aria-expanded');
    if (expand == "true") {
      html.classList.remove('is-drawerOpen');
      hamburger.setAttribute("aria-expanded", "false");
    } else {
      html.classList.add('is-drawerOpen');
      hamburger.setAttribute("aria-expanded", "true");
    }
  });



  /**
   * loop animation
   *
   */

  if(document.querySelector('.loop-js') != null){
    document.querySelectorAll('.loop-js').forEach((item)=>{
      const loop = item;

      let data_speed = item.getAttribute('data-speed') != null ? item.getAttribute('data-speed') : 100;
      if(window.innerWidth <=  768){
        if(item.getAttribute('data-speed') != null){
          data_speed = data_speed / 1.5;
        }
      }


      if(loop != undefined && loop != null){
        //タイムラインを作成
        const loopAnim = gsap.timeline({
          repeat: -1 //繰り返し無制限
        });
        //画像を複製してdiv内に挿入
        let loopItem = (window.innerWidth, loop.children[0]);
        let slider_size = loop.children[0].clientWidth * 3;
        loop.style.width = parseInt(slider_size) + 'px';
        loop.appendChild(loopItem.cloneNode(true));
        loop.appendChild(loopItem.cloneNode(true));
        loop.appendChild(loopItem.cloneNode(true));
        setSpeed(data_speed);
        function setSpeed(data_speed){
          var speed = parseInt(data_speed);
          let percent = -66.6666;
          loopAnim
          .to(loop, speed, { ease: Power0.easeNone, xPercent: percent })
          .to(loop, 0, { ease: Power0.easeNone, x: 0 });

        }
      }
    })
  }

  /**
   * mw wp form error
   *
   */
  if(document.querySelector('.mw_wp_form') != null && document.querySelector('.mw_wp_form') == undefined ){
    document.querySelectorAll('.mw_wp_form .error').forEach((ele)=>{
      ele.parentElement.classList.add('has-error');
    });
  }

  /**
   *  ssmooth scorll
   *
   */
  const links = document.querySelectorAll('a[href^="#"]');

    for (const link of links) {
      link.addEventListener("click", clickHandler);
    }

    function clickHandler(e) {
      e.preventDefault();
      const href = this.getAttribute("href");
      const offsetTop = document.querySelector(href).offsetTop;
      const headeroffset = document.querySelector('header').clientHeight;

      scroll({
        top: offsetTop - headeroffset,
        behavior: "smooth"
      });
    }



  window.addEventListener('DOMContentLoaded',function(){
    initButton();
    Accordion();
    mvAnimation();
    serviceAccordion();
    topCtanimation();
    midMvAnimation();
  });



})();








// 2025.04改修
const stepSection = document.querySelector('.section__step');

if (stepSection) {
  const headers = stepSection.querySelectorAll('.accordion__header');

  headers.forEach(header => {
    header.addEventListener('click', () => {
      const isActive = header.classList.contains('active');

      // 全て閉じる（このセクション内のみ）
      stepSection.querySelectorAll('.accordion__header').forEach(h => h.classList.remove('active'));
      stepSection.querySelectorAll('.accordion__content').forEach(c => c.style.maxHeight = null);

      // 開く
      if (!isActive) {
        header.classList.add('active');
        const content = header.nextElementSibling;
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });
}




// インタビューページ
let currentPage = 1;
const totalPages = 3;

function goToPage(page) {
  currentPage = page;

  // 記事の表示切替
  document.querySelectorAll('.interview__article').forEach(el => el.style.display = 'none');
  document.querySelector(`.interview__article--page${page}`).style.display = 'block';

  // ページ番号ボタンのactive切替
  for (let i = 1; i <= totalPages; i++) {
    document.getElementById(`interview__btn${i}`).classList.remove('active');
  }
  document.getElementById(`interview__btn${page}`).classList.add('active');

  // スクロールを即座にトップへ
  window.scrollTo(0, 0);
}

function changePage(direction) {
  if (direction === 'next' && currentPage < totalPages) {
    goToPage(currentPage + 1);
  } else if (direction === 'prev' && currentPage > 1) {
    goToPage(currentPage - 1);
  }
}

// 初期表示
goToPage(1);