<x-administrator-guest-layout>
  <x-admin-confirm-password-card>
    <x-slot name="img">
      <x-admin-image src="{{ asset('assets/img/forgot-password-office.jpeg') }}" class="dark:hidden">
      </x-admin-image>
      <x-admin-image src="{{ asset('assets/img/forgot-password-office-dark.jpeg') }}" class="hidden dark:block">
      </x-admin-image>
    </x-slot>

    <x-admin-confirm-password-form>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('administrator.password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mt-4">
          <x-label for="password" :value="__('Password')" class="block text-sm">
            <x-admin-span :value="__('Password')"></x-admin-span>

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
              autocomplete="current-password" />
          </x-label>

        </div>

        <x-login-button>
            {{ __('Confirm Password') }}
          </x-login-button>
      </form>
    </x-admin-confirm-password-form>
  </x-admin-confirm-password-card>
</x-administrator-guest-layout>
