<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped full">
                        <thead>
                            <tr>
                                <th>Capa</th>
                                <th>Nome Livro</th>
                                <th>Status do pedido</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido )

                                <tr>
                                    <td><img style ='height: 100px; width:80px'src="/img/{{$pedido->img}}.jpg" alt=""></td>
                                    <td>{{$pedido->nome}}</td>
                                    <td>{{$pedido->estatus}}</td>
                                    {{-- se der tempo  --}}
                                    <td> <a href="\#">Concluir pedido</a> <a href="#">Cancelar pedido</a></td>
                                    {{-- <td>
                                        <a class="bi bi-pencil-square text-black" href="/cursos/{{ $curso->id }}/edit">Editar</a>
                                        <!-- <a class="btn btn-info" href="/cursos/{{ $curso->id }}/show">Ver</a> -->
                                        <a class="bi bi-trash3 text-black" href="/cursos/{{ $curso->id }}/destroy">Remover</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

