function carregarusuario(){
    var usuariologado = localStorage.getItem("logado"); 
    if (usuariologado==null) {
        window.location="login.html";
    }else {
        var usuariojson= JSON.parse(usuariologado);
        document.getElementById("foto").innerHTML = 
        "<img width='25%' height='25%' alt='Foto não encontrada' src=imagens/"  + usuariologado.foto + ">";
        document.getElementById("dados").innerHTML=
        "<h3>" + usuariojson.nome + "<br>" +  usuariojson.email + "<br>ID:" + usuariojson.id + "<br></h3>";
      }
}

function logar() {
    
    var objeto = {
        "email": document.getElementById("txtemail").value,
        "senha": document.getElementById("txtsenha").value
    }
    var cabecalho = {
        method: "POST",
        body: JSON.stringify(objeto),
        headers: { "Content-type": "application/json" }
    }

    fetch("http://localhost:8080/login", cabecalho)
        .then(res=> res.json())
        .then(res=>{
            localStorage.setItem("logado", json.stringify(res));
            window.location="usuario.html";
        })
        .catch(err=>{
            window.alert("Deu ruim");
        });





}
