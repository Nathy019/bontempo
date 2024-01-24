const termpriv = document.getElementById("termpriv");

if(termpriv){
    termpriv.addEventListener("submit", async (e) =>{
        e.preventDefault();
        const dadosform = new FormData(termpriv);

        await fetch("index.php", {
            method: "POST",
            body: dadosform
        });
const resposta = await dadosform.json();
if(resposta['status']){
    Swal.fire('obrigado', ' Seus dados foram enviados com sucesso. Nossos consultores entraram em contato para atende-lo.' , 'success');

}else{
    
}
    })
}


// function alert(){
//     Swal.fire('obrigado', ' Seus dados foram enviados com sucesso. Nossos consultores entraram em contato para atende-lo.' , 'success');
// }
// alert()