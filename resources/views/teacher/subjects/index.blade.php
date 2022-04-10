<x-teacher-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' List Subject') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            Accessible only for teachers.

            @foreach ($teacherSubjects as $item)
                <ul>
                    <li>{{$item->name}}</li>
                </ul>
            @endforeach
        </div>
    </div>
</x-teacher-layout>

{{-- <h1>hello</h1>ph --}}
