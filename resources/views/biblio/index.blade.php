<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="py-12 ">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-10 bg-white border-b border-gray-300">

                                        <h1 class="titulo">Catálogo de Livros</h1>

                                        <div class="BarraPesquisa">

                                               {{-- precisa do csrf pra funcionar --}}
                                                <input type="hidden" value="{{ csrf_token() }}" id="token">
                                                <input type="search" name="pesquisa" id="search">
                                                <button class="btn btn-secondary" id="pesquisa">Pesquisar</button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <div id="grid" class="grid">



                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
