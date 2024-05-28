
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ranking Geral') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="accordion-collapse" data-accordion="open">
                    {{-- //////////////////////////////////////////////////////////////////////////////////
                    **********************************************************************************
                    ETAPA 1
                    **********************************************************************************
                    ////////////////////////////////////////////////////////////////////////////////// --}}
                        <h2 id="accordion-collapse-heading-etapa-1">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-1"
                                aria-expanded="true"
                                aria-controls="accordion-collapse-body-etapa-1">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Ranking Geral</span>
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
                                <div id="accordion-collapse-1-linha" data-accordion="open" >                                    
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-3 py-2" width="10px">Posição</th>
                                                <th scope="col" class="px-3 py-2">Nº Equipe</th>    
                                                <th scope="col" class="px-3 py-2">Equipe</th>
                                                <th scope="col" class="px-3 py-2">1º Etapa</th>
                                                <th scope="col" class="px-3 py-2">2º Etapa</th>
                                                <th scope="col" class="px-3 py-2">3º Etapa</th>
                                                <th scope="col" class="px-3 py-2">4º Etapa</th>
                                                <th scope="col" class="px-3 py-2">5º Etapa</th>
                                                <th scope="col" class="px-3 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($equipes as $key => $row)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $row['posicao'] }}</td>
                                                    <td class="px-6 py-4">{{ $row['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $row['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $row['numero_equipe'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $row['numero_equipe'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-3 py-2">  @isset($row['etapa_1']) {{ $row['etapa_1'] }}  @endisset </td>
                                                    <td class="px-3 py-2">  @isset($row['etapa_2']) {{ $row['etapa_2'] }}  @endisset </td>
                                                    <td class="px-3 py-2">  @isset($row['etapa_3']) {{ $row['etapa_3'] }}  @endisset </td>
                                                    <td class="px-3 py-2">  @isset($row['etapa_4']) {{ $row['etapa_4'] }}  @endisset </td>
                                                    <td class="px-3 py-2">  @isset($row['etapa_5']) {{ $row['etapa_5'] }}  @endisset </td>
                                                    <td class="px-3 py-2">  @isset($row['total'])   {{ $row['total']   }}  @endisset </td>
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