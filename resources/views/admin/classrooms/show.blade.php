<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <span class=" text-indigo-400 capitalize"> {{  $classroom->name_class }} - 
            <a href="{{route('admin.users.index')}}" class="hover:text-primary-600 text-indigo-400 hover:font-bold">
              {{$classroom->homeworkTeacher->name ?? ''}} 
            </a>
          </span>
        </h2>
    </x-slot>
 {{-- header content --}}
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
                    <a href="{{route('admin.classrooms.index')}}"
                        class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Kelas </a>
                    <svg class="w-3 h-3"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                    </svg>
                    <a href="{{route('admin.classrooms.show', $classroom->id)}}"
                        class="text-primary-500 hover:text-primary-600  text-indigo-400 hover:font-bold">Detail</a>
                </div>
              </div>
            </div>

            <div class="container mx-auto w-full max-h-px mt-5 mb-10">
              <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                  <h5 class="text-indigo-500  text-base leading-tight  mb-2 font-medium ">Nama Siswa</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @forelse ($classroom->students as $student)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        <a href="{{route('admin.users.index')}}">
                          {{$student->name}} 
                        </a>

                      </span> 
                      @empty
                      <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                        Data Nama Siswa Belum ada
                      </div>
                    @endforelse
                   </p>
               </div>
              </div>

              <div class="flex justify-center mt-2">
                <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                  <h5 class="text-indigo-500  text-base leading-tight  mb-2 font-medium">Nama Mata Pelajaran</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @forelse ($classroom->classroomSubject as $subject)
                      <span class=" border-0 py-2  text-gray-800 lowercase tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$subject->name ?? ''}} 
                      </span> 
                      @empty
                      <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                        Data Nama Pelajaran Belum ada
                      </div>
                    @endforelse
                   </p>
                  </div>
                </div>


                <div class="flex justify-center mt-2">
                  <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                    <h5 class="text-indigo-500  text-base leading-tight  mb-2 font-medium">Keterangan</h5>
                    <p class="text-gray-700 text-base mb-4">
                      @if ($classroom->description )
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                          {{ $classroom->description }} 
                        </span>
                      @else
                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                          Tidak Ada Keterangan
                        </span>
                      @endif
                     </p>
                    </div>
                  </div>
                
                <button class="bg-transparent mt-1  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('admin.classrooms.index')}}">
                  Kembali</a> 
                </button>
            </div>

</x-student-layout>
