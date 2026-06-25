<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "includes/common-assets.php"; ?>
  <?php include "includes/google-tag-manager.php"; ?>
  <?php include "includes/meta/service.php"; ?>
</head>

<body class="min-h-screen bg-black text-white">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <?php include "includes/header.php"; ?>
    <?php include "includes/menupanel.php"; ?>

    <main>
      <section id="heroSection" class="service-overview-hero sticky top-0 z-0 flex min-h-[46vh] items-center overflow-hidden bg-black px-5 py-36 text-white sm:px-8 md:px-12 lg:px-16">
      
        <div class="absolute inset-0 hero-visual-wrapper will-change-[opacity,filter]">
          <img src="assets/images/banners/service.webp" alt="" class="h-full w-full object-cover object-center opacity-95" />
          <div class="absolute inset-0 bg-black/20"></div>
          <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black/45 to-transparent"></div>
        </div>
        <div class="relative z-10 mx-auto w-full max-w-6xl text-center hero-content-wrapper will-change-[opacity,transform]">
          <p class="mb-4 text-[10px] font-light uppercase tracking-[0.28em] text-white/70">Service</p>
          <h1 class="service-hero-h2 mx-auto max-w-3xl text-[2rem] leading-[1.08] tracking-[-0.02em] sm:text-[2.7rem] md:text-[3.3rem]">
            Digital Solutions Designed for Business Growth
          </h1>
          <p class="mx-auto mt-5 max-w-2xl text-md font-light leading-6 text-white/75">
            We deliver innovative digital solutions that help businesses build their brand, enhance customer engagement, and achieve sustainable growth.
          </p>
        </div>
      </section>
      <section class="relative z-10 bg-gray-100 px-5 py-14 text-black sm:px-8 md:px-12 lg:px-16 lg:py-20">
        <div class="mx-auto grid max-w-6xl gap-10 md:grid-cols-[0.6fr_1.55fr] md:gap-14 lg:gap-20">
          
          <div class="service-overview-block order-2 min-h-[280px] md:order-1 md:min-h-[360px] relative overflow-hidden">
            <video autoplay loop muted playsinline class="absolute inset-0 h-full w-full object-cover object-center">
              <source src="assets/video/service.mp4" type="video/mp4">
            </video>
          </div>

          <div class="flex flex-col justify-center order-1 md:order-2">
            <h2 class="max-w-xl sm:max-w-2xl text-[2rem] font-light leading-[1.08] tracking-[-0.00em] sm:text-[2.45rem] md:text-[2.5rem]">
              End-to-End Digital Solutions Built for Growth
            </h2>
            <p class="mt-5 max-w-2xl text-md font-light leading-6 text-black/70">
              We combine strategy, technology, and creativity to deliver digital solutions that strengthen your brand, engage your audience, and support sustainable business growth.
            </p>
            <div class="mt-10 grid gap-x-12 gap-y-4 sm:grid-cols-2">
              <a href="web-development.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/web.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Web Development</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>

              <a href="ecommerce-website-development.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/ecommerce.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Ecommerce Development</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>

              <a href="mobile-application-development.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/mobile.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Mobile App Development</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>

              <a href="software-development.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/software3.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Software Development</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>

              <a href="cms-development.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/cms3.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>CMS Development</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a> 

              <a href="digital-marketing.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/digital.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Digital Marketing</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>

              <a href="branding.php" class="service-overview-link border-b border-black/5 pb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <img src="assets/images/icons/branding2.png" class="w-5 h-5 mr-3 brightness-0 hover:brightness-100 transition-all">
                  <span>Branding</span>
                </div>
                <span class="service-overview-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24.02 15.27" width="24" fill="none" stroke="#000" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </span>
              </a>
              <span class="border-b border-black/5 pb-3"></span>
            </div>

          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section id="testimonialSection" class="relative z-10 bg-white px-5 py-16 text-black sm:px-8 md:px-12 md:py-24 lg:px-16 lg:pb-23">
         <div class="mx-auto max-w-6xl">
           <div class="testimonial-layout grid gap-12 md:grid-cols-[1.2fr_1fr] lg:gap-12">
             <div class="testimonial-copy-column flex flex-col justify-space-between">
                        <div>
                            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
                                Testimonials
                            </p>
                            <h2 id="testimonialHeading" class="max-w-[19rem] text-[33px] font-light leading-[1.2] tracking-[-0.035em] text-left text-black sm:max-w-[33rem] sm:text-4xl md:max-w-[28rem] md:text-5xl md:leading-[1.1] md:tracking-[-0.0em] lg:max-w-[23rem] lg:text-5xl">
                                Real Experiences. Real Results.
                            </h2>
                            <p class="mt-6 max-w-lg text-sm leading-6 text-black/60 md:hidden">
                                We take pride in delivering reliable digital solutions that help businesses grow, perform, and succeed in an increasingly competitive digital landscape.
                            </p>
                            <p id="testimonialParagraph" class="mt-6 hidden max-w-xl text-black/60 md:block md:text-[16px] md:leading-7 lg:leading-7">
                                We take pride in delivering reliable digital solutions that help businesses grow, perform, and succeed in an increasingly competitive digital landscape.
                            </p>
                        </div>

                        <div class="mt-6 hidden items-center gap-4 sm:hidden md:mt-8">
                            <div class="mt-0 flex items-center justify-end gap-5">
                                <button id="testimonialPrev" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180" aria-label="Previous testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                                <button id="testimonialNext" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black" aria-label="Next testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
             <div class="testimonial-stage relative ">
               <?php include "includes/testimonial-items.php"; ?>
               <div class="mt-8 flex items-center gap-4 sm:hidden">
                 <div class="mt-0 flex items-center justify-end gap-3">
                   <button id="testimonialPrevMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180" aria-label="Previous testimonial">
                     <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M0,12H21.75" transform="translate(0 -4.36)" /><path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" /></svg>
                   </button>
                   <button id="testimonialNextMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black" aria-label="Next testimonial">
                     <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M0,12H21.75" transform="translate(0 -4.36)" /><path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" /></svg>
                   </button>
                 </div>
               </div>
             </div>
           </div>
         </div>
      </section>
    </main>

    <?php include "includes/footer.php"; ?>
  </div>

  <script src="assets/js/script.js"></script>
</body>

</html>