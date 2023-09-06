<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Página não encontrada') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-base font-semibold text-indigo-600">404</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Página não encontrada</h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Desculpe, não conseguimos encontrar a página que você está procurando.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Voltar para a página inicial</a>
                        <a href="#" class="text-sm font-semibold text-gray-900">Contate o suporte <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
