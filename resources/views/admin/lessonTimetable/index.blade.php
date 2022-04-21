{{-- <x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' Jadwal Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            Accessible only for Admin.
        </div>
    </div>
</x-teacher-layout>

<h1>hello</h1>ph --}}


<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Jurusan') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="min-w-full table-auto">
              <thead class="justify-between">
                  {{-- <tr class="bg-indigo-500 w-full"> --}}
                      <th class="px-7 py-2">
                          <span class="text-black">WAKTU</span>
                      </th>
                          @foreach ($weekday as $day)
                          <th class="px-7 py-2">
                              <span class="text-black">{{$day}}</span>
                          </th>
                          @endforeach
                  {{-- </tr> --}}
              </thead>
          </table>
      </div>
  </div>
</x-student-layout>
