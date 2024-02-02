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