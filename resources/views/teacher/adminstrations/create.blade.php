<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Administrasi Guru') }} 
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('teacher.teacherAdministration.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Kelas</span>
                        </label>
                        <div class="relative">
                            <select name="classroom_id" id="classroom_id" class="form-multiselect block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  >
                                @foreach ($classrooms as $id => $classroom)
                                    <option class="font-normal hover:font-bold " value="{{$id}}" {{  old('classroom_id') == $id ? 'selected' : ''}}>{{$classroom}}</option>
                                @endforeach
                            </select>
                            @error('classroom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
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
                        <select id="subject_id" name="subject_id" class="form-multiselect  block lowercase appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control {{ $errors->has('subjects') ? 'is-invalid' : '' }}"  >
                            @foreach ($subjects as $id => $subject)
                                <option class="font-normal hover:font-bold lowercase" value="{{$id}}" {{old('subject_id') == $id ? 'selected' : ''}}>{{$subject}}</option>
                            @endforeach
                        </select>
                        @error('subject')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        <span>Materi Pelajaran</span>
                      </label>
                      <input id="subject_title" type="text"  name="subject_title" class="form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Judul Materi Pelajaran" >
                      @error('subject_title')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-3 mb-2 mt-7">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          <span>Metode Pelajaran</span>
                        </label>
                        <div class="relative">
                          <select name="learning_method" id="learning_method" class="form-multiselect block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                            <option disabled hidden {{ old('learning_method') != null ?: 'selected' }}>
                                {{-- {{ __('ticket.select') }} --}}
                            </option>
                            @foreach (\App\Helpers\Method::Method_Learning as $key => $value)
                              <option value="{{$value}}" {{old('learning_method') != null ?: 'selected'}}>
                                {{ \App\Helpers\Method::Method_Learning[$key]}}
                            </option>
                          @endforeach
                          </select>
                          @error('learning_method')
                            <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                              {{ $message }}
                            </div>
                          @enderror
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
                        <select name="completeness" id="completeness" class="form-multiselect block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                            @foreach (\App\Helpers\Completeness::Completeness as $key => $value)
                            <option value="{{$value}}" {{old('completeness') != null ?: 'selected'}}>
                                {{ \App\Helpers\Completeness::Completeness[$key]}}
                            </option>
                        @endforeach
                        </select>
                        @error('completeness')
                            <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                              {{ $message }}
                            </div>
                          @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        <span>Note</span>
                      </label>
                      <input id="note" type="text" name="note" class=" form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Note">
                    </div>
                  </div>

                <div class="mt-5">
                    <button type="submit"
                        class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">SIMPAN</button>
                </div>
    
            </form>
        </div>
    </div>
    
</x-teacher-layout>