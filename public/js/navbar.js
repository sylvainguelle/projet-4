console.log("hello");

let navbarContainer = document.getElementById("navbar");

console.log(navbarContainer);

let btns = navbarContainer.getElementsByClassName("nav-item");

console.log(btns);

for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
