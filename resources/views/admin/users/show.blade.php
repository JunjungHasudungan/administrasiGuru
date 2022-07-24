<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{-- {{ $user->name }} --}}
        </h2>
    </x-slot>

    <div class="px-6 py-4 mb-4 overflow-hidden  rounded-lg shadow-sm  ">
        <div class="flex flex-col justify-between sm:flex-row">
            <div class="flex items-end justify-left ml-10 mt-5 ">
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
                <a href="{{ route('admin.users.index') }}"
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">User</a>
                <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
                <a href="{{ route('admin.users.show', $user->id) }}"
                  class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Detail</a>
              </div>
            </div>
          </div>
        </div>

    <div>
        <div class="max-w-6xl mx-auto mt-5 mb-10">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full" x-data="{role_id: 2}">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $user->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $user->name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Roles
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $user->role->name }}
                                        </span>
                                    </td>
                                </tr>
                                
                                {{-- role_2 === guru --}}
                                @if ($user->role_id === 3)
                                
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                            @forelse ($user->subjects as $subject)
                                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                    <a href="{{route('admin.subjects.index')}}" class="no-underline hover:underline">
                                                        {{ $subject->name ?? ''}}
                                                    </a>
                                                </span> 
                                            @empty
                                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                                    <a href="{{route('admin.subjects.index')}}" class="no-underline hover:underline">
                                                        Tidak Mata Pelajaran
                                                    </a>
                                                </div>
                                        @endforelse
                                    </td>
                                </tr>
                                @else
                                    <div class="text-white p-3 ">

                                    </div>
                                @endif
                               
                                {{-- @if ($user->role_id === 3) 
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                            @forelse ($user->subjects as $subject)
                                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                    <a href="{{route('admin.subjects.index')}}" class="no-underline hover:underline">
                                                        {{ $subject->name ?? ''}}
                                                    </a>
                                                </span> 
                                            @empty
                                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                                    Tidak Mata Pelajaran
                                                </div>
                                        @endforelse
                                        @else
                                        <div class="text-white p-3 ">

                                        </div>
                                        @endif
                                    </td>
                                </tr> --}}

                                @if ($user->role_id === 2)
                                    <tr class="border-b" x-data="{role_id: 2}">
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Kelas
                                        </th>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200" >
                                                <span class="px-2 inline-flex text-xs lowercase leading-5 font-semibold rounded-full bg-green-100 text-green-800" >
                                                    <a href="{{route('admin.classrooms.index')}}" class="no-underline hover:underline">
                                                        {{ $user->classroom->name_class ?? ''}}
                                                    </a> 
                                                </span>
                                        </td>
                                    </tr>
                                    
                                @else
                                <div class=" text-white p-3 ">
                                    
                                </div>
                                @endif

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jurusan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @if ($user->role_id === 2)
                                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                            <a href="{{route('admin.majors.index')}}" class="no-underline hover:underline">
                                                {{ $user->studentMajor->title ?? ''}}
                                            </a>
                                            </span>  

                                        @elseif ($user->role_id === 3)

                                            @forelse ($user->majorTeacher as $major)
                                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                    <a href="{{route('admin.majors.index')}}" class="no-underline hover:underline">
                                                        {{ $major->title ?? ''}}
                                                    </a>
                                                </span>
                                            @empty
                                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                    <a href="{{route('admin.majors.index')}}" class="no-underline hover:underline">
                                                        Jurusan tidak ada
                                                    </a>
                                                </span>
                                            @endforelse

                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                <a href="{{route('admin.majors.index')}}" class="no-underline hover:underline">
                                                    Jurusan tidak ada
                                                </a>
                                            </span>
                                        @endif
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alamat
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @isset($user->student_address)
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                {{$user->student_address}}
                                            </span>
                                        @endisset
                                     
                                        @empty($user->student_address)
                                        <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                            Alamat tidak disertakan.
                                        </span>
                                        @endempty
                                    </td>
                                </tr>
                               @if ($user->role_id === 2)
                                    <tr class="border-b" >
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nomor Induk Siswa
                                        </th>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                           @isset($user->student_licence_number)
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full  bg-green-100 text-green-800">
                                                    {{$user->student_licence_number ?? 'Tidak dicantumkan'}}
                                                </span>
                                           @endisset

                                           @empty($user->student_licence_number)
                                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full  bg-yellow-100 text-green-800">
                                                        Tidak ada.
                                                </span>
                                               
                                           @endempty
                                        </td>
                                    </tr>
                               @else
                                <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full ">
                                    
                                </span>
                               @endif

                               @if ($user->role_id === 2)
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @if ($user->status === 0)
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-yellow-100 text-green-800">
                                                Pindahahan
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full bg-green-100 text-green-800">
                                                Baru
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                               @else
                                    <span class="px-2 inline-flex text-xs leading-5 lowercase font-semibold rounded-full ">
                                            
                                    </span>
                               @endif

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button class="bg-transparent mt-2  text-blue-700 font-semibold hover: py-2 px-4  hover:border-transparent rounded">
                <a href="{{route('admin.users.index')}}">
                  Kembali</a> 
                </button>
        </div>
    </div>

</x-student-layout>