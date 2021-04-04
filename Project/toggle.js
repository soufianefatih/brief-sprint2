let nav = document.querySelector('.navbar__nav');
let toggle = document.querySelector('.toggle');
toggle.addEventListener('click', function(){
    nav.classList.toggle('active-toggle');
    toggle.style.display="row";
})
// alert("hello");