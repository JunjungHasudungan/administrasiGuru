<x-teacher-layout>
    <x-slot name="header">
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
              <a href="{{route('teacher.administrations.index')}}"
                  class="hover:text-primary-600 text-indigo-400 hover:font-bold ">Administrasi Guru</a>
              <svg class="w-3 h-3"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <a href="{{route('teacher.administrations.create')}}"
                  class="text-primary-500 hover:text-primary-600 font-bold text-indigo-400 hover:font-bold">Create</a>
          </div>
    </div>
  </div>

    <div class="container mx-auto mt-5 mb-10">
      <div class="bg-white p-5 rounded shadow-sm">
          <form action="{{route('teacher.administrations.store')}}" x-data ="{method:2}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="flex flex-wrap -mx-3 mb-2">

                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span> Kelas</span>
                      </label>
                      <div class="relative">
                          <select id="classroom_id" name="classroom_id"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              @foreach ($classrooms as $id => $classrooms)
                                  <option class="font-normal hover:font-bold " value="{{$id}}" {{ old('classroom_id') == $id ? 'selected' : ''}}>{{$classrooms}}</option>
                              @endforeach
                          </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>

                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                      <span>Mata Pelajaran</span>
                    </label>
                    <div class="relative">
                      <select name="subject_id" id="subject_id" class="block lowercase appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          @foreach ($subjects as $id => $subjects)
                              <option class="font-normal hover:font-bold lowercase" value="{{$id}}" {{ old('subject_id') == $id ? 'selected' : ''}}>{{$subjects}}</option>
                          @endforeach
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      <span>Materi Pelajaran</span>
                    </label>
                    <input id="title" type="text" name="title" value="{{old('title')}}" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('title')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 " placeholder="Judul Materi Pelajaran" required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif

                  </div>
                </div>


                
                <div class="flex flex-wrap -mx-3 mb-2 mt-7">
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Metode Pelajaran</span>
                      </label>
                      <div class="relative">
                        <select id="method" name="method" x-model ="method" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          @foreach (\App\Helpers\Method::Method_Learning as $key => $value)
                            <option value="{{$value}}" {{old('learning_method') != null ?: 'selected'}}>
                              {{ $key}}
                          </option>
                        @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                      <span>Ketuntasan</span>
                    </label>
                    <div class="relative">
                      <select name="completeness" id="completeness" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          @foreach (\App\Helpers\Completeness::Completeness as $key => $value)
                          <option value="{{$value}}" {{old('completeness') != null ?: 'selected'}}>
                            {{ \App\Helpers\Completeness::Completeness[$key]}}
                          </option>
                          @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        <span>ID Teacher</span>
                      </label>
                      <input id="teacher_id" type="text"  name="teacher_id" value="{{auth()->id()}}" class="form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Judul Materi Pelajaran" readonly >
                      @error('teacher_id')
                      <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-2 mt-7"  >
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0" x-show = "method == 3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        <span>Keterangan Materi Penugasan</span>
                      </label>
                      <textarea class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 @if($errors->has('description')) border border-red-500 @else border-none shadow @endif rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white  focus:border-gray-500 "
                       name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Your message">
                      </textarea>
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


    {{-- <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('teacher.administrations.store')}}" method="POST" enctype="multipart/form-data">
                @csrf --}}
                {{-- <div class="flex flex-wrap -mx-3 mb-2">





{{--     
            </form>
        </div>
    </div> --}}
    
</x-teacher-layout>