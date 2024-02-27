document.addEventListener("DOMContentLoaded", function () {
   const scrollContainers = document.querySelectorAll(".scroll-container-js");

   scrollContainers.forEach(function (scrollContainer) {
      let isMouseDown = false;
      let startX, scrollLeft;

      scrollContainer.addEventListener("mousedown", (e) => {
         isMouseDown = true;
         startX = e.pageX - scrollContainer.offsetLeft;
         scrollLeft = scrollContainer.scrollLeft;
      });

      scrollContainer.addEventListener("mouseleave", () => {
         isMouseDown = false;
      });

      scrollContainer.addEventListener("mouseup", () => {
         isMouseDown = false;
      });

      scrollContainer.addEventListener("mousemove", (e) => {
         if (!isMouseDown) return;
         const x = e.pageX - scrollContainer.offsetLeft;
         const walk = x - startX;
         scrollContainer.scrollLeft = scrollLeft - walk;
      });

      scrollContainer.addEventListener("mouseenter", () => {
         scrollContainer.style.overflowX = "scroll";
      });

      scrollContainer.addEventListener("mouseleave", () => {
         scrollContainer.style.overflowX = "auto";
      });
   });
});
function openPopupBurgerBottom() {
   const popup = document.createElement("nav");
   const greyBG = document.createElement("div");
   greyBG.className = "grey-bg";
   popup.className = "burger-bottom-franchise";
   popup.innerHTML = `          
       <li><a href="#about-franchise">О франшизе</a></li>
       <li><a href="#format-of-service-franchise-page">Формат услуг</a></li>
       <li><a href="#they-chose-us">Нас выбирают</a></li>
       <li><a href="#finnodel-section">Финансовая модель</a></li>
       <li><a href="#our-team-franchise">Команда поддержки</a></li>
       <li><a href="#contacts-franchise-page">Контакты</a></li>
   `;

   document.body.appendChild(popup);
   document.body.appendChild(greyBG);

   setTimeout(() => {
      popup.classList.add("show");
      console.log("Menu is now visible");
   }, 10);

   popup.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
         popup.classList.remove("show");
         setTimeout(() => {
            document.body.removeChild(popup);
            document.body.removeChild(greyBG);
         }, 600);
      });
   });

   greyBG.addEventListener("click", function () {
      popup.classList.remove("show");
      setTimeout(() => {
         document.body.removeChild(popup);
         document.body.removeChild(greyBG);
      }, 600);
      console.log("close");
   });
}
