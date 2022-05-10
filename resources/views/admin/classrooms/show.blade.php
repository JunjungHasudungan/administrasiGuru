<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <span class=" text-sky-500 "> {{  $classroom->name_class }} - 
            <a href="" class="no-underline hover:underline hover:font">
              {{$classroom->homeworkTeacher->name ?? ''}} 
            </a>
          </span>
        </h2>
    </x-slot>
 {{-- header content --}}
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

            <div class="container mx-auto w-full max-h-px mt-10 mb-10">
              <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                  <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Siswa</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @foreach ($classroom->students as $student)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$student->name}} 
                      </span> 
                    @endforeach
                   </p>
               </div>
              </div>

              <div class="flex justify-center mt-2">
                <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
                  <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Mata Pelajaran</h5>
                  <p class="text-gray-700 text-base mb-4">
                    @foreach ($classroom->classroomSubject as $student)
                      <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        {{$student->subject_name}} 
                      </span> 
                    @endforeach
                   </p>
                  </div>
                </div>
                <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('admin.classrooms.index')}}">
                  Kembali</a> 
                </button>
            </div>


            

</x-student-layout>
