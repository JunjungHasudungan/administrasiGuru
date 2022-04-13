<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Jurusan') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <div class="grid grid-cols-8 gap-4 mb-4">
              <div class="col-span-1 mt-2">
                <a href="#"
                class="w-full bg-indigo-500 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700">
                Tambah Jurusan</a>
              </div>
              <div class="col-span-7">
                  <form action="#" method="GET">
                      <input type="text" name="search"
                      class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                      placeholder="Cari Mata Pelajaran">
                  </form>
              </div>
          </div>
          <table class="min-w-full table-auto">
              <thead class="justify-between">
                  <tr class="bg-indigo-500 w-full">
                      <th class="px-7 py-2">
                          <span class="text-white">No</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                          <span class="text-white">Kode Jurusan</span>
                      </th>
                      <th class="px-7 py-2 text-left">
                          <span class="text-white">Nama Jurusan</span>
                      </th>
                      <th class="px-7 py-2">
                          <span class="text-white">AKSI</span>
                      </th>
                  </tr>
              </thead>
              <tbody class="bg-gray-200">
                @forelse ($majors as $major)
                  <tr class="bg-white border-2 border-gray-200">

                      <td class="px-7 py-2">{{$loop->iteration}}</td>
                      <td class="px-7 py-2">{{$major->major_code}}</td>
                      <td class="px-7 py-2">{{$major->title ?? ''}}</td>
                      <td class="px-10 py-2 text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.majors.destroy', $major->id) }}" method="POST">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:border-indigo-700 text-xs focus:outline-none mr-2"><a href="{{ route('admin.majors.edit', $major->id) }}">EDIT</a></button>
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:border-red-700 text-xs focus:outline-none"> HAPUS</button>
                        </form>
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
