<section>
    {{-- <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form> --}}

    <div class="row">
        <div class="col-xxl-12">
            <div class="page__title-wrapper mb-55">
                <h2 class="page__title-2">Update Password</h2>
                <p>Ensure your account is using a long, random password to stay secure.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="contact__wrapper  white-bg">
                <div class="contact__form">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="contact__input-wrapper mb-25">
                                <h5 :value="__('Current Password')">Current Password</h5>
                                <div class="contact__input">
                                    <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password">
                                    <i class="fal fa-lock"></i>
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="contact__input-wrapper mb-25">
                                    <h5 for="password" :value="__('New Password')">New Password</h5>
                                    <div class="contact__input">
                                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                                        <i class="fal fa-lock"></i>
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="contact__input-wrapper mb-25">
                                    <h5 for="password_confirmation" :value="__('Confirm Password')">Confirm Password</h5>
                                    <div class="contact__input">
                                        <input id="password" name="password" type="password" class="form-control" autocomplete="new-password">
                                        <i class="fal fa-lock"></i>
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <button type="submit" class="m-btn m-btn-4"> <span></span>{{ __('Save') }}</button>
                    </div>
                </div>
                @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>
