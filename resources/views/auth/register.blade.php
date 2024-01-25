<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <br>

        <!-- Role -->
        <div>
            <x-input-label for="role" :value="__('Role')" />

            <div class="mt-2">
                <label for="customer" class="inline-flex items-center">
                    <input type="radio" id="customer" name="role" value="customer"
                        {{ old('role') == 'customer' ? 'checked' : '' }} required autofocus autocomplete="role"
                        class="form-radio">
                    <span class="ml-2">{{ __('Customer') }}</span>
                </label>
            </div>

            <div class="mt-2">
                <label for="deliveryman" class="inline-flex items-center">
                    <input type="radio" id="deliveryman" name="role" value="deliveryman"
                        {{ old('role') == 'deliveryman' ? 'checked' : '' }} required autofocus autocomplete="role"
                        class="form-radio">
                    <span class="ml-2">{{ __('Deliveryman') }}</span>
                </label>
            </div>

            <div class="mt-2">
                <label for "artisan" class="inline-flex items-center">
                    <input type="radio" id="artisan" name="role" value="artisan"
                        {{ old('role') == 'artisan' ? 'checked' : '' }} required autofocus autocomplete="role"
                        class="form-radio">
                    <span class="ml-2">{{ __('Artisan') }}</span>
                </label>
            </div>

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>
        <br>
        <!-- phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" maxlength="11" name="phone"
                :value="old('phone')" autofocus autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

        </div>
        <br>
        <!-- Heur_Overture -->
        <div class="mt-4">
            <x-input-label for="Heur_Overture" :value="__('Heur_Overture')" />
            <x-text-input id="Heur_Overture" class="block mt-1 w-full" type="time" name="Heur_Overture"
                :value="old('Heur_Overture')" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" maxlength="5" autofocus
                autocomplete="Heur_Overture" />
            <x-input-error :messages="$errors->get('Heur_Overture')" class="mt-2" />
        </div>
    <br>

        <!-- Heur_Fermetur -->

        <div class="mt-4">
            <x-input-label for="Heur_Fermetur" :value="__('Heur_Fermetur')" />
            <x-text-input id="Heur_Fermetur" class="block mt-1 w-full" type="time" name="Heur_Fermetur"
                :value="old('Heur_Fermetur')" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" maxlength="5" autofocus
                autocomplete="Heur_Fermetur" />
            <x-input-error :messages="$errors->get('Heur_Fermetur')" class="mt-2" />
        </div>
      <br>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <br>
        <!-- image -->

       

        <!-- phone -->
        <div>
            <x-input-label for="Description" :value="__('Description')" />
            <x-text-input id="Description" class="block mt-1 w-full" type="text" name="Description"
                :value="old('Description')" autofocus autocomplete="Description" />
            <x-input-error :messages="$errors->get('Description')" class="mt-2" />
        </div>
        <br>


        <div>
            <x-input-label for="Dispo" :value="__('Disponible')" />

            <div class="mt-2">
                <label for="Yes" class="inline-flex items-center">
                    <input type="radio" id="Yes" name="Dispo" value="Yes"
                        {{ old('Dispo') == 'Yes' ? 'checked' : '' }} required autofocus autocomplete="Dispo"
                        class="form-radio">
                    <span class="ml-2">{{ __('Yes') }}</span>
                </label>
            </div>

            <div class="mt-2">
                <label for="No" class="inline-flex items-center">
                    <input type="radio" id="No" name="Dispo" value="No"
                        {{ old('Dispo') == 'No' ? 'checked' : '' }} required autofocus autocomplete="Dispo"
                        class="form-radio">
                    <span class="ml-2">{{ __('No') }}</span>
                </label>
            </div>
            <x-input-error :messages="$errors->get('Dispo')" class="mt-2" />
        </div>
        <br>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        @push('scripts')

    @endpush
    </form>
</x-guest-layout>
