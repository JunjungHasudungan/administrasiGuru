<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <span class=" text-sky-500 "> {{  $teacherAdministration->teachers->name }} </span>
          </h2>
    </x-slot>

    <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 ">
    <div class="flex flex-col justify-between sm:flex-row">
        <div class="flex items-end justify-center ">
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
            <a href="{{ route('admin.teacherAdministration.index') }}"
              class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Administrasi Guru</a>
            <svg class="w-3 h-3"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
            <a href="{{ route('admin.teacherAdministration.show', $teacherAdministration->id) }}"
              class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="min-w-full table-auto">
              <thead class="justify-between">
                  <tr class="bg-indigo-500 w-full">
                      <th class="px-7 py-2 text-center">
                        <span class="text-white"> TANGGAL</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">KELAS</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">MAPEL</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">MATERI</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">JAM PELAJARAN</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">METODE</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">KETUNTASAN</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">ABSENSI</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">STATUS</span>
                    </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                  <tr class="bg-white border-2 border-gray-200">
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">26/04/2022</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">XI RPL</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">PKK</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">HAK CIPTA</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">10:00</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            @if ($teacherAdministration->is_teory)
                                <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-sky-600 bg-teal-200 uppercase last:mr-0 mr-1">
                                    {{$teacherAdministration->learning_method}}
                                </span>
                            @else
                                <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-red-600 bg-emerald-200 uppercase last:mr-0 mr-1">
                                    {{$teacherAdministration->learning_method}}
                                </span>
                            @endif
                        </td>
                        <td class="px-7 py-2 text-center">
                            @if ($teacherAdministration->is_finish)
                                <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-blue-200 uppercase last:mr-0 mr-1">
                                    {{$teacherAdministration->completeness}}
                                </span>
                            @else
                            <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-lime-200 uppercase last:mr-0 mr-1">
                                {{$teacherAdministration->completeness}}
                            </span>
                            @endif
                        </td>
                        <td class="px-7 py-2 text-center">
                            <span class="border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-teal-900 p-3 rounded mt">-</span>
                        </td>
                        <td class="px-7 py-2 text-center">
                            @if ($teacherAdministration->is_checked)
                                <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-emerald-200 uppercase last:mr-0 mr-1">
                                    {{ $teacherAdministration->status}}
                                </span>
                            @else
                                <span class="text-xs font-bold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-red-200 last:mr-0 mr-1">
                                    {{$teacherAdministration->status}}
                                </span>
                            @endif
                        </td>
                  </tr>
              </tbody>
          </table>
          <div class="p-4 text-center">
            <a href="{{ route('admin.teacherAdministration.index') }}"
              class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-green-500 border border-transparent rounded shadow select-none focus:border-green-600 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-30 disabled:opacity-50">
              <span>Kembali</span>
            </a>
          </div>
      </div>
  </div>
</x-student-layout>
