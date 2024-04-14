
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ranking - 1ª Etapa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="accordion-collapse" data-accordion="collapse">
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 1
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-1">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-1"
                                aria-controls="accordion-collapse-body-etapa-1">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 1 - 03/02</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-etapa-1" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-etapa-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="collapse" >

                                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 25px">
                                        <div class="flex flex-col items-center" style="margin: 20px">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Maior Peixe</h5>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                           <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
                                                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                        <th scope="col" class="px-3 py-2">Nome Equipe</th>
                                                        <th scope="col" class="px-3 py-2">Tamanho</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{  $etapa1_maior_peixe[0]->numero_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa1_maior_peixe[0]->nome_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa1_maior_peixe[0]->maior_peixe }}</td>
                                                </tbody>
                                           </table>
                                        </div>
                                    </div>
                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Peixe</th>
                                                <th scope="col" class="px-3 py-2">2º Peixe</th>
                                                <th scope="col" class="px-3 py-2">3º Peixe</th>
                                                <th scope="col" class="px-3 py-2">4º Peixe</th>
                                                <th scope="col" class="px-3 py-2">5º Peixe</th>
                                                <th scope="col" class="px-3 py-2">Penalidade</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa1 as $list1)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list1['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $list1['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list1['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list1['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list1['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">T: {{ $list1['peixe_1'] }} <p>P: {{ $list1['penalidade_1'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list1['peixe_2'] }} <p>P: {{ $list1['penalidade_2'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list1['peixe_3'] }} <p>P: {{ $list1['penalidade_3'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list1['peixe_4'] }} <p>P: {{ $list1['penalidade_4'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list1['peixe_5'] }} <p>P: {{ $list1['penalidade_5'] }} </p></td>
                                                    <td class="px-3 py-2"> {{ $list1['penalidade_chegada'] }}</td>
                                                    <td class="px-3 py-2"> {{ $list1['total'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 2
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-2">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-2"
                                aria-controls="accordion-collapse-body-etapa-2">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 2 - 20/04</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-etapa-2" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-etapa-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="collapse" >

                                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 25px">
                                        <div class="flex flex-col items-center" style="margin: 20px">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Maior Peixe</h5>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
                                                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                        <th scope="col" class="px-3 py-2">Nome Equipe</th>
                                                        <th scope="col" class="px-3 py-2">Tamanho</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{  $etapa2_maior_peixe[0]->numero_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa2_maior_peixe[0]->nome_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa2_maior_peixe[0]->maior_peixe }}</td>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Peixe</th>
                                                <th scope="col" class="px-3 py-2">2º Peixe</th>
                                                <th scope="col" class="px-3 py-2">3º Peixe</th>
                                                <th scope="col" class="px-3 py-2">4º Peixe</th>
                                                <th scope="col" class="px-3 py-2">5º Peixe</th>
                                                <th scope="col" class="px-3 py-2">Penalidade</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa2 as $list2)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list2['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $list2['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list2['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list2['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list2['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">T: {{ $list2['peixe_1'] }} <p>P: {{ $list2['penalidade_1'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list2['peixe_2'] }} <p>P: {{ $list2['penalidade_2'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list2['peixe_3'] }} <p>P: {{ $list2['penalidade_3'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list2['peixe_4'] }} <p>P: {{ $list2['penalidade_4'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list2['peixe_5'] }} <p>P: {{ $list2['penalidade_5'] }} </p></td>
                                                    <td class="px-3 py-2"> {{ $list2['penalidade_chegada'] }}</td>
                                                    <td class="px-3 py-2"> {{ $list2['total'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 3
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-3">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200  focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-3"
                                aria-controls="accordion-collapse-body-etapa-3">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 3 - 08/06</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-etapa-3" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-etapa-3">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="collapse" >

                                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 25px">
                                        <div class="flex flex-col items-center" style="margin: 20px">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Maior Peixe</h5>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
                                                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                        <th scope="col" class="px-3 py-2">Nome Equipe</th>
                                                        <th scope="col" class="px-3 py-2">Tamanho</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{  $etapa3_maior_peixe[0]->numero_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa3_maior_peixe[0]->nome_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa3_maior_peixe[0]->maior_peixe }}</td>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Peixe</th>
                                                <th scope="col" class="px-3 py-2">2º Peixe</th>
                                                <th scope="col" class="px-3 py-2">3º Peixe</th>
                                                <th scope="col" class="px-3 py-2">4º Peixe</th>
                                                <th scope="col" class="px-3 py-2">5º Peixe</th>
                                                <th scope="col" class="px-3 py-2">Penalidade</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa3 as $list3)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list3['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $list3['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list3['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list3['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list3['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">T: {{ $list3['peixe_1'] }} <p>P: {{ $list3['penalidade_1'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list3['peixe_2'] }} <p>P: {{ $list3['penalidade_2'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list3['peixe_3'] }} <p>P: {{ $list3['penalidade_3'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list3['peixe_4'] }} <p>P: {{ $list3['penalidade_4'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list3['peixe_5'] }} <p>P: {{ $list3['penalidade_5'] }} </p></td>
                                                    <td class="px-3 py-2"> {{ $list3['penalidade_chegada'] }}</td>
                                                    <td class="px-3 py-2"> {{ $list3['total'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 4
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-4">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200  focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-4"
                                aria-controls="accordion-collapse-body-etapa-4">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 4 - 24/08</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-etapa-4" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-etapa-4">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="collapse" >

                                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 25px">
                                        <div class="flex flex-col items-center" style="margin: 20px">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Maior Peixe</h5>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
                                                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                        <th scope="col" class="px-3 py-2">Nome Equipe</th>
                                                        <th scope="col" class="px-3 py-2">Tamanho</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{  $etapa4_maior_peixe[0]->numero_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa4_maior_peixe[0]->nome_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa4_maior_peixe[0]->maior_peixe }}</td>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Peixe</th>
                                                <th scope="col" class="px-3 py-2">2º Peixe</th>
                                                <th scope="col" class="px-3 py-2">3º Peixe</th>
                                                <th scope="col" class="px-3 py-2">4º Peixe</th>
                                                <th scope="col" class="px-3 py-2">5º Peixe</th>
                                                <th scope="col" class="px-3 py-2">Penalidade</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa4 as $list4)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list4['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $list4['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list4['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list4['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list4['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">T: {{ $list4['peixe_1'] }} <p>P: {{ $list4['penalidade_1'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list4['peixe_2'] }} <p>P: {{ $list4['penalidade_2'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list4['peixe_3'] }} <p>P: {{ $list4['penalidade_3'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list4['peixe_4'] }} <p>P: {{ $list4['penalidade_4'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list4['peixe_5'] }} <p>P: {{ $list4['penalidade_5'] }} </p></td>
                                                    <td class="px-3 py-2"> {{ $list4['penalidade_chegada'] }}</td>
                                                    <td class="px-3 py-2"> {{ $list4['total'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 5
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-5">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200  focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-5"
                                aria-controls="accordion-collapse-body-etapa-5">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 5 - 19/10</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-etapa-5" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-etapa-5">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="collapse" >

                                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 25px">
                                        <div class="flex flex-col items-center" style="margin: 20px">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Maior Peixe</h5>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
                                                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                        <th scope="col" class="px-3 py-2">Nome Equipe</th>
                                                        <th scope="col" class="px-3 py-2">Tamanho</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{  $etapa5_maior_peixe[0]->numero_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa5_maior_peixe[0]->nome_equipe }}</td>
                                                    <td class="px-6 py-4">{{  $etapa5_maior_peixe[0]->maior_peixe }}</td>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Peixe</th>
                                                <th scope="col" class="px-3 py-2">2º Peixe</th>
                                                <th scope="col" class="px-3 py-2">3º Peixe</th>
                                                <th scope="col" class="px-3 py-2">4º Peixe</th>
                                                <th scope="col" class="px-3 py-2">5º Peixe</th>
                                                <th scope="col" class="px-3 py-2">Penalidade</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa5 as $list5)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list5['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $list5['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list5['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list5['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list5['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">T: {{ $list5['peixe_1'] }} <p>P: {{ $list5['penalidade_1'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list5['peixe_2'] }} <p>P: {{ $list5['penalidade_2'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list5['peixe_3'] }} <p>P: {{ $list5['penalidade_3'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list5['peixe_4'] }} <p>P: {{ $list5['penalidade_4'] }} </p></td>
                                                    <td class="px-3 py-2">T: {{ $list5['peixe_5'] }} <p>P: {{ $list5['penalidade_5'] }} </p></td>
                                                    <td class="px-3 py-2"> {{ $list5['penalidade_chegada'] }}</td>
                                                    <td class="px-3 py-2"> {{ $list5['total'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>