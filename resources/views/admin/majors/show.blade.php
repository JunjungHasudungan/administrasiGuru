<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <span class=" text-sky-500 "> {{  $major->title }} - {{$major->headOfDepartement->name ?? ''}}
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

    <div class="container mx-auto w-full max-h-px mt-10 mb-10">

      <div class="flex justify-center mt-2">
        <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
          <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Guru Jurusan</h5>
          <p class="text-gray-700 text-base mb-4">
            @forelse ($major->teachers as $teachers)
              <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                {{$teachers->name}} 
              </span> 
            @empty
            <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
              Guru Jurusan Belum ada
            </div>
            @endforelse
           </p>
          </div>
        </div>

        <div class="flex justify-center mt-2">
          <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
            <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Kelas </h5>
            <p class="text-gray-700 text-base mb-4">
              @forelse ($major->classrooms as $classrooms)
                <span class="  border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                  {{$classrooms->name_class ?? '' }} 
                </span> 
                @empty
                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                  Data Kelas Belum ada
                </div>
              @endforelse
             </p>
            </div>
          </div>

          <div class="flex justify-center mt-2">
            <div class="block p-6 rounded-lg shadow-lg bg-white  min-w-full max-w-sm">
              <h5 class="text-gray-900  text-xl leading-tight  mb-2">Nama Pelajaran </h5>
              <p class="text-gray-700 text-base mb-4">
                @forelse ($major->majorSubject as $subject)
                  <span class=" border-0 py-2  text-gray-800  tracking-widest mx-px my-1  text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                    {{$subject->name ?? '' }} 
                  </span> 
                  @empty
                  <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Mata Pelajaran Belum ada
                  </div>
                @endforelse
               </p>
              </div>
            </div>
        
            <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
              <a href="{{route('admin.majors.index')}}">
                Kembali</a> 
              </button>
          </div>

</x-student-layout>
