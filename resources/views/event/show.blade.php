<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white rounded-md mb-4 p-4 overflow-y-auto">
                    <div class="shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 text-xs font-small text-gray-500">
                            <a href="{{ route('events.index') }}">Event List</a> > <b>Show Event Information</b>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="flex flex-row flex-wrap md:flex-nowrap">
                                <div class="w-full md:w-1/6 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-bold text-gray-700">{{ __('UUID') }}</label>
                                </div>
                                <div class="w-full md:w-1/2 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">{{ $event->id }}</label>
                                </div>
                            </div>

                            <div class="flex flex-row flex-wrap md:flex-nowrap">
                                <div class="w-full md:w-1/6 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-bold text-gray-700">{{ __('NAME') }}</label>
                                </div>
                                <div class="w-full md:w-1/2 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">{{ $event->name }}</label>
                                </div>
                            </div>

                            <div class="flex flex-row flex-wrap md:flex-nowrap">
                                <div class="w-full md:w-1/6 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-bold text-gray-700">{{ __('SLUG') }}</label>
                                </div>
                                <div class="w-full md:w-1/2 md:mr-4 my-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">{{ $event->slug }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>