<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('List Administari Guru') }} 
        </h2> --}}
    </x-slot>

    <div class="flex flex-col justify-between sm:flex-row">
      <div class="flex items-end justify-left ml-10 mt-5">
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
              <a href="#"
                  class="hover:text-primary-600 font-bold text-indigo-400 hover:font-bold ">Administrasi Guru </a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('admin.teacherAdministrations.index')}}"
                  class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Index</a>
          </div>
        </div>
      </div>

    <div class="container mx-auto mt-5 mb-10">
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
                        <a href="{{route('admin.teacherAdministrations.edit', $administration->id)}}"
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
