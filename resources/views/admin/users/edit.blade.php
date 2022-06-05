<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' User ') }} 
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Nama </span>
                        </label>
                        <input id="name" type="text" name="name" value="{{old('name')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('name')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Email</span>
                        </label>
                        <input id="email" type="text" name="email" value="{{old('email')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('email')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Password</span>
                        </label>
                        <input id="password" type="text" name="password" value="{{old('password')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('password')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Role </span>
                      </label>
                      <div class="relative">
                        <select name="role_id" x-model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          <option value="2">Siswa</option>
                          <option value="3">Guru</option>
                        </select>
                            @error('role_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="mt-4" x-show="role_id == 2">
                      <x-jet-label for="student_address" value="{{ __('Address') }}" />
                      <x-jet-input id="student_address" class="block w-full mt-1" type="text" :value="old('student_address')" name="student_address" />
                    </div> --}}

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>KELAS </span>
                        </label>
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

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Status </span>
                        </label>
                        <select name="status" x-model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="0">Pindahan</option>
                            <option value="1">Baru</option>
                        </select>
                    </div>

                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Jurusan </span>
                      </label>
                      <div class="relative">
                        <select name="major_id" x-model="major_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          @forelse($majors as $id => $major)
                            <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{  old('major_id') == $id ? 'selected' : ''}}>{{$major}}</option>
                          @empty
                            <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                              Data Belum Tersedia.
                            </div>
                          @endforelse
                        </select>
                            @error('role_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>KELAS </span>
                        </label>
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

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Status </span>
                        </label>
                        <select name="status" x-model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="0">Pindahan</option>
                            <option value="1">Baru</option>
                        </select>
                    </div>

                </div>

            </div>

                    <div class="mt-5">
                        <button type="submit"
                    class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
</x-teacher-layout>