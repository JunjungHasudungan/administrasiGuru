<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Guru ') }} 
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.teachers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Nama Guru </span>
                      </label>
                      <div class="relative">
                        <select id="teacher_id" name="teacher_id" class="form-multiselect  block capitalize appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('teacher_id') ? 'is-invalid' : '' }}"  >
                            @foreach ($teachers as $id => $teacher)
                                <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{  old('teacher_id') == $id ? 'selected' : ''}}>{{$teacher}}</option>
                            @endforeach
                        </select>
                            @error('teacher_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Nama Jurusan </span>
                        </label>
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