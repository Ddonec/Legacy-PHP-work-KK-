let popup; // объявляем глобальные переменные
let greyBG;

const openModalBtn = document.querySelector(".modal-switch__button-save");

// openModalBtn.addEventListener("click", function (event) {

// });
const content = document.querySelector(".modal-container");
// const body = document.querySelector(".body");
openPopup();
function openPopup() {
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
}

const bg = document.querySelector(".grey-bg");
bg.addEventListener("click", function () {
   console.log("close");
   closePopup();
});
const closemodal = document.querySelectorAll(".close-modal-btn");
closemodal.addEventListener("click", function () {
   console.log("close");
   closePopup();
});

function closePopup() {
   document.body.removeChild(popup);
   document.body.removeChild(greyBG);
}
