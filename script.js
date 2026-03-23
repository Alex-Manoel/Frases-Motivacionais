function gerarMotivacao() {
  const nome = document.getElementById("nome").value;

  if (nome.trim() === "") {
    alert("Digite seu nome!");
    return;
  }

  fetch("gerar.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "nome=" + encodeURIComponent(nome)
  })
  .then(response => response.json())
  .then(data => {
    document.getElementById("frase").innerText = data.frase;
    document.getElementById("imagem").src = data.imagem;
  })
  .catch(error => {
    console.error("Erro:", error);
  });
}