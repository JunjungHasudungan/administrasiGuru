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
            {{ __('Jadwal Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="hover:table-fixed bg-slate-600  rounded min-w-full ">
              <thead class="justify-between  m-1 ">
                      <th class="px-7 py-2">
                          <span class="text-black">WAKTU</span>
                      </th>
                          @foreach (\App\Models\TimeTable::WEEK_DAY as $day)
                          <th class="px-7 py-2 bg-green-400  rounded space-x-40 m-3">
                              <span class=" text-black">{{$day}}</span>
                          </th>
                          @endforeach
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($timeTables as $timeTable)
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2">{{$timeTable->start_time}}</td>
                      <td class="px-7 py-2"> {{$timeTable->classrooms->name ?? ''}}</td>
                    {{-- @foreach ($timeTable->classroomSubject as $item)
                    @endforeach --}}
                  </tr>
                @empty
                  <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia!
                  </div>
                @endforelse
              </tbody>
          </table>
      </div>
  </div>
</x-student-layout>
