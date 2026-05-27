<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/career.php'; ?>
</head>

<body class="min-h-screen text-white">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->

    <section id="careerPinnedHeroSection"
      class="relative z-0 px-5 pt-24 pb-4 text-black sm:px-8 md:px-12 md:pt-32 md:pb-6 lg:px-16 lg:pt-36 lg:pb-[2.5rem] bg-gradient-to-b from-[#FFF] to-white ">
      <div class="mx-auto max-w-6xl">
        <div id="aboutIntroTextBlock"
          class="grid max-w-6xl gap-10 md:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] md:items-center md:gap-10">
          <div class="max-w-[40rem] flex flex-col justify-between h-full">
            <div>
              <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
                Careers
              </p>
              <h2
                class="text-[2.2rem] leading-[0.92] tracking-[-0.0em] sm:text-[3.3rem] md:text-[48px] md:leading-[1.02] lg:text-[60px] text-black">
                Start Your Journey With Us <span class="text-[#dc8413]">Together</span>
              </h2>
              <p class="mt-4 text-black/65 md:text-[17px]lg:text-md">Become part of a high-performing & collaborative
                team</p>
            </div>

            <div class="pt-6">
              <p class="max-w-xl text-base leading-6 text-black md:text-md py-4">
                <span class="text-sm">Say Hello at </span>
                <a href="mailto:cvs@wazeefa.in" class="text-black-500 hover:underline block text-[1.25rem]">
                  cvs@wazeefa.in
                </a>
              </p>
            </div>
          </div>
          <div class="w-full md:justify-self-end relative">
            <div id="careerCarousel" class="relative overflow-hidden ">
              <div id="careerCarouselTrack" class="relative h-[300px] sm:h-[340px] md:h-[320px] ">
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img
                    src="https://images.pexels.com/photos/6147022/pexels-photo-6147022.jpeg?_gl=1*1e4tgk2*_ga*Mjk3NzU4ODM5LjE3NzQzMzMzOTI.*_ga_8JE65Q40S6*czE3NzkxOTE1MTUkbzMwJGcxJHQxNzc5MTkxNjU5JGo2MCRsMCRoMA.."
                    alt="Team discussing ideas in a modern office" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img
                    src="https://images.pexels.com/photos/11686916/pexels-photo-11686916.jpeg?_gl=1*u0h2kb*_ga*Mjk3NzU4ODM5LjE3NzQzMzMzOTI.*_ga_8JE65Q40S6*czE3NzkxOTE1MTUkbzMwJGcxJHQxNzc5MTkxODM3JGo2MCRsMCRoMA.."
                    alt="Software engineers collaborating over laptops" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=80"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
              </div>
            </div>

            <div class="absolute about-service-badge z-10" aria-hidden="true">
              <svg viewBox="0 0 200 200" role="presentation">
                <defs>
                  <path id="aboutServiceBadgePath" d="M 100, 100 m -66, 0 a 66,66 0 1,1 132,0 a 66,66 0 1,1 -132,0" />
                </defs>
                <text>
                  <textPath href="#aboutServiceBadgePath" startOffset="0%">
                    Since 2002, we provide the best services â€¢
                  </textPath>
                </text>
              </svg>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="careerOpenRolesSection"
      class="relative z-20 bg-[#fbfbfb] px-5 py-8 text-black sm:px-8 md:px-12 md:pb-12 lg:px-16 lg:pb-16">
      <div class="mx-auto max-w-6xl border-none border-black/12" bg-[#f5f5f5]>

        <a href="career-details.php?job=ui-ux-designer" class="group block border-b border-black/12 py-8 transition">
          <article class="grid gap-4 md:gap-8 md:grid-cols-[minmax(0,1fr)_auto] md:items-center md:gap-10">
            <div>
              <h3
                class="mt-3 text-[24px] font-medium leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                UI/UX Designer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-medium text-black hover:text-white transition w-fit px-4 py-3">
              <span>View Details</span>
              <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </div>
          </article>
        </a>

        <a href="career-details.php?job=mern-stack-developer"
          class="group block border-b border-black/12 py-8 transition ">
          <article class="grid gap-4 md:gap-8 md:grid-cols-[minmax(0,1fr)_auto] md:items-center md:gap-10">
            <div>
              <h3
                class="mt-3 text-[24px] font-medium leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                MERN Stack Developer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-medium text-black hover:text-white transition w-fit px-4 py-3">
              <span>View Details</span>
              <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </div>
          </article>
        </a>

        <a href="career-details.php?job=mobile-app-developer" class="group block py-8 transition">
          <article class="grid gap-4 md:gap-8 md:grid-cols-[minmax(0,1fr)_auto] md:items-center md:gap-10">
            <div>
              <h3
                class="mt-3 text-[24px] font-medium leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                Mobile App Developer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-medium text-black hover:text-white transition w-fit px-4 py-3">
              <span>View Details</span>
              <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </div>
          </article>
        </a>

      </div>
    </section>

    <section id="testimonialSection"
      class="relative z-10 bg-white px-5 py-16 text-black sm:px-8 md:px-12 md:py-24 lg:px-16 lg:pb-23">
      <div class="mx-auto max-w-6xl">
        <div class="testimonial-layout grid gap-12 md:grid-cols-[1.2fr_1fr] lg:gap-12">
          <div class="testimonial-copy-column flex flex-col justify-space-between">
            <div>
              <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
                Testimonials
              </p>
              <h2 id="testimonialHeading"
                class="max-w-[19rem] text-[33px] font-normal leading-[1.2] tracking-[-0.035em] text-left text-black sm:max-w-[33rem] sm:text-4xl md:max-w-[28rem] md:text-5xl md:leading-[1.1] md:tracking-[-0.0em] lg:max-w-[28rem] lg:text-5xl">
                What Our Clients Are Saying
              </h2>
              <p class="mt-6 max-w-lg text-sm leading-6 text-black/60 md:hidden">
                We take pride in delivering exceptional solutions that deliver great results. But don't
                just take our word for it.
              </p>
              <p id="testimonialParagraph"
                class="mt-6 hidden max-w-xl text-black/60 md:block md:text-[17px] md:leading-7 lg:text-lg lg:leading-7">
                We take pride in delivering exceptional solutions that deliver great results. But don't
                just take our word for it.
              </p>
            </div>

            <div class="mt-6 hidden items-center gap-4 sm:flex md:mt-8">

              <div class="mt-0 flex items-center justify-end gap-5">
                <button id="testimonialPrev" type="button"
                  class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180"
                  aria-label="Previous testimonial">
                  <svg viewBox="0 0 24.02 15.27"
                    class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </button>
                <button id="testimonialNext" type="button"
                  class="testimonial-arrow inline-flex items-center justify-center text-black"
                  aria-label="Next testimonial">
                  <svg viewBox="0 0 24.02 15.27"
                    class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none"
                    stroke="currentColor" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="testimonial-stage relative ">
            <?php include 'includes/testimonial-items.php'; ?>
            <div class="mt-8 flex items-center gap-4 sm:hidden">

              <div class="mt-0 flex items-center justify-end gap-3">
                <button id="testimonialPrevMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180" aria-label="Previous testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                                <button id="testimonialNextMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black" aria-label="Next testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
  </div>
  <Script src="assets/js/script.js"></Script>
</body>

</html>