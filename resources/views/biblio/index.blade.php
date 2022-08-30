<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">

                                        <div class="BarraPesquisa">
                                                <select name="" id="selectCat">
                                                    <option value="livro" selected>Livros</option>
                                                    <option value="eBook">E-book</option>
                                                    <option value="docHist">Documento históricos</option>
                                                    {{-- <option value="livro">Livros</option> --}}
                                                </select>
                                               {{-- precisa do csrf pra funcionar --}}
                                                <input type="hidden" value="{{ csrf_token() }}" id="token">
                                                <input type="search" name="pesquisa" id="search">
                                                <button id="pesquisa">Pesquisar</button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="grid">


                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
