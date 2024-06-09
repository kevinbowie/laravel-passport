<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            OAuth Clients
                        </h2>
                    </header>

                    <table class="my-4 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">ID</th>
                                <th class="px-6 py-3">Name</th>
                                <th class="px-6 py-3">Callback</th>
                                <th class="px-6 py-3">Secret</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $client->id }}</td>
                                    <td class="px-6 py-4">{{ $client->name }}</td>
                                    <td class="px-6 py-4">{{ $client->redirect }}</td>
                                    <td class="px-6 py-4">{{ $client->secret }}</td>
                                </tr>
                            @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">No Client List Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    

                    <form method="post" action="{{ route('passport.clients.store') }}" class="mt-12 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" placeholder="Client Name" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="redirect" :value="__('Redirect')" />
                            <x-text-input id="redirect" name="redirect" type="text" class="mt-1 block w-full" placeholder="https://www.example.com/callback" required />
                            <x-input-error class="mt-2" :messages="$errors->get('redirect')" />
                        </div>

                        <div>
                            <x-primary-button>{{ __('Create Client') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
