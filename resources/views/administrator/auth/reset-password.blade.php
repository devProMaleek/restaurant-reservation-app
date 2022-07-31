<x-administrator-guest-layout>
  <x-admin-forgot-password-card>
    <x-slot name="img">
      <x-admin-image src="{{ asset('assets/img/forgot-password-office.jpeg') }}" class="dark:hidden">
      </x-admin-image>
      <x-admin-image src="{{ asset('assets/img/forgot-password-office-dark.jpeg') }}" class="hidden dark:block">
      </x-admin-image>
    </x-slot>

    <x-admin-forgot-password-form>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('administrator.password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
          <x-label for="email" class="block text-sm">
            <x-admin-span :value="__('Email')"></x-admin-span>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
              autofocus />
          </x-label>
        </div>

        <!-- Password -->
        <div class="mt-4">
          <x-label for="password" :value="__('Password')" class="block text-sm">
            <x-admin-span :value="__('Password')"></x-admin-span>

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
              autocomplete="current-password" />
          </x-label>

        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
          <x-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm">
            <x-admin-span :value="__('Confirm Password')"></x-admin-span>

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
              required />
          </x-label>

        </div>

        <x-login-button>
          {{ __('Reset Password') }}
        </x-login-button>
      </form>

    </x-admin-forgot-password-form>

  </x-admin-forgot-password-card>
</x-administrator-guest-layout>
