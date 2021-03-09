let scroll = document.getElementById("scroll");
let body = document.getElementById("body");
// console.log(body.scrollHeight);

document.addEventListener("scroll", function scroller(length) {
  let percent = (window.scrollY / 3389.60009765625) * 100;
  const colorBase = chroma.hcl(100, percent, 100).hex() ; 
  scroll.style.background = colorBase; 
  // console.log(window.scrollY)
  // console.log(percent);
});
