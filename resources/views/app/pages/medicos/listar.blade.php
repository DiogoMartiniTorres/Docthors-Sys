<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Médicos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="minha-tabela" class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Especialidade</th>
                            <th class="px-4 py-2">Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($medicos as $medico)
                            <tr>
                                <td class="border px-4 py-2">{{ $medico['nome'] }}</td>
                                <td class="border px-4 py-2">{{ $medico['especialidade'] }}</td>
                                <td class="border px-4 py-2">{{ $medico['telefone'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
