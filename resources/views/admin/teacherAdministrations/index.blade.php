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
                          <span class="text-indigo-500">Nama Guru</span>
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
                @forelse ($administrations as $administration )
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">
                        {{$loop->iteration}}
                      </td>
                      
                      <td class="px-7 py-2 text-center">
                        @if ($administration->id ?? '')
                        <span class="px-2 inline-flex text-xs leading-5 capitalize font-semibold rounded-full text-green-800">
                            {{$administration->teachers->name ?? ''}} 
                          </span>
                        @else
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                          Tidak ada
                        </span>
                        @endif
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center bg-white divide-y divide-gray-200">
                        @if ($administration->statusCheck === 0)
                              <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-yellow-200 capitalize last:mr-0 mr-1">
                                  Belum di periksa
                              </span>
                        @else
                              <span class="text-xs font-bold inline-block py-1 px-2 capitalize rounded-full text-blueGray-600 bg-emerald-200 last:mr-0 mr-1">
                                Sudah diperiksa
                              </span>
                        @endif
                    </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                        <a href="{{route('admin.teacherAdministrations.show', $administration->id)}}"
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
            {{ $administrations->links() }}
          </div>
        </div>
  </div>
  
</x-student-layout>
