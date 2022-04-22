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
                    <input type="text" name="name" value="{{ old('name', $major->title) }}"
                    class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2">
                    @error('name')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
    
                <div class="mt-5">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-green-500 border border-transparent rounded shadow select-none focus:border-green-600 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-30 disabled:opacity-50">UPDATE</button>
                </div>
    
            </form>
        </div>
    </div>
    
</x-student-layout>
