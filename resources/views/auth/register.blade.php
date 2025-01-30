<x-layout>
    <div class="register-content h-lvh">
        <div class="register-form lg:w-3/12 md:w-1.5/3 sm:w-1/2 p-5 font-extralight border overflow-hidden pb-10">
            <p class="text-3xl">Register</p>
            @error(('failed'))
                <p class="error text-red-600 text-sm">{{ $message }}</p>
            @enderror
            <div class="form">
                <form action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <div class="input-form pt-5">
                        @error('firstname')
                            <p class="error text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <input type="text" name="firstname" id="firstname" class="w-80 h-10 rounded-md px-5" required placeholder="First Name" value="{{ old('firstname') }}">
                    </div>
                    <div class="input-form pt-5">
                        @error('lastname')
                            <p class="error text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <input type="text" name="lastname" id="lastname" class="w-80 h-10 rounded-md px-5" required placeholder="Last Name" value="{{ old('lastname') }}">
                    </div>
                    <div class="input-form pt-5 flex-col">
                        @error('email')
                            <p class="error text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" id="email" class="w-80 h-10 rounded-md px-5" required placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="input-form pt-5 flex-col">
                        @error('password')
                            <p class="error text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" id="password" class="w-80 h-10 rounded-md px-5" required placeholder="Password">
                    </div>
                    <div class="input-form pt-5">
                        @error('password_confirmation')
                            <p class="error text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-80 h-10 rounded-md px-5" placeholder="Connfirm your password">
                    </div>
                    {{-- register button --}}
                    <div class="input-form pt-5 flex-col">
                        <p class="text-sm justify-center pb-3">Already have an account? <a href="{{ route('auth.login') }}" class="text-blue-700 underline">Login</a> here</p>
                        <button class="btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-content lg:w-1/2 md:w-1/2 sm:w-1/3 border-t border-r border-b">
            <img src="{{ URL('images/register-form-images.png') }}" alt="Register">
        </div>
    </div>


</x-layout>
