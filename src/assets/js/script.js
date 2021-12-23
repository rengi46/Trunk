//modal creacion
var btn = document.getElementById("mybtn");
var SubirFichero = document.getElementById("SubirFichero");
var modal = document.getElementById("myModal");
var urlA = document.getElementById("copyInput");
console.log(urlA);
var a=urlA.split("/");
//modal modificar
var move = document.getElementsByClassName("move");
var rename = document.getElementsByClassName("rename");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
//modal upload
var uploadBtn = document.getElementById('SubirFichero');

btn.onclick = function () {
  modal.style.display = "block";
}
for (const mo of move) {
  mo.addEventListener("click", function () {
    modal2.style.display = "block";
  })
}
for (const re of rename) {
  re.addEventListener("click", function () {
    console.log("B");
    modal3.style.display = "block";
  })
}

uploadBtn.addEventListener('click', function () {
  console.log('a');
  modal4.style.display = "block";
})


var span = document.getElementsByClassName("close");
// When the user clicks on <span> (x), close the modal
for (const sa of span) {
  sa.onclick = function () {
    modal.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
  }
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
  }
}

//Copiar

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copyInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

//