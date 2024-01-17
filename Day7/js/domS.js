//Change card title to red
// let ctitle = document.getElementsByClassName("card-title")[0]
// ctitle.style.color="red";


// let ctitle = document.getElementById("fid1")
// ctitle.style.color="blue";

//QuerySelector

let ctitle = document.querySelectorAll(".card-title")
ctitle[0].style.color="blue";
ctitle[1].style.color="red";
ctitle[2].style.color="green";
console.log(ctitle);

console.log(document.getElementsByTagName("a"));
console.log(document.querySelector(".card-title").getElementsByClassName("a"));