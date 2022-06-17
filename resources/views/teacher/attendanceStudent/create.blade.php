<x-teacher-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-sky-500">
            {{ __(' Kelas ') }} 
        </h2> --}}
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{route('teacher.attendanceStudent.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul>
                    {{-- @forelse ($studentSubject as $item )
                        <li>{{ $item }}</li>
                    @empty
                        
                    @endforelse --}}
                </ul>
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