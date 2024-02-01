"use strict";

if (!window.iconProfile) {
   const iconProfile = document.getElementById("profile-icon-header");

   if (iconProfile) {
      iconProfile.addEventListener("click", function () {
         openPopupLogIn();
      });
   }

   function openPopupLogIn() {
      const popup = document.createElement("div");
      const greyBG = document.createElement("div");
      greyBG.className = "grey-bg";
      popup.className = "log-in-modal-container";
      popup.innerHTML = `<div class="log-in-modal__image"></div>
         <div class="log-in-modal__main-container">
            <form action="" class="log-in-modal__form">
               <p class="log-in-modal__title text-gradient">Вход</p>
               <p class="log-in-modal__subtitle">Введите ваш номер телефона для входа в систему</p>
               <input type="tel" placeholder="Номер телефона" class="log-in-modal__input" />
               <button class="log-in-modal__button">Отправить</button>
            </form>
            <div class="log-in-modal__go-sign-up">
               <p class="opacity">Еще не зарегистрированы?</p>
               <p class="log-in-modal__create-acc">Создайте аккаунт</p>
            </div>
         </div>`;

      document.body.appendChild(popup);
      document.body.appendChild(greyBG);

      greyBG.addEventListener("click", function () {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });
      const createAccBtn = document.querySelector(".log-in-modal__create-acc");
      createAccBtn.addEventListener("click", function () {
         console.log("new modal");
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         openPopupRegistr();
      });
   }

   function openPopupRegistr() {
      const popup = document.createElement("div");
      const greyBG = document.createElement("div");
      greyBG.className = "grey-bg";
      popup.className = "log-in-modal-container";
      popup.innerHTML = `<div class="log-in-modal__image"></div>
         <div class="log-in-modal__main-container">
            <form action="" class="log-in-modal__form">
               <p class="log-in-modal__title text-gradient">Регистрация</p>
               <p class="log-in-modal__subtitle">Введите ваши данные</p>
               <div class="log-in-modal__input-zone">
                  <input type="text" placeholder="Ваше имя" class="log-in-modal__input" />
                  <input type="tel" placeholder="Номер телефона" class="log-in-modal__input" />
               </div>
               <button class="log-in-modal__button">Отправить</button>
            </form>
            <div class="log-in-modal__go-sign-up">
               <p class="opacity log-in-modal__i-have-acc">У меня уже есть аккаунт</p>
            </div
         </div>`;
      document.body.appendChild(popup);
      document.body.appendChild(greyBG);

      greyBG.addEventListener("click", function () {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });
   }
}






// Burger


function toggleDropdown() {
   const dropdownList = document.getElementById("companyDropdownList");
   dropdownList.style.display = dropdownList.style.display === "none" ? "block" : "none";
   adjustArrowRotation();
}

function adjustArrowRotation() {
   const arrowIcon = document.getElementById("burger-company-drop-arrow");
   arrowIcon.style.transform = arrowIcon.style.transform === "rotate(180deg) translateY(30%)" ? "" : "rotate(180deg) translateY(30%)";
}

function toggleBurgerMenu() {
   const burgerMenu = document.getElementById("burgerMenu");
   burgerMenu.style.transform = "translateY(0)";
   const greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   document.body.appendChild(greyBG);
   document.body.style.overflow = "hidden"
   greyBG.addEventListener("click", function () {
      document.body.removeChild(greyBG);
      burgerMenu.style.transform = "translateY(-100%)";
      document.body.style.overflow = ""

   });
   document.querySelector(".close-btn-burger-menu").addEventListener("click", function () {
      document.body.removeChild(greyBG);
      burgerMenu.style.transform = "translateY(-100%)";
      document.body.style.overflow = ""

   });
}