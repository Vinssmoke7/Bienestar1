<x-guest-layout>
   
    {{-- <x-jet-authentication-card >
    
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
            <div>
                 <h1 style="font-size: 40px"><b>Bienestar</b></h1>
            </div>
        </x-slot>
                
        
         <x-jet-validation-errors class="mb-4" />
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
       
        <form method="POST" action="{{ route('login') }}"  >
            @csrf

            <!-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> -->

            <div>
                <x-jet-label for="name" value="{{ __('Usuario') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-jet-button class="ml-4">
                    {{ __('Iniciar Sesion') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}

    <style>
        .col-12{
            padding: 9px;
        }
    </style>

    <div id="login-button">
        <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
        </img>
      </div>
      <div id="container">
        <h1 style="margin-top: 15px"><b>Bienestar</b></h1>
        <span class="close-btn">
          <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
      
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="row" style="padding: 20px">
            <div class="col-12">
                <input type="text" class="form-control" name="name" placeholder="Usuario">
            </div>
            <div class="col-12">
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
            <div style="margin-top:15px; display:flex; justify-content:center">
                <button type="submit" class="btn btn-success">INICAR SESION</button>
            </div>
        </div>
          {{-- <a href="#">Log in</a> --}}
          {{-- <div id="remember-container">
            <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
            <span id="remember">Remember me</span>
            <span id="forgotten">Forgotten password</span>
          </div> --}}
      </form>
      </div>
      
      <!-- Forgotten Password Container -->
      {{-- <div id="forgotten-container">
         <h1>Forgotten</h1>
        <span class="close-btn">
          <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
      
        <form>
          <input type="email" name="email" placeholder="E-mail">
          <a href="#" class="orange-btn">Get new password</a>
      </form>
      </div> --}}
</x-guest-layout>
