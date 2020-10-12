@section('title', 'Home Page Title')
<x-guest-layout>

    <div class="icon">
        <img src="{{asset('assets/img/3.png')}}" alt="">        
    </div>

    <div class="title">
        Admin login
    </div>

     @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4 error-message" />


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="label">
            <x-jet-label for="login" value="{{ __('Login') }}" />
        </div>
        <div>
            <input id="login" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Login"/>
        </div>

        <div class="label">
            <x-jet-label for="password" value="{{ __('Password') }}" />
        </div>
        <div>
            <input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password">
        </div>

        <x-jet-button class="ml-4">
            {{ __('Enter') }}
        </x-jet-button>
    
    

    </form>

</x-guest-layout>