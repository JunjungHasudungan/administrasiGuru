<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' Jadwal Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <table class="bg-grey w-full text-gray-800 sm:ml-10">
                <thead>
                    <th>Time</th>
                    @foreach($weekDay as $day)
                        <th class="text-gray-800 font-thin">{{ $day }}</th>
                    @endforeach
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</x-teacher-layout>

{{-- <h1>hello</h1>ph --}}
