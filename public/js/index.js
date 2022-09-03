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



const select = document.getElementById('selectCat');


select.addEventListener('change', async ()=>{
    const valorSelect = select.value;
    body = new FormData();
    body.append('tipo',valorSelect);
    const resposta = await fetch(`/biblioteca/database/categoria`,{
        method:'POST',
        headers: {
            'X-CSRF-TOKEN': token
        },
        body
    });

        const result = await resposta.json();
        console.log(result);

        grid.innerHTML= '';
        const div = document.createElement('div');
        const p = document.createElement('p');

        result.forEach($tipo => {
        const div = document.createElement('div');
        const p = document.createElement('p');
        const btnbuy = document.createElement('button');
        const btnoutro = document.createElement('button');
        btnoutro.setAttribute('class','btn btn-block')
        btnoutro.innerHTML = "outro"
        btnbuy.setAttribute('class','btn')
        btnbuy.innerHTML = "buy"
        btnoutro.innerHTML = 'outro'
        p.innerHTML= $tipo['nome'];
        div.append(p)
        div.append(btnbuy)
        div.append(btnoutro)
        grid.append(div)
        div.setAttribute('class','iten')
        });

})

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


