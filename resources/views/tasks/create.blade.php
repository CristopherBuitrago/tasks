<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Task') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-600 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-300 dark:text-gray-200">Title</label>
                            <input type="text" id="title" name="title" class="block mt-1 w-full rounded-md shadow-sm bg-gray-700 text-white border-gray-600 focus:border-blue-500 focus:ring-blue-500"
                                   required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-300 dark:text-gray-200">Description</label>
                            <textarea id="description" name="description" class="block mt-1 w-full rounded-md shadow-sm bg-gray-700 text-white border-gray-600 focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Create Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  