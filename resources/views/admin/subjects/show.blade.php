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
              <a href="{{ route('admin.subjects.index') }}"
                class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Mata Pelajaran</a>
              <svg class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{ route('admin.subjects.show', $subject->id) }}"
                class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Detail</a>
            </div>
          </div>
        </div>
      </div>

  <div>
      <div class="max-w-6xl mx-auto mt-5 mb-10">
          <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200 w-full">
                              
                            <tr class="border-b">
                                  <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      ID
                                  </th>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                      {{ $subject->id }}
                                  </td>
                              </tr>

                              <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Mata Pelajaran
                                </th>
                                <td class="px-6 py-4 w-fit whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                  <span class="px-2 inline-flex text-xs leading-5 font-semibold  rounded-full bg-green-100 text-green-800">
                                    {{  $subject->name }} 
                                  </span>
                                </td>
                            </tr>

                              <tr class="border-b">
                                  <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Guru 
                                  </th>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        <a href="{{route('admin.teachers.index')}}" class="no-underline hover:underline hover:font">
                                          {{$subject->teachers->name ?? ''}} 
                                        </a>
                                      </span>
                                  </td>
                              </tr>

                              <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Jurusan
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                  @forelse ($subject->majorSubject as $major)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      <a href="{{route('admin.teachers.index')}}" class="no-underline hover:underline hover:font">
                                        {{$major->title ?? ''}} 
                                      </a>
                                    </span> 
                                  @empty
                                    <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                      Jurusan tidak tersedia
                                    </div>
                                  @endforelse
                                </td>
                            </tr>

                              <tr class="border-b">
                                  <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Kelas
                                  </th>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    @forelse ($subject->classrooms as $classroom)
                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        <a href="{{route('admin.teachers.index')}}" class="no-underline hover:underline hover:font">
                                          {{$classroom->name_class ?? ''}} 
                                        </a>
                                      </span> 
                                    @empty
                                      <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                        Jurusan tidak tersedia
                                      </div>
                                    @endforelse
                                  </td>
                              </tr>

                              {{-- <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Hari Pelajaran
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                  @forelse ($subject->weekDaySubject as $day)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      {{$day->name ?? ''}} 
                                    </span> 
                                @empty
                                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                    Data Belum Tersedia
                                  </div>
                                @endforelse
                                </td>
                              </tr> --}}

                              {{-- <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mulai Jam Pembelajaran
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                                      {{$subject->start_time ?? 'waktu  tidak tersedia'}} 
                                    </span> 
                                </td>
                              </tr> --}}

                              {{-- <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Selesai Jam Pembelajaran
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                                      {{$subject->end_time ?? 'waktu  tidak tersedia'}} 
                                    </span> 
                                </td>
                              </tr> --}}

                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
              <a href="{{route('admin.subjects.index')}}">
                Kembali</a> 
              </button>
      </div>
  </div>

</x-student-layout>




{{-- <x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <span class=" text-sky-500 "> {{  $subject->name }} - 
            <a href="" class="no-underline hover:underline hover:font">
              {{$subject->teachers->name ?? ''}} 
            </a>
          </span>
        </h2>
    </x-slot>
        <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 ">
            <div class="flex flex-col justify-between sm:flex-row">
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
                  <a href="{{ route('admin.subjects.index') }}"
                    class="hover:text-gray-700">Mata Pelajaran</a>
                  <svg class="w-3 h-3"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                  <a href="{{ route('admin.classrooms.show', $subject->id) }}"
                    class="text-primary-500 hover:text-primary-600">Detail</a>
                </div>


              </div>
            </div>
          </div>

            <div class="container mx-auto w-full max-h-px mt-10 mb-10">
              
              <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                  <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Kelas</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @foreach ($subject->classrooms as $classroom)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$classroom->name_class}} 
                      </span> 
                    @endforeach
                   </p>
               </div>
              </div>

              <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white mt-2 min-w-full max-w-sm">
                  <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Jurusan</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @foreach ($subject->majorSubject as $major)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$major->title}} 
                      </span> 
                    @endforeach
                   </p>
               </div>
              </div>

              <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white mt-2 min-w-full max-w-sm">
                  <h5 class="text-gray-900  text-xl leading-tight  mb-2">Hari Pembelajaran</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @forelse ($subject->weekDaySubject as $day)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$day->name ?? ''}} 
                      </span> 
                    @empty
                    <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                      Data Belum Tersedia!
                    </div>
                    @endforelse
                   </p>
               </div>
              </div>

                <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('admin.classrooms.index')}}">
                  Kembali</a> 
                </button>
            </div>


            

</x-student-layout> --}}
