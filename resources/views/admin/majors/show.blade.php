<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <span class=" text-sky-500 "> {{  $major->title }} - {{$$major->departement->name ?? ''}}
            </span>
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
            <a href="{{ route('admin.majors.index') }}"
              class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Jurusan</a>
            <svg class="w-3 h-3"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
            <a href="{{ route('admin.majors.show', $major->id) }}"
              class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="min-w-full table-auto">
              <thead class="justify-between">
                  <tr class="bg-slate-200 w-full">
                      <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Kepala Jurusan</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-indigo-500">Guru Jurusan</span>
                    </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                  <tr class="bg-white border-2 border-gray-200">
                        <td class="px-7 py-2 text-center">
                          {{$major->headOfDepartement->name ?? ''}}</td>
                        <td class="px-7 py-2 text-center">  
                            @foreach ($major->teacherMajors as $teacher)
                                <span class=" border-0 font-serif italic  text-xs min-w-0 space-x-0.5 mb-px w-2 text-gray-500 p-3 rounded mt">
                                  {{$teacher->name ?? ''}}
                                </span>
                            @endforeach
                        </td>
                  </tr>
              </tbody>
          </table>
          <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
            <a href="{{route('admin.majors.index')}}">
              Kembali</a> 
            </button>
      </div>
  </div>
</x-student-layout>
