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
                  <tr class="bg-indigo-500 w-full">
                      <th class="px-7 py-2 text-left">
                          <span class="text-white">Nama Jurusan</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                        <span class="text-white">Kepala Jurusan</span>
                    </th>
                    <th class="px-7 py-2 text-left">
                        <span class="text-white">Guru Jurusan</span>
                    </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                  <tr class="bg-white border-2 border-gray-200">
                        <td class="px-7 py-2">{{$major->title}}</td>
                        <td class="px-7 py-2">{{$major->headOfDepartement->name ?? ''}}</td>
                        <td class="px-7 py-2">
                            @foreach ($major->teacherMajors as $teacher)
                                <span class=" bg-slate-400 border-0 font-serif italic text-xs min-w-0 space-x-0.5 mb-px w-2 text-white p-3 rounded mt">{{$teacher['name']}}</span>
                            @endforeach
                        </td>
                        {{-- @foreach ($major->headOfDepartement as $headDepartement)/ --}}
                        {{-- @endforeach --}}
                        {{-- <td class="px-7 py-2">{{$major->teacherMajors->name ?? ''}}</td> --}}
                  </tr>
              </tbody>
          </table>
          <div class="mt-2">
          </div>
      </div>
  </div>
</x-student-layout>
