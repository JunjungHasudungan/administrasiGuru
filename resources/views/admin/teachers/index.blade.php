<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('Guru Mata Pelajaran') }}
        </h2> --}}
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
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
