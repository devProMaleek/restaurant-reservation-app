<x-administrator-guest-layout>
  <x-admin-forgot-password-card>
    <x-slot name="img">
      <x-admin-image src="{{ asset('assets/img/forgot-password-office.jpeg') }}" class="dark:hidden">
      </x-admin-image>
      <x-admin-image src="{{ asset('assets/img/forgot-password-office-dark.jpeg') }}" class="hidden dark:block">
      </x-admin-image>
    </x-slot>

    <x-admin-forgot-password-form>
      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('administrator.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
          <x-label for="email" class="block text-sm">
            <x-admin-span :value="__('Email')"></x-admin-span>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
              autofocus />
          </x-label>
        </div>

        <x-login-button>
          {{ __('Recover Password') }}
        </x-login-button>
      </form>

    </x-admin-forgot-password-form>

  </x-admin-forgot-password-card>
</x-administrator-guest-layout>
