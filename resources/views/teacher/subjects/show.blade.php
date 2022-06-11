<x-student-layout>
    <x-slot name="header">
    </x-slot>
    <div class="px-6 py-4 mb-4 overflow-hidden  rounded-lg shadow-sm  ">
      <div class="flex flex-col justify-between sm:flex-row">
          <div class="flex items-end justify-left ml-10 mt-5 ">
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
              <a href="{{ route('teacher.subjects.index') }}"
                class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Mata Pelajaran</a>
              <svg class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{ route('teacher.subjects.show', $subject->id) }}"
                class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Detail</a>
            </div>
          </div>
        </div>
      </div>

    <div>
        <div class="max-w-6xl mx-auto mt-5 mb-10 ">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full" >
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        ID
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $subject->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        Nama Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 lowercase bg-white divide-y divide-gray-200">
                                        {{ $subject->name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        Guru Nata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ Auth::user()->name}}
                                    </td>

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        Kelas
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse ($subject->classrooms as $classroom)
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $classroom->name_class ?? ''}}
                                            </span>
                                        @empty
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                Kelas tidak ada
                                            </span>
                                        @endforelse
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        Peserta Didik
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse ($subject->studentSubject as $student)
                                            <span class=" inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $student->name ?? ''}}
                                            </span>   
                                        @empty
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                Siswa Belum ada
                                            </span>
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 capitalize tracking-wider">
                                        Hari Pembelajaran
                                    </th>
                                    @forelse ($subject->weekDaySubject as $weekDay)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                            <span class=" inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $weekDay->name ?? ''}}
                                            </span> 
                                        </td>
                                    @empty
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                Hari Pembelajaran belum ada
                                            </span>
                                        </td>
                                    @endforelse
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('teacher.subjects.index')}}">
                  Kembali</a> 
                </button>
        </div>
    </div>

</x-student-layout>