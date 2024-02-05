
<?php
/*
Template Name: faqs
*/
?>



<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Часто задаваемые вопросы</p>
         </div>
         <h1 class="h1-no-main-page text-gradient faq-title"><?php the_field('zagolovok_faq') ?></h1>
         <p class="faq-page-first-text"><?php the_field('opisanie_faq') ?></p>
 

         <div class="faq-page-questions-container accordion-container">
            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_1') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_1') ?></p>
               </div>
            </div>

            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_2') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_2') ?></p>
               </div>
            </div>

            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_3') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_3') ?></p>
               </div>
            </div>

            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_4') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_4') ?></p>
               </div>
            </div>

            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_5') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_5') ?></p>
               </div>
            </div>

            <div class="ac">
               <div class="ac-header">
                  <button type="button" class="ac-trigger"><?php the_field('faq_vopros_6') ?></button>
                  <svg class="svg-plus-faq" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                     <g opacity="0.5">
                        <path d="M10 24H38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 10V38" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </g>
                  </svg>
               </div>
               <div class="ac-panel">
                  <p class="ac-text"><?php the_field('faq_otvet_6') ?></p>
               </div>
            </div>
         </div>

         <script>
             !function(e){var t=0,n=function e(n,s){var i=this,r=this,o=!1;if(Array.isArray(n))return!!n.length&&n.map((function(t){return new e(t,s)}));var a={init:function(){this.options=Object.assign({duration:600,ariaEnabled:!0,collapse:!0,showMultiple:!1,onlyChildNodes:!0,openOnInit:[],elementClass:"ac",triggerClass:"ac-trigger",panelClass:"ac-panel",activeClass:"is-active",beforeOpen:function(){},onOpen:function(){},beforeClose:function(){},onClose:function(){}},s);var e="string"==typeof n;this.container=e?document.querySelector(n):n,this.createDefinitions(),r.attachEvents()},createDefinitions:function(){var e=this,n=this.options,s=n.elementClass,i=n.openOnInit,r=n.onlyChildNodes?this.container.childNodes:this.container.querySelectorAll(u(s));this.elements=Array.from(r).filter((function(e){return e.classList&&e.classList.contains(s)})),this.firstElement=this.elements[0],this.lastElement=this.elements[this.elements.length-1],this.elements.filter((function(e){return!e.classList.contains("js-enabled")})).forEach((function(n){n.classList.add("js-enabled"),e.generateIDs(n),e.setARIA(n),e.setTransition(n);var s=e.elements.indexOf(n);t++,i.includes(s)?e.showElement(n,!1):e.closeElement(n,!1)}))},setTransition:function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=this.options,s=n.duration,i=n.panelClass,r=e.querySelector(u(i)),o=l("transitionDuration");r.style[o]=t?null:"".concat(s,"ms")},generateIDs:function(e){var n=this.options,s=n.triggerClass,i=n.panelClass,r=e.querySelector(u(s)),o=e.querySelector(u(i));e.setAttribute("id",e.id||"ac-".concat(t)),r.setAttribute("id",r.id||"ac-trigger-".concat(t)),o.setAttribute("id",o.id||"ac-panel-".concat(t))},removeIDs:function(e){var t=this.options,n=t.triggerClass,s=t.panelClass,i=e.querySelector(u(n)),r=e.querySelector(u(s));e.id.startsWith("ac-")&&e.removeAttribute("id"),i.id.startsWith("ac-")&&i.removeAttribute("id"),r.id.startsWith("ac-")&&r.removeAttribute("id")},setARIA:function(e){var t=this.options,n=t.ariaEnabled,s=t.triggerClass,i=t.panelClass;if(n){var r=e.querySelector(u(s)),o=e.querySelector(u(i));r.setAttribute("role","button"),r.setAttribute("aria-controls",o.id),r.setAttribute("aria-disabled",!1),r.setAttribute("aria-expanded",!1),o.setAttribute("role","region"),o.setAttribute("aria-labelledby",r.id)}},updateARIA:function(e,t){var n=t.ariaExpanded,s=t.ariaDisabled,i=this.options,r=i.ariaEnabled,o=i.triggerClass;if(r){var a=e.querySelector(u(o));a.setAttribute("aria-expanded",n),a.setAttribute("aria-disabled",s)}},removeARIA:function(e){var t=this.options,n=t.ariaEnabled,s=t.triggerClass,i=t.panelClass;if(n){var r=e.querySelector(u(s)),o=e.querySelector(u(i));r.removeAttribute("role"),r.removeAttribute("aria-controls"),r.removeAttribute("aria-disabled"),r.removeAttribute("aria-expanded"),o.removeAttribute("role"),o.removeAttribute("aria-labelledby")}},focus:function(e,t){e.preventDefault();var n=this.options.triggerClass;t.querySelector(u(n)).focus()},focusFirstElement:function(e){this.focus(e,this.firstElement),this.currFocusedIdx=0},focusLastElement:function(e){this.focus(e,this.lastElement),this.currFocusedIdx=this.elements.length-1},focusNextElement:function(e){var t=this.currFocusedIdx+1;if(t>this.elements.length-1)return this.focusFirstElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},focusPrevElement:function(e){var t=this.currFocusedIdx-1;if(t<0)return this.focusLastElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},showElement:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],n=this.options,s=n.panelClass,i=n.activeClass,r=n.collapse,o=n.beforeOpen;t&&o(e);var a=e.querySelector(u(s)),l=a.scrollHeight;e.classList.add(i),requestAnimationFrame((function(){requestAnimationFrame((function(){a.style.height=t?"".concat(l,"px"):"auto"}))})),this.updateARIA(e,{ariaExpanded:!0,ariaDisabled:!r})},closeElement:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],n=this.options,s=n.panelClass,i=n.activeClass,r=n.beforeClose,o=e.querySelector(u(s)),a=o.scrollHeight;e.classList.remove(i),t?(r(e),requestAnimationFrame((function(){o.style.height="".concat(a,"px"),requestAnimationFrame((function(){o.style.height=0}))}))):o.style.height=0,this.updateARIA(e,{ariaExpanded:!1,ariaDisabled:!1})},toggleElement:function(e){var t=this.options,n=t.activeClass,s=t.collapse,i=e.classList.contains(n);if(!i||s)return i?this.closeElement(e):this.showElement(e)},closeElements:function(){var e=this,t=this.options,n=t.activeClass;t.showMultiple||this.elements.forEach((function(t,s){t.classList.contains(n)&&s!==e.currFocusedIdx&&e.closeElement(t)}))},handleClick:function(e){var t=this,n=e.currentTarget;this.elements.forEach((function(s,i){s.contains(n)&&"A"!==e.target.nodeName&&(t.currFocusedIdx=i,t.closeElements(),t.focus(e,s),t.toggleElement(s))}))},handleKeydown:function(e){switch(e.key){case"ArrowUp":return this.focusPrevElement(e);case"ArrowDown":return this.focusNextElement(e);case"Home":return this.focusFirstElement(e);case"End":return this.focusLastElement(e);default:return null}},handleFocus:function(e){var t=e.currentTarget,n=this.elements.find((function(e){return e.contains(t)}));this.currFocusedIdx=this.elements.indexOf(n)},handleTransitionEnd:function(e){if(e.stopPropagation(),"height"===e.propertyName){var t=this.options,n=t.onOpen,s=t.onClose,i=e.currentTarget,r=parseInt(i.style.height),o=this.elements.find((function(e){return e.contains(i)}));r>0?(i.style.height="auto",n(o)):s(o)}}};this.attachEvents=function(){if(!o){var e=a.options,t=e.triggerClass,n=e.panelClass;a.handleClick=a.handleClick.bind(a),a.handleKeydown=a.handleKeydown.bind(a),a.handleFocus=a.handleFocus.bind(a),a.handleTransitionEnd=a.handleTransitionEnd.bind(a),a.elements.forEach((function(e){var s=e.querySelector(u(t)),i=e.querySelector(u(n));s.addEventListener("click",a.handleClick),s.addEventListener("keydown",a.handleKeydown),s.addEventListener("focus",a.handleFocus),i.addEventListener("webkitTransitionEnd",a.handleTransitionEnd),i.addEventListener("transitionend",a.handleTransitionEnd)})),o=!0}},this.detachEvents=function(){if(o){var e=a.options,t=e.triggerClass,n=e.panelClass;a.elements.forEach((function(e){var s=e.querySelector(u(t)),i=e.querySelector(u(n));s.removeEventListener("click",a.handleClick),s.removeEventListener("keydown",a.handleKeydown),s.removeEventListener("focus",a.handleFocus),i.removeEventListener("webkitTransitionEnd",a.handleTransitionEnd),i.removeEventListener("transitionend",a.handleTransitionEnd)})),o=!1}},this.toggle=function(e){var t=a.elements[e];t&&a.toggleElement(t)},this.open=function(e){var t=a.elements[e];t&&a.showElement(t)},this.openAll=function(){var e=a.options,t=e.activeClass,n=e.onOpen;a.elements.forEach((function(e){e.classList.contains(t)||(a.showElement(e,!1),n(e))}))},this.close=function(e){var t=a.elements[e];t&&a.closeElement(t)},this.closeAll=function(){var e=a.options,t=e.activeClass,n=e.onClose;a.elements.forEach((function(e){e.classList.contains(t)&&(a.closeElement(e,!1),n(e))}))},this.destroy=function(){i.detachEvents(),i.openAll(),a.elements.forEach((function(e){a.removeIDs(e),a.removeARIA(e),a.setTransition(e,!0)})),o=!0},this.update=function(){a.createDefinitions(),i.detachEvents(),i.attachEvents()};var l=function(e){return"string"==typeof document.documentElement.style[e]?e:(e=c(e),e="webkit".concat(e))},c=function(e){return e.charAt(0).toUpperCase()+e.slice(1)},u=function(e){return".".concat(CSS.escape(e))};a.init()};"undefined"!=typeof module&&void 0!==module.exports?module.exports=n:e.Accordion=n}(window);
            
             new Accordion(".accordion-container");
         </script>

         <div class="call-back-form-container-overflow-container-default">
            <div class="call-back-form-container-franchise">
               <div class="text-sub-block-news-inside">
                  <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                  <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
               </div>
               <div class="input-zone-news-p-cont">
                  <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                  <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
                  <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
                  <img class="google-piexel-phone-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-phone-full.png" alt="" />
                  <img class="google-piexel-screen-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-full.png" alt="" />
                  <div class="data-agreement-12px">
                     Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a>
                  </div>
               </div>
            </div>
         </div>
      </section>


<?php
get_footer();
?>