<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __(' Administrasi Guru') }} 
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
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Administrasi Guru</a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('teacher.administrations.index')}}"
                  class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Index</a>
          </div>
    </div>
  </div>

    <div class="container mx-auto mt-5 mb-10">
      <div class="bg-white p-5  shadow-sm">

        <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2">
              <a href="{{ route('teacher.administrations.create') }}"
              class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
              <svg class="w-5 h-5 -ml-1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                  clip-rule="evenodd" />
              </svg>
              <span class="ml-2">Administrasi</span>
              </a>
            </div>

          </div>

          <table class="min-w-full table-auto divide-gray-200 rounded">
              <thead class="justify-between">
                  <tr class="bg-slate-200 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">NO</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Tanggal</span>
                    </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">Nama Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Mata Pelajaran</span>
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
                          {{ date('l, d F Y', strtotime( $administration->created_at )) }} 
                      </td>
                      
                      <td class="px-7 py-2 text-center">
                        {{  $administration->classrooms->name_class ?? '' }} 
                    </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center bg-white divide-y divide-gray-200">

                        {{$administration->title ?? ''}}
                    </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                        <a href="{{route('teacher.administrations.show', $administration->id)}}"
                          class="text-blue-600 hover:text-blue-900 hover:font-bold  mb-2 mr-2"> 
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
