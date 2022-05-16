<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __('Edit ') }} - {{$major->title}}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.majors.update', $major->id)}}" method="POST" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Kode Jurusan</span>
                        </label>
                        <input id="major_code" type="text" name="major_code" value="{{old('title', $major->major_code)}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Kode Jurusan">
                        @error('major_code')
                            <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Nama Jurusan</span>
                        </label>
                        <input id="title" type="text" name="title" value="{{old('title', $major->title)}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Nama Jurusan">
                        @error('title')
                            <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Kepala Jurusan </span>
                      </label>
                      <div class="relative">
                        <select id="head_of_departement" name="head_of_departement" class="form-multiselect  block capitalize appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('head_of_departement') ? 'is-invalid' : '' }}"  >
                            @foreach ($teacher_major as $id => $candidate)
                                <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{ ($major->headOfDepartement ? $major->headOfDepartement->id : old('head_of_departement')) == $id ? 'selected' : ''}}>{{$candidate}}</option>
                            @endforeach
                        </select>
                            @error('head_of_departement')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Nama Guru</span>
                      </label>
                        <div class="form-check w-full form-check  bg-gray-200 form-check-inline">
                            @foreach ($teacher_major as $id => $teachers)
                            <label class="form-check-label mt-2 ml-2 inline-block text-gray-800" for="flexCheckDefault">
                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                 type="checkbox" value="{{$id}}" {{ old('teachers') == $id ? 'selected' : '' }} name="teachers[]" id="teachers">
                                {{$teachers}}
                            </label>
                            @error('teachers')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                             @enderror
                            @endforeach
                        </div>
                      </div>
                </div>
                
            </div>


                <div class="mt-5">
                    <button type="submit"
                        class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
    
</x-student-layout>
