<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <span class=" text-sky-500 "> 
                {{$teacher->name ?? ''}} 
                {{-- @forelse ($teacher->administrationTeacher as $teacher)
                    <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                        <a href="{{route('admin.teachers.index')}}" class="no-underline hover:underline">
                            {{ $teacher->name ?? ''}}
                        </a>
                    </span>
                @empty
                    <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                        nama tidak ada
                    </span>
                @endforelse --}}
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
            <a href="{{ route('admin.teacherAdministrations.index') }}"
              class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Administrasi Guru</a>
            <svg class="w-3 h-3"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
            <a href="#"
              class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
        <table class="min-w-full divide-y divide-gray-200 w-full">
            <thead>
            <tr>
                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                </th>
                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Tanggal
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Kelas
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Mata Pelajaran
              </th>
                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Materi
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Jam Pelajaran
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Metode Pelajaran
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Ketuntasan
              </th>
              <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
              </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{-- @forelse ($teacher as $teacher) --}}
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{-- {{ $loop->iteration }} --}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{-- {{ date('l, d F Y', strtotime( $teacher->created_at )) }}   --}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{ $teacher->classrooms->name_class ?? ''}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{ $teacher->subjects->name ?? ''}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{ $teacher->title ?? ''}}
                  </td>
                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{date('h:i', strtotime($teacher->subjects->start_time ?? ''))}} - {{ date('h:i', strtotime($teacher->subjects->end_time ?? '')) }}
                  </td> 
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{ $teacher->method }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      @if ($teacher->completeness === 'Selesai')
                      <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-emerald-200 capitalize last:mr-0 mr-1">
                          {{ $teacher->completeness}}
                      </span>
                      @else
                      <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-blueGray-600 bg-yellow-200 capitalize last:mr-0 mr-1">
                          {{ $teacher->completeness}}
                      </span>
                      @endif
                  </td> 
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      @if ($teacher->statusCheck === 'checked')
                          <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-emerald-200 capitalize last:mr-0 mr-1">
                              {{ $teacher->statusCheck}}
                          </span>
                      @else
                          <span class="text-xs font-bold inline-block py-1 px-2 capitalize rounded-full text-blueGray-600 bg-yellow-200 last:mr-0 mr-1">
                              {{ $teacher->statusCheck}}
                          </span>
                      @endif
                  </td>
              </tr>
              {{-- @empty
              <div class="bg-yellow-200 text-grey p-3 rounded shadow-sm mb-3">
                <span class="font-serif font-bold">{{Auth::user()->name}}, Administrasi belum ada isinya</span> 
              </div>
            @endforelse --}}
            </tbody>
        </table>
    </div>
    <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
        <a href="{{route('admin.teacherAdministrations.index')}}">
          Kembali</a> 
    </button>
  </div>
</x-student-layout>
