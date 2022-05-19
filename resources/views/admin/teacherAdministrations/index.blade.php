<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('List Administari Guru') }} 
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5  shadow-sm">
          <table class="min-w-full table-auto divide-gray-200 rounded">
              <thead class="justify-between">
                  <tr class="bg-slate-200 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">NO</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">NAMA GURU</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Status</span>
                    </th>
                      
                      <th class="px-7 py-2">
                          <span class="text-indigo-500"></span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($administrations as $teacher )
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">
                        {{$loop->iteration}}
                      </td>
                      <td class="px-7 py-2 text-center">
                        {{$teacher->name ?? ''}} 
                      </td>

                      <td class="px-7 py-2 text-center">
                        @forelse ($teacher->administrations as $teacher)
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                          {{-- <a href="{{route('admin.teacherAdministrations.show', $administration->id)}}" class="no-underline hover:underline"> --}}
                              {{-- {{ $administration->title ?? ''}} --}}ada 
                          {{-- </a> --}}
                          </span>
                        @empty
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                          {{-- <a href="{{route('admin.teacherAdministrations.show', $administration->id)}}" class="no-underline hover:underline"> --}}
                              {{-- {{ $item->title ?? ''}} --}}tidak ada 
                          {{-- </a> --}}
                          </span>
                        @endforelse
                        {{-- {{$administration->name ?? ''}} --}}
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                        <a href="{{route('admin.teacherAdministrations.show', $teacher->id)}}"
                          class="text-blue-600 hover:text-blue-900 mb-2 mr-2"> 
                          <span>View </span>              
                        </a>
                      </td>
                  </tr>
                @empty
                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                    Administrasi Belum ada 
                  </div>
                @endforelse
              </tbody>
          </table>

          {{-- paginate --}}

          <div class="text-gray-600 bg-secondary-50 mt-2">
            {{-- {{ $administrations->links() }} --}}
          </div>
        </div>
  </div>
</x-student-layout>
