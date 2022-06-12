<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __(' Mata Pelajaran') }} {{Auth::user()->name}}
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
                    class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Mata Pelajaran</a>
                <svg class="w-3 h-3"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
                <a href="{{route('teacher.subjects.index')}}"
                    class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Index</a>
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
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full  text-green-800">
                            {{$subject->subject_code}}
                        </span>
                    </td>
                    <td class="px-7 py-2 text-left">
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full  text-green-800">
                            {{$subject->name ?? ''}}
                        </span>
                    </td>
                    <td class="px-6 text-center select-none whitespace-nowrap">
                            <a href="{{ route('teacher.subjects.show', $subject->id) }}"
                              class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-grey-400 hover:font-bold transition ">
                              {{-- <svg class="w-4 h-4 -mx-2"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd" />
                              </svg> --}}
                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                    view
                                </span>
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
          <div class="text-gray-600 bg-secondary-50 mt-2">
            {{ $subjects->links() }}
          </div>
      </div>
  </div>
</x-student-layout>
