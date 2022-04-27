<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session()->has('message'))
                <div class="bg-teal-50 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <div class="flex flex-shrink-0 justify-between m-4">
                    <a href="{{ route('events.create') }}" class="bg-green-500 text-white px-2 py-2 rounded-lg font-medium text-md" title="Add">
                        + ADD
                    </a>
                    <div class="text-right">
                        <input type="text" name="search" wire:model.debounce.300ms="search" class="rounded-lg bg-white border-gray-300 text-sm" placeholder="Search">
                    </div>
                </div>
                <div class="bg-white rounded-md mb-4 p-4 overflow-y-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    UUID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Slug
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($events as $key => $event)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $events->firstItem() + $key }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $event->id }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $event->name }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                        {{ $event->slug }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500 w-100 text-center">
                                        <a href="{{ route('events.show', $event->id) }}" class="bg-orange-500 px-2 py-1 rounded-md text-white font-medium text-xs" title="Edit">
                                            VIEW
                                        </a>
                                        <a href="{{ route('events.edit', $event->id) }}" class="bg-blue-500 px-2 py-1 mx-2 rounded-md text-white font-medium text-xs" title="Edit">
                                            EDIT
                                        </a>
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="bg-red-500 px-2 py-1 rounded-md text-white font-medium text-xs" title="Delete">
                                                DELETE
                                            </button>
                                        </form>
                                    </td>                              
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{--Pagination--}}
                {{ $events->links() }}
            </div>
        </div>
    </div>
</x-app-layout>