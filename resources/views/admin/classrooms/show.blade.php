<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <span class=" text-sky-500 "> {{  $classroom->name }} {{$classroom->majors->title}} - 
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

  {{-- content --}}
  <div class="container mx-auto w-full max-h-px mt-10 mb-10">
        <table class="min-w-full  table-fixed">
            <thead class="justify-between">
                <tr class="bg-indigo-500 w-full rounded-full">
                    <th class="px-7 py-2 text-center ">
                        <span class="text-white text-">SISWA</span>
                    </th>
                    <th class="px-7 py-2 text-center">
                        <span class="text-white">MATA PELAJARAN</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200 bg-auto w-max">
                <tr class="bg-white border-2 border-gray-200">
                    <td class=" bg-auto  text-left  bg-slate-400 rounded w-2/5 "> 
                      @foreach ($classroom->students as $student)
                        <span class=" border-0 py-2 font-serif text-gray-800  tracking-widest mx-px my-1 italic text-xs min-w-0  mb-px w-2 p-3 rounded mt">
                        <a href="#"  class="no-underline hover:underline "> {{$student->name}} </a>
                        </span> 
                      @endforeach
                    </td>
                    <td class="px-7 py-2 text-left bg-slate-400  ">
                      @foreach($classroom->classroomSubject as $subject)
                      <span class=" capitalize border-0 text-gray-800 font-serif mx-px my-1 italic text-xs min-w-0 space-x-0.5 mb-px w-2  hover:font-bold p-3 rounded mt">
                        <a href="#"  class="no-underline"> {{$subject->name}}, </a>
                      </span>
                      @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="mt-2">
          
        </div>
    </div>
</div>

</x-student-layout>
