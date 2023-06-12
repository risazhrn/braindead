<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <main>

        <!-- hero area start -->
        <section class="hero__area hero__height white-bg d-flex align-items-center">
            <div class="hero__shape">
                <img class="circle" src="{{ asset('img/icon/hero/hero-circle.png') }}" alt="circle">
                <img class="circle-2" src="{{ asset('img/icon/hero/hero-circle-2.png') }}" alt="circle">
                <img class="square" src="{{ asset('img/icon/hero/hero-square.png') }}" alt="circle">
                <img class="square-2" src="{{ asset('img/icon/hero/hero-square-2.png') }}" alt="circle">
                <img class="dot" src="{{ asset('img/icon/hero/hero-dot.png') }}" alt="circle">
                <img class="triangle" src="{{ asset('img/icon/hero/hero-triangle.png') }}" alt="circle">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                        <div class="hero__content">
                            <h2 class="hero__title">
                                <span>MALU BERTANYA</span><br>
                                SESAT DI JALAN
                            </h2>
                            <p>Braindead adalah sebuah tempat untuk berdiskusi bersama dan menyelesaikan permasalahan yang rumit.</p>
                            <div class="hero__search">
                                <form action="#">
                                    <div class="hero__search-inner d-xl-flex">
                                        <div class="hero__search-input">
                                            <span><i class="far fa-search"></i></span>
                                            <input type="text" placeholder="Apa pertanyaanmu?">
                                        </div>
                                        <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="ml-70">

                            <img class="layer image-hidden" width="500px" data-depth="0.2"
                                src="{{ asset('img/think.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        
    </main>
</x-guest-layout>
