function getElement(selector) {
   return document.querySelector(selector);
}
const checkbox = getElement('input[type="checkbox"]');
const winterContent = getElement(".season.winter");
const summerContent = getElement(".season.summer");
const headerLine = getElement(".header-top-blue");
const underBiker = getElement(".under-bike");
const secondLineHeader = getElement(".second-line-header");
const headerList = getElement(".header-1920-list");
const header2List = getElement(".icun-list-h");
const searchZoneHeader = getElement("#search-header-1920");
const searchZoneHeaderClass = getElement(".search-header-1920");
const summerStatus = document.querySelectorAll(".summer-status");
const winterStatus = document.querySelectorAll(".winter-status");
const numberHeader = getElement(".n-h-y");
const textGradient = document.querySelectorAll(".text-gradient");
const backgroundHeader = getElement(".bacground-image-main-page-first-section");
const backgroundHeaderLeftPhoto = getElement(".absolute-fs-container-left");
const backgroundHeaderRightPhoto = getElement(".absolute-fs-container-right");
const switchSeasonBtns = document.querySelectorAll(".class-to-switch-season-btn");
const searchIconSwitchW = getElement("#search-icon-1920");
const searchIconSwitchB = getElement("#search-icon-1920-black");
const burgerMenuSwitchColor = document.querySelectorAll(".burger span");
const bgSixSection = getElement(".six-section");
const switchTextColorSixS = document.querySelectorAll(".switch-color-text-black-white");
const textTitlePartBlue = document.querySelectorAll(".text-blocks-6-s div:nth-child(1) > span");
const runStringFirst = getElement(".roll-park-list");
const runStringSecond = getElement(".roll-park-list2");
const yellowBlock = getElement(".yellow-block");
const borderColorSwitch = document.querySelectorAll(".border-switch-status-blue");
const sixSectionTitle = getElement(".title-of-section-gradient-yellow");
const fourSectionContainerHide = getElement(".four-section");
const fiveSectionContainerHide = getElement(".five-section");
const showHideBlueWheel = document.querySelectorAll(".show-hide-blue-wheel");
const showHideYellowWheel = document.querySelectorAll(".show-hide-yellow-wheel");
const appbanner = getElement(".app-banner");
const winterOpacity = document.querySelectorAll(".winter-opacity");
const kidsChillSmallCOntainerW = getElement(".kids-chill-winter");
const kidsChillSmallCOntainerS = getElement(".kids-chill-summer");

const blueFake = getElement(".blue-line-fake");
const grayFake = getElement(".gray-line-fake");

window.addEventListener("load", function () {
   const checkbox = document.querySelector('input[type="checkbox"]');
   const cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)SummerWinterCheckStatus\s*=\s*([^;]*).*$)|^.*$/, "$1");
   if (cookieValue !== undefined && cookieValue !== "") {
      checkbox.checked = cookieValue === "true";
      applyStyles(checkbox.checked);
   }

   checkbox.addEventListener("change", function () {
      document.cookie = `SummerWinterCheckStatus=${this.checked}; expires=${new Date(new Date().getTime() + 30 * 24 * 60 * 60 * 1000).toUTCString()}; path=/`;

      applyStyles(this.checked);
   });
});

function applyStyles(checked) {
   const addClass = (elements, className) => elements && elements.forEach((element) => element.classList.add(className));
   const removeClass = (elements, className) => elements && elements.forEach((element) => element.classList.remove(className));

   if (checked) {
      document.body.classList.remove("summer-body-status");
      document.body.classList.add("winter-body-status");
      addClass(summerStatus, "none");
      removeClass(textGradient, "text-gradient-summer");
      removeClass(winterStatus, "none");
      addClass(winterOpacity, "opacity-zero");
      removeClass(switchSeasonBtns, "blue-b-g");
      burgerMenuSwitchColor && burgerMenuSwitchColor.forEach((element) => (element.style.background = "white"));
      removeClass(switchTextColorSixS, "switch-color-text-black");
      textTitlePartBlue && textTitlePartBlue.forEach((element) => (element.style.color = "#ffc93a"));
      removeClass(borderColorSwitch, "border-blue");
      addClass(showHideBlueWheel, "none");
      removeClass(showHideYellowWheel, "none");

      summerContent && (summerContent.style.display = "none");
      winterContent && (winterContent.style.display = "flex");
      headerLine && (headerLine.style.background = "#5567ea");
      underBiker && (underBiker.style.background = "#5567ea");
      secondLineHeader && (secondLineHeader.style.background = "rgba(232, 234, 251, 1)");
      headerList && (headerList.style.color = "white");
      header2List && (header2List.style.color = "white");
      searchZoneHeaderClass && searchZoneHeaderClass.classList.remove("custom-placeholder-style");
      searchZoneHeader && (searchZoneHeader.style.border = "2px solid #fff");
      searchZoneHeader && (searchZoneHeader.style.background = "#5567ea");
      blueFake && (blueFake.style.background = "#5567ea");
      grayFake && (grayFake.style.background = "rgba(232, 234, 251, 1)");
      backgroundHeaderRightPhoto && backgroundHeaderRightPhoto.classList.remove("summer");
      backgroundHeaderLeftPhoto && backgroundHeaderLeftPhoto.classList.remove("summer");
      backgroundHeader && backgroundHeader.classList.remove("summer");
      searchIconSwitchB && searchIconSwitchB.classList.add("none");
      searchIconSwitchW && searchIconSwitchW.classList.remove("none");
      bgSixSection && bgSixSection.classList.remove("summer");
      bgSixSection && (bgSixSection.style.backgroundColor = "#5567ea");
      appbanner && (appbanner.style.background = "#e8eafb");

      runStringFirst && runStringFirst.classList.remove("roll-park-list-black");
      runStringSecond && runStringSecond.classList.remove("roll-park-list-black");
      yellowBlock && (yellowBlock.style.background = "#ffc93a");
      sixSectionTitle && sixSectionTitle.classList.remove("text-gradient");
      fourSectionContainerHide && fourSectionContainerHide.classList.add("none");
      fiveSectionContainerHide && fiveSectionContainerHide.classList.add("none");
      kidsChillSmallCOntainerW && kidsChillSmallCOntainerW.classList.remove("none");
      kidsChillSmallCOntainerS && kidsChillSmallCOntainerS.classList.add("none");
   } else {
      document.body.classList.add("summer-body-status");
      document.body.classList.remove("winter-body-status");
      removeClass(summerStatus, "none");
      addClass(textGradient, "text-gradient-summer");
      addClass(winterStatus, "none");
      removeClass(winterOpacity, "opacity-zero");
      addClass(switchSeasonBtns, "blue-b-g");
      burgerMenuSwitchColor && burgerMenuSwitchColor.forEach((element) => (element.style.background = "black"));
      addClass(switchTextColorSixS, "switch-color-text-black");
      textTitlePartBlue && textTitlePartBlue.forEach((element) => (element.style.color = "#5567EA"));
      addClass(borderColorSwitch, "border-blue");
      removeClass(showHideBlueWheel, "none");
      addClass(showHideYellowWheel, "none");

      summerContent && (summerContent.style.display = "flex");
      winterContent && (winterContent.style.display = "none");
      headerLine && (headerLine.style.background = "#ffc93a");
      underBiker && (underBiker.style.background = "#ffc93a");
      secondLineHeader && (secondLineHeader.style.background = "#fff9e8");
      headerList && (headerList.style.color = "black");
      header2List && (header2List.style.color = "black");
      searchZoneHeaderClass && searchZoneHeaderClass.classList.add("custom-placeholder-style");
      searchZoneHeader && (searchZoneHeader.style.border = "2px solid black");
      searchZoneHeader && (searchZoneHeader.style.background = "#ffdd64");
      searchZoneHeader && (searchZoneHeader.style.color = "black");
      blueFake && (blueFake.style.background = "#ffc93a");
      grayFake && (grayFake.style.background = "#fff9e8");
      backgroundHeaderRightPhoto && backgroundHeaderRightPhoto.classList.add("summer");
      backgroundHeaderLeftPhoto && backgroundHeaderLeftPhoto.classList.add("summer");
      backgroundHeader && backgroundHeader.classList.add("summer");
      searchIconSwitchB && searchIconSwitchB.classList.remove("none");
      searchIconSwitchW && searchIconSwitchW.classList.add("none");
      bgSixSection && bgSixSection.classList.add("summer");
      bgSixSection && (bgSixSection.style.backgroundColor = "unset");
      appbanner && (appbanner.style.background = "#ffefc4");

      runStringFirst && runStringFirst.classList.add("roll-park-list-black");
      runStringSecond && runStringSecond.classList.add("roll-park-list-black");
      yellowBlock && (yellowBlock.style.background = "white");
      sixSectionTitle && sixSectionTitle.classList.add("text-gradient");
      fourSectionContainerHide && fourSectionContainerHide.classList.remove("none");
      fiveSectionContainerHide && fiveSectionContainerHide.classList.remove("none");
      kidsChillSmallCOntainerW && kidsChillSmallCOntainerW.classList.add("none");
      kidsChillSmallCOntainerS && kidsChillSmallCOntainerS.classList.remove("none");
   }
}

function styleChange() {
   const newPlaceholderColor = this.checked ? "red" : "white";
   const placeholderElement = searchZoneHeader;
   if (this.checked) {
      summerStatus.forEach(function (element) {
         element.classList.add("none");
      });
      textGradient.forEach(function (element) {
         element.classList.remove("text-gradient-summer");
      });
      winterStatus.forEach(function (element) {
         element.classList.remove("none");
      });
      winterOpacity.forEach(function (element) {
         element.classList.add("opacity-zero");
      });
      switchSeasonBtns.forEach(function (element) {
         element.classList.remove("blue-b-g");
      });
      burgerMenuSwitchColor.forEach(function (element) {
         element.style.background = "white";
      });
      switchTextColorSixS.forEach(function (element) {
         element.classList.remove("switch-color-text-black");
      });
      textTitlePartBlue.forEach(function (element) {
         element.style.color = "#ffc93a";
      });
      borderColorSwitch.forEach(function (element) {
         element.classList.remove("border-blue");
      });
      showHideBlueWheel.forEach(function (element) {
         element.classList.add("none");
      });
      showHideYellowWheel.forEach(function (element) {
         element.classList.remove("none");
      });
      summerContent.style.display = "none";
      winterContent.style.display = "flex";
      headerLine.style.background = "#5567ea";
      underBiker.style.background = "#5567ea";
      secondLineHeader.style.background = "rgba(232, 234, 251, 1)";
      headerList.style.color = "white";
      header2List.style.color = "white";
      searchZoneHeaderClass.classList.remove("custom-placeholder-style");
      searchZoneHeader.style.border = "2px solid #fff";
      searchZoneHeader.style.background = "#5567ea";
      placeholderElement.style.color = newPlaceholderColor;
      blueFake.style.background = "#5567ea";
      grayFake.style.background = "rgba(232, 234, 251, 1)";
      // numberHeader.style.color = "#FFC93A";
      backgroundHeaderRightPhoto.classList.remove("summer");
      backgroundHeaderLeftPhoto.classList.remove("summer");
      backgroundHeader.classList.remove("summer");
      searchIconSwitchB.classList.add("none");
      searchIconSwitchW.classList.remove("none");
      bgSixSection.classList.remove("summer");
      bgSixSection.style.backgroundColor = "#5567ea";
      appbanner.style.background = "#e8eafb";

      runStringFirst.classList.remove("roll-park-list-black");
      runStringSecond.classList.remove("roll-park-list-black");
      yellowBlock.style.background = "#ffc93a";
      sixSectionTitle.classList.remove("text-gradient");
      fourSectionContainerHide.classList.add("none");
      fiveSectionContainerHide.classList.add("none");
      // thirdSectionContainerHide.classList.add("none");
   } else {
      summerStatus.forEach(function (element) {
         element.classList.remove("none");
      });
      textGradient.forEach(function (element) {
         element.classList.add("text-gradient-summer");
      });
      winterStatus.forEach(function (element) {
         element.classList.add("none");
      });
      winterOpacity.forEach(function (element) {
         element.classList.remove("opacity-zero");
      });
      switchSeasonBtns.forEach(function (element) {
         element.classList.add("blue-b-g");
      });
      burgerMenuSwitchColor.forEach(function (element) {
         element.style.background = "black";
      });
      switchTextColorSixS.forEach(function (element) {
         element.classList.add("switch-color-text-black");
      });
      textTitlePartBlue.forEach(function (element) {
         element.style.color = "#5567EA";
      });
      borderColorSwitch.forEach(function (element) {
         element.classList.add("border-blue");
      });
      showHideBlueWheel.forEach(function (element) {
         element.classList.remove("none");
      });
      showHideYellowWheel.forEach(function (element) {
         element.classList.add("none");
      });
      winterContent.style.display = "none";
      summerContent.style.display = "flex";
      headerLine.style.background = "#ffc93a";
      underBiker.style.background = "#ffc93a";
      secondLineHeader.style.background = "#fff9e8";
      headerList.style.color = "black";
      header2List.style.color = "black";
      searchZoneHeaderClass.classList.add("custom-placeholder-style");

      searchZoneHeader.style.border = "2px solid black";
      searchZoneHeader.style.background = "#ffdd64";
      searchZoneHeader.style.color = "black";

      placeholderElement.style.color = "black";
      blueFake.style.background = "#ffc93a";
      grayFake.style.background = "#fff9e8";
      // numberHeader.style.color = "#5567EA";
      backgroundHeaderRightPhoto.classList.add("summer");
      backgroundHeaderLeftPhoto.classList.add("summer");
      backgroundHeader.classList.add("summer");
      searchIconSwitchB.classList.remove("none");
      searchIconSwitchW.classList.add("none");
      bgSixSection.classList.add("summer");
      bgSixSection.style.backgroundColor = "unset";
      appbanner.style.background = "#ffefc4";

      runStringFirst.classList.add("roll-park-list-black");
      runStringSecond.classList.add("roll-park-list-black");
      yellowBlock.style.background = "white";
      sixSectionTitle.classList.add("text-gradient");
      fourSectionContainerHide.classList.remove("none");
      fiveSectionContainerHide.classList.remove("none");
      // thirdSectionContainerHide.classList.remove("none");
   }
}

const dropWindow = document.getElementById("drop-window-company");
const menuList = document.getElementById("pointer-for-drop");

let isMenuOpen = false;
menuList.addEventListener("click", (event) => {
   event.stopPropagation();

   if (isMenuOpen) {
      closeMenu();
   } else {
      openMenu();
   }
});

document.addEventListener("click", () => {
   if (isMenuOpen) {
      closeMenu();
   }
});

function openMenu() {
   dropWindow.style.opacity = 1;
   dropWindow.style.zIndex = 10;
   dropWindow.style.transform = "translateY(0)";
   isMenuOpen = true;
}

function closeMenu() {
   dropWindow.style.opacity = 0;
   dropWindow.style.zIndex = -1;
   dropWindow.style.transform = "translateY(-280px)";
   isMenuOpen = false;
}
