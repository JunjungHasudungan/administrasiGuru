<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List Kelas') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <div class="grid grid-cols-8 gap-4 mb-4">
              <div class="col-span-1 mt-2">
                <a href="#"
                class="w-full bg-indigo-500 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700">
                Tambah Kelas</a>
              </div>
              <div class="col-span-7">
                  <form action="#" method="GET">
                      <input type="text" name="search"
                      class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                      placeholder="Cari Kelas">
                  </form>
              </div>
          </div>
          <table class="min-w-full table-auto">
              <thead class="justify-between">
                  <tr class="bg-indigo-500 w-full">
                      <th class="px-7 py-2 text-center">
                          <span class="text-white">No</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-white">Kode Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                          <span class="text-white">Nama Kelas</span>
                      </th>
                      <th class="px-7 py-2 text-center">
                        <span class="text-white">Jurusan</span>
                    </th>
                    <th class="px-16 py-2 text-center">
                        <span class="text-white">Guru Wali Kelas</span>
                    </th>
                      <th class="px-7 py-2">
                          <span class="text-white">AKSI</span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($classrooms as $classroom)
                  <tr class="bg-white border-2 border-gray-200">
                      <td class="px-7 py-2 text-center">{{$loop->iteration}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->code_classroom}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->name}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->majors->title}}</td>
                      <td class="px-7 py-2 text-center">{{$classroom->homeworkTeacher->name ?? ''}}</td>
                      <td>
                        {{-- @can('lesson_show') --}}
                            <a class="bg-sky-400 p-2 text-white rounded m-2 shadow-sm focus:outline-none hover:bg-indigo-700" href="{{ route('admin.classrooms.show', $classroom->id) }}">
                                {{ __('VIEW') }}
                            </a>
                        {{-- @endcan --}}

                        {{-- @can('lesson_edit') --}}
                            <a class="bg-orange-500 p-2 text-white rounded m-2 shadow-sm focus:outline-none hover:bg-indigo-700" value="{{ trans('global.delete') }}" href="{{ route('admin.classrooms.edit', $classroom->id) }}">
                                {{ __('EDIT') }}
                            </a>
                        {{-- @endcan --}}

                        {{-- @can('lesson_delete') --}}
                            <form action="{{ route('admin.classrooms.destroy', $classroom->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="bg-orange-500 p-2 text-white rounded shadow-sm focus:outline-none hover:bg-indigo-700" value="{{ trans('global.delete') }}">
                            </form>
                        {{-- @endcan --}}
                    </td>
                  </tr>
                @empty
                  <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia!
                  </div>
                @endforelse
              </tbody>
          </table>
          <div class="mt-2">
          </div>
      </div>
  </div>
</x-student-layout>
