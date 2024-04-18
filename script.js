
//RESPONSIVE STARTS 
// let menu = document.querySelector('#menu-bars');
// let  navbar = document.querySelector('.navbar');
// menu.onclick = () =>{
//           menu.classList.toggle('fa-times');
//           navbar.classList.toggle('active');
// } 
//RESPONSIVE END


let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

// drpdown
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

// dropdown

