<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ $teacherAdministration->teachers->name ?? '' }}
        </h2>
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
                    class="hover:text-primary-600  text-indigo-400 hover:font-bold ">Administrasi Guru </a>
                <svg class="w-3 h-3"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
                <a href="{{route('admin.teacherAdministrations.edit', $teacherAdministration->id )}}"
                    class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Edit</a>
            </div>
          </div>
        </div>

    <div>
        <div class="max-w-6xl mx-auto mt-5 mb-10">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ date('l, d F Y', strtotime( $teacherAdministration->created_at )) }} 
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kelas
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teacherAdministration->classrooms->name_class  ?? ''}}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teacherAdministration->subjects->name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Materi
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teacherAdministration->title ?? ''}}
                                    </td>
                                </tr>
                                
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Metode Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teacherAdministration->method }}         
                                    </td>
                                </tr>

                                @if ( $teacherAdministration->method === 3 )
                                    <tr class="border-b">
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Keterangan Materi Penugasan
                                        </th>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                            {{ $teacherAdministration->description ?? ''}}
                                        </td>
                                    </tr>
                                @endif

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ketuntasan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">

                                        @if ($teacherAdministration->completeness === 'Bersambung')
                                            <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-yellow-200 capitalize last:mr-0 mr-1">
                                                {{ $teacherAdministration->completeness}}
                                            </span>
                                        @else
                                            <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-blueGray-600 bg-emerald-200 capitalize last:mr-0 mr-1">
                                                {{ $teacherAdministration->completeness}}
                                            </span>
                                        @endif
                                        
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap mt-2 text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{-- <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="switchOne" checked="" wire:model="isActive">
                                         </div> --}}
                                        {{-- @if ($teacherAdministration->statusCheck === 0)
                                            <span class="text-xs font-bold inline-block py-1 px-2 rounded-full text-emerald-600 bg-yellow-200 capitalize last:mr-0 mr-1">
                                                Belum di periksa
                                            </span>
                                        @else
                                            <span class="text-xs font-bold inline-block py-1 px-2 capitalize rounded-full text-blueGray-600 bg-emerald-200 last:mr-0 mr-1">
                                                Sudah diperiksa
                                            </span>
                                        @endif --}}

                                        @livewire('toggle-switch',[
                                            'model'     => $teacherAdministration,
                                            'field'     => 'statusCheck',
                                        ])
                                    </td>
                                </tr>

                                {{-- <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Koment
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        <form action="{{route('admin.administrationComment.update', $teacherAdministration->id)}} method="POST" enctype="multipart/form-data" class="w-full max-w-sm">
                                            @method('PUT')
                                            @csrf
                                            <div class="flex items-center border-b border-teal-500 py-2">
                                              <input class="form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " type="text" placeholder="Opsional" aria-label="Full name">
                                              <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 ml-2 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                                                Kirim
                                              </button>
                                            </div>
                                          </form>
                                    </td>
                                </tr> --}}

                                    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('admin.teacherAdministrations.index')}}">
                  Kembali</a> 
                </button>
        </div>
    </div>

</x-student-layout>

    

