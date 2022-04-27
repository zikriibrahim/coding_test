<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white rounded-md mb-4 p-4 overflow-y-auto">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow rounded-lg overflow-hidden">
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 text-xs font-small text-gray-500">
                                <a href="{{ route('events.index') }}">Event List</a> > <b>Create Event Information</b>
                            </div>
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="flex flex-row flex-wrap md:flex-nowrap">
                                    <div class="w-full md:w-1/2 md:mr-4 my-2">
                                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}<span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" autocomplete="name" class="mt-2 w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                        @error('name') <span class="text-sm font-medium text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="w-full md:w-1/2 md:ml-4 my-2">
                                        <label for="slug" class="block text-sm font-medium text-gray-700">{{ __('Slug') }}<span class="text-red-500">*</span></label>
                                        <input type="text" name="slug" id="slug" autocomplete="slug" class="mt-2 w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                        @error('slug') <span class="text-sm font-medium text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>