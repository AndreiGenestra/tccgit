const modal = document.getElementById("meuModal");
const btn = document.getElementById("abrirModal");
const span = document.querySelector(".fechar");

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
}
