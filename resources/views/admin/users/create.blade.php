<x-teacher-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' User ') }} 
        </h2> --}}
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
                <a href="{{route('admin.users.index')}}"
                    class="hover:text-primary-600 text-indigo-400 hover:font-bold ">User</a>
                <svg class="w-3 h-3"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
                <a href="{{route('admin.users.create')}}"
                    class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Create</a>
            </div>
          </div>
        </div>

{{-- anastasyaadelia --}}

    <div class="container mx-auto mt-5 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.users.store')}}" method="POST" x-data="{role_id: 2}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                       
                        <x-jet-label for="name" value="{{ __('Nama') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

{{-- anastasyaadelia --}}

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0" x-data="{ showPassword: false }" >
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password"  x-bind:type="showPassword ? 'text' : 'password'"  required autocomplete="new-password" />
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>


                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="role_id" value="{{ __('Role') }}" />
                      <div class="relative">
                        <select name="role_id" x-model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($roles as $id => $role)
                                <option value="{{$id}}" {{old('role_id') == $id ? 'selected' : ''}}> {{$role}} </option>
                            @endforeach
                        </select>
                            @error('role_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0" x-show="role_id == 2">
                        <x-jet-label for="classroom_id" value="{{ __('Kelas') }}" />
                        <div class="relative">
                          <select id="classroom_id" name="classroom_id" class="form-multiselect  block capitalize appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('classroom_id') ? 'is-invalid' : '' }}"  >
                              @foreach ($classrooms as $id => $classroom)
                                  <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{  old('classroom_id') == $id ? 'selected' : ''}}>{{$classroom}}</option>
                              @endforeach
                          </select>
                              @error('classroom_id')
                                  <p class="text-sm text-red-600">{{ $message }}</p>
                          @enderror
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                      </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0" >
                        <x-jet-label for="status" value="{{ __('Status') }}" />
                        <select name="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach (\App\Helpers\RoleStatus::RoleStatus as $key => $value) 
                                <option value="{{$value}}" {{old('status' != $value ?: 'selected')}} >{{$key}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                <div class="flex flex-wrap -mx-3 mb-2"  x-show="role_id == 2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="major_id" value="{{ __('Jurusan') }}" />
                        <div class="relative">
                            <select id="major_id" name="major_id" class="form-multiselect  block capitalize appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('major_id') ? 'is-invalid' : '' }}"  >
                                @foreach ($majors as $id => $major)
                                    <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{  old('major_id') == $id ? 'selected' : ''}}>{{$major}}</option>
                                @endforeach
                            </select>
                                @error('major_id')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="student_address" value="{{ __('Alamat') }}" />
                      <x-jet-input id="student_address" class="block w-full mt-1" type="text" :value="old('student_address')" name="student_address" />
                        @if($errors->has('student_address'))
                            <div class="invalid-feedback">
                                {{ $errors->first('student_address') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="student_licence_number" value="{{ __('Nomor Induk Siswa') }}" />
                        <x-jet-input id="student_licence_number" class="block w-full mt-1" type="text" :value="old('student_licence_number')" name="student_licence_number" />
                        @if($errors->has('student_licence_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('student_licence_number') }}
                            </div>
                        @endif
                    </div>
                </div>

                {{-- <div class="flex flex-wrap -mx-3 mb-2 mt-5" x-show="role_id == 2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Mata Pelajaran </span>
                      </label>
                          <div class="form-check w-full form-check  bg-gray-200 form-check-inline">
                              @forelse ($subjects as $id => $subjects)
                                <label class="form-check-label mt-2 ml-2 inline-block text-gray-800" for="flexCheckDefault">
                                    <input name="subjects[]" id="subjects" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="checkbox" value="{{$id}}" {{ in_array($id, old('subjects', [])) ? 'selected' : '' }} >
                                    {{$subjects}}
                                </label>
                              @error('subjects')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                              @enderror
                              @empty
                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                    Data Belum Tersedia!
                                </div>
                            @endforelse
                          </div>
                    </div>


                </div> --}}

            </div>

                    <div class="mt-5">

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>

                        {{-- <button type="submit"
                    class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN</button>
                    </div> --}}
                </div>

            </form>
        </div>
    </div>
    
</x-teacher-layout>