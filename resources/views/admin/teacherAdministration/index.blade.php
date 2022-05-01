<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List Administari Guru') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5  shadow-sm">
          <table class="min-w-full table-auto rounded">
              <thead class="justify-between">
                  <tr class="bg-indigo-500 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-white">NO</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-white">NAMA GURU</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-white">JURUSAN</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                      <span class="text-white">STATUS</span>
                  </th>
                      <th class="px-7 py-2">
                          <span class="text-white"></span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($teacherAdministrations as $teacherAdministration)
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">{{$loop->iteration}}</td>
                      <td class="px-7 py-2 text-center">{{$teacherAdministration->teachers->name}}</td>
                      {{-- <td class="px-7 py-2 text-center">{{$teacherAdministration->name}}</td> --}}
                      <td class="px-7 py-2 text-center">{{$teacherAdministration->major->title}}</td>
                      {{-- <td class="px-7 py-2 text-center">{{$teacherAdministration->homeworkTeacher->name ?? ''}}</td> --}}
                      <td class="px-6 text-right select-none whitespace-nowrap">
                        <a href="{{ route('admin.teacherAdministration.show', $teacherAdministration->id) }}"
                          class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium bg-stone-700 tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-lightBlue-500 focus:border-lightBlue-600 hover:bg-lightBlue-600 focus:outline-none focus:ring focus:ring-lightBlue-500 focus:ring-opacity-30 disabled:opacity-50">
                          <svg class="w-4 h-4 -mx-2"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd" />
                          </svg>
                        </a>
                      </td>
                  </tr>
                @empty
                  <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia!
                  </div>
                @endforelse
              </tbody>
          </table>
          <div class="mt-2">
          </div>
      </div>
  </div>
</x-student-layout>
