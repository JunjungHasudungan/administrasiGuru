<x-student-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Jurusan') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{ route('admin.majors.update', [$major->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
               
    
                <div class="mt-5">
                    <label>KODE JURUSAN</label>
                    <input type="text" name="major_code" value="{{ old('major_code', $major->major_code) }}"
                    class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2">
                    @error('major_code')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mt-5">
                    <label>Nama Jurusan</label>
                    <input type="text" name="name" value="{{ old('name', $major->name) }}"
                    class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2">
                    @error('name')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mt-5">
                    <button type="submit"
                        class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">UPDATE JURUSAN</button>
                </div>
    
            </form>
        </div>
    </div>
    
</x-student-layout>
