const openModalBtn = document.querySelector(".modal-switch__button-save");
const content = document.querySelector(".modal-container");
const cardReserve = document.getElementById("card-reserve");
const parkValueSticky = document.querySelector(".bottom-sticky-panel");

if (cardReserve) {
   cardReserve.addEventListener("click", function () {
      openPopupReserve();
   });
}
if (parkValueSticky) {
   parkValueSticky.addEventListener("click", function () {
      openPopupAbout();
   });
}

function openPopupChose() {
   if (document.cookie.indexOf("popupShown=") === -1) {
      openPopupChoseSwitch();
      var expirationDate = new Date();
      expirationDate.setFullYear(expirationDate.getFullYear() + 1);
      document.cookie = "popupShown=true; expires=" + expirationDate.toUTCString() + "; path=/;";
   } else {
      console.log("Попап уже показан");
   }
}

window.onload = function () {
   openPopupChose();
   console.log("Страница загружена");
};

function openPopupReserve() {
   popup = document.createElement("div");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "modal-reserve-celebrate-absolute";
   popup.innerHTML = `<form class="modal-reserve-celebrate">
         <div class="modal-r-c__top-container">
            <div class="modal-title modal-r-c__title">Закажи праздник</div>
            <div class="modal-subtitle modal-r-c__title">Укажите формат праздника, чтобы наши специалисты связались с вами</div>
         </div>
         <div class="modal-r-c__input-container">
            <input required="" type="text" class="modal-r-c__input-1 modal-r-c__input" placeholder="Дата праздника" onfocus="(this.type='date') " />
            <input type="text" class="modal-r-c__input-2 modal-r-c__input" placeholder="Время" step="900" onfocus="this.type='time'" />
            <input type="text" placeholder="Ваше имя" class="modal-r-c__input-3 modal-r-c__input" />
            <input type="text" placeholder="Номер телефона" class="modal-r-c__input-4 modal-r-c__input" />
            <input type="text" placeholder="Расскажите о вашем мероприятии" class="modal-r-c__input-5 modal-r-c__input" />
         </div>
         <div class="modal-r-c__button-area">
            <button class="modal-r-c__button">Отправить</button>
            <p class="modal-r-c__data-agree modal-data-agree">Отправляя данную форму, вы соглашаетесь с <br /><a href="#">условиями обработки персональных данных</a></p>
         </div>
         <div class="close-modal-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
               <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
            </svg>
         </div>
      </form>`;

   document.body.appendChild(popup);
   document.body.appendChild(greyBG);

   greyBG.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   popup.querySelector(".close-modal-btn").addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });
}

function openPopupChoseSwitch() {
   popup = document.createElement("div");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "modal-reserve-celebrate-absolute";

   // Получаем данные из файла JSON
   $.getJSON("/wp-content/uploads/points.json", function (data) {
      // Получение списка парков
      var parks = data.features;

      // Формируем HTML для списка парков
      var parkListHTML = '<ul class="park-list__ul">';
      parks.forEach(function (park) {
         parkListHTML += '<li class="park-list__li" data-park-name="' + park.properties.name + '">' + park.properties.name + "</li>";
      });
      parkListHTML += "</ul>";

      // Заполняем модальное окно HTML
      popup.innerHTML = `<form class="modal-chose-park" action="">
         <div class="modal-c-p__top-block">
            <div class="modal-c-p__title">Выбор парка</div>
            <div class="modal-c-p__subtitle">Выберите парк, в котором вы хотите арендовать технику</div>
         </div>
         <div class="modal-c-p__search-city">
            <div class="modal-c-p__moscow-city">Москва</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path
                  d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                  stroke="#333333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
               />
               <path d="M21 21L16.7 16.7" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
         </div>
         <div class="modal-c-p__park-list">
            <p class="park-list__title">Парки Москвы:</p>
            ${parkListHTML}
         </div>
         <div class="modal-c-p__buttons">
            <button class="modal-c-p__save-btn">Сохранить</button>
            <button class="modal-c-p__skip-btn">Пропустить</button>
         </div>
         <div class="close-modal-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
               <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
            </svg>
         </div>
      </form>`;

      document.body.appendChild(popup);
      document.body.appendChild(greyBG);

      greyBG.addEventListener("click", function () {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });

      popup.querySelector(".close-modal-btn").addEventListener("click", function () {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });

      popup.querySelector(".modal-c-p__skip-btn").addEventListener("click", function () {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });

      var parkListItems = popup.querySelectorAll(".park-list__li");

      // Добавляем обработчик клика на каждый элемент списка парков
      parkListItems.forEach(function (item) {
         item.addEventListener("click", function () {
            // Удаляем класс у всех элементов списка
            parkListItems.forEach(function (el) {
               el.classList.remove("selected-park");
            });
            // Добавляем класс выбранному элементу
            item.classList.add("selected-park");
         });
      });

      // Добавляем обработчик клика на кнопку "Сохранить"
      popup.querySelector(".modal-c-p__save-btn").addEventListener("click", function () {
         // Получаем выбранный парк
         var selectedPark = popup.querySelector(".selected-park");
         if (selectedPark) {
            // Получаем имя выбранного парка
            var parkName = selectedPark.dataset.parkName;

            // Записываем данные о выбранном парке в контейнер park-name-sticky-value
            var parkNameStickyValue = document.querySelector(".park-name-sticky-value");
            parkNameStickyValue.textContent = parkName;

            // Формируем объект с данными о парке
            var parkData = {
               name: parkName,
            };

            // Преобразуем объект в строку JSON
            var parkDataString = JSON.stringify(parkData);

            // Сохраняем данные о парке в куки
            document.cookie = "parkData=" + parkDataString + "; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/";
         }

         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
         console.log("close");
      });
   });
}

function openPopupAbout() {
   popup = document.createElement("div");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "modal-reserve-celebrate-absolute";

   // Чтение данных из куки
   var cookieData = document.cookie.split(";").reduce(function (acc, cookie) {
      var parts = cookie.split("=");
      acc[parts[0].trim()] = decodeURIComponent(parts[1]);
      return acc;
   }, {});

   // Получение данных о выбранном парке из куки
   var parkData = cookieData["parkData"] ? JSON.parse(cookieData["parkData"]) : null;

   // Формирование HTML для модального окна
   var modalHTML = `<section class="modal-about-park">
      <div class="modal-a-p__title">О парке</div>
      <div class="modal-a-p__middle-container">
         <div class="modal-a-p__subtitle">${parkData ? parkData.name : ""}</div>
         <div class="modal-a-p__time-zone">
            <p class="time-zone__grey">Время работы:</p>
            <p class="time-zone__disc">${parkData.time ? parkData.time : "10-22"}</p>
         </div>
         <div class="modal-a-p__technic-zone">
            <p class="technic-zone__grey">Техника парка:</p>
            <p class="technic-zone__disc">${parkData.equipment ? parkData.equipment : "Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки и Катамараны"}</p>
         </div>
      </div>
      <div class="modal-a-p__img"></div>
      <div class="modal-a-p__button">Сменить парк</div>
      <div class="close-modal-btn">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
         </svg>
      </div>
   </section>`;

   // Вставка HTML в модальное окно
   popup.innerHTML = modalHTML;

   // Добавление модального окна и фона на страницу
   document.body.appendChild(popup);
   document.body.appendChild(greyBG);

   // Обработчик закрытия модального окна по клику на фон
   greyBG.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   // Обработчик закрытия модального окна по клику на кнопку "Закрыть"
   popup.querySelector(".close-modal-btn").addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   // Обработчик нажатия кнопки "Сменить парк"
   const swapParkBtnModal = document.querySelector(".modal-a-p__button");
   swapParkBtnModal.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      openPopupChoseSwitch();
   });
}

function openPopupSwitch() {
   popup = document.createElement("div");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "modal-reserve-celebrate-absolute";
   popup.innerHTML = `<form action="" class="modal-switch-park">
    <div class="modal-switch__title">Смена парка</div>
    <div class="modal-switch__input-search-zone"><input class="modal-switch__input-search" type="search" placeholder="Название парка, района или улицы" /></div>
    <div class="modal-switch__middle-container">
       <p class="modal-switch__subtitle">Ближайшие:</p>
       <div class="modal-switch__parks-zone">
          <div class="modal-switch__park-range-zone">
             <div class="modal-switch__park-name">ВДНХ</div>
             <div class="modal-switch__park-range">(450м)</div>
          </div>
          <div class="modal-switch__park-range-zone">
             <div class="modal-switch__park-name">Измайловский</div>
             <div class="modal-switch__park-range">(3,2км)</div>
          </div>
       </div>
    </div>
    <div class="modal-switch__bottom-container">
       <p class="modal-switch__subtitle">Популярные:</p>
       <div class="modal-switch__parks-zone">
          <div class="modal-switch__park-name">Парк Победы</div>
          <div class="modal-switch__park-name">Парк 850-летия Москвы</div>
          <div class="modal-switch__park-name">Парк Лосиный остров</div>
          <div class="modal-switch__park-name">Парк Строгино</div>
       </div>
    </div>
    <div class="modal-switch__button-save">Сохранить</div>
    <div class="close-modal-btn">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
       </svg>
    </div>
    <div class="go-back-modal-btn"></div>
 </form>`;

   document.body.appendChild(popup);
   document.body.appendChild(greyBG);

   greyBG.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   popup.querySelector(".close-modal-btn").addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   const goBackBtn = document.querySelector(".go-back-modal-btn");

   goBackBtn.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      openPopupAbout();
   });
}
function openPopupFranchise() {
   popup = document.querySelector(".modal-reserve-celebrate-absolute.franchise-page-form");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";

   document.body.appendChild(greyBG);
   popup.style.display = "flex";

   greyBG.addEventListener("click", function () {
      document.body.removeChild(greyBG);
      popup.style.display = "none";
      console.log("close");
   });

   popup.querySelector(".close-modal-btn").addEventListener("click", function () {
      popup.style.display = "none";
      document.body.removeChild(greyBG);
      console.log("close");
   });

   const goBackBtn = document.querySelector(".go-back-modal-btn");

   goBackBtn.addEventListener("click", function () {
      document.body.removeChild(greyBG);
      popup.style.display = "none";
      openPopupAbout();
   });
}

// const bg = document.querySelector(".grey-bg");
// bg.addEventListener("click", function () {
//    console.log("close");
//    closePopup();
// });
// const closeModals = document.querySelectorAll(".close-modal-btn");

// closeModals.forEach(function (closeModal) {
//    closeModal.addEventListener("click", function () {
//       console.log("close");
//       closePopup();
//    });
// });

// function closePopup() {
//    document.body.removeChild(popup);
//    document.body.removeChild(greyBG);
// }onclick="openPopupReserveRope()"
function openPopupReserveRope() {
   popup = document.createElement("div");
   greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "modal-reserve-celebrate-absolute";
   popup.innerHTML = `            <form class="modal-reserve-franchise">
   <div class="modal-r-c__top-container">
      <div class="modal-title modal-r-c__title">Поход в веревочный парк</div>
      <div class="modal-subtitle modal-r-c__title">Укажите ваши данные, чтобы наши специалисты связались с вами</div>
   </div>
   <div class="modal-r-c__input-container">
      <input type="text" class="modal-franchise-1 modal-franchise__input" placeholder="Ваше имя" />
      <input type="text" class="modal-franchise-2 modal-franchise__input" placeholder="Город открытия" />
      <input type="email" placeholder="Электронная почта" class="modal-franchise-3 modal-franchise__input" />
      <input type="tel" placeholder="Номер телефона" class="modal-franchise-4 modal-franchise__input" />
      <input type="text" placeholder="Любой полезный коментарий" class="modal-r-c__input-5 modal-r-c__input modal-franchise-5" />
   </div>
   <div class="modal-r-c__button-area">
      <button class="modal-r-c__button">Отправить</button>
      <p class="modal-r-c__data-agree modal-data-agree">Отправляя данную форму, вы соглашаетесь с <br /><a href="#">условиями обработки персональных данных</a></p>
   </div>
   <div class="close-modal-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
         <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
      </svg>
   </div>
</form>`;

   document.body.appendChild(popup);
   document.body.appendChild(greyBG);

   greyBG.addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });

   popup.querySelector(".close-modal-btn").addEventListener("click", function () {
      document.body.removeChild(popup);
      document.body.removeChild(greyBG);
      console.log("close");
   });
}
