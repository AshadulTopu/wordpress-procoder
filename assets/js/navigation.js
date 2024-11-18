
"use static";

document.addEventListener("DOMContentLoaded", () => {
    console.log("Hello World from navigation!");

    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".nav");
    if (!hamburger || !nav) {
        return;
    }
    hamburger.addEventListener("click", () => {
        nav.classList.toggle("active");
    });

});