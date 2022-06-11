<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('Guru Mata Pelajaran') }}
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
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Guru Mata Pelajaran</a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('admin.teachers.index')}}"
                  class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Index</a>
          </div>
        </div>
      </div>

    <div class="container mx-auto mt-5 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
         
        <div class="w-full gap-4 mb-4">
            <div class="col-span-7">
              <form action="#" method="GET">
                  <input type="text" name="search"
                  class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                  placeholder="Cari Nama Guru">
              </form>
          </div>
        </div> 

          <table class="min-w-full table-auto rounded">
              <thead class="justify-between rounded">
                  <tr class="bg-slate-200 w-full rounded">
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">No</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                          <span class="text-indigo-500">Nama Guru </span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500"> Mata Pelajaran </span>
                      </th>
                      <th class="px-7 py-2">
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($teachers as $teacher)
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">{{$loop->iteration}}</td>
                      <td class="px-7 py-2 text-left">
                        <a href="{{route('admin.users.index')}}" class="no-underline hover:underline font-normal hover:font-bold">
                          {{$teacher->name ?? ''}}
                        </a>
                      </td>
                      <td class="px-7 py-2 text-left">
                        @forelse ($teacher->subjects as $subject)
                        <span class="px-2 inline-flex lowercase text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          <a href="{{route('admin.subjects.index')}}" class="no-underline hover:underline font-normal hover:font-bold">
                            {{$subject->name ?? ''}}
                          </a>
                        </span>
                        @empty
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-500 text-green-800">
                          <a href="{{route('admin.subjects.index')}}" class="no-underline hover:underline font-normal hover:font-bold">
                            Mata pelajaran Belum ada
                          </a>
                        </span>
                        @endforelse
                      </td>
                  </tr>
                @empty
                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Tidak ada 
                  </div>
                @endforelse
              </tbody>
          </table>
          
          <div class="text-gray-600 bg-secondary-50 mt-2">
            {{ $teachers->links() }}
          </div>

      </div>
  </div>
</x-student-layout>
