<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List Kelas') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <table class="min-w-full table-auto rounded">
              <thead class="justify-between rounded">
                  <tr class="bg-indigo-500 w-full rounded">
                      <th class="px-7 py-2 text-left">
                          <span class="text-white">Nama Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                        <span class="text-white">Jurusan</span>
                    </th>
                    <th class="px-16 py-2 text-left">
                        <span class="text-white">Guru Wali Kelas</span>
                    </th>
                      <th class="px-7 py-2">
                          <span class="text-white">Siswa</span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2">{{$classroom->name}}</td>
                      <td class="px-7 py-2">{{$classroom->majors->title}}</td>
                      <td class="px-7 py-2">{{$classroom->homeworkTeacher->name ?? ''}}</td>
                      <td class="px-7 py-2">
                          @foreach ($classroom->students as $student)
                          <span class=" bg-slate-400 border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-white p-3 rounded mt">{{$student['name']}}</span>
                          @endforeach
                        </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</x-student-layout>
