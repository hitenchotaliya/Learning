let Hellobtn=document.querySelector('button');
Hellobtn.addEventListener('click',inputMsg);

function showMsg(){
    alert("Hello");
}
function inputMsg(){
    let name=prompt('Enter name of student');
    Hellobtn.textContent='Roll no.1:'+name;
}