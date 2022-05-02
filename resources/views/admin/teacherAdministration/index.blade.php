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
                    <th class="px-7 py-2 text-right">
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
                      <td class="px-7 py-2 text-center">{{$teacherAdministration->major->title}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">
                        <a href="{{ route('admin.teacherAdministration.show', $teacherAdministration->id) }}"
                          class="text-blue-600 hover:text-blue-900 mb-2 mr-2"> View</a>
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
