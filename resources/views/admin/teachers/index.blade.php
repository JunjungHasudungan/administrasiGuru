<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('Guru Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
         
        <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2 bg-blue-500 rounded">
              <a href="{{ route('admin.teachers.create') }}"
              class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition  border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
              <svg class="w-5 h-5 -ml-1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                  clip-rule="evenodd" />
              </svg>
              <span class="ml-2">Guru Mapel</span>
              </a>
            </div>
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
                      <td class="px-7 py-2 text-left">{{$teacher->name ?? ''}}</td>
                      <td class="px-7 py-2 text-left">
                        {{-- {{$teacher->subjects->name ?? ''}} --}}
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
                  <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia!
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
