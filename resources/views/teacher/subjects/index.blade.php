<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' List Subject') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-3 lg:px-8">
            <table class="bg-grey w-full text-gray-800 ">
                <thead>
                    <th>{{__('No')}}</th>
                    <th>{{__('Kode Pelajaran')}}</th>
                    <th>{{__('Nama Pelajaran')}}</th>
                    <th>{{__('Kelas')}}</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</x-teacher-layout>

{{-- <h1>hello</h1>ph --}}
