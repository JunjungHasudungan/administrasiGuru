
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Administrasi Guru </title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet">

        <style>
            .input::placeholder{
                color:#EDF2F7;
                text-shadow: -1px -1px 2px rgba(255,255,255,0.05), 1px 1px 2px rgba(0,0,0,0.8);
            }
            .input{
                color:#EDF2F7;
                text-shadow: -1px -1px 2px rgba(255,255,255,0.05), 1px 1px 2px rgba(0,0,0,0.8);
            }



        </style>

    </head>

    {{-- @yield('content') --}}

    <div class="flex flex-col items-center justify-center bg-gray-300 h-screen select-none">
        <div class="flex flex-col -mt-32 bg-white px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-xl shadow-2xl w-full max-w-md  border-l-4 border-purple-600">
            {{-- <div class="font-medium self-center text-xl sm:text-2xl uppercase w-60 text-center bg-purple-600 shadow-2xl p-6 rounded-full text-white">Sign In</div> --}}
            <div class="mt-15">
                <form method="POST" action="" autocomplete="">
                    <div class="pt-6 md:p-8 text-center md:text-center space-y-4 font-normal text-sky-500 dark:text-sky-400">
                        Administrasi Guru
                    </div>
                    <div class="relative w-full mb-3">
                        <input type="email" name="email" class="border-0 p-4 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" />
                        <small class="p-2 text-red-500">* Email</small>
                    </div>
                    <div class="relative w-full mb-3">
                        <input type="password" name="password" class="border-0 p-4 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" style="transition: all 0.15s ease 0s;" />
                        <small class="p-2 text-red-500">* Password</small>
                    </div>
                    <div class="text-center mt-6">
                        <input type="submit" name="signin" id="signin" value="Sign In" class="p-3 rounded-lg bg-purple-600 outline-none text-white shadow w-32 justify-center focus:bg-purple-700 hover:bg-purple-500">
                    </div>
                    <div class="flex flex-wrap mt-6">
                        <div class="w-1/2 text-left">
                            <a href="#" class="text-blue-900 text-xl"><small>Forgot password?</small></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>
