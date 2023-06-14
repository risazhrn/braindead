<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>


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
                        <p>Braindead adalah sebuah tempat untuk berdiskusi bersama dan menyelesaikan permasalahan
                            yang rumit.</p>
                        <div class="hero__search">
                            <form action="{{ route('question') }}" method="GET">
                                <div class="hero__search-inner d-xl-flex">
                                    <div class="hero__search-input">
                                        <span><i class="far fa-search"></i></span>
                                        <input name="search" type="text" placeholder="Apa pertanyaanmu?">
                                    </div>
                                    <button type="submit" class="m-btn ml-20">search</button>
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

    <!-- postbox area start -->
    <section class="postbox__area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper">
                        @forelse ($questions as $question)
                            <article class="postbox__item format-image fix mb-50 wow fadeInUp" data-wow-delay=".2s">
                                <div class="postbox__content">
                                    <div class="postbox__meta d-flex mb-10">
                                        <div class="postbox__tag mr-20">
                                            <a href="#">{{ $question->category->name }}</a>
                                        </div>
                                        <div class="postbox__date">
                                            <span><i
                                                    class="fal fa-clock"></i>{{ $question->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <h3 class="postbox__title mb-15"><a
                                            href="{{ route('question.show', $question) }}">{{ $question->value }}</a>
                                    </h3>
                                    <div class="postbox__author d-flex align-items-center">
                                        <div class="postbox__author-thumb mr-15">
                                            <img src="https://ui-avatars.com/api/?name={{ $question->user->name }}"
                                                alt="">
                                        </div>
                                        <h5>Created by <a href="#">{{ $question->user->name }}</a> </h5>
                                    </div>
                                </div>
                            </article>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="blog__sidebar-wrapper  ml-30">
                        <div class="blog__sidebar mb-30">
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-title">
                                    <h3>Mata Pelajaran</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="tags">
                                        @foreach ($categories as $category)
                                            <a
                                                href="{{ route('question', ['question' => $category->name]) }}">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
