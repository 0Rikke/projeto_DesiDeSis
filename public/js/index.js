//
// pesquisa
//
const btnPesquisa = document.getElementById("pesquisa");
const token = document.getElementById("token").value;
const grid = document.querySelector('.grid');

onload = async() =>{

    const respostaLivros = await fetch(`/biblioteca/database/livros`,{
        headers: {
            'X-CSRF-TOKEN': token
        },

    });

    const livros = await respostaLivros.json();
    // console.log(livros);

    livros.forEach(livro => {
        const grid = document.getElementById('grid');
        const div = document.createElement('div');
        const btn = document.create
        const p = document.createElement('p');

        p.innerHTML =   livro.nome;

        div.setAttribute('class','iten');
        div.append(p);
        grid.append(div);
    });

};




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
        // console.log(result);
});
//

//         const tr = document.createElement("")
//         tr.setAttribute('id', id)

//         result.forEach( livro => {




//         });
// })


//
// caregar os livro
//


