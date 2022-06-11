<x-teacher-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-sky-500">
             {{$subject->name }}
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
              <a href="{{route('admin.subjects.index')}}"
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Mata Pelajaran </a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('admin.subjects.edit', $subject->id)}}"
                  class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Edit</a>
          </div>
        </div>
      </div>

    <div class="container mx-auto mt-5 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('admin.subjects.update', $subject->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Kode Mata Pelajaran</span>
                        </label>
                        <input id="subject_code" type="text" name="subject_code" value="{{old('subject_code', $subject->subject_code)}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('subject_code')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('subject_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('subject_code') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            <span>Nama Mata Pelajaran</span>
                        </label>
                        <input id="name" type="text" name="name" value="{{old('name', $subject->name)}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('name')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "  required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Nama Guru </span>
                        </label>
                        <div class="relative">
                          <select id="teacher_id" name="teacher_id" class="form-multiselect  block capitalize appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('teacher_id') ? 'is-invalid' : '' }}"  required>
                              @foreach ($teachers as $id => $teacher)
                                  <option class="font-normal hover:font-bold capitalize" value="{{$id}}" {{ ($subject->teachers ? $subject->teachers->id :  old('teacher_id')) == $id ? 'selected' : ''}}>{{$teacher}}</option>
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
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Nama Kelas</span>
                        </label>
                          <div class="form-check w-full form-check  bg-gray-200 form-check-inline">
                              @forelse ($classrooms as $id => $classrooms)
                              <label class="form-check-label mt-2 ml-2 inline-block text-gray-800" for="flexCheckDefault">
                                  <input name="classrooms[]" id="classrooms" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                   type="checkbox" value="{{$id}}" {{ in_array($id, old('classrooms', []))  || $subject->classrooms->contains($id) ? 'selected' : '' }} >
                                  {{$classrooms}}
                              </label>
                              @error('classrooms')
                              <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                              @empty
                                <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                                    Data Belum Tersedia!
                                </div>
                            @endforelse
                          </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Nama Jurusan</span>
                        </label>
                          <div class="form-check w-full form-check  bg-gray-200 form-check-inline">
                              @forelse ($majors as $id => $majors)
                              <label class="form-check-label mt-2 ml-2 inline-block text-gray-800" for="flexCheckDefault">
                                  <input name="majors[]" id="majors" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                   type="checkbox" value="{{$id}}" {{ in_array($id, old('majors', []))  || $subject->classrooms->contains($id)   ? 'selected' : '' }} >
                                  {{$majors}}
                              </label>
                              @error('majors')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                              @enderror
                              @empty
                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                    Data Belum Tersedia!
                                </div>
                            @endforelse
                          </div>
                    </div>
                  </div>

                    <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                      <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Hari Pembelajaran</span>
                        </label>
                          <div class="form-check w-full form-check  bg-gray-200 form-check-inline">
                              @forelse ($weekDaySubject as $id => $days)
                                <label class="form-check-label mt-2 ml-2 inline-block text-gray-800" for="flexCheckDefault">
                                  <input name="days[]" id="days" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                   type="checkbox" value="{{$id}}" {{ in_array($id, old('days', [])) ? 'selected' : '' }} >
                                  {{$days}}
                                </label>
                              @error('days')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                              @enderror
                              @empty
                                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                                    Data Belum Tersedia!
                                </div>
                              @endforelse
                          </div>
                    </div>
                </div>

                </div>
                  <div class="mt-5">
                      <button type="submit"
                  class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>
    
</x-teacher-layout>