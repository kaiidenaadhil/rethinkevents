// window.addEventListener("load", function () {
//     const preloader = document.getElementById("preloader");
//     const content = document.getElementById("content");

//     // Add fade-out animation
//     preloader.style.animation = "fadeOut 1s forwards";

//     // Show content after preloader disappears
//     setTimeout(() => {
//         preloader.style.display = "none";
//         content.classList.remove("hidden");
//     }, 1000); // Matches the animation time
// });


// function delay(ms) {
//     return new Promise(resolve => setTimeout(resolve, ms));
// }

// window.addEventListener("load", async function () {
//     const preloader = document.getElementById("preloader");
//     const content = document.getElementById("content");

//     // Wait for 1 seconds before hiding the preloader
//     await delay(1000);

//     // Add fade-out animation
//     preloader.style.animation = "fadeOut 1s forwards";

//     // Show content after preloader disappears
//     setTimeout(() => {
//         preloader.style.display = "none";
//         content.classList.remove("hidden");
//     }, 1000); // Matches the fadeOut animation time
// });


let mybutton = document.getElementById("goTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document smoothly
mybutton.onclick = function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};