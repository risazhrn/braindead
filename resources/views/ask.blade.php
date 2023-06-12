<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="assets/img/shape/shape-1.png" alt="">
     </div>
     <!-- bg shape area end -->

     <!-- contact area start -->
     <section class="contact__area pt-105 pb-145">
        <div class="contact__shape">
           <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
           <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
           <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
           <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
           <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
        </div>
        <div class="container">
           <div class="row">
              <div class="col-xxl-12">
                 <div class="page__title-wrapper mb-55">
                    <h2 class="page__title-2">Ask Your Question</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col">
                 <div class="contact__wrapper  white-bg">
                    <div class="contact__form">
                       <form action="assets/mail.php" method="POST">
                          <div class="row">
                             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="contact__input-wrapper mb-25">
                                   <h5>Kategori Subject</h5>
                                   <div class="contact__input">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                   </div>
                                </div>
                             </div>
                            
                          <div class="row">
                             <div class="col-xxl-12">
                                <div class="contact__input-wrapper mb-25">
                                   <h5>Question</h5>
                                   <div class="contact__input textarea">
                                      <textarea placeholder="Enter your question.." name="message"></textarea>
                                      <i class="fal fa-comment"></i>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-xxl-12">
                                <button type="submit" class="m-btn m-btn-4"> <span></span> submit </button>
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