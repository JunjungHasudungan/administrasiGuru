<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Administrasi Guru') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="block mb-8">
            <a href="{{ route('teacher.teacherAdministration.create') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
                <svg class="w-5 h-5 -ml-1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                  clip-rule="evenodd" />
              </svg>    
              <span class="ml-2">Administrasi</span>
            </a>
        </div>
        <div class="bg-white p-5  shadow-sm">
            <div class="grid grid-cols-8 gap-4 mb-4">
              <div class="col-span-1 mt-2">
              </div>
            </div>
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200 w-full">
                              <thead>
                              <tr>
                                  <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      No
                                  </th>
                                  <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Nama Mata Pelajaran
                                  </th>
                                  <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
  
                                  </th>
                              </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
            <div class="mt-2">
            </div>
        </div>
    </div>

</x-teacher-layout>

