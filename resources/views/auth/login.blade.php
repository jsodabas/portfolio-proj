<x-layout>
    <div class="register-content h-lvh">
        <div class="register-form lg:w-3/12 md:w-1.5/3 sm:w-1/2 p-5 font-extralight border overflow-hidden pb-10">
            <p class="text-3xl">Login</p>
            @error('failed')
                <p class="error text-red-600 text-sm">{{ $message }}</p>
            @enderror
            <p class="text-1l">Welcome back!</p>
            <div class="form">
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="input-form pt-5">
                        <input type="email" name="email" id="email" class="w-80 h-10 rounded-md px-5" required placeholder="Email">
                    </div>
                    <div class="input-form pt-5">
                        <input type="password" name="password" id="password" class="w-80 h-10 rounded-md px-5" required placeholder="Password">
                    </div>
                    <div class="input-form pt-5 flex-col">
                        <p class="text-sm justify-center pb-3">Doesn't have an account? <a href="{{ route('auth.register') }}" class="text-blue-700 underline">Register</a> here</p>
                        <button class="btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-content">
            <img src="{{ URL('images/register-form-images.png') }}" alt="Login">
        </div>
    </div>

</x-layout>
