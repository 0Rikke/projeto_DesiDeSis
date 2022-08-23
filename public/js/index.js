//
// pesquisa
//
const btnPesquisa = document.getElementById("pesquisa");
const token = document.getElementById("token").value;
const grid = document.querySelector('.grid');



btnPesquisa.addEventListener("click", async () => {
    const pesquisa = document.getElementById("search").value;

    const body = new FormData()

    body.append('csrf-token',token);
    body.append('pesquisa', pesquisa);


        const resposta = await fetch(`/biblioteca/database/pesquisa`,{
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': token
            },
            body
        });

        const result = await resposta.json();

        const tr = document.createElement("")
        tr.setAttribute('id', id)
        
        result.forEach( livro => {
            



        });
})


//
// caregar os livro
//


// onload async() => {

//     const grid = document.querySelector('.grid');





// }