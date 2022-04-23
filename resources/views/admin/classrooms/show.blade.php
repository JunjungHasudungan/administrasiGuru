<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List Kelas') }}
        </h2>
    </x-slot>
 {{-- header content --}}
 <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 ">
    <div class="flex flex-col justify-between sm:flex-row">
      {{-- <div class="text-center sm:text-left flex-start">
        <h3 class="text-lg font-semibold leading-6 text-gray-800">{{ $title }}</h3>
        <p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1">The following are detailed information.</p>
      </div> --}}
      <div class="flex items-end justify-center">
        <div
          class="flex items-center px-3 py-1 mt-1 text-xs text-gray-600 border rounded-full border-secondary-300 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:px-0">
          <span>Home</span>
          <svg class="w-3 h-3"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd" />
          </svg>
          <a href="{{ route('admin.classrooms.index') }}"
            class="hover:text-gray-700">Kelas</a>
          <svg class="w-3 h-3"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd" />
          </svg>
          <a href="{{ route('admin.classrooms.show', $classroom->id) }}"
            class="text-primary-500 hover:text-primary-600">Detail</a>
        </div>
      </div>
    </div>
  </div>

  {{-- content --}}
  <div class="overflow-hidden text-left text-sm border rounded-lg shadow-md w-max border-secondary-300 bg-secondary-200">

    <div class="gap-4 px-4 py-4 leading-5 bg-white sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50">
      <div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">NAMA KELAS</div>
      <div class=" bg-green-300 rounded text-white w-full ">{{ $classroom->name }}</div>
    </div>

    <div class="gap-4 px-4 py-4 leading-5 bg-white sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50">
      <div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">WALI KELAS</div>
      <div class="bg-green-300 rounded text-white">{{ $classroom->homeworkTeacher->name }}</div>
    </div>

    <div class="gap-4 px-4 py-4 leading-5 bg-white sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50">
        <div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">SISWA KELAS</div>
        <div class="bg-green-300 rounded text-white text-left border-double border-4  capitalize font-light w-96 ">
          @foreach ($classroom->students as $student)
              {{$student->name}},
          @endforeach
        </div>
      </div>


    {{-- action --}}
    <div class="p-4 text-right">
      <a href="#"
        class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-green-500 border border-transparent rounded shadow select-none focus:border-green-600 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-30 disabled:opacity-50">
        <span>Back</span>
      </a>
    </div>

  </div>

    
    {{-- <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="min-w-full table-auto rounded">
              <thead class="justify-between rounded">
                  <tr class="bg-indigo-500 w-full rounded">
                      <th class="px-7 py-2 text-left">
                          <span class="text-white">Nama Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                        <span class="text-white">Jurusan</span>
                    </th>
                    <th class="px-16 py-2 text-left">
                        <span class="text-white">Guru Wali Kelas</span>
                    </th>
                      <th class="px-7 py-2">
                          <span class="text-white">Siswa</span>
                      </th>
                  </tr>
              </thead>
              <thomeworkTeacher->name class="bg-gray-200">
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">{{$classroom->name}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->majors->title}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->homeworkTeacher->name ?? ''}}</td>
                      <td class="px-7 py-2 text-left">
                          @foreach ($classroom->students as $student)
                          <span class=" bg-slate-400 border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-white p-3 rounded mt">{{$student['name']}}</span>
                          @endforeach
                        </td>
                  </tr>
              </thomeworkTeacher->name>
          </table>
      </div>
  </div> --}}
</x-student-layout>
