<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('List Kelas') }}
        </h2>
    </x-slot>

    <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 ">
      <div class="flex flex-col justify-between sm:flex-row">
          <div class="flex items-end justify-center ">
            <div
              class="flex items-center px-3  py-1 mt-1 text-xs text-gray-600 border rounded-full border-secondary-300 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:px-0">
              <span>Home</span>
              <svg class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{ route('admin.classrooms.index') }}"
                class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Kelas</a>
              <svg class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{ route('admin.classrooms.index') }}"
                class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Index</a>
            </div>
          </div>
        </div>
      </div>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5  shadow-sm">

          <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2">
              <a href="{{ route('admin.classrooms.create') }}"
              class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
              <svg class="w-5 h-5 -ml-1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                  clip-rule="evenodd" />
              </svg>
              <span class="ml-2">Kelas</span>
              </a>
            </div>
          </div>
          
          <table class="min-w-full table-auto rounded divide-gray-200">
              <thead class="justify-between">
                  <tr class="bg-slate-200 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">No</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">Kode Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">Nama Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Jurusan</span>
                    </th>
                    <th class="px-16 py-2 text-center">
                        <span class="text-indigo-500">Guru Wali Kelas</span>
                    </th>
                      <th class="px-7 py-2">
                          <span class="text-indigo-500"></span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($classrooms as $classroom)
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">{{$loop->iteration}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->code_classroom}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->name_class ?? ''}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->majors->title ?? 'Jurusan Belum Ada' }}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->homeworkTeacher->name ?? ''}}</td>
                      <td class="px-6 text-right select-none whitespace-nowrap">
                        <a href="{{ route('admin.classrooms.show', $classroom->id) }}"
                          class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium bg-gray-400 tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-lightBlue-500 focus:border-lightBlue-600 hover:bg-lightBlue-600 focus:outline-none focus:ring focus:ring-lightBlue-500 focus:ring-opacity-30 disabled:opacity-50">
                          <svg class="w-4 h-4 -mx-2"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd" />
                          </svg>
                        </a>
                        <a href="{{ route('admin.classrooms.edit', $classroom->id) }}"
                          class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50">
                          <svg class="w-4 h-4 -mx-2"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                          </svg>
                        </a>
                        <form action="{{ route('admin.classrooms.destroy', $classroom->id) }}" class="inline" onsubmit="return confirm('Yakin untuk menghapus?'); " method="post">
                          @csrf
                          @method('delete')
                          <button type="submit"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-red-500 border border-transparent rounded-full shadow select-none focus:border-red-600 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-30 disabled:opacity-50">
                            <svg class="w-4 h-4 -mx-2"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                            </svg>
                          </button>
                        </form>
                      </td>
                  </tr>
                @empty
                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia!
                  </div>
                @endforelse
              </tbody>
          </table>
          
          <div class="text-gray-600 bg-secondary-50 mt-2">
            {{ $classrooms->links() }}
          </div>

      </div>
  </div>
</x-student-layout>
