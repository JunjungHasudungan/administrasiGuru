<x-student-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __('Absensi Siswa - Mata Pelajaran ') }}
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
                <a href="#"
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

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            Masih dalam pengembangan.
        </div>
    </div>
</x-student-layout>
