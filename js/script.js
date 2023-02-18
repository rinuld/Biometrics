window.addEventListener("load", function () {
    document
      .querySelector("#showMenu")
      .addEventListener("click", function (event) {
        document.querySelector("#mobileNav").classList.remove("hidden");
        document.querySelector("#showMenu").classList.add("hidden");
      });
  
    document
      .querySelector("#hideMenu")
      .addEventListener("click", function (event) {
        document.querySelector("#showMenu").classList.remove("hidden");
        document.querySelector("#mobileNav").classList.add("hidden");
      });
  });
  