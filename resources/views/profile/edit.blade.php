<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    {{-- <div class="contact__area pt-105 pb-145">
        {{-- <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="col-xxl-12">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div> --}}

            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}

    <section class="contact__area pt-105 pb-145">
        <div class="contact__shape">
           <img class="man-1" src="{{asset('/img/icon/sign/man-1.png')}}" alt="">
           <img class="circle" src="{{asset('/img/icon/sign/circle.png')}}" alt="">
           <img class="zigzag" src="{{asset('/img/icon/sign/zigzag.png')}}" alt="">
           <img class="dot" src="{{asset('/img/icon/sign/dot.png')}}" alt="">
           <img class="bg" src="{{asset('/img/icon/sign/sign-up.png')}}" alt="">
        </div>
        <div class="container">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="container">
            @include('profile.partials.update-password-form')
        </div>
     </section>
</x-app-layout>
