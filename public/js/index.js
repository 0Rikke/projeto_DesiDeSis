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

    livros.forEach(tipo => {
        var $msg = "";
        const idUser = document.getElementById('idUser').value
        const div = document.createElement('div');
        const p = document.createElement('p');
        const img = document.createElement('img');
        const btnbuy = document.createElement('button');
        img.src = "img/"+tipo.img+".jpg";
        img.style.height = '250px'
        img.style.margin = '0px auto';
        btnbuy.addEventListener('click',async()=>{
            msg(tipo.img);
            body = new FormData();
            body.append('idUser',idUser);
            body.append('idLivro', tipo.id)
            body.append('estatus', 'em andamento')
            try{
            const resposta = await fetch(`biblioteca/database/pedidos`,{
                method:'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body
    });
            $msg = "Adicionado ao carrinho";
            console.log($msg)

            }catch(e){
                $msg = "Ocorreu um erro não inclusão do pedido"
                return $msg
            }
        })
        btnbuy.innerHTML = "Add to cart"
        btnbuy.setAttribute('class','botao');
        p.innerHTML= tipo.nome;
        //console.log(tipo.img)
        div.append(p)
        div.append(img)
        div.append(btnbuy)
        grid.append(div)
        div.setAttribute('class','iten')
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
        // console.log(result);

        grid.innerHTML= '';
        const div = document.createElement('div');
        const p = document.createElement('p');

        result.forEach(tipo => {
            var $msg = "";
        const idUser = document.getElementById('idUser').value
        const div = document.createElement('div');
        const p = document.createElement('p');
        const img = document.createElement('img');
        const btnbuy = document.createElement('button');
        img.src = "img/"+tipo.img+".jpg";
        img.style.height = '250px'
        img.style.margin = '0px auto';
        btnbuy.addEventListener('click',async()=>{
            msg(tipo.img);
            body = new FormData();
            body.append('idUser',idUser);
            body.append('idLivro', tipo.id)
            body.append('estatus', 'em andamento')
            try{
            const resposta = await fetch(`biblioteca/database/pedidos`,{
                method:'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body
    });
            $msg = "Adicionado ao carrinho";
            console.log($msg)

            }catch(e){
                $msg = "Ocorreu um erro não inclusão do pedido"
                return $msg
            }
})
            btnbuy.innerHTML = "Add to cart"
            btnbuy.setAttribute('class','botao');
            p.innerHTML= tipo.nome;
            //console.log(tipo.img)
            div.append(p)
            div.append(img)
            div.append(btnbuy)
            grid.append(div)
            div.setAttribute('class','iten')
            });
});



btnPesquisa.addEventListener("click", async () => {
    const pesquisa = document.getElementById("search").value;
    body = new FormData();
    body.append('pesquisa',pesquisa);

    const resposta = await fetch(`/biblioteca/database/pesquisa`,{
        method:'POST',
        headers: {
            'X-CSRF-TOKEN': token
        },
        body
    });
        const h1 = document.getElementById('title_pesquisa');
        h1.innerHTML = ''
        h1.innerHTML = 'Resultado da consulta'

        const result = await resposta.json();
        const divRes = document.getElementById('gridpesq')


        result.forEach(pesq =>{

        const h1 = document.getElementById('title_pesquisa');
        h1.innerHTML
        const idUser = document.getElementById('idUser').value
        const div = document.createElement('div');
        const p = document.createElement('p');
        const img = document.createElement('img');
        const btnbuy = document.createElement('button');
        img.src = "img/"+pesq.img+".jpg";
        img.style.height = '250px'
        img.style.margin = '0px auto';
        btnbuy.addEventListener('click',async()=>{

            msg(pesq.img);


            body = new FormData();
            body.append('idUser',idUser);
            body.append('idLivro', pesq.id)
            body.append('estatus', 'em andamento')
            try{
            const resposta = await fetch(`biblioteca/database/pedidos`,{
                method:'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body
    });
            $msg = "Adicionado ao carrinho";
            console.log($msg)

            }catch(e){
                $msg = "Ocorreu um erro não inclusão do pedido"
                return $msg
            }

})
            btnbuy.innerHTML = "Add to cart"
            btnbuy.setAttribute('class','botao');
            p.innerHTML= pesq.nome;

            //console.log(tipo.img)

            div.append(p)
            div.append(img)
            div.append(btnbuy)
            div.setAttribute('class','iten pesq')

            divRes.append(div)



        });




});

function msg(img){
        const divRes = document.getElementById('msg')
        const imagem = document.createElement('img');
        const div = document.createElement('div');
        const p = document.createElement('p')
        div.setAttribute('class','sucessMsg')

        p.style.display = 'flex'
        imagem.src = 'img/'+img+'.jpg'
        imagem.style.maxHeight = '200px'


            div.append(p);
            div.append(imagem)
            divRes.append(div);

            p.innerHTML = 'Adicionado ao carrinho'
    setTimeout(function(){
        div.innerHTML = ''
        div.style.display = 'none'
    }, 4000);

    }

