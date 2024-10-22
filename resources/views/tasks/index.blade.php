<!-- resources/views/tasks/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
      <div class="flex items-center justify-between">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('Tasks') }}
          </h2>
          <!-- Botón para crear una nueva tarea -->
          <a href="{{ route('tasks.create') }}"
              class="text-lime-500 bg-slate-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  class="w-5 h-5 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
              {{ __('New Task') }}
          </a>
      </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-slate-600 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <table class="min-w-full bg-white dark:bg-gray-800">
                      <thead class="bg-gray-800 dark:bg-gray-600 text-white">
                          <tr>
                              <th class="py-2 px-4">ID</th>
                              <th class="py-2 px-4">Title</th>
                              <th class="py-2 px-4">Description</th>
                              <th class="py-2 px-4">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($tasks as $task)
                              <tr class="bg-gray-100 dark:bg-gray-700">
                                  <td class="py-2 px-4">{{ $task->id }}</td>
                                  <td class="py-2 px-4">{{ $task->title }}</td>
                                  <td class="py-2 px-4">{{ $task->description }}</td>
                                  <td class="py-2 px-4">
                                      <!-- Editar -->
                                      <a href="{{ route('tasks.edit', $task->id) }}"
                                          class="text-blue-500 hover:text-blue-700">Edit</a>
                                      <!-- Eliminar -->
                                      <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                          class="inline-block" onsubmit="return confirm('Are you sure?');">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
