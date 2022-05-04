<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Administrasi Guru') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
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
