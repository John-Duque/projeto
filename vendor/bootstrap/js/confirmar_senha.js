function confirmarSenhasIguais()
{
    var senha = document.getElementById("senha").value;
    var confirmar_senha = document.getElementById("confirmar_senha").value;
    var texto = document.getElementById("texto");
    var texto1 = document.getElementById("texto1");

    if (confirmar_senha == "" && senha == "")
    {
        texto.innerHTML= "Campos vazios"
        texto1.innerHTML= "Campos vazios"
    }
    else
    {
        if (senha != confirmar_senha)
        {
            texto.innerHTML = "Deu errado"
            texto1.innerHTML = "Deu errado"
            texto.style.color = "red"
            texto1.style.color = "red"
        }
        else
        {  
            texto.innerHTML = "Deu certo"
            texto1.innerHTML = "Deu certo"
            texto.style.color = "green"
            texto1.style.color = "green"
        }
    }
}