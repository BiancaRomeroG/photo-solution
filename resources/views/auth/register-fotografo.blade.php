<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('fotografo.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="flex mt-4">
                <div class="mr-1">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="ml-1">
                    <x-jet-label for="apellido" value="{{ __('Apellidos') }}" />
                    <x-jet-input id="apellido" class="block w-full mt-1" type="text" name="apellido"
                        :value="old('apellido')" required autofocus autocomplete="apellido" />
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="nombre_studio" value="{{ __('Foto Estudio') }}" />
                <x-jet-input id="nombre_studio" class="block w-full mt-1" type="text" name="nombre_studio"
                    :value="old('nombre_studio')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="ci" value="{{ __('Carnet de identidad') }}" />
                <x-jet-input id="ci" class="block w-full mt-1" type="text" name="ci" :value="old('ci')"
                    required autofocus autocomplete="ci" />
            </div>

            <div class="mt-4">
                <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                <x-jet-input id="telefono" class="block w-full mt-1" type="text" name="telefono" :value="old('telefono')"
                    required autofocus autocomplete="telefono" />
            </div>


            <input type="hidden" value="fotografo" name="tipo">

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estas registrado?') }}
                </a>


                    <x-jet-button class="ml-4">
                        {{ __('Registrar') }}
                    </x-jet-button>



                {{-- <a href="{{ route('pago.index') }}">
                    <button class="ml-4">
                        Registrar
                    </button>
                </a> --}}

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
