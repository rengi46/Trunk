//modal creacion
var btn = document.getElementById("mybtn");
var modal = document.getElementById("myModal");
//modal modificar
var move = document.getElementsByClassName("move");
var rename = document.getElementsByClassName("rename");
var modal2 = document.getElementById("myModal2");

console.log(modal2);
btn.onclick = function () {
  modal.style.display = "block";
}
for (const mo of move) {
  mo.addEventListener("click", function () {
    console.log("a");
    modal2.style.display = "block";
  })
}



var span = document.getElementsByClassName("close");
// When the user clicks on <span> (x), close the modal
for (const sa of span) {
  sa.onclick = function () {
    modal.style.display = "none";
    modal2.style.display = "none";
  }
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    modal2.style.display = "none";
  }
}

//Buscador