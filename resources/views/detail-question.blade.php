<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="assets/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- page title area -->
    <section class="page__title-area  pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-content mb-50">
                        <div class="postbox__meta d-flex">
                            <div class="postbox__tag-2">
                                <a
                                    href="{{ route('question', ['category' => $question->category->name]) }}">{{ $question->category->name }}</a>
                            </div>
                        </div>
                        <h3 class="page__title" style="font-size: 32px;">{{ $question->value }}</h3>
                        <div class="postbox__author-2 mt-20">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <div class="postbox__author-thumb-2">
                                        <img src="https://ui-avatars.com/api/?name={{ $question->user->name }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h6>{{ $question->user->name }}</h6>
                                </li>
                                <li>
                                    <h6>{{ $question->created_at->diffForHumans() }}</h6>
                                    <span>Created At</span>
                                </li>

                            </ul>
                        </div>
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

                        <div class="postbox__details mb-55">
                            <h4 style="font-size: 24px">Answer</h4>
                            <ul>
                                @forelse ($question->answers as $answer)
                                    <li>
                                        <div class="comments-box grey-bg-2">
                                            <div class="comments-info d-flex">
                                                <div class="comments-avatar mr-15">
                                                    <img src="https://ui-avatars.com/api/?name={{ $answer->user->name }}" alt="">
                                                </div>
                                                <div class="avatar-name">
                                                    <h5>{{ $answer->user->name }}</h5>
                                                    <span
                                                        class="post-meta">{{ $answer->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <div class="comments-text ml-65">
                                                <p>{{ $answer->value }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        @auth
                            <div class="comment__wrapper p-relative white-bg">
                                <div class="comment__shape">
                                    <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
                                    <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
                                    <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
                                </div>
                                <h3>Post your answer</h3>
                                <div class="comment__form mt-35">
                                    <form action="{{ route('question.answer.add', $question) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="comment__input-wrapper mb-25">
                                                    <h5>Answer</h5>
                                                    <div class="comment__input textarea">
                                                        <textarea name="answer" placeholder="Enter your answer.."></textarea>
                                                        <i class="fal fa-comment"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <button type="submit" class="m-btn m-btn-4">submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endauth
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
    <!-- postbox area end -->

</x-guest-layout>
