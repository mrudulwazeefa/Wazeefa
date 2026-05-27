<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/mobile-application-development.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->

    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/app-development.jpg" alt="Web Development"
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
            <span class="text-black">Mobile App Development</span>
          </nav>
          <div class="py-4">
            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              Crafting high-performance mobile apps for growing businesses.
            </h2>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              Shaping the future through innovative mobile applications.
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
                    Scalable Apps, Seamless Digital Experiences
                  </h3>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    In today’s mobile-first world, mobile applications have become an essential part of how businesses
                    connect with customers, deliver services, and build brand engagement. A well-designed mobile app not
                    only improves customer experience but also helps businesses increase accessibility, streamline
                    operations, and drive long-term growth. At Wazeefa1 Technologies, we create modern, scalable, and
                    user-focused mobile applications tailored to your business objectives.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    We combine innovative design, advanced technologies, and strategic development to build
                    high-performance mobile applications that deliver seamless digital experiences across platforms.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    From concept and UI/UX design to development and deployment, our team specializes in creating
                    powerful Android and iOS applications that are secure, reliable, and performance-driven. Whether you
                    need a business app, ecommerce app, service platform, or custom mobile solution, we focus on
                    delivering applications that are intuitive, scalable, and aligned with your business goals. Using
                    the latest mobile technologies and frameworks, we develop apps that enhance user engagement, improve
                    operational efficiency, and support future business growth.
                  </p>
                  <a href="contact.php"
                    class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-medium text-black hover:text-white transition w-fit px-4 py-3">
                    <span>Let’s Build Together</span>
                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                      <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                      <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                    </svg>
                  </a>
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
            Next-Gen Mobile Solutions
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-md sm:max-w-xl">
            We build high-performance mobile applications that enhance user engagement, streamline digital experiences,
            and support business growth across Android and iOS platforms.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 57.001 57.001"><g><path d="m35.361 5.677 2.497-4.162A1 1 0 1 0 36.143.486l-2.635 4.392C31.939 4.32 30.259 4 28.501 4s-3.438.32-5.007.878L20.859.486a.999.999 0 1 0-1.715 1.029l2.497 4.162c-4.827 2.495-8.14 7.525-8.14 13.324a1 1 0 0 0 1 1h28a1 1 0 0 0 1-1c-.001-5.798-3.313-10.828-8.14-13.324zM15.539 18.001c.512-6.703 6.13-12 12.962-12s12.45 5.297 12.962 12H15.539z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M35.478 11.364H34.16a.659.659 0 0 0-.659.659v1.318c0 .364.295.659.659.659h1.319a.659.659 0 0 0 .659-.659v-1.318a.66.66 0 0 0-.66-.659zM22.841 11.364h-1.319a.659.659 0 0 0-.659.659v1.318c0 .364.295.659.659.659h1.319a.659.659 0 0 0 .659-.659v-1.318a.659.659 0 0 0-.659-.659zM42.5 21.001h-28a1 1 0 0 0-1 1v20.171a4.837 4.837 0 0 0 4.834 4.829H19.5v6.006c0 2.202 1.794 3.994 4 3.994s4-1.792 4-3.994v-6.006h2v6.006c0 2.202 1.794 3.994 4 3.994s4-1.792 4-3.994v-6.006h1.166a4.836 4.836 0 0 0 4.834-4.829V22.001a1 1 0 0 0-1-1zm-1 21.171a2.834 2.834 0 0 1-2.834 2.829H36.5a1 1 0 0 0-1 1v7.006a2 2 0 0 1-4 0v-7.006a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v7.006a2 2 0 0 1-4 0v-7.006a1 1 0 0 0-1-1h-2.165a2.836 2.836 0 0 1-2.835-2.829V23.001h26v19.171zM48 21.001c-1.93 0-3.5 1.572-3.5 3.504v13.992c0 1.932 1.57 3.504 3.5 3.504s3.5-1.572 3.5-3.504V24.505a3.506 3.506 0 0 0-3.5-3.504zm1.5 17.496c0 .829-.673 1.504-1.5 1.504s-1.5-.675-1.5-1.504V24.505c0-.829.673-1.504 1.5-1.504s1.5.675 1.5 1.504v13.992zM9 21.001c-1.93 0-3.5 1.572-3.5 3.504v13.992c0 1.932 1.57 3.504 3.5 3.504s3.5-1.572 3.5-3.504V24.505A3.506 3.506 0 0 0 9 21.001zm1.5 17.496c0 .829-.673 1.504-1.5 1.504s-1.5-.675-1.5-1.504V24.505c0-.829.673-1.504 1.5-1.504s1.5.675 1.5 1.504v13.992z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Android App development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop high-performance Android applications with user-friendly interfaces, scalable architecture, and seamless functionality.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 512 512"><g><path d="M407 0H105C47.103 0 0 47.103 0 105v302c0 57.897 47.103 105 105 105h302c57.897 0 105-47.103 105-105V105C512 47.103 464.897 0 407 0zm75 407c0 41.355-33.645 75-75 75H105c-41.355 0-75-33.645-75-75V105c0-41.355 33.645-75 75-75h302c41.355 0 75 33.645 75 75v302z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M305.646 123.531c-1.729-6.45-5.865-11.842-11.648-15.18-11.936-6.892-27.256-2.789-34.15 9.151L256 124.166l-3.848-6.665c-6.893-11.937-22.212-16.042-34.15-9.151h-.001c-11.938 6.893-16.042 22.212-9.15 34.151l18.281 31.664L159.678 291H110.5c-13.785 0-25 11.215-25 25s11.215 25 25 25h189.86l-28.868-50h-54.079l85.735-148.498c3.339-5.783 4.227-12.521 2.498-18.971z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M401.5 291h-49.178l-55.907-96.834-28.867 50 86.804 150.348c3.339 5.784 8.729 9.921 15.181 11.65 2.154.577 4.339.863 6.511.863 4.332 0 8.608-1.136 12.461-3.361 11.938-6.893 16.042-22.213 9.149-34.15L381.189 341H401.5c13.785 0 25-11.215 25-25s-11.215-25-25-25zM119.264 361l-4.917 8.516c-6.892 11.938-2.787 27.258 9.151 34.15a24.837 24.837 0 0 0 12.458 3.344c8.646 0 17.067-4.484 21.693-12.495L176.999 361h-57.735z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                IOS App Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We create secure and responsive iOS applications designed to deliver smooth performance across Apple devices.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 64 64"><g><path d="M35 30c1.65 0 3-1.35 3-3V5c0-1.65-1.35-3-3-3H5C3.35 2 2 3.35 2 5v22c0 1.65 1.35 3 3 3zM4 5c0-.55.45-1 1-1h30c.55 0 1 .45 1 1v6H4zm0 22V13h32v14c0 .55-.45 1-1 1H5c-.55 0-1-.45-1-1zM41 18h8c2.76 0 5 2.24 5 5v5.59l-2.29-2.29a.996.996 0 1 0-1.41 1.41l4 4c.2.2.45.29.71.29s.51-.1.71-.29l4-4a.996.996 0 1 0-1.41-1.41l-2.29 2.29V23c0-3.86-3.14-7-7-7h-8c-.55 0-1 .45-1 1s.45 1 1 1zM22.9 45.9h-8c-2.76 0-5-2.24-5-5v-5.59l2.29 2.29c.2.2.45.29.71.29s.51-.1.71-.29a.996.996 0 0 0 0-1.41l-4-4a.996.996 0 0 0-1.41 0l-4 4a.996.996 0 1 0 1.41 1.41l2.29-2.29v5.59c0 3.86 3.14 7 7 7h8c.55 0 1-.45 1-1s-.45-1-1-1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><circle cx="32.5" cy="7.5" r="1.5" fill="#FFF" opacity="1" data-original="#FFF" class=""></circle><circle cx="27.5" cy="7.5" r="1.5" fill="#FFF" opacity="1" data-original="#FFF" class=""></circle><path d="M59 34H29c-1.65 0-3 1.35-3 3v22c0 1.65 1.35 3 3 3h30c1.65 0 3-1.35 3-3V37c0-1.65-1.35-3-3-3zm-31 3c0-.55.45-1 1-1h30c.55 0 1 .45 1 1v6H28zm31 23H29c-.55 0-1-.45-1-1V45h32v14c0 .55-.45 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><circle cx="56.5" cy="39.5" r="1.5" fill="#FFF" opacity="1" data-original="#FFF" class=""></circle><circle cx="51.5" cy="39.5" r="1.5" fill="#FFF" opacity="1" data-original="#FFF" class=""></circle></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Cross-Platform App Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We build cross-platform mobile applications that provide consistent user experiences across Android and iOS platforms.
              </p>
            </div>
          </article>


          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 512.004 512.004"><g><path d="M118.072 304.44h-19.8c-49.94 0-90.46-40.33-90.77-90.2-.31-50.18 40.59-91.35 90.77-91.35 12.52 0 24.44 2.54 35.29 7.12 2.18.92 4.67-.2 5.39-2.45a135.22 135.22 0 0 1 19.95-39.11M183.082 63.14c23.29-18.8 52.92-30.06 85.18-30.06 65.86 0 120.75 46.93 133.08 109.17.44 2.22 2.63 3.6 4.84 3.1a80.743 80.743 0 0 1 17.78-1.99c44.68 0 80.87 36.39 80.54 81.15-.33 44.41-37.14 79.93-81.55 79.93h-29.02M256.002 423.92v-60.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="256.002" cy="451.424" r="27.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="M158.442 412.91v-21.96c0-1.16.51-2.27 1.4-3.03l28.72-24.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="158.442" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="m323.442 363.32 28.72 24.6c.89.76 1.4 1.87 1.4 3.03v21.96M371.062 212.74h10.87c6.63 0 12 5.37 12 12v126.58c0 6.63-5.37 12-12 12h-251.86c-6.63 0-12-5.37-12-12V224.74c0-6.63 5.37-12 12-12h91.71c2.86 0 5.5-1.53 6.93-4l23.83-41.27c1.54-2.66 5.38-2.66 6.92 0l23.83 41.27c1.43 2.47 4.07 4 6.93 4h45.84" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="353.562" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="m163.586 328.907 30.698-80.602c.627-1.534 2.798-1.536 3.429-.004l30.419 80.605M173.16 308.833h45.552M348.418 247.154v81.753M265.132 247.154v81.753M311.418 270.225c0 12.742-10.781 23.071-23.523 23.071-6.319 0-22.605.102-22.605.102s-.102-16.75-.102-23.173c0-5.275-.057-23.071-.057-23.071h22.764c12.742 0 23.523 10.329 23.523 23.071z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                API & Backend Integration
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We integrate secure APIs and backend systems to ensure smooth data flow, connectivity, and application performance.
              </p>
            </div>
          </article>

          <!-- <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="48" height="48" viewBox="0 0 100 100" class="card-svg">
              <g>
                <path
                  d="M11.48 81.5h54.03l-.59 8.96c-.17 2.61.8 3.55 1.64 3.87.23.09.5.15.8.15.8 0 1.83-.43 3.01-1.92l5.92-7.47c1.34-1.69 4.35-2.73 6.45-2.24l9.27 2.2c2.54.6 3.63-.19 4.09-.97s.64-2.11-1.11-4.05l-1.15-1.28c.75-1.06 1.2-2.35 1.2-3.74V13c0-3.58-2.92-6.5-6.5-6.5H11.48c-3.58 0-6.5 2.92-6.5 6.5v62c0 3.58 2.92 6.5 6.5 6.5zm81.22.63-9.27-2.2c-3.25-.77-7.42.68-9.49 3.29l-5.92 7.47c-.04.05-.08.1-.12.14v-.18l2.12-32.28c.04-.6.15-.91.23-1.06.15.07.43.24.83.69s21.66 24.03 21.66 24.03c.04.05.08.09.12.14-.06-.01-.12-.02-.18-.04zM73.33 55.99c-1.78-1.98-3.31-1.83-4.07-1.57-.75.26-2.05 1.1-2.22 3.75L65.71 78.5H11.48c-1.93 0-3.5-1.57-3.5-3.5V27.5h84.05V75c0 .5-.11.98-.3 1.41L73.33 56zM7.98 13c0-1.93 1.57-3.5 3.5-3.5h77.05c1.93 0 3.5 1.57 3.5 3.5v11.5H7.98z"
                  fill="#FFFFFF"></path>
                <path
                  d="M15.74 12.6c-2.62 0-4.75 2.13-4.75 4.75s2.13 4.75 4.75 4.75 4.75-2.13 4.75-4.75-2.13-4.75-4.75-4.75zm0 6.5c-.96 0-1.75-.79-1.75-1.75s.79-1.75 1.75-1.75 1.75.79 1.75 1.75-.79 1.75-1.75 1.75zM27.74 12.6c-2.62 0-4.75 2.13-4.75 4.75s2.13 4.75 4.75 4.75 4.75-2.13 4.75-4.75-2.13-4.75-4.75-4.75zm0 6.5c-.96 0-1.75-.79-1.75-1.75s.79-1.75 1.75-1.75 1.75.79 1.75 1.75-.79 1.75-1.75 1.75zM87.46 12.94c-.61-.56-1.56-.51-2.12.1l-1.89 2.08-1.89-2.08a1.502 1.502 0 0 0-2.22 2.02l2.08 2.3-2.08 2.3a1.502 1.502 0 0 0 1.11 2.51c.41 0 .81-.17 1.11-.49l1.89-2.08 1.89 2.08c.3.33.7.49 1.11.49a1.502 1.502 0 0 0 1.11-2.51l-2.08-2.3 2.08-2.3c.56-.61.51-1.56-.1-2.12z"
                  fill="#FFFFFF"></path>
              </g>
            </svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                WooCommerce Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                The site will be designed to ensure that the visitors find the information that they want easily.
              </p>
            </div>
          </article> -->

        </div>
      </div>
    </section>

    <section class="bg-white px-5 py-20 text-black sm:px-8 md:px-12 lg:px-16">
      <div class="mx-auto max-w-5xl mb-10">
        <div class="mb-[5rem]">
          <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45 text-center">Our Process</p>
          <h2
            class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[2.2rem] md:text-[2.5rem] text-center mb-4">
            Creating Engaging Mobile Experiences</h2>
          <p class="text-md text-black/70 text-center max-w-3xl mx-auto">
            We build high-performance mobile applications with intuitive interfaces, seamless functionality, and scalable architecture for modern users.
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
              We understand your business goals, user expectations, app requirements, and market opportunities to define the right mobile solution.
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
              Our team creates a detailed app development strategy covering platform selection, user flow, features, scalability, and performance goals.
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
              We design structured app flows and interactive layouts to create seamless navigation and user experiences.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">UI/UX Design</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We craft modern, responsive, and visually engaging app interfaces focused on usability, accessibility, and brand consistency.
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
              We build secure, scalable, and high-performance mobile applications for Android, iOS, or cross-platform environments using modern technologies.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Testing</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We conduct detailed testing for functionality, responsiveness, device compatibility, security, and app performance optimization.
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
              After final quality checks and optimization, we deploy the app smoothly to app stores and production environments.
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
              We provide ongoing updates, maintenance, monitoring, bug fixes, and feature enhancements to ensure long-term app performance.
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
              Innovative Mobile Experiences for Modern Users
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              A showcase of high-performance mobile applications designed to enhance user interaction, improve accessibility, and support business growth across platforms.
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