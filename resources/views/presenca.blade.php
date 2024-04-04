<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Presença por Etapa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
					@if (session('status'))
						<div id="alert-border-3"
						class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
						role="alert">
						<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true"
							xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path
								d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
						</svg>
						<div class="ms-3 text-sm font-medium">
							{{ session('status') }}
						</div>
						<button type="submit"
							class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
							data-dismiss-target="#alert-border-3" aria-label="Close">
							<span class="sr-only">Dismiss</span>
							<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
								fill="none" viewBox="0 0 14 14">
								<path stroke="currentColor" stroke-linecap="round"
									stroke-linejoin="round" stroke-width="2"
									d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
							</svg>
						</button>
					</div>
					@endif


                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 1 - 03/02</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden relative overflow-x-auto "
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 relative overflow-x-auto">
                                <form action="{{ url('insertMedicaoEtapa1') }}" method="POST">
                                    @csrf
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-6 py-3">Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa1 as $key => $list1)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list1['numero_equipe'] }}</td>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $list1['equipe'] }}</th>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center me-4">
                                                            <input 
                                                                name="{{$key}}[]" type="checkbox"
                                                                {{ $list1['presenca'] }}
                                                                @if ($list1['presenca'] == 'checked') 
                                                                class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@else
																class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@endif
															/>
															<input type="hidden" name="{{$key}}[]" value="{{$list1['numero_equipe']}}">
															<input type="hidden" name="{{$key}}[]" value="{{$list1['equipe']}}">
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="padding:50px;">
                                        <button type="submit"
                                            class="focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar</b></button>
                                    </div>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

                                </form>
                            </div>
                        </div>

                        <h2 id="accordion-collapse-heading-2" >
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 2 - 20/04</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 relative overflow-x-auto ">
                                <form action="{{ url('insertMedicaoEtapa2') }}" method="POST">
                                    @csrf
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-6 py-3">Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa2 as $key => $list2)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list2['numero_equipe'] }}</td>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $list2['equipe'] }}</th>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center me-4">
                                                            <input 
                                                                name="{{$key}}[]" type="checkbox"
                                                                {{ $list2['presenca'] }}
                                                                @if ($list2['presenca'] == 'checked') class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																	disabled
																@else
																class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@endif
															/>
															<input type="hidden" name="{{$key}}[]" value="{{$list2['numero_equipe']}}">
															<input type="hidden" name="{{$key}}[]" value="{{$list2['equipe']}}">
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="padding:50px;">
                                        <button type="submit"
                                            class="focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar</b></button>
                                    </div>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

                                </form>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3" >
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 3 - 08/06</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 relative overflow-x-auto ">
                                <form action="{{ url('insertMedicaoEtapa3') }}" method="POST">
                                    @csrf
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-6 py-3">Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa3 as $key => $list3)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list3['numero_equipe'] }}</td>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $list3['equipe'] }}</th>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center me-4">
                                                            <input 
                                                                name="{{$key}}[]" type="checkbox"
                                                                {{ $list3['presenca'] }}
                                                                @if ($list3['presenca'] == 'checked') class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																	disabled
																@else
																class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@endif
															/>
															<input type="hidden" name="{{$key}}[]" value="{{$list3['numero_equipe']}}">
															<input type="hidden" name="{{$key}}[]" value="{{$list3['equipe']}}">
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="padding:50px;">
                                        <button type="submit"
                                            class="focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar</b></button>
                                    </div>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

                                </form>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-4" >
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 4 - 24/08</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 relative overflow-x-auto">
                                <form action="{{ url('insertMedicaoEtapa4') }}" method="POST">
                                    @csrf
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-6 py-3">Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa4 as $key => $list4)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list4['numero_equipe'] }}</td>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $list4['equipe'] }}</th>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center me-4">
                                                            <input 
                                                                name="{{$key}}[]" type="checkbox"
                                                                {{ $list4['presenca'] }}
                                                                @if ($list4['presenca'] == 'checked') class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																	disabled
																@else
																class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@endif
															/>
															<input type="hidden" name="{{$key}}[]" value="{{$list4['numero_equipe']}}">
															<input type="hidden" name="{{$key}}[]" value="{{$list4['equipe']}}">
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="padding:50px;">
                                        <button type="submit"
                                            class="focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar</b></button>
                                    </div>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

                                </form>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button" style="background-color: orange;!"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">Etapa 5 - 19/10</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden relative overflow-x-auto"
                            aria-labelledby="accordion-collapse-heading-5">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 relative overflow-x-auto">
                                <form action="{{ url('insertMedicaoEtapa5') }}" method="POST">
                                    @csrf
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Nº</th>
                                                <th scope="col" class="px-6 py-3">Equipe</th>
                                                <th scope="col" class="px-6 py-3">Presença</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            @foreach ($etapa5 as $key => $list5)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ '#' . $list5['numero_equipe'] }}</td>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $list5['equipe'] }}</th>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center me-4">
                                                            <input 
                                                                name="{{$key}}[]" type="checkbox"
                                                                {{ $list5['presenca'] }}
                                                                @if ($list5['presenca'] == 'checked') class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																	disabled
																@else
																class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
																@endif
															/>
															<input type="hidden" name="{{$key}}[]" value="{{$list5['numero_equipe']}}">
															<input type="hidden" name="{{$key}}[]" value="{{$list5['equipe']}}">
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="padding:50px;">
                                        <button type="submit"
                                            class="focus:outline-none text-gray-900 bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900"><b>Salvar</b></button>
                                    </div>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
