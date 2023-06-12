
<x-guest-layout>
    <x-slot name="title">
         Login
     </x-slot>
 <!-- bg shape area start -->
 <div class="bg-shape">
     <img src="assets/img/shape/shape-1.png" alt="">
  </div>
  <!-- bg shape area end -->
 
  <!-- sign up area start -->
  <section class="signup__area po-rel-z1 pt-100 pb-145">
     <div class="sign__shape">
        <img class="man-1" src="{{asset('/img/icon/sign/man-1.png')}}" alt="">
        <img class="man-2" src="{{asset('/img/icon/sign/man-2.png')}}" alt="">
        <img class="circle" src="{{asset('/img/icon/sign/circle.png')}}" alt="">
        <img class="zigzag" src="{{asset('/img/icon/sign/zigzag.png')}}" alt="">
        <img class="dot" src="{{asset('/img/icon/sign/dot.png')}}" alt="">
        <img class="bg" src="{{asset('/img/icon/sign/sign-up.png')}}" alt="">
     </div>
     <div class="container">
        <div class="row">
           <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
              <div class="page__title-wrapper text-center mb-55">
                 <h2 class="page__title-2">Sign In</h2>
                 <p>If you don't have an account you can <a href="{{route('register')}}">Register here!</a></p>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
              <div class="sign__wrapper white-bg">
                
                 <div class="sign__form">
                    <form method="POST" action="{{route('login')}}">
                     @csrf
                       <div class="sign__input-wrapper mb-25">
                          <h5>Email</h5>
                          <div class="sign__input">
                             <input id="email" type="email" placeholder="e-mail address" name="email" :value="old('email')" required autofocus autocomplete="username">
                             <i class="fal fa-envelope"></i>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                       </div>
                       <div class="sign__input-wrapper mb-10">
                          <h5>Password</h5>
                          <div class="sign__input">
                             <input id="password"
                             type="password"
                             name="password"
                             required autocomplete="current-password">
                             <i class="fal fa-lock"></i>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                       </div>
                       <div class="sign__action d-sm-flex justify-content-between mb-30">
                          <div class="sign__agree d-flex align-items-center">
                             <input class="m-check-input" type="checkbox" id="m-agree" name="remember">
                             <label class="m-check-label" for="m-agree">Keep me signed in
                                </label>
                          </div>
                          @if (Route::has('password.request'))
                          {{-- <div class="sign__forgot">
                             <a href="{{route('password.request')}}">Forgot your password?</a>
                          </div> --}}
             @endif
 
                       </div>
                       <button class="m-btn m-btn-4 w-100" type="submit"> <span></span> Sign In</button>
                       <div class="sign__new text-center mt-20">
                          <p>Create an account? <a href="{{route('register')}}">Sign Up</a></p>
                       </div>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- sign up area end -->
 
 </x-guest-layout>
 
 