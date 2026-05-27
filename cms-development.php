<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/cms-development.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->

    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/cms-development.jpg" alt="Web Development"
        class="h-[45vh] w-full object-cover object-center will-change-transform" />
    </section>
    <section
      class="relative overflow-hidden bg-white px-5 pt-[2.5rem] pb-14 text-black sm:px-8 md:px-12 md:pt-[2.5rem] lg:px-16 lg:pt-[2.5rem] lg:pb-[2rem]"
      lg:pt-10>
      <div class="mx-auto max-w-6xl">
        <div class="max-w-full">
          <nav class="flex items-center space-x-3 text-sm text-black/60 py-4">
            <a href="index.php" class="hover:text-black">Home</a>
            <span class="hidden sm:flex">/</span>
            <span class="hidden sm:flex">Services</span>
            <span>/</span>
            <span class="text-black">CMS Development</span>
          </nav>
          <div class="py-4">
            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              From content to control, we craft seamless CMS experiences.
            </h2>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              The future of digital management begins with powerful CMS solutions.
            </p>
          </div>

          <div class="flex flex-col lg:flex-col items-center gap-12 pt-5 sm:pt-10 pb-0">
            <div class="w-full lg:w-[100%]">

              <div
                class="grid grid-cols-1 md:grid-cols-[0.3fr_2fr] gap-6 md:gap-10 text-[15px] leading-7 text-black/75">

                <div>
                  <div class="line-mask-wrap">
                    <div class="line-mask-content md:justify-center flex items-center gap-3">
                      <div class="w-[40px] h-[40px]">
                        <svg id="svg-stage" viewBox="0 0 248 248"
                          class="w-full h-full">
                          <g class="group2">
                            <image href="assets/images/icon-1.png" mask="url(#g2_mask)" />
                          </g>

                          <mask id="g2_mask" fill="#fff">
                            <circle cx="124" cy="0" r="0" />
                            <circle cx="124" cy="248" r="0" />
                          </mask>

                          <g class="group3">
                            <image href="assets/images/icon-2.png" mask="url(#g3_mask)" />
                          </g>

                          <mask id="g3_mask" fill="#fff">
                            <rect x="0" y="0" width="124" height="124" />
                            <rect x="124" y="0" width="124" height="124" />
                            <rect x="0" y="124" width="124" height="124" />
                            <rect x="124" y="124" width="124" height="124" />
                          </mask>

                          <g class="group5">
                            <image href="assets/images/icon-3.png" mask="url(#g5_mask)" />
                          </g>

                          <mask id="g5_mask" fill="#fff">
                            <path d="M0 248h248L124 0 0 247z" />
                            <circle cx="124" cy="83" r="83" />
                          </mask>
                        </svg>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="space-y-5 mb-5 sm:mb-6 md:mb-5 lg:mb-12">
                  <h3 class="text-[1.5rem] lg:text-[1.5rem] font-normal tracking-[-0.03rem] leading-[1.2] text-black">
                    Effortless Content Management, Exceptional Experiences
                  </h3>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    A powerful Content Management System (CMS) plays a vital role in helping businesses manage digital content efficiently and deliver engaging online experiences. A well-structured CMS allows you to update website content, manage media, and maintain your online presence with ease — without requiring advanced technical knowledge. At Wazeefa1 Technologies, we develop flexible, scalable, and user-friendly CMS solutions tailored to modern business requirements.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    We combine intuitive design, smart functionality, and reliable technologies to create CMS platforms that simplify content management and improve overall website performance.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    From custom CMS development to platform-based solutions, our team delivers secure and easy-to-manage systems that give businesses complete control over their digital content. Whether it’s a corporate website, blog, ecommerce platform, or enterprise portal, we focus on creating CMS solutions that are scalable, SEO-friendly, and optimized for seamless user experiences. Using the latest tools and technologies, we ensure your CMS platform supports business growth, improves workflow efficiency, and keeps your digital presence updated at all times.
                  </p>
                  <button
                    class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-medium text-black hover:text-white transition w-fit px-4 py-3">
                    <span>Let’s Build Together</span>
                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                      <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                      <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="servicesSection"
      class="services-shot-gradient relative z-0 overflow-hidden bg-[#0a0f0d] text-white py-20 sm:pt-24 sm:pb-24 min-h-screen flex flex-col justify-center">
      <div class="mx-auto w-full max-w-6xl flex-shrink-0 text-center">
        <div>
          <h2
            class="text-[2rem] leading-[1.05] tracking-[-0.0em] text-white sm:text-[2.2rem] md:text-[2.5rem] font-light max-w-lg sm:max-w-lg md:max-w-xl lg:max-w-3xl mx-auto">
            Scalable CMS Solutions
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-lg sm:max-w-xl">
            We build flexible, user-friendly CMS platforms that simplify content management, improve website performance, and support long-term digital growth.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 72 72"><g><path d="M42.97 18.19c2.52 0 4.57-2.05 4.57-4.57s-2.05-4.57-4.57-4.57-4.57 2.05-4.57 4.57 2.05 4.57 4.57 4.57zm0-7.64c1.69 0 3.07 1.38 3.07 3.07s-1.38 3.07-3.07 3.07-3.07-1.38-3.07-3.07 1.38-3.07 3.07-3.07zM10.09 28.5 8.8 29.79c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.3-1.06 0zM14.36 28.5l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.3-1.06 0zM18.63 28.5l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.3-1.06 0zM22.91 28.5l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.3-1.06 0zM27.18 28.5l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.3-1.06 0zM31.45 28.5l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.3-1.06 0zM10.09 33.37 8.8 34.66c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06-.3-.3-.77-.3-1.06 0zM14.36 33.37l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.3-1.06 0zM18.63 33.37l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06-.29-.3-.76-.3-1.06 0zM22.91 33.37l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06-.3-.3-.77-.3-1.06 0zM27.18 33.37l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.3-1.06 0zM31.45 33.37l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06-.29-.3-.76-.3-1.06 0zM10.09 47.42 8.8 48.71c-.3.29-.3.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM14.36 47.42l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM18.63 47.42l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM22.91 47.42l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM27.18 47.42l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM31.45 47.42l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM10.09 52.29 8.8 53.58c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM14.36 52.29l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM18.63 52.29l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM22.91 52.29l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM27.18 52.29l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0zM31.45 52.29l-1.29 1.29c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.76-.29-1.06 0zM9.33 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0L8.8 10.87a.75.75 0 0 0 .53 1.28zM13.6 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.14.14.34.22.53.22zM17.87 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.15.14.34.22.53.22zM22.15 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29a.75.75 0 0 0 .53 1.28zM26.42 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.14.14.34.22.53.22zM30.69 12.15c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.15.14.34.22.53.22zM11.15 14.44a.754.754 0 0 0-1.06 0l-1.29 1.3c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l1.29-1.29c.29-.3.29-.77 0-1.07zM13.6 17.02c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.14.14.34.22.53.22zM17.87 17.02c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.15.14.34.22.53.22zM22.15 17.02c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29a.75.75 0 0 0 .53 1.28zM26.42 17.02c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.14.14.34.22.53.22zM30.69 17.02c.19 0 .38-.07.53-.22l1.29-1.29c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-1.29 1.29c-.29.29-.29.77 0 1.06.15.14.34.22.53.22zM42.97 37.11c2.52 0 4.57-2.05 4.57-4.57s-2.05-4.57-4.57-4.57-4.57 2.05-4.57 4.57 2.05 4.57 4.57 4.57zm0-7.64c1.69 0 3.07 1.38 3.07 3.07s-1.38 3.07-3.07 3.07-3.07-1.38-3.07-3.07 1.38-3.07 3.07-3.07z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M63.29 41.37c-.02-.02-.03-.04-.05-.05-2.7-3.17-6.52-5.1-10.64-5.44v-9.6c0-1.36-1.11-2.47-2.48-2.47h-2.54V21.5h2.54a2.48 2.48 0 0 0 2.48-2.48V7.36a2.48 2.48 0 0 0-2.48-2.48H6.73a2.48 2.48 0 0 0-2.48 2.48v11.65a2.48 2.48 0 0 0 2.48 2.48h2.54v2.31H6.73c-1.37 0-2.48 1.11-2.48 2.47v11.66a2.48 2.48 0 0 0 2.48 2.48h2.54v2.32H6.73a2.48 2.48 0 0 0-2.48 2.48v11.65c0 1.37 1.11 2.49 2.48 2.49h31.08c1.6 2.74 4.01 4.99 7 6.36.56.26 1.16.5 1.77.69 1.53.48 3.12.73 4.74.73 1.76 0 3.48-.29 5.12-.86h.01c.81-.28 1.62-.64 2.4-1.06.02-.01.05-.03.07-.04 4.96-2.77 8.05-8 8.05-13.68 0-2.98-.84-5.88-2.43-8.38-.36-.61-.79-1.19-1.25-1.74zM57.88 64c-.4.21-.81.4-1.23.56l-6.59-18.42h2.95l3.84 12.66c.1.32.39.53.72.53h.01c.33 0 .62-.22.71-.54l2.68-9.34a.79.79 0 0 0-.11-.65c-.6-.83-2.06-3.32-1.6-4.83.23-.75.7-1.31 1.34-1.57.53-.22 1.12-.19 1.65.05.35.42.67.86.96 1.31.45 2.16-.79 5.77-.81 5.83zm-11.54.69c-.2-.08-.41-.15-.61-.24l-6.16-19.4h2.63l5.34 15.93zm1.96-6.17-4.51-13.47h.37c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-4.57c2.62-3.88 7-6.24 11.73-6.24 3.47 0 6.77 1.28 9.33 3.54-.21.04-.42.1-.63.18-1.06.43-1.84 1.33-2.2 2.52-.66 2.15.98 4.89 1.61 5.84l-1.88 6.55-2.97-9.8h.35c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.18c-.41 0-.75.34-.75.75s.34.75.75.75h.73l1.95 5.45zM5.75 19.01V7.36c0-.54.44-.98.98-.98h43.4c.54 0 .98.44.98.98v11.65c0 .54-.44.98-.98.98H6.73c-.54 0-.98-.44-.98-.98zm5.01 2.48h35.32v2.31H10.76zM5.75 37.94V26.28c0-.54.44-.97.98-.97H50.12c.54 0 .98.44.98.97v9.54a15.61 15.61 0 0 0-9.12 3.1H6.73a.995.995 0 0 1-.98-.98zm5.01 2.47h29.47c-.7.7-1.34 1.48-1.91 2.32H10.76zM6.73 57.84c-.54 0-.98-.44-.98-.99V45.21c0-.54.44-.98.98-.98h30.71a15.64 15.64 0 0 0-1.77 7.23c0 2.24.49 4.4 1.37 6.38zm30.43-6.38c0-1.9.4-3.77 1.13-5.5l5.56 17.52c-4.11-2.56-6.69-7.1-6.69-12.02zm10.6 13.7 1.28-3.95v-.01l2.21-7.23 3.97 11.09c-2.41.69-5.02.72-7.46.1zm12.08-2.4 3.98-12.69c.04-.1.56-1.63.83-3.39.55 1.52.83 3.13.83 4.78 0 4.48-2.12 8.65-5.64 11.3z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M67.68 40.27c-2.11-4.68-6.11-6.8-9.08-7.75-.4-.13-.82.09-.94.49-.13.39.09.82.49.94 2.69.86 6.29 2.76 8.17 6.94.13.28.4.44.68.44.1 0 .21-.02.31-.07.38-.17.54-.61.37-.99zM55.07 33.29c.02 0 .33.03.85.11.04.01.08.01.13.01.36 0 .68-.26.74-.63.07-.41-.21-.8-.62-.86-.63-.11-1-.13-1-.13-.41-.04-.77.28-.8.7-.02.41.29.77.7.8z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                WordPress Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop responsive and customizable WordPress websites tailored to your business and content management needs.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 66 66"><g><path d="M6.3 15.6c-.2 0-.5-.1-.6-.2-.4-.4-.5-1-.1-1.4L8 11c.4-.4 1-.5 1.4-.1s.5 1 .1 1.4l-2.5 3c-.1.2-.4.3-.7.3z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M62.1 50h-58c-1.7 0-3-1.3-3-3V9.8c0-1.7 1.3-3 3-3h58c1.7 0 3 1.3 3 3V47c0 1.7-1.3 3-3 3zM4.1 8.8c-.6 0-1 .4-1 1V47c0 .6.4 1 1 1h58c.6 0 1-.4 1-1V9.8c0-.6-.4-1-1-1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M62.1 50h-58c-1.7 0-3-1.3-3-3v-3.3c0-.6.4-1 1-1h62c.6 0 1 .4 1 1V47c0 1.7-1.3 3-3 3zm-59-5.3V47c0 .6.4 1 1 1h58c.6 0 1-.4 1-1v-2.3z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M40.9 59.2H25.3c-.3 0-.6-.1-.8-.4-.2-.2-.3-.5-.2-.8l2-9.2c.1-.5.5-.8 1-.8h11.6c.5 0 .9.3 1 .8l2 9.2c.1.3 0 .6-.2.8-.2.3-.5.4-.8.4zm-14.4-2h13.1L38.1 50h-10zM7.1 21c-.2 0-.5-.1-.7-.2-.4-.4-.5-1-.1-1.4l6.8-7.9c.4-.4 1-.5 1.4-.1s.5 1 .1 1.4l-6.8 7.9c-.1.2-.4.3-.7.3zM59.3 40.2h-9.4c-.6 0-1-.4-1-1s.4-1 1-1h8.4v-7.7c0-.6.4-1 1-1s1 .4 1 1v8.7c0 .6-.4 1-1 1zM33.2 40.5c-1 0-2-.1-3-.3-.5-.1-.9-.6-.8-1.1.2-1.4-.2-2.3-.6-2.5s-1.3.2-2.1 1.4c-.3.4-.9.5-1.4.3-1.8-1.1-3.3-2.6-4.5-4.4-.3-.4-.2-1 .2-1.4 1.1-.8 1.5-1.7 1.3-2.1s-1.1-.7-2.4-.5c-.5.1-1-.2-1.1-.7-.5-2-.6-4.1-.1-6.4.1-.5.6-.9 1.1-.8 1.4.2 2.3-.2 2.5-.6s-.2-1.3-1.4-2.1c-.4-.3-.5-.9-.3-1.4 1.2-1.9 2.8-3.5 4.4-4.5.4-.3 1-.2 1.3.2.9 1.1 1.8 1.4 2.1 1.3.5-.2.8-1.2.5-2.4-.1-.5.2-1.1.8-1.2 2.2-.5 4.3-.5 6.3-.1.5.1.9.6.8 1.1-.2 1.4.2 2.3.6 2.5s1.3-.2 2.1-1.4c.3-.4.9-.5 1.4-.3 1.8 1.1 3.3 2.6 4.5 4.4.3.4.2 1-.2 1.4-1.1.9-1.4 1.8-1.3 2.1.2.4 1.1.8 2.4.5.5-.1 1 .2 1.1.7.5 2 .6 4.1.1 6.4-.1.5-.6.9-1.1.8-1.4-.2-2.3.2-2.5.6-.1.4.3 1.3 1.4 2.1.4.3.5.9.2 1.3-1.2 1.9-2.8 3.5-4.4 4.5-.4.3-1 .2-1.3-.2-.8-1.1-1.7-1.5-2.1-1.3s-.7 1.1-.5 2.4c.1.5-.2 1-.7 1.1-1 .4-2.1.6-3.3.6zm-1.7-2.1c1.3.2 2.6.2 3.8 0-.1-1.8.6-3.1 1.8-3.6s2.6 0 3.8 1.2c.9-.7 1.8-1.6 2.6-2.7-1.2-1.2-1.7-2.6-1.3-3.8.5-1.3 1.8-2 3.6-2 .2-1.3.2-2.6 0-3.8-1.8.1-3.1-.6-3.6-1.8-.5-1.1 0-2.6 1.2-3.8-.8-1-1.7-1.9-2.7-2.6-1.2 1.3-2.6 1.8-3.9 1.3-1.2-.5-1.9-1.8-1.9-3.6-1.2-.2-2.5-.1-3.8.1.1 1.7-.6 3.1-1.8 3.6-1.1.5-2.6 0-3.8-1.2-.9.7-1.8 1.6-2.6 2.7 1.3 1.2 1.8 2.7 1.3 3.9s-1.8 1.9-3.6 1.9c-.2 1.3-.2 2.6 0 3.8 1.8-.1 3.1.6 3.6 1.8s0 2.6-1.2 3.8c.8 1 1.7 1.9 2.7 2.6 1.2-1.3 2.6-1.8 3.9-1.3 1.2.4 1.8 1.7 1.9 3.5z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M33.1 34c-4.3 0-8-3.4-8.3-7.8-.1-2.2.6-4.3 2.1-6s3.5-2.7 5.7-2.8l.1 1-.1-1c2.2-.1 4.3.6 6 2.1s2.7 3.5 2.8 5.7c.3 4.6-3.2 8.5-7.8 8.8h-.5zm-.4-14.6c-1.7.1-3.2.9-4.3 2.1-1.1 1.3-1.7 2.9-1.6 4.6.2 3.5 3.2 6.1 6.7 5.9s6.1-3.2 5.9-6.7c-.1-1.7-.9-3.2-2.1-4.3-1.3-1.1-2.9-1.7-4.6-1.6zM48.5 59.2H17.7c-.6 0-1-.4-1-1s.4-1 1-1h30.8c.6 0 1 .4 1 1s-.4 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Custom CMS Solutions
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We customize themes and plugins to enhance website functionality, performance, scalability, and user experience.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 75 75"><g><path d="M33.451 43.721c1.494-.602 1.72-.936 1.73-2.553l.003-.253c.014-1.95-.172-2.225-1.99-2.95l-.221-.089c-.649-.26-.854-.776-.58-1.435l.319-.761c.451-1.086.339-1.667-.48-2.488l-.391-.39c-1.395-1.395-1.729-1.459-3.569-.688-.441.186-.786.23-1.027.131-.977-.402-.62-2.783-2.669-2.847-.212-.007-.352-.005-.808-.004-2.04 0-2.302.177-3.088 2.068-.576 1.387-1.215.786-2.599.257-.689-.26-1.36-.127-1.9.373-.1.093-.52.51-.615.605-1.44 1.407-1.511 1.731-.77 3.47.041.13.383.726.206 1.154-.388.945-2.804.594-2.872 2.652-.004.13-.006.71-.006.81-.024 2.04.156 2.323 1.927 3.029.12.062.776.239.952.659.18.429-.15.99-.197 1.144-.093.23-.187.459-.288.685-.357.804-.199 1.585.447 2.199.114.107.224.22.509.51 1.38 1.408 1.703 1.473 3.458.724l.2-.086c1.588-.68 1.387.962 2.07 1.815.275.348.694.654 1.176.86.429.183.847.093 1.112.093 2.124 0 2.366-.205 3.147-2.097.343-.832.736-1.002 1.57-.662 1.485.63 1.985.863 3.204-.206.16-.141 1.571-1.412 1.568-2.508v-.148c-.568-1.288-.724-1.54-.6-2.316.073-.447.587-.545 1.072-.757zm-2.553.517c-.185 1.155.086 1.746.554 2.798-.178.476-1.108 1.485-1.54 1.652-.154-.029-.217-.03-1.14-.422-1.61-.654-2.86-.128-3.522 1.481-.469 1.135-.482 1.168-1.648 1.168-.452 0-.362.02-.634.027-.742-.317-.672-.616-.931-1.236-.513-1.237-1.35-1.723-2.235-1.723-1.02 0-2.124.767-2.437.726-.124-.033-.516-.439-1.032-.964-.438-.448-.596-.492-.443-.836.128-.29.248-.588.41-.984.63-1.527.068-2.8-1.44-3.405-.32-.128-1.102-.423-1.184-.535-.065-.102-.059-.652-.053-1.185.004-.912-.041-.986.226-1.101.329-.142.66-.277 1.004-.417 1.522-.62 2.088-1.897 1.426-3.459-.127-.3-.467-1.06-.449-1.197.03-.12.391-.473 1.1-1.168.308-.31.384-.425.618-.336.19.072.378.153.565.234.134.012 2.735 1.604 3.951-1.318.476-1.145.457-1.161 1.714-1.144.33-.002.57-.003.75.003.347.01.26.134.703 1.117.338.818.823 1.362 1.442 1.618.622.257 1.355.211 2.18-.134 1.101-.462 1.101-.46 1.926.364.115.123.672.64.697.76.028.136-.36.96-.468 1.244-.602 1.443-.007 2.835 1.406 3.403.233.092 1.132.435 1.217.55.082.136.06 2.043.008 2.158-.077.082-.513.258-.748.353-.97.383-1.806.76-1.993 1.908z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M8.583 59.45h40.111a.75.75 0 0 0 0-1.5H8.583a2.335 2.335 0 0 1-2.332-2.333V14.523a2.335 2.335 0 0 1 2.332-2.333h56.152a2.335 2.335 0 0 1 2.332 2.333V41.6a.75.75 0 0 0 1.5 0V14.523a3.836 3.836 0 0 0-3.832-3.833H8.583a3.836 3.836 0 0 0-3.832 3.833v41.094a3.836 3.836 0 0 0 3.832 3.832z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M12.42 20.28a2.294 2.294 0 0 0 2.66-1.847 2.294 2.294 0 0 0-1.848-2.66 2.292 2.292 0 0 0-2.659 1.848 2.294 2.294 0 0 0 1.848 2.659zm.406-3.043a.79.79 0 0 1 .777.93.796.796 0 0 1-.917.636.79.79 0 0 1 .14-1.566zM21.367 19.907c1.66-1.152 1.114-3.77-.9-4.134a2.295 2.295 0 0 0-2.66 1.848 2.294 2.294 0 0 0 1.848 2.659c.613.11 1.218-.03 1.712-.373zm-2.083-2.02a.79.79 0 0 1 .776-.65c.78 0 1.076 1.004.452 1.438-.572.4-1.352-.099-1.228-.788zM29.176 16.72c-1.156-1.665-3.772-1.103-4.134.9a2.294 2.294 0 0 0 1.848 2.66c2.009.359 3.444-1.896 2.286-3.56zm-2.658 1.167c.124-.687 1.024-.89 1.426-.31.397.571-.096 1.355-.789 1.226a.79.79 0 0 1-.637-.916zM43.32 23.854l3.998-3.461a.313.313 0 0 1 .205-.077h14.97a.75.75 0 0 0 0-1.5h-14.97c-.436 0-.858.158-1.187.442l-3.998 3.46a.315.315 0 0 1-.205.077h-31.12a.75.75 0 0 0 0 1.5h31.12c.434 0 .855-.156 1.186-.441zM67.103 47.083c-3.45-.004-3.812.136-3.056-.882.77-1.04.835-2.342.165-3.317-1.26-1.835-4.222-1.611-5.166.304-.442.893-.352 1.961.24 2.856.252.386.763.882.115.997-.238.042-.164.052-4.25.041-1.221 0-1.953.722-1.958 1.932a631.655 631.655 0 0 0 0 4.08c0 1.502 1.103 2.027 2.059 1.418.146-.094.273-.194.527-.39.667-.486 1.593-.477 2.107.021.557.54.761 1.172.624 1.935-.118.65-.397 1.085-.856 1.328-1.279.679-1.974-.337-2.635-.649-.795-.377-1.793-.002-1.824 1.592-.012.726-.01 3.647 0 4.148.023 1.06.727 1.77 1.792 1.807.078.003 3.435.006 6.798.006 2.854 0 5.711-.002 6.576-.006 1.136-.007 1.875-.735 1.883-1.855.008-1.205.006-12.397-.003-13.496-.006-1.018-.635-1.867-1.89-1.87zm1.586 1.619c.084.169.056 13.554.055 13.736-.002.282-.054.364-.39.366-2.02.009-13.05.004-13.311.001-.294-.01-.343-.109-.348-.339-.015-.78.001-2.606.001-4.134 1.228.954 2.477 1.025 3.66.4.869-.46 1.432-1.286 1.63-2.388.227-1.257-.138-2.39-1.057-3.28-1.04-1.005-2.775-1.073-4.034-.154l-.2.153-.002.001a620.37 620.37 0 0 1 0-4.044c.001-.372.035-.438.457-.438 3.207.015 4.02.022 4.51-.063 1.369-.24 1.976-1.606 1.235-2.789-.138-.218-.237-.332-.357-.512-.627-.949-.111-2 1.024-2.08.659-.04 1.099.137 1.413.596.307.446.255 1.049-.141 1.584a4.182 4.182 0 0 0-.43.667 1.775 1.775 0 0 0-.048 1.49c.395.896 1.276 1.093 2.252 1.102 3.953.034 3.987-.068 4.081.125zM38.846 35.354a.75.75 0 0 0 0 1.5h9.328a.75.75 0 0 0 0-1.5zM38.846 42.775H52.38a.75.75 0 0 0 0-1.5H38.846a.75.75 0 0 0 0 1.5zM18.834 40.762l2.105-1.902a.75.75 0 0 0-1.005-1.113l-2.768 2.5a.75.75 0 0 0 .04 1.147l2.925 2.286a.75.75 0 1 0 .924-1.181zM27.371 37.747a.75.75 0 0 0-1.006 1.113l2.106 1.902-2.221 1.737a.75.75 0 0 0 .924 1.181l2.924-2.286a.75.75 0 0 0 .04-1.147zM25.262 35.924a.749.749 0 0 0-.95.474l-2.852 8.559a.75.75 0 0 0 1.424.474l2.852-8.558a.75.75 0 0 0-.474-.949z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Theme & Plugin Customization
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We customize themes and plugins to enhance website functionality, performance, security, and user experience.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg"  viewBox="0 0 482 482.034"><g><path d="M56.016 80h80a8 8 0 0 0 0-16h-80a8 8 0 0 0 0 16zM200.016 112h-144a8 8 0 0 0 0 16h144a8 8 0 0 0 0-16zM184.016 160h-128a8 8 0 0 0 0 16h128a8 8 0 0 0 0-16zM184.016 208h-128a8 8 0 0 0 0 16h128a8 8 0 0 0 0-16zM184.016 256h-128a8 8 0 0 0 0 16h128a8 8 0 0 0 0-16zm0 0" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M463.914 215.496c-.039-.7-.18-1.394-.41-2.055-.086-.257-.152-.504-.262-.754a7.886 7.886 0 0 0-1.601-2.343l-64-64a7.94 7.94 0 0 0-2.399-1.602c-.226-.094-.449-.156-.68-.238-.699-.246-1.43-.39-2.167-.434-.153 0-.29-.086-.442-.086H256.016V72c0-.176-.086-.328-.102-.504-.039-.7-.18-1.394-.41-2.055-.086-.257-.152-.504-.262-.754a7.886 7.886 0 0 0-1.601-2.343l-64-64a8.019 8.019 0 0 0-2.352-1.602c-.23-.101-.473-.168-.71-.254a8.225 8.225 0 0 0-2.145-.425c-.121.015-.258-.063-.418-.063h-144C17.938.027.043 17.918.016 40v256c.027 22.082 17.922 39.973 40 40h168v104c.027 22.082 17.922 39.973 40 40h176c22.082-.027 39.976-17.918 40-40V216c0-.176-.086-.328-.102-.504zM436.707 208h-28.691a8 8 0 0 1-8-8v-28.688zm-208-144h-28.691a8 8 0 0 1-8-8V27.312zM40.016 320c-13.254 0-24-10.746-24-24V40c0-13.254 10.746-24 24-24h136v40c0 13.254 10.746 24 24 24h40v64.8c-.141 0-.27.095-.414.13a39.767 39.767 0 0 0-6.664 2.07c-.801.313-1.473.734-2.215 1.098a40.459 40.459 0 0 0-4.243 2.308c-.8.516-1.527 1.098-2.289 1.656a44.008 44.008 0 0 0-3.421 2.833 42.883 42.883 0 0 0-2.04 2.09 37.79 37.79 0 0 0-2.785 3.374c-.586.801-1.144 1.602-1.672 2.403a39.726 39.726 0 0 0-2.144 3.949c-.414.855-.848 1.68-1.2 2.562a40.627 40.627 0 0 0-1.48 4.758c-.207.801-.48 1.543-.64 2.403a39.99 39.99 0 0 0-.793 7.566v136zm384 144h-176c-13.254 0-24-10.746-24-24V184c0-13.254 10.746-24 24-24h136v40c0 13.254 10.746 24 24 24h40v216c0 13.254-10.743 24-24 24zm0 0" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M264.016 224h80a8 8 0 0 0 0-16h-80a8 8 0 0 0 0 16zM264.016 272h144a8 8 0 0 0 0-16h-144a8 8 0 0 0 0 16zM264.016 320h144a8 8 0 0 0 0-16h-144a8 8 0 0 0 0 16zM264.016 368h144a8 8 0 0 0 0-16h-144a8 8 0 0 0 0 16zM400.016 408a8 8 0 0 0-8-8h-128a8 8 0 0 0 0 16h128a8 8 0 0 0 8-8zM288.64 51.078a7.936 7.936 0 0 0 1.731 2.586l33.934 33.93a8.008 8.008 0 0 0 7.78 2.18 7.993 7.993 0 0 0 5.712-5.715 7.992 7.992 0 0 0-2.18-7.778L315.328 56h76.688c13.257 0 24 10.746 24 24v56a8 8 0 0 0 16 0V80c-.024-22.082-17.918-39.973-40-40h-76.688l20.29-20.281a7.992 7.992 0 0 0 2.179-7.778 7.993 7.993 0 0 0-5.711-5.714 8.008 8.008 0 0 0-7.781 2.18L290.37 42.335a7.936 7.936 0 0 0-1.73 2.586 7.904 7.904 0 0 0 0 6.156zM175.395 436.922a7.936 7.936 0 0 0-1.73-2.586l-33.935-33.93a8.005 8.005 0 0 0-13.496 3.535 7.994 7.994 0 0 0 2.184 7.778L148.707 432H72.016c-13.254 0-24-10.746-24-24v-48a8 8 0 0 0-16 0v48c.027 22.082 17.922 39.973 40 40h76.691l-20.289 20.281a7.994 7.994 0 0 0-2.184 7.778 8.005 8.005 0 0 0 13.496 3.535l33.934-33.93a7.936 7.936 0 0 0 1.73-2.586 7.904 7.904 0 0 0 0-6.156zM424.016 400a8 8 0 0 0-8 8v16a8 8 0 0 1-8 8h-16a8 8 0 0 0 0 16h16c13.257 0 24-10.746 24-24v-16a8 8 0 0 0-8-8zm0 0" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Content Migration Services
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We securely migrate website content, databases, and media files while maintaining data integrity and performance.
              </p>
            </div>
          </article>



          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 64 64"><g><path d="M58.7 9H5.3C4 9 3 10 3 11.3v32.2c0 1.3 1 2.3 2.3 2.3h21.8l-1 7.2h-5.4c-.6 0-1 .4-1 1s.4 1 1 1h22.6c.6 0 1-.4 1-1s-.4-1-1-1h-5.4l-1-7.2h21.8c1.3 0 2.3-1 2.3-2.3V11.3C61 10 60 9 58.7 9zM35.9 53h-7.8l1-7.2h5.8zM59 43.5c0 .2-.1.3-.3.3H5.3c-.2 0-.3-.1-.3-.3V11.3c0-.2.1-.3.3-.3h53.4c.2 0 .3.1.3.3z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M32 23.2c-2.6 0-4.8 2.2-4.8 4.8s2.2 4.8 4.8 4.8 4.8-2.2 4.8-4.8-2.2-4.8-4.8-4.8zm0 7.6c-1.5 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="m40.9 24 1.7-1.7-4.9-4.9-1.7 1.7c-.2-.1-.4-.2-.5-.2v-2.4h-6.9v2.4c-.2.1-.4.1-.5.2l-1.7-1.7-4.9 4.9 1.7 1.7c-.1.2-.2.4-.2.5h-2.4v6.9H23c.1.2.1.4.2.5l-1.7 1.7 4.9 4.9 1.7-1.7c.2.1.4.2.5.2v2.4h6.9V37c.2-.1.4-.1.5-.2l1.7 1.7 4.9-4.9-1.7-1.6c.1-.2.2-.4.2-.5h2.4v-6.9h-2.4c0-.3-.1-.4-.2-.6zm.6 5.5h-1.8l-.2.7c-.2.5-.4 1.1-.6 1.5l-.4.7 1.3 1.3-2.1 2.1-1.3-1.3-.7.4c-.5.3-1 .5-1.5.6l-.7.2v1.8h-2.9v-1.8l-.7-.2c-.5-.2-1.1-.4-1.5-.6l-.7-.4-1.3 1.3-2.1-2.1 1.3-1.3-.4-.7c-.3-.5-.5-1-.6-1.5l-.2-.7h-1.8v-2.9h1.8l.2-.7c.2-.5.4-1.1.6-1.5l.4-.7-1.3-1.3 2.1-2.1 1.3 1.3.7-.4c.5-.3 1-.5 1.5-.6l.7-.2v-1.8h2.9v1.8l.7.2c.5.2 1.1.4 1.5.6l.7.4 1.3-1.3 2.1 2.1-1.3 1.3.4.7c.3.5.5 1 .6 1.5l.2.7h1.8z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g>
            </svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Maintenance & Support
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We provide continuous CMS updates, security monitoring, maintenance, and technical support for long-term stability.
              </p>
            </div>
          </article>

        </div>
      </div>
    </section>

    <section class="bg-white px-5 py-20 text-black sm:px-8 md:px-12 lg:px-16">
      <div class="mx-auto max-w-5xl mb-10">
        <div class="mb-[5rem]">
          <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45 text-center">Our Process</p>
          <h2
            class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[2.2rem] md:text-[2.5rem] text-center mb-4">
            From Concept to Code</h2>
          <p class="text-md text-black/70 text-center max-w-3xl mx-auto">
            We turn innovative ideas into scalable, high-performance digital solutions through smart design and modern
            development.
          </p>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Research</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We identify your content management needs, business workflows, and platform requirements to build an efficient CMS solution.
            </p>
          </div>
        </div>

        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Planning & Strategy</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              Our team plans the CMS structure, user roles, content workflows, scalability, and management features for streamlined operations.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Wireframes</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We design structured layouts and dashboard flows to ensure easy navigation and efficient content management.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Design</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We create clean, responsive, and user-friendly interfaces that simplify content creation and website management.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Development</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We build flexible and scalable CMS platforms with custom functionalities, secure architecture, and easy content control.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Testing & Quality Assurance</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We perform detailed testing for functionality, security, responsiveness, and content management performance across all devices.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Deployment</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              Once fully optimized, we deploy the CMS platform with smooth integration and operational setup.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Maintenance & Support</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We provide ongoing updates, maintenance, security monitoring, and technical assistance for long-term platform efficiency.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section class="bg-[#f5f5f5] py-24 text-black overflow-hidden">
      <div class="mx-auto grid max-w-6xl grid-cols-1 gap-14 px-5 md:grid-cols-[0.7fr_1.3fr] lg:gap-20">

        <div class="flex flex-col justify-between">

          <div>
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45 ">
              Case Studies
            </p>

            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:max-w-xl sm:text-[2.5rem] md:text-[2.2rem] lg:text-[2.5rem] mb-4">
              Smart CMS Solutions Built for Growth
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              A collection of scalable CMS platforms crafted to simplify content management, improve workflow efficiency, and deliver seamless digital experiences.
            </p>
          </div>

          <div class="mt-12 flex items-center gap-4 hidden md:flex">

            <button id="desktopPrevBtn" class="group flex h-5 w-5 items-center justify-center tranform rotate-180 ">
              <svg viewBox="0 0 24.02 15.27"
                class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none"
                stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </button>

            <button id="desktopNextBtn" class="group flex h-5 w-5 items-center justify-center">
              <svg viewBox="0 0 24.02 15.27"
                class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none"
                stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </button>

          </div>
        </div>

        <div class="overflow-hidden">

          <div id="slider" class="flex gap-6 will-change-transform">

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Corporate Website
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                SaaS Platform
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Ecommerce Store
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Ecommerce Store12
              </p>

            </article>

          </div>

          <div class="mt-12 flex items-center gap-4 justify-start md:hidden">

            <button id="mobilePrevBtn" class="group flex h-5 w-5 items-center justify-center tranform rotate-180 ">
              <svg viewBox="0 0 24.02 15.27"
                class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none"
                stroke="currentColor" stroke-width="1.8">
                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
              </svg>
            </button>

            <button id="mobileNextBtn" class="group flex h-5 w-5 items-center justify-center">
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
    </section>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
  </div>

  <Script src="assets/js/script.js"></Script>
</body>

</html>

