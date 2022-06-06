<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{-- {{ $user->name }} --}}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
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
                                
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{-- role_2 === siswa --}}
                                        @if ($user->role_id === 2) 
                                            @forelse ($user->subjectStudent as $subject)
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
                                            {{-- role_id === guru --}}
                                        @elseif ($user->role_id === 3)
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
                                        <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                            Tidak Mata Pelajaran
                                        </div>
                                        @endif
                                    </td>
                                </tr>

                                @if ($user->role_id === 2)
                                    <tr class="border-b" x-data="{role_id: 2}">
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Kelas
                                        </th>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200" >
                                                <span class="px-2 inline-flex text-xs lowercase leading-5 font-semibold rounded-full bg-green-100 text-green-800" >
                                                    <a href="{{route('admin.classrooms.index')}}" class="no-underline hover:underline">
                                                        {{ $user->classrooms->name_class ?? ''}}
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