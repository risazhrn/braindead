<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('/img/shape/shape-1.png') }}" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- page title area -->
    <section class="page__title-area  pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-content mb-50">
                        <h2 class="page__title">List Question</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Question</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

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
                                            <img src="assets/img/blog/author/blog-author-1.jpg" alt="">
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
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-title">
                                    <h3>Recent Question</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="rc__post-wrapper">
                                        @foreach ($newQuestions as $newQuestion)
                                            <div class="rc__post d-flex align-items-center">
                                                <div class="rc__thumb mr-15">
                                                    <a href="{{ route('question.show', $newQuestion) }}"><img
                                                            src="assets/img/blog/sm/blog-sm-1.jpg" alt=""></a>
                                                </div>
                                                <div class="rc__content">
                                                    <div class="rc__meta">
                                                        <span>{{ $newQuestion->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <h6 class="rc__title"><a
                                                            href="{{ route('question.show', $newQuestion) }}">{{ $newQuestion->value }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-title">
                                    <h3>Mata Pelajaran</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="tags">
                                        @foreach ($categories as $category)
                                            <a
                                                href="{{ route('question', ['category' => $category->name]) }}">{{ $category->name }}</a>
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
    <!-- postbox area end -->
</x-app-layout>
