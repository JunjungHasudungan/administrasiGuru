<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Kelas ') }} 
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Nama </span>
                        </label>
                        <input id="subject_code" type="text" name="subject_code" value="{{old('subject_code')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('subject_code')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('subject_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('subject_code') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Email</span>
                        </label>
                        <input id="subject_name" type="text" name="subject_name" value="{{old('subject_name')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('subject_name')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('subject_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('subject_name') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Password</span>
                        </label>
                        <input id="subject_name" type="text" name="subject_name" value="{{old('subject_name')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('subject_name')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('subject_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('subject_name') }}
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
                        <select name="role_id" x-model="role_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
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