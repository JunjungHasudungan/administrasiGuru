<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-500">
            {{ $user->name }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
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
                                        Email
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email Verified At
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $user->email_verified_at ?? '-' }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Roles
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{-- @foreach ($user->roles as $role) --}}
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $user->role->name }}
                                        </span>
                                        {{-- @endforeach --}}
                                    </td>
                                </tr>
                                
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{-- role_2 === siswa --}}
                                        @if ($user->role_id === 2) 
                                            @forelse ($user->studentSubject as $subject)
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

                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kelas
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">

                                        @if ($user->classrooms->name_class ?? '')
                                            <span class="px-2 inline-flex text-xs lowercase leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">
                                                <a href="{{route('admin.classrooms.index')}}" class="no-underline hover:underline">
                                                    {{ $user->classrooms->name_class ?? ''}}
                                                </a> 
                                            </span>
                                          @else
                                            <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                                Kelas tidak tersedia
                                            </div>
                                        @endif
                                    </td>
                                </tr>

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
                                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                                    Jurusan tidak tersedia
                                                </div>
                                            @endforelse

                                            {{-- jika role diluar 2 dan 3 --}}
                                        @else
                                            <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                                Jurusan Tidak tersedia
                                            </div>
                                        @endif

                                       
                                        
                                    </td>
                                </tr>
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