const btn = document.querySelector("button.side-menu-button");
const sidebar = document.querySelector(".side-bar");

// add our event listener for the click
btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});
