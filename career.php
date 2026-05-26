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
                <a href="mailto:careers@wazeefa.in" class="text-black-500 hover:underline block text-[1.25rem]">
                  careers@wazeefa.in
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
            <div class="testimonial-carousel ">
              <article class="testimonial-slide is-active" data-testimonial-index="0">
                <div class="testimonial-stars flex gap-1 my-3" aria-label="5 star rating">
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                </div>
                <p
                  class="max-w-2xl text-[1.25rem] leading-[1.15] tracking-[-0.02em] text-black text-lg md:text-[1.1rem] font-light leading-[1.5] mt-5">
                  "They took the time to listen about our requirement and also brought their own
                  ideas, experience and creativity so that the end design was more rounded."
                </p>
                <div class="mt-12 border-t border-black/10 pt-6 flex justify-between items-center">
                  <div class="flex items-center gap-4">
                    <div
                      class="h-12 w-12 flex-shrink-0 overflow-hidden rounded-full bg-accent flex items-center justify-center">
                      <span class="text-white font-bold text-lg">IB</span>
                    </div>
                    <div class="flex flex-col">
                      <p class="text-base font-semibold text-black leading-tight">Wahid</p>
                      <p class="mt-1 text-sm text-black/50 leading-tight">Wahid Logistics - UK</p>
                    </div>
                  </div>
                  <div class="testimonial-quote-mark flex-shrink-0" aria-hidden="true">
                    <svg class="w-5 h-5" viewBox="0 0 445.78 344.19">
                        <defs>
                            <style>
                                .quote-1 { opacity: .69; }
                                .quote-1, .quote-2 { fill: #067675; isolation: isolate; stroke-width: 0px; }
                                .quote-2 { opacity: .29; }
                            </style>
                        </defs>
                        <path class="quote-1" d="m127.98,171.49s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S-10.82-18.11.48,98.09c11.3,116.2,127.5,73.4,127.5,73.4Z"/>
                        <path class="quote-2" d="m379.68,170.19s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S240.88-19.41,252.08,96.89c11.3,116.2,127.6,73.3,127.6,73.3Z"/>
                    </svg>
                  </div>
                </div>
              </article>

              <article class="testimonial-slide" data-testimonial-index="1">
                <div class="testimonial-stars flex gap-1 my-3" aria-label="5 star rating">
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                </div>
                <p
                  class="max-w-2xl text-[1.25rem] leading-[1.15] tracking-[-0.02em] text-black text-lg md:text-[1.1rem] font-light leading-[1.5] mt-5">
                  "We were directed to Wazeefa1 by a friend and were very impressed with their
                  service, communication, and the user-friendly way everything was explained
                  throughout the project."
                </p>
                <div class="mt-12 border-t border-black/10 pt-6 flex justify-between items-center">
                  <div class="flex items-center gap-4">
                    <div
                      class="h-12 w-12 flex-shrink-0 overflow-hidden rounded-full bg-accent flex items-center justify-center">
                      <span class="text-white font-bold text-lg">IB</span>
                    </div>
                    <div class="flex flex-col">
                      <p class="text-base font-semibold text-black leading-tight">Wahid</p>
                      <p class="mt-1 text-sm text-black/50 leading-tight">Wahid Logistics - UK</p>
                    </div>
                  </div>
                  <div class="testimonial-quote-mark flex-shrink-0" aria-hidden="true">
                    <svg class="w-5 h-5" viewBox="0 0 445.78 344.19">
                        <defs>
                            <style>
                                .quote-1 { opacity: .69; }
                                .quote-1, .quote-2 { fill: #067675; isolation: isolate; stroke-width: 0px; }
                                .quote-2 { opacity: .29; }
                            </style>
                        </defs>
                        <path class="quote-1" d="m127.98,171.49s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S-10.82-18.11.48,98.09c11.3,116.2,127.5,73.4,127.5,73.4Z"/>
                        <path class="quote-2" d="m379.68,170.19s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S240.88-19.41,252.08,96.89c11.3,116.2,127.6,73.3,127.6,73.3Z"/>
                    </svg>
                  </div>
                </div>
              </article>

              <article class="testimonial-slide" data-testimonial-index="2">
                <div class="testimonial-stars flex gap-1 my-3" aria-label="5 star rating">
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                  <span><svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="15" height="15" x="0" y="0" viewBox="0 0 511.987 511"
                      style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                      <g>
                        <path fill="#ffc107"
                          d="M510.652 185.902a27.158 27.158 0 0 0-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 0 0 1.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0 0 10.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 0 0 7.98-28.927zm0 0"
                          opacity="1" data-original="#ffc107" class=""></path>
                      </g>
                    </svg></span>
                </div>
                <p
                  class="max-w-2xl text-[1.25rem] leading-[1.15] tracking-[-0.02em] text-black text-lg md:text-[1.1rem] font-light leading-[1.5] mt-5">
                  "We partnered with Wazeefa1 Technologies to develop our website. They communicated
                  well, delivered what was asked for, and built a well-designed website with an
                  easy-to-use content management system."
                </p>
                <div class="mt-12 border-t border-black/10 pt-6 flex justify-between items-center">
                  <div class="flex items-center gap-4">
                    <div
                      class="h-12 w-12 flex-shrink-0 overflow-hidden rounded-full bg-accent flex items-center justify-center">
                      <span class="text-white font-bold text-lg">IB</span>
                    </div>
                    <div class="flex flex-col">
                      <p class="text-base font-semibold text-black leading-tight">Wahid</p>
                      <p class="mt-1 text-sm text-black/50 leading-tight">Wahid Logistics - UK</p>
                    </div>
                  </div>
                  <div class="testimonial-quote-mark flex-shrink-0" aria-hidden="true">
                    <svg class="w-5 h-5" viewBox="0 0 445.78 344.19">
                        <defs>
                            <style>
                                .quote-1 { opacity: .69; }
                                .quote-1, .quote-2 { fill: #067675; isolation: isolate; stroke-width: 0px; }
                                .quote-2 { opacity: .29; }
                            </style>
                        </defs>
                        <path class="quote-1" d="m127.98,171.49s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S-10.82-18.11.48,98.09c11.3,116.2,127.5,73.4,127.5,73.4Z"/>
                        <path class="quote-2" d="m379.68,170.19s0,79-102.7,138.8l20.3,33.9s160.3-62.1,147.8-228S240.88-19.41,252.08,96.89c11.3,116.2,127.6,73.3,127.6,73.3Z"/>
                    </svg>
                  </div>
                </div>
              </article>
            </div>

            <div class="mt-8 flex items-center gap-4 sm:hidden">

              <div class="mt-0 flex items-center justify-end gap-3">
                <button id="testimonialPrevMobile" type="button"
                  class="testimonial-arrow inline-flex h-12 w-12 items-center justify-center rounded-full border border-black/10 text-black"
                  aria-label="Previous testimonial">
                  <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                    <path
                      d="M11.707 4.293 10.293 5.707 6.999 9H17v2H6.999l3.294 3.293-1.414 1.414L3.171 10l5.708-5.707z" />
                  </svg>
                </button>
                <button id="testimonialNextMobile" type="button"
                  class="testimonial-arrow inline-flex h-12 w-12 items-center justify-center rounded-full border border-black/10 text-black"
                  aria-label="Next testimonial">
                  <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                    <path d="m11.707 4.293 5.707 5.707-5.707 5.707-1.414-1.414L13.586 11H3V9h10.586l-3.293-3.293z" />
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