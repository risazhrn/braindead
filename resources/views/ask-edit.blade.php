<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('/img/shape/shape-1.png') }}" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- contact area start -->
    <section class="contact__area pt-105 pb-145">
        <div class="contact__shape">
            <img class="man-1" src="{{ asset('/img/icon/sign/man-1.png') }}" alt="">
            <img class="circle" src="{{ asset('/img/icon/sign/circle.png') }}" alt="">
            <img class="zigzag" src="{{ asset('/img/icon/sign/zigzag.png') }}" alt="">
            <img class="dot" src="{{ asset('/img/icon/sign/dot.png') }}" alt="">
            <img class="bg" src="{{ asset('/img/icon/sign/sign-up.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mb-55">
                        <h2 class="page__title-2">Edit Your Question</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="contact__wrapper  white-bg">
                        <div class="contact__form">
                            <form action="{{ route('question.update', $question) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact__input-wrapper mb-25">
                                            <h5>Kategori Subject</h5>
                                            <div class="contact__input">
                                                <select name="category" value="" class="form-select">
                                                    @foreach ($categories as $category)
                                                        <option @if ($question->category->name === $category->name) selected @endif
                                                            value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="contact__input-wrapper mb-25">
                                                <h5>Question</h5>
                                                <div class="contact__input textarea">
                                                    <textarea placeholder="Enter your question.." name="question">{{ $question->value }}</textarea>
                                                    <i class="fal fa-comment"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <button type="submit" class="m-btn m-btn-4">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->

</x-guest-layout>
