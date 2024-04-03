<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('MediÃ§Ã£o') }}
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
                                data-accordion-target="#accordion-collapse-body-etapa-1" aria-expanded="true"
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
                            <div
                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-1-linha" data-accordion="">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3" width="10px">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-2 py-1" width="10px"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa1 as $list1)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list1['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list1['nome_equipe'] }}
                                                        <div id="accordion-collapse-1-linha-body-{{ $list1['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-1-linha-heading-{{ $list1['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                <form action="{{ url('insertDadosMedicaoEtapa1') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                        <input type="hidden"
                                                                            id="equipe_{{ $list1['id'] }}"
                                                                            value="{{ $list1['numero_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="nomeequipe_{{ $list1['id'] }}"
                                                                            value="{{ $list1['nome_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="etapa_{{ $list1['id'] }}"
                                                                            value="{{ $list1['etapa'] }}">
                                                                        <div>
                                                                            <label for="peixe_1_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_1_{{ $list1['id'] }}"
                                                                                value="{{ $list1['peixe_1'] }}"
                                                                                class="peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_1_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_1_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_1'] }}"
                                                                                class="penalidade_peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_2_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_2_{{ $list1['id'] }}"
                                                                                value="{{ $list1['peixe_2'] }}"
                                                                                class="peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 2">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_2_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_2_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_2'] }}"
                                                                                class="penalidade_peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 2" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_3_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_3_{{ $list1['id'] }}"
                                                                                value="{{ $list1['peixe_3'] }}"
                                                                                class="peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 3">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_3_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_3_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_3'] }}"
                                                                                class="penalidade_peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 3" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_4_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_4_{{ $list1['id'] }}"
                                                                                value="{{ $list1['peixe_4'] }}"
                                                                                class="peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 4">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_4_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_4_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_4'] }}"
                                                                                class="penalidade_peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 4" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_5_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                5 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_5_{{ $list1['id'] }}"
                                                                                value="{{ $list1['peixe_5'] }}"
                                                                                class="peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_peixe_5_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 5
                                                                                (cm)
                                                                            </label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_5_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_5'] }}"
                                                                                class="penalidade_peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_chegada_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Chegada
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_chegada_{{ $list1['id'] }}"
                                                                                value="{{ $list1['penalidade_chegada'] }}"
                                                                                class="penalidade_chegada bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Chegada">
                                                                        </div>
                                                                        <div>
                                                                            <label for="total_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="total_{{ $list1['id'] }}"
                                                                                value="{{ $list1['total'] }}"
                                                                                class="total bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Total" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        id="save_{{ $list1['id'] }}"
                                                                        class="buttonSave focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar
                                                                            e Imprimir Comprovante</b></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4"
                                                        id="accordion-collapse-1-linha-heading-{{ $list1['id'] }}"
                                                        data-accordion-target="#accordion-collapse-1-linha-body-{{ $list1['id'] }}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-collapse-1-linha-body-{{ $list1['id'] }}">
                                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 10 6">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5 5 1 1 5" />
                                                        </svg>
                                                    </td>
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
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-2" aria-expanded="true"
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
                            <div
                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-2-linha" data-accordion="collapse">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3" width="10px">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-2 py-1" width="10px"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa2 as $list2)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list2['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list2['nome_equipe'] }}
                                                        <div id="accordion-collapse-2-linha-body-{{ $list2['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-2-linha-heading-{{ $list2['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                <form action="{{ url('insertDadosMedicaoEtapa1') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                        <input type="hidden"
                                                                            id="equipe_{{ $list2['id'] }}"
                                                                            value="{{ $list2['numero_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="nomeequipe_{{ $list2['id'] }}"
                                                                            value="{{ $list2['nome_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="etapa_{{ $list2['id'] }}"
                                                                            value="{{ $list2['etapa'] }}">
                                                                        <div>
                                                                            <label for="peixe_1_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_1_{{ $list2['id'] }}"
                                                                                value="{{ $list2['peixe_1'] }}"
                                                                                class="peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 1">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_1_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_1_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_1'] }}"
                                                                                class="penalidade_peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_2_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_2_{{ $list2['id'] }}"
                                                                                value="{{ $list2['peixe_2'] }}"
                                                                                class="peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 2">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_2_{{ $list1['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_2_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_2'] }}"
                                                                                class="penalidade_peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 2" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_3_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_3_{{ $list2['id'] }}"
                                                                                value="{{ $list2['peixe_3'] }}"
                                                                                class="peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 3">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_3_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_3_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_3'] }}"
                                                                                class="penalidade_peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 3" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_4_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_4_{{ $list2['id'] }}"
                                                                                value="{{ $list2['peixe_4'] }}"
                                                                                class="peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 4">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_4_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_4_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_4'] }}"
                                                                                class="penalidade_peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 4" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_5_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                5 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_5_{{ $list2['id'] }}"
                                                                                value="{{ $list2['peixe_5'] }}"
                                                                                class="peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_peixe_5_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 5
                                                                                (cm)
                                                                            </label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_5_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_5'] }}"
                                                                                class="penalidade_peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_chegada_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Chegada
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_chegada_{{ $list2['id'] }}"
                                                                                value="{{ $list2['penalidade_chegada'] }}"
                                                                                class="penalidade_chegada bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Chegada">
                                                                        </div>
                                                                        <div>
                                                                            <label for="total_{{ $list2['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="total_{{ $list2['id'] }}"
                                                                                value="{{ $list2['total'] }}"
                                                                                class="total bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Total" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        id="save_{{ $list2['id'] }}"
                                                                        class="buttonSave focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar
                                                                            e Imprimir Comprovante</b></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4"
                                                        id="accordion-collapse-2-linha-heading-{{ $list2['id'] }}"
                                                        data-accordion-target="#accordion-collapse-2-linha-body-{{ $list2['id'] }}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-collapse-2-linha-body-{{ $list2['id'] }}">
                                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 10 6">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5 5 1 1 5" />
                                                        </svg>
                                                    </td>
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
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-3" aria-expanded="true"
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
                            <div
                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-3-linha" data-accordion="collapse">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3" width="10px">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-2 py-1" width="10px"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa3 as $list3)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list3['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list3['nome_equipe'] }}
                                                        <div id="accordion-collapse-3-linha-body-{{ $list3['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-3-linha-heading-{{ $list3['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                <form action="{{ url('insertDadosMedicaoEtapa1') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                        <input type="hidden"
                                                                            id="equipe_{{ $list3['id'] }}"
                                                                            value="{{ $list3['numero_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="nomeequipe_{{ $list3['id'] }}"
                                                                            value="{{ $list3['nome_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="etapa_{{ $list3['id'] }}"
                                                                            value="{{ $list3['etapa'] }}">
                                                                        <div>
                                                                            <label for="peixe_1_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_1_{{ $list3['id'] }}"
                                                                                value="{{ $list3['peixe_1'] }}"
                                                                                class="peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 1">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_1_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_1_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_1'] }}"
                                                                                class="penalidade_peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_2_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_2_{{ $list3['id'] }}"
                                                                                value="{{ $list3['peixe_2'] }}"
                                                                                class="peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 2">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_2_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_2_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_2'] }}"
                                                                                class="penalidade_peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 2" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_3_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_3_{{ $list3['id'] }}"
                                                                                value="{{ $list3['peixe_3'] }}"
                                                                                class="peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 3">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_3_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_3_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_3'] }}"
                                                                                class="penalidade_peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 3" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_4_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_4_{{ $list3['id'] }}"
                                                                                value="{{ $list3['peixe_4'] }}"
                                                                                class="peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 4">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_4_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_4_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_4'] }}"
                                                                                class="penalidade_peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 4" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_5_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                5 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_5_{{ $list3['id'] }}"
                                                                                value="{{ $list3['peixe_5'] }}"
                                                                                class="peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_peixe_5_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 5
                                                                                (cm)
                                                                            </label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_5_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_5'] }}"
                                                                                class="penalidade_peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_chegada_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Chegada
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_chegada_{{ $list3['id'] }}"
                                                                                value="{{ $list3['penalidade_chegada'] }}"
                                                                                class="penalidade_chegada bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Chegada">
                                                                        </div>
                                                                        <div>
                                                                            <label for="total_{{ $list3['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="total_{{ $list3['id'] }}"
                                                                                value="{{ $list3['total'] }}"
                                                                                class="total bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Total" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        id="save_{{ $list3['id'] }}"
                                                                        class="buttonSave focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar
                                                                            e Imprimir Comprovante</b></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4"
                                                        id="accordion-collapse-3-linha-heading-{{ $list3['id'] }}"
                                                        data-accordion-target="#accordion-collapse-3-linha-body-{{ $list3['id'] }}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-collapse-3-linha-body-{{ $list3['id'] }}">
                                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 10 6">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5 5 1 1 5" />
                                                        </svg>
                                                    </td>
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
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-4" aria-expanded="true"
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
                            <div
                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-4-linha" data-accordion="collapse">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3" width="10px">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-2 py-1" width="10px"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa4 as $list4)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list4['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list4['nome_equipe'] }}
                                                        <div id="accordion-collapse-4-linha-body-{{ $list4['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-4-linha-heading-{{ $list4['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                <form action="{{ url('insertDadosMedicaoEtapa1') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                        <input type="hidden"
                                                                            id="equipe_{{ $list4['id'] }}"
                                                                            value="{{ $list4['numero_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="nomeequipe_{{ $list4['id'] }}"
                                                                            value="{{ $list4['nome_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="etapa_{{ $list4['id'] }}"
                                                                            value="{{ $list4['etapa'] }}">
                                                                        <div>
                                                                            <label for="peixe_1_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_1_{{ $list4['id'] }}"
                                                                                value="{{ $list4['peixe_1'] }}"
                                                                                class="peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 1">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_1_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_1_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_1'] }}"
                                                                                class="penalidade_peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_2_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_2_{{ $list4['id'] }}"
                                                                                value="{{ $list4['peixe_2'] }}"
                                                                                class="peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 2">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_2_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_2_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_2'] }}"
                                                                                class="penalidade_peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 2" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_3_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_3_{{ $list4['id'] }}"
                                                                                value="{{ $list4['peixe_3'] }}"
                                                                                class="peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 3">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_3_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_3_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_3'] }}"
                                                                                class="penalidade_peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 3" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_4_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_4_{{ $list4['id'] }}"
                                                                                value="{{ $list4['peixe_4'] }}"
                                                                                class="peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 4">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_4_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_4_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_4'] }}"
                                                                                class="penalidade_peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 4" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_5_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                5 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_5_{{ $list4['id'] }}"
                                                                                value="{{ $list4['peixe_5'] }}"
                                                                                class="peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_peixe_5_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 5
                                                                                (cm)
                                                                            </label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_5_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_5'] }}"
                                                                                class="penalidade_peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_chegada_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Chegada
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_chegada_{{ $list4['id'] }}"
                                                                                value="{{ $list4['penalidade_chegada'] }}"
                                                                                class="penalidade_chegada bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Chegada">
                                                                        </div>
                                                                        <div>
                                                                            <label for="total_{{ $list4['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="total_{{ $list4['id'] }}"
                                                                                value="{{ $list4['total'] }}"
                                                                                class="total bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Total" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        id="save_{{ $list4['id'] }}"
                                                                        class="buttonSave focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar
                                                                            e Imprimir Comprovante</b></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4"
                                                        id="accordion-collapse-4-linha-heading-{{ $list4['id'] }}"
                                                        data-accordion-target="#accordion-collapse-4-linha-body-{{ $list4['id'] }}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-collapse-4-linha-body-{{ $list4['id'] }}">
                                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 10 6">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5 5 1 1 5" />
                                                        </svg>
                                                    </td>
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
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-etapa-5" aria-expanded="true"
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
                            <div
                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <div id="accordion-collapse-5-linha" data-accordion="collapse">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-2 py-1" width="10px"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa5 as $list5)
                                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list5['numero_equipe'] }}</td>
                                                    <th class="px-6 py-4">
                                                        {{ $list5['nome_equipe'] }}
                                                        <div id="accordion-collapse-5-linha-body-{{ $list5['id'] }}"
                                                            class="hidden"
                                                            aria-labelledby="accordion-collapse-5-linha-heading-{{ $list5['id'] }}">
                                                            <div
                                                                class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                                <form action="{{ url('insertDadosMedicaoEtapa1') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                        <input type="hidden"
                                                                            id="equipe_{{ $list5['id'] }}"
                                                                            value="{{ $list5['numero_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="nomeequipe_{{ $list5['id'] }}"
                                                                            value="{{ $list5['nome_equipe'] }}">
                                                                        <input type="hidden"
                                                                            id="etapa_{{ $list5['id'] }}"
                                                                            value="{{ $list5['etapa'] }}">
                                                                        <div>
                                                                            <label for="peixe_1_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_1_{{ $list5['id'] }}"
                                                                                value="{{ $list5['peixe_1'] }}"
                                                                                class="peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 1">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_1_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 1 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_1_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_1'] }}"
                                                                                class="penalidade_peixe_1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 1" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_2_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_2_{{ $list5['id'] }}"
                                                                                value="{{ $list5['peixe_2'] }}"
                                                                                class="peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 2">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_2_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 2 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_2_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_2'] }}"
                                                                                class="penalidade_peixe_2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 2" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_3_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_3_{{ $list5['id'] }}"
                                                                                value="{{ $list5['peixe_3'] }}"
                                                                                class="peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 3">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_3_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 3 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_3_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_3'] }}"
                                                                                class="penalidade_peixe_3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 3" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_4_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_4_{{ $list5['id'] }}"
                                                                                value="{{ $list5['peixe_4'] }}"
                                                                                class="peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 4">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for= "penalidade_peixe_4_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 4 ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_4_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_4'] }}"
                                                                                class="penalidade_peixe_4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 4" required>
                                                                        </div>
                                                                        <div>
                                                                            <label for="peixe_5_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peixe
                                                                                5 ( cm )</label>
                                                                            <input type="number"
                                                                                id="peixe_5_{{ $list5['id'] }}"
                                                                                value="{{ $list5['peixe_5'] }}"
                                                                                class="peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_peixe_5_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Peixe 5
                                                                                (cm)
                                                                            </label>
                                                                            <input type="number"
                                                                                id="penalidade_peixe_5_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_5'] }}"
                                                                                class="penalidade_peixe_5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Peixe 5">
                                                                        </div>
                                                                        <div>
                                                                            <label
                                                                                for="penalidade_chegada_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penalidade
                                                                                Chegada
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="penalidade_chegada_{{ $list5['id'] }}"
                                                                                value="{{ $list5['penalidade_chegada'] }}"
                                                                                class="penalidade_chegada bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Penalidade Chegada">
                                                                        </div>
                                                                        <div>
                                                                            <label for="total_{{ $list5['id'] }}"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                                ( cm )</label>
                                                                            <input type="number"
                                                                                id="total_{{ $list5['id'] }}"
                                                                                value="{{ $list5['total'] }}"
                                                                                class="total bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Total" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        id="save_{{ $list5['id'] }}"
                                                                        class="buttonSave focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar
                                                                            e Imprimir Comprovante</b></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4"
                                                        id="accordion-collapse-5-linha-heading-{{ $list5['id'] }}"
                                                        data-accordion-target="#accordion-collapse-5-linha-body-{{ $list5['id'] }}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-collapse-5-linha-body-{{ $list5['id'] }}">
                                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 10 6">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5 5 1 1 5" />
                                                        </svg>
                                                    </td>
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

    <script>
        $(document).ready(function() {
            $('.peixe_1').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                somaTotal(valueInput, idLinha)
            });

            $('.peixe_2').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                somaTotal(valueInput, idLinha)
            });

            $('.peixe_3').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                console.log(valueInput);
                console.log(idLinha);

                somaTotal(valueInput, idLinha)
            });

            $('.peixe_4').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                somaTotal(valueInput, idLinha)
            });

            $('.peixe_5').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_peixe_1').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[3]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_peixe_2').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[3]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_peixe_3').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[3]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_peixe_4').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[3]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_peixe_5').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[3]

                somaTotal(valueInput, idLinha)
            });

            $('.penalidade_chegada').on("input", function() {
                var valueInput = this.value;
                var id = this.id;
                var idSplited = id.split('_')
                var idLinha = idSplited[2]

                somaTotal(valueInput, idLinha)
            });

            $('.buttonSave').on("click", function() {
                var id = this.id;
                var idSplited = id.split('_');
                var idLinha = idSplited[1];

                sendForm(idLinha)
            });

            $('.buttonPrint').on("click", function() {
                var id = this.id;
                var idSplited = id.split('_');
                var idLinha = idSplited[1];
                console.log(idLinha);

                getPDF(idLinha);
            });

        });

        function somaTotal(value, id) {
            var soma = 0;
			var peixe_1_validate = true;
            var peixe_2_validate = true;
            var peixe_3_validate = true;
            var peixe_4_validate = true;
            var peixe_5_validate = true;
            var peixe_1 = $("#peixe_1_" + id).val();
            var peixe_2 = $("#peixe_2_" + id).val();
            var peixe_3 = $("#peixe_3_" + id).val();
            var peixe_4 = $("#peixe_4_" + id).val();
            var peixe_5 = $("#peixe_5_" + id).val();
            var penalidade_1 = $("#penalidade_peixe_1_" + id).val();
            var penalidade_2 = $("#penalidade_peixe_2_" + id).val();
            var penalidade_3 = $("#penalidade_peixe_3_" + id).val();
            var penalidade_4 = $("#penalidade_peixe_4_" + id).val();
            var penalidade_5 = $("#penalidade_peixe_5_" + id).val();
			var penalidade_chegada = $("#penalidade_chegada_" + id).val();

			var peixes = [ 
				{
					'peixe': 1,
					'valor': peixe_1,
				},
				{
					'peixe': 2,
					'valor': peixe_2,
				},
				{
					'peixe': 3,
					'valor': peixe_3,
				},
				{
					'peixe': 4,
					'valor': peixe_4,
				},
				{
					'peixe': 5,
					'valor': peixe_5,
				},
		
			];

			var peixesOrdenados = peixes.sort((a, b) => a.valor - b.valor);

			if(peixesOrdenados[0].peixe == 1){
				peixe_1_validate = false
			}

			if(peixesOrdenados[0].peixe == 2){
				peixe_2_validate = false
			}

			if(peixesOrdenados[0].peixe == 3){
				peixe_3_validate = false
			}

			if(peixesOrdenados[0].peixe == 4){
				peixe_4_validate = false
			}

			if(peixesOrdenados[0].peixe == 5){
				peixe_5_validate = false
			}


            if (peixe_1 != '' && peixe_1_validate) {
                if (penalidade_1 != '') {
                    peixe_1 = parseFloat(peixe_1);
                    penalidade_1 = parseFloat(penalidade_1);
                    soma = soma + (peixe_1 - penalidade_1)
                } else {
                    peixe_1 = parseFloat(peixe_1);
                    soma = soma + peixe_1
                }
            }

            if (peixe_2 != '' && peixe_2_validate) {
                if (penalidade_2 != '') {
                    peixe_2 = parseFloat(peixe_2);
                    penalidade_2 = parseFloat(penalidade_2);
                    soma = soma + (peixe_2 - penalidade_2)
                } else {
                    peixe_2 = parseFloat(peixe_2);
                    soma = soma + peixe_2
                }
            }

            if (peixe_3 != '' && peixe_3_validate ) {
                if (penalidade_3 != '') {
                    peixe_3 = parseFloat(peixe_3);
                    penalidade_3 = parseFloat(penalidade_3);
                    soma = soma + (peixe_3 - penalidade_3)
                } else {
                    peixe_3 = parseFloat(peixe_3);
                    soma = soma + peixe_3
                }
            }

            if (peixe_4 != '' && peixe_4_validate ) {
                if (penalidade_4 != '') {
                    peixe_4 = parseFloat(peixe_4);
                    penalidade_4 = parseFloat(penalidade_4);
                    soma = soma + (peixe_4 - penalidade_4)
                } else {
                    peixe_4 = parseFloat(peixe_4);
                    soma = soma + peixe_4
                }
            }

            if (peixe_5 != '' && peixe_5_validate) {
                if (penalidade_5 != '') {
                    peixe_5 = parseFloat(peixe_5);
                    penalidade_5 = parseFloat(penalidade_5);
                    soma = soma + (peixe_5 - penalidade_5)
                } else {
                    peixe_5 = parseFloat(peixe_5);
                    soma = soma + peixe_5
                }
            }

            if (penalidade_chegada != '') {
                penalidade_chegada = parseFloat(penalidade_chegada);
                soma = soma - penalidade_chegada
            }

            soma = soma.toFixed(2);

            var total = $("#total_" + id).val(soma);
        }

        function sendForm(id) {
            var peixe_1 = $("#peixe_1_" + id);
            var peixe_2 = $("#peixe_2_" + id);
            var peixe_3 = $("#peixe_3_" + id);
            var peixe_4 = $("#peixe_4_" + id);
            var peixe_5 = $("#peixe_5_" + id);
			var penalidade_1 = $("#penalidade_peixe_1_" + id);
            var penalidade_2 = $("#penalidade_peixe_2_" + id);
            var penalidade_3 = $("#penalidade_peixe_3_" + id);
            var penalidade_4 = $("#penalidade_peixe_4_" + id);
            var penalidade_5 = $("#penalidade_peixe_5_" + id);

            var penalidade_chegada = $("#penalidade_chegada_" + id);
            var total = $("#total_" + id);

            // remove as mensagens de erro
            $(".erromsg").remove();

            // Mensagem de erro padrÃ£o a ser inserida apÃ³s o campo
            var erromsg =
                '<div class="erromsg" style="color: red;"> Campo Obrigatório! Se necessário inserir 0.<span></span></div>';

            if (!peixe_1.val()) {
                peixe_1.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

            if (!peixe_2.val()) {
                peixe_2.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

            if (!peixe_3.val()) {
                peixe_3.after(erromsg);
                $(".erromsg span").text("");
                return;
            }
            if (!peixe_4.val()) {
                peixe_4.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

            if (!peixe_5.val()) {
                peixe_5.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

            if (!penalidade_1.val()) {
                penalidade_1.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

			if (!penalidade_2.val()) {
                penalidade_2.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

			if (!penalidade_3.val()) {
                penalidade_3.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

			if (!penalidade_4.val()) {
                penalidade_4.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

			if (!penalidade_5.val()) {
                penalidade_5.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

			if (!penalidade_chegada.val()) {
                penalidade_chegada.after(erromsg);
                $(".erromsg span").text("");
                return;
            }

            $.ajax({
                url: "{{ route('insert.medicao1') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    'id': id,
                    'peixe_1': peixe_1.val(),
                    'peixe_2': peixe_2.val(),
                    'peixe_3': peixe_3.val(),
                    'peixe_4': peixe_4.val(),
                    'peixe_5': peixe_5.val(),
                    'penalidade_1': penalidade_1.val(),
					'penalidade_2': penalidade_2.val(),
					'penalidade_3': penalidade_3.val(),
					'penalidade_4': penalidade_4.val(),
					'penalidade_5': penalidade_5.val(),
					'penalidade_chegada': penalidade_chegada.val(),
                    'total': total.val(),
                },
                success: function(data) {
                    alert(data);
                }
            }).then(function(data) {
                getPDF(id);
            })
        }

        function getPDF(id) {
            var peixe_1 = $("#peixe_1_" + id).val();
            var peixe_2 = $("#peixe_2_" + id).val();
            var peixe_3 = $("#peixe_3_" + id).val();
            var peixe_4 = $("#peixe_4_" + id).val();
            var peixe_5 = $("#peixe_5_" + id).val();
			var penalidade_1 = $("#penalidade_peixe_1_" + id).val();
            var penalidade_2 = $("#penalidade_peixe_2_" + id).val();
            var penalidade_3 = $("#penalidade_peixe_3_" + id).val();
            var penalidade_4 = $("#penalidade_peixe_4_" + id).val();
            var penalidade_5 = $("#penalidade_peixe_5_" + id).val();
            var penalidade_chegada = $("#penalidade_chegada_" + id).val();
            var total = $("#total_" + id).val();
            var numequipe = $("#equipe_" + id).val();
            var nomequipe = $("#nomeequipe_" + id).val();
            var etapa = $("#etapa_" + id).val();

            console.log(etapa);

            $.ajax({
                url: "{{ route('pdf.medicao') }}",
                type: 'get',
                xhrFields: {
                    responseType: 'blob'
                },
                data: {
                    'id': id,
                    'peixe_1': peixe_1,
                    'peixe_2': peixe_2,
                    'peixe_3': peixe_3,
                    'peixe_4': peixe_4,
                    'peixe_5': peixe_5,
					'penalidade_1': penalidade_1,
                    'penalidade_2': penalidade_2,
                    'penalidade_3': penalidade_3,
                    'penalidade_4': penalidade_4,
                    'penalidade_5': penalidade_5,
                    'penalidade_chegada': penalidade_chegada,
                    'total': total,
                    'equipe': numequipe,
                    'nomequipe': nomequipe,
                    'etapa': etapa,
                },
                success: function(response) {
                    var blob = new Blob([response]);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "medicao_equipe_" + numequipe + "_etapa_"+etapa+".pdf";
                    link.click();
                },
                error: function(blob) {
                    console.log(blob);
                }
            });
        }
    </script>
</x-app-layout>
