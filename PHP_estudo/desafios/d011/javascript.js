mudaValor();

function mudaValor(){
    let p = document.getElementById("p");
    let t = document.getElementById("taxaReajusteId");

    p.innerText = t.value+"%";
}