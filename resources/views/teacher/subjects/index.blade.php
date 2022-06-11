<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __(' Mata Pelajaran') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">

        <div class="w-full gap-4 mb-4">
            <div class="col-span-7">
              <form action="#" method="GET">
                  <input type="text" name="search"
                  class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                  placeholder="Cari Nama Mata Pelajaran">
              </form>
          </div>
        </div> 

          <table class="min-w-full table-auto divide-gray-200">
              <thead class="justify-between">
                  <tr class="bg-slate-200 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-indigo-500">No</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                        <span class="text-indigo-500">Kode Mata Pelajaran</span>
                    </th>
                    <th class="px-7 py-2 text-left">
                        <span class="text-indigo-500">Mata Pelajaran</span>
                    </th>
                    <th class="px-7 py-2 text-center ">
                        <span class="text-indigo-500"></span>
                    </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($subjects as $subject)
                  <tr class="bg-white border-2 border-gray-200">

                    <td class="px-7 py-2 text-center">
                        {{$loop->iteration}}
                    </td>
                    <td class="px-7 py-2 text-left">
                        {{$subject->subject_code}}
                    </td>
                    <td class="px-7 py-2 text-left">
                        {{$subject->name ?? ''}}
                    </td>
                    <td class="px-6 text-center select-none whitespace-nowrap">
                            <a href="{{ route('teacher.subjects.show', $subject->id) }}"
                              class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-grey-400 transition ">
                              {{-- <svg class="w-4 h-4 -mx-2"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd" />
                              </svg> --}}
                              view
                            </a>
                        </td>
                  </tr>
                @empty
                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                   Mata Pelajaran Tidak Ada
                  </div>
                @endforelse
              </tbody>
          </table>
          <div class="text-gray-600 bg-secondary-50">
            {{ $subjects->links() }}
          </div>
      </div>
  </div>
</x-student-layout>
