<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ __('List User') }}
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
              <a href="{{route('teacher.attendanceStudent.index')}}"
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Absensi Siswa</a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('teacher.attendanceStudent.index')}}"
                  class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Index</a>
          </div>
        </div>
      </div>

    <div class="container mx-auto mt-5 mb-10">
      <div class="bg-white p-5  shadow-sm">

          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead>
                            <tr class="bg-slate-200 w-full">
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize ml-10 tracking-wider">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-center  text-xs font-medium text-gray-500 capitalize  tracking-wider">
                                    Nama Pelajaran
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize ml-10 tracking-wider">
                                    Kelas
                                </th>
                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($subjectTeachers as $key => $subject)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <span class="px-2 inline-flex text-xs text-center  leading-5 lowercase font-semibold rounded-full  text-green-800">
                                            {{ $loop->iteration }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <span class="px-2 inline-flex text-xs text-left ml-48 leading-5 lowercase font-semibold rounded-full  text-green-800">
                                            {{$subject->name ?? ''}}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @forelse ($subject->classrooms as $classroom)
                                            <span class="px-2 inline-flex text-xs text-left leading-5 lowercase font-semibold rounded-full bg-green-100  text-green-800">
                                                <a href="{{route('teacher.attendanceStudent.show', $classroom->id)}}" class="hover:text-primary-600  hover:font-bold">
                                                    {{$classroom->name_class ?? ''}}
                                                  </a>
                                            </span>
                                        @empty
                                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                            Kelas Belum disertakan.
                                        </span>
                                        @endforelse
                                        {{-- {{ $subject->email }} --}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('teacher.attendanceStudent.show', $subject->id) }}"
                                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium bg-gray-400 tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-lightBlue-500 focus:border-lightBlue-600 hover:bg-lightBlue-600 focus:outline-none focus:ring focus:ring-lightBlue-500 focus:ring-opacity-30 disabled:opacity-50">
                                            <svg class="w-4 h-4 -mx-2"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 20 20"
                                              fill="currentColor">
                                              <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                            </svg>
                                          </a>

                                          <a href="{{ route('teacher.attendanceStudent.edit', $subject->id) }}"
                                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50">
                                            <svg class="w-4 h-4 -mx-2"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 20 20"
                                              fill="currentColor">
                                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                          </a>
                                          <form action="{{ route('teacher.attendanceStudent.destroy', $subject->id) }}" class="inline" method="post" onsubmit="return confirm('Yakin untuk menghapus?'); ">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                              class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-red-500 border border-transparent rounded-full shadow select-none focus:border-red-600 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-30 disabled:opacity-50">
                                              <svg class="w-4 h-4 -mx-2"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                  clip-rule="evenodd" />
                                              </svg>
                                            </button>
                                          </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                  Data Tidak Tidak ada.
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
          
        <div class="text-gray-600 bg-secondary-50 mt-2">
          {{-- {{ $users->links('vendor.pagination.tailwind') }} --}}
        </div>

      </div>
  </div>
</x-student-layout>
