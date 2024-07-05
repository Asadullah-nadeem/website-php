document.getElementById("floatingIcon").addEventListener("click", function() {
    document.getElementById("popupContainer").style.display = "block";
  });

  document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("popupContainer").style.display = "none";
  });
  const btn = document.querySelector("button.mobile-menu-button");
  const menu = document.querySelector(".mobile-menu");

  btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
  });

  document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
});
 if (!getCookie("Dismissed")) {
  document.getElementById("notification").classList.remove("hidden");
}
function dismissNotification() {
  document.getElementById("notification").classList.add("hidden");
  setCookie("Dismissed", true, 7);
}
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}


