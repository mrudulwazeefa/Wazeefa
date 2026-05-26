<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/software-development.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->
    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/software-development.jpg" alt="Web Development"
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
            <span class="text-black">Software Development</span>
          </nav>
          <div class="py-4">
            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              Powerful Software Solutions Built for Business Growth.
            </h2>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              The future of business innovation begins with scalable and intelligent software development solutions.
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
                    Scalable Solutions, Smarter Business Growth
                  </h3>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    At Wazeefa1 Technologies, we deliver custom software solutions designed to streamline operations, improve efficiency, and accelerate business growth. Whether you are a startup, a growing business, or an established enterprise, our team is committed to building scalable and reliable software tailored to your unique requirements.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    As a trusted software development company, we focus on every stage of the development process — from planning and analysis to design, development, testing, and deployment. By combining innovative technologies with industry expertise, we create secure, high-performing, and future-ready software solutions that help businesses adapt, grow, and succeed in the digital era.
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
            Smart Marketing for Modern Brands
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-lg sm:max-w-xl">
            We create result-driven digital marketing strategies that increase brand visibility, improve customer
            engagement, and support long-term business growth.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 500 500"><g><path fill-rule="evenodd" d="M165.862 449.382c-6.733 0-12.218-5.49-12.218-12.239 0-6.739 5.485-12.228 12.218-12.228s12.272 5.49 12.272 12.228c0 6.75-5.539 12.239-12.272 12.239zm0-398.764c6.733 0 12.272 5.479 12.272 12.228 0 6.739-5.539 12.229-12.272 12.229s-12.218-5.49-12.218-12.229c0-6.749 5.485-12.228 12.218-12.228zm0 361.433c-7.005 0-13.303 2.889-17.865 7.531l-79.93-45.444V125.851l79.93-45.433c4.561 4.637 10.86 7.521 17.865 7.521 13.847 0 25.087-11.262 25.087-25.092 0-13.841-11.24-25.092-25.087-25.092-16.636 0-28.43 15.878-24.272 31.478l-83.134 47.279a6.459 6.459 0 0 0-3.258 5.593v255.781a6.44 6.44 0 0 0 3.258 5.593l83.134 47.279c-4.158 15.6 7.639 31.489 24.272 31.489 13.847 0 25.087-11.262 25.087-25.103 0-13.831-11.241-25.093-25.087-25.093zm168.222 37.331c-6.733 0-12.218-5.49-12.218-12.239 0-6.739 5.484-12.228 12.218-12.228s12.218 5.49 12.218 12.228c0 6.75-5.485 12.239-12.218 12.239zm0-374.307c-6.733 0-12.218-5.49-12.218-12.229 0-6.749 5.484-12.228 12.218-12.228s12.218 5.479 12.218 12.228c0 6.739-5.485 12.229-12.218 12.229zm107.406 41.436-83.134-47.279c4.159-15.594-7.633-31.478-24.272-31.478-13.846 0-25.087 11.251-25.087 25.092 0 13.83 11.24 25.092 25.087 25.092 7.005 0 13.358-2.883 17.919-7.521l79.93 45.433v248.288l-79.93 45.444c-4.561-4.643-10.914-7.531-17.919-7.531-13.846 0-25.087 11.262-25.087 25.092 0 13.841 11.24 25.103 25.087 25.103 16.636 0 28.431-15.894 24.272-31.489l83.134-47.279a6.378 6.378 0 0 0 3.312-5.593V122.104c0-2.308-1.249-4.442-3.312-5.593zM249.973 377.494l-128.094-63.281 50.499-24.935 74.771 36.93c1.766.894 3.909.88 5.702 0l74.717-36.93 50.499 24.935zM121.879 249.997l50.499-24.935 74.771 36.924c1.786.899 3.894.883 5.702 0l74.717-36.924 50.499 24.935-128.094 63.271zm0-64.221 128.094-63.271 128.094 63.271-128.094 63.271zm277.148 128.437c0 2.454-1.412 4.681-3.584 5.772l-142.592 70.449c-1.803.869-3.92.886-5.702-.011l-142.647-70.438c-4.754-2.368-4.766-9.17 0-11.534l53.323-26.346-53.323-26.341c-4.757-2.364-4.767-9.164 0-11.539l53.323-26.341-53.323-26.346c-4.76-2.36-4.76-9.163 0-11.522l142.647-70.449a6.422 6.422 0 0 1 5.702 0l142.592 70.449c4.76 2.36 4.76 9.162 0 11.522l-53.323 26.346 53.323 26.341c4.767 2.375 4.757 9.175 0 11.539l-53.323 26.341 53.323 26.346c2.172 1.081 3.584 3.318 3.584 5.762z" clip-rule="evenodd" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Custom Software Solutions
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop tailored software solutions designed to streamline business operations and improve overall productivity.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 512 512"><g><path fill-rule="evenodd" d="M64.949 109.145a6.39 6.39 0 1 1 6.618-6.388 6.388 6.388 0 0 1-6.618 6.388zm30.947 0a6.39 6.39 0 1 1 6.617-6.388 6.388 6.388 0 0 1-6.617 6.388zm30.947 0a6.39 6.39 0 1 1 6.617-6.388 6.388 6.388 0 0 1-6.617 6.388zm61.717 0a6.388 6.388 0 0 1 0-12.776h183.427a6.388 6.388 0 0 1 0 12.776zm273.7 209.717a71.568 71.568 0 1 0 0 101.212 71.569 71.569 0 0 0 0-101.212zm-86.677 54.485a6.374 6.374 0 0 1 8.684-9.333l18.533 17.27 36.02-36.984a6.37 6.37 0 0 1 9.133 8.882l-40.271 41.354a6.374 6.374 0 0 1-9.008.325l-23.088-21.514zM218.145 245.031v.024c18.026-.182 32.66 14.569 32.66 31.991h-.025c.184 18.025-14.568 32.66-31.991 32.66v-.024c-18.026.183-32.661-14.569-32.661-31.992h.025c-.183-18.025 14.568-32.66 31.991-32.66zm0 12.776a19.582 19.582 0 0 0-19.264 19.884h.023a19.583 19.583 0 0 0 19.885 19.265v-.024a19.584 19.584 0 0 0 19.265-19.884h-.024a19.583 19.583 0 0 0-19.884-19.265v.024zM237.76 230.4q-2.29-.942-4.754-1.678a6.378 6.378 0 0 1-4.7-4.866l-2.163-10.032-15.954.2-1.8 9.473c-.837 5.114-5.027 5.164-9.5 7.032q-2.355.984-4.461 2.114a6.375 6.375 0 0 1-6.812-.048l-8.653-5.583-11.142 11.423 5.544 8.14a6.375 6.375 0 0 1 .413 6.707 51.234 51.234 0 0 0-3.933 9.431 6.378 6.378 0 0 1-4.9 4.818l-10.033 2.164.2 15.953 9.475 1.8c5.112.837 5.161 5.02 7.031 9.5q.983 2.353 2.114 4.46a6.375 6.375 0 0 1-.048 6.813l-5.584 8.654 11.422 11.142 8.14-5.542a6.374 6.374 0 0 1 6.706-.414 51.174 51.174 0 0 0 9.432 3.933 6.377 6.377 0 0 1 4.818 4.895l2.164 10.033 15.953-.2 1.8-9.474c.837-5.113 5.022-5.162 9.5-7.033q2.352-.983 4.457-2.113a6.375 6.375 0 0 1 6.813.048l8.655 5.585 11.142-11.423-5.542-8.139a6.375 6.375 0 0 1-.414-6.707 51.272 51.272 0 0 0 3.933-9.432 6.378 6.378 0 0 1 4.9-4.818l10.033-2.164-.2-15.953-9.474-1.8c-5.113-.837-5.162-5.021-7.033-9.5q-.983-2.352-2.113-4.458a6.375 6.375 0 0 1 .048-6.812l5.584-8.656L257.4 226.73l-8.14 5.542a6.373 6.373 0 0 1-6.707.413 50.74 50.74 0 0 0-4.8-2.284zm2.251-12.778-2.491-11.548h-.013a6.365 6.365 0 0 0-6.3-5.043l-26.048.324a6.375 6.375 0 0 0-6.522 5.194l-2.128 11.214-5.059 2.124-9.956-6.423a6.373 6.373 0 0 0-8.008.92l-18.242 18.7a6.374 6.374 0 0 0-.878 8.218l6.437 9.453-2.075 5.064-11.553 2.491v.013a6.364 6.364 0 0 0-5.043 6.3l.324 26.048a6.373 6.373 0 0 0 5.195 6.521l11.214 2.129 2.124 5.057-6.425 9.958a6.373 6.373 0 0 0 .921 8.008l18.7 18.242a6.376 6.376 0 0 0 8.219.877l9.452-6.435 5.064 2.075 2.492 11.551h.012a6.366 6.366 0 0 0 6.3 5.043l26.047-.325a6.373 6.373 0 0 0 6.522-5.194l2.129-11.215 5.057-2.123 9.958 6.424a6.372 6.372 0 0 0 8.007-.92l18.243-18.7a6.376 6.376 0 0 0 .878-8.218l-6.437-9.453 2.075-5.064 11.552-2.491v-.013a6.363 6.363 0 0 0 5.043-6.3l-.324-26.048a6.371 6.371 0 0 0-5.194-6.521l-11.21-2.126-2.124-5.057 6.425-9.958a6.373 6.373 0 0 0-.92-8.008l-18.7-18.242a6.376 6.376 0 0 0-8.218-.878l-9.453 6.436-5.064-2.078zm103.424 201.447a84.346 84.346 0 1 0 77.5-133.438V76.822A18.671 18.671 0 0 0 402.3 58.189H34.633A18.671 18.671 0 0 0 16 76.822v323.614a18.671 18.671 0 0 0 18.633 18.633zM408.16 146.5v138.7a84.361 84.361 0 0 0-72.4 121.1H34.633a5.891 5.891 0 0 1-5.857-5.857V146.5zM28.776 133.728H408.16V76.822a5.89 5.89 0 0 0-5.857-5.857H34.633a5.891 5.891 0 0 0-5.857 5.857zm156.9 238.641a101.434 101.434 0 0 0 11.567 3.227 6.388 6.388 0 1 1-2.686 12.49 114.369 114.369 0 0 1-13.03-3.634 6.388 6.388 0 1 1 4.149-12.083zM145.655 346.6a100.865 100.865 0 0 0 8.777 8.194 6.388 6.388 0 1 1-8.12 9.863 113.406 113.406 0 0 1-9.892-9.229 6.388 6.388 0 1 1 9.235-8.828zM119.9 257.781a102.111 102.111 0 0 0-1.618 11.9 6.388 6.388 0 1 1-12.74-.946 115.227 115.227 0 0 1 1.819-13.4 6.388 6.388 0 1 1 12.539 2.45zm6.055 58.859a6.387 6.387 0 0 1-11.734 5.051 108.08 108.08 0 0 1-4.548-12.768 6.388 6.388 0 1 1 12.264-3.58 101.3 101.3 0 0 0 4.018 11.3zm14.015-101.993a100.863 100.863 0 0 0-6.932 9.809 6.388 6.388 0 1 1-10.86-6.729 114.009 114.009 0 0 1 7.8-11.045 6.388 6.388 0 1 1 9.988 7.965zm120.33-20.394-2.645-9.439a100.5 100.5 0 0 1-39.187 193.027 6.388 6.388 0 1 0 0 12.776 113.256 113.256 0 0 0 47.18-216.217l6.9-1.934a6.375 6.375 0 0 0-3.444-12.277l-23.156 6.489a6.375 6.375 0 0 0-4.417 7.86l6.489 23.156a6.375 6.375 0 0 0 12.277-3.444z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Business Process Automation
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We automate repetitive workflows and operational tasks to increase efficiency, accuracy, and business performance.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 511.999 511.999"><g><path d="M33.869 50.014c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h9.68c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5zM75.351 50.014c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h9.68c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5zM116.833 50.014c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h9.679c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5zM339.242 241.812c4.075.733 7.978-1.972 8.713-6.049l10.339-57.285 16.948 57.446a9.356 9.356 0 0 0 8.967 6.654h.052a9.354 9.354 0 0 0 8.942-6.738l16.365-57.409 10.972 57.409c.777 4.069 4.711 6.74 8.774 5.958a7.498 7.498 0 0 0 5.958-8.774l-15.439-80.79a9.377 9.377 0 0 0-8.654-7.486c-4.267-.263-8.13 2.418-9.443 6.463-.027.086-.054.172-.079.26l-17.539 61.527-18.176-61.607a9.376 9.376 0 0 0-9.596-6.632c-4.243.284-7.77 3.4-8.591 7.664l-14.562 80.678a7.5 7.5 0 0 0 6.049 8.711zM242.192 217.64a7.5 7.5 0 0 0-10.566.922 25.946 25.946 0 0 1-2.606 2.69c-4.713 4.197-10.684 6.325-17.746 6.325-18.706 0-33.924-15.218-33.924-33.923 0-18.706 15.218-33.924 33.924-33.924a33.75 33.75 0 0 1 18.962 5.789 7.5 7.5 0 0 0 8.396-12.43c-8.096-5.469-17.557-8.359-27.358-8.359-26.977 0-48.924 21.947-48.924 48.924s21.947 48.923 48.924 48.923c10.699 0 20.285-3.501 27.724-10.125a41.144 41.144 0 0 0 4.117-4.246 7.501 7.501 0 0 0-.923-10.566zM304.486 240.033a7.5 7.5 0 1 0 11.26-9.91l-24.293-27.602c14.753-1.921 26.163-14.081 26.163-28.758 0-16.008-13.569-29.031-30.249-29.031h-22.016l-.014.001-.014-.001a7.499 7.499 0 0 0-7.5 7.5v82.847c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-31.02zm-17.119-80.302c8.266 0 15.249 6.426 15.249 14.031s-6.983 14.03-15.249 14.03c-3.316 0-9.465.028-14.406.054a3370.96 3370.96 0 0 1-.055-14.084c0-2.71-.017-8.956-.031-14.031z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="m503.104 356.786-9.234-5.551a3.371 3.371 0 0 1-1.176-1.197l-16.21-28.076V43.657c0-13.202-10.741-23.943-23.943-23.943H336.552c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h115.989c4.932 0 8.943 4.012 8.943 8.943v36.658H15V43.657c0-4.932 4.012-8.943 8.943-8.943h282.621c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H23.943C10.741 19.713 0 30.455 0 43.657v297.798c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5V95.315h106.271v316.679H23.943c-4.932 0-8.943-4.012-8.943-8.943v-31.608c0-4.143-3.357-7.5-7.5-7.5S0 367.3 0 371.443v31.608c0 13.202 10.741 23.943 23.943 23.943h279.102l14.09 24.404c.282.489.437 1.047.446 1.614l.19 10.774c.113 6.4 3.628 12.365 9.171 15.565l18.168 10.489c5.543 3.201 12.465 3.262 18.065.16l9.428-5.224a3.357 3.357 0 0 1 1.621-.419h40.918c.566 0 1.128.146 1.623.42l9.426 5.223a18.356 18.356 0 0 0 8.889 2.284c3.179 0 6.356-.816 9.177-2.444l18.168-10.489c5.545-3.201 9.059-9.166 9.171-15.565l.19-10.775a3.36 3.36 0 0 1 .448-1.614l20.46-35.438a3.363 3.363 0 0 1 1.173-1.194l9.234-5.551c5.487-3.297 8.896-9.322 8.896-15.726V372.51c.002-6.401-3.406-12.427-8.893-15.724zM136.271 95.315h325.213v190.789l-17.227-9.946c-5.546-3.202-12.469-3.262-18.065-.159l-9.423 5.221a3.37 3.37 0 0 1-1.626.421h-40.918a3.366 3.366 0 0 1-1.622-.419L363.178 276c-5.599-3.104-12.522-3.042-18.066.158l-18.168 10.489c-5.543 3.2-9.058 9.165-9.171 15.565l-.19 10.775a3.352 3.352 0 0 1-.447 1.614l-20.458 35.435a3.371 3.371 0 0 1-1.176 1.197l-9.237 5.552c-5.485 3.299-8.894 9.324-8.894 15.725v20.979c0 6.402 3.408 12.428 8.895 15.725l4.625 2.78h-154.62zm360.728 298.174a3.362 3.362 0 0 1-1.623 2.869l-9.238 5.553a18.397 18.397 0 0 0-6.434 6.551l-20.458 35.435a18.388 18.388 0 0 0-2.457 8.851l-.19 10.776a3.364 3.364 0 0 1-1.673 2.839l-18.168 10.489a3.362 3.362 0 0 1-3.296.029l-9.426-5.223a18.398 18.398 0 0 0-8.893-2.299h-40.918c-3.104 0-6.179.795-8.892 2.299l-9.427 5.223a3.365 3.365 0 0 1-3.296-.029l-18.168-10.489a3.366 3.366 0 0 1-1.673-2.841l-.19-10.773a18.388 18.388 0 0 0-2.455-8.851l-20.46-35.437a18.403 18.403 0 0 0-6.436-6.551l-9.237-5.553c-1-.601-1.622-1.7-1.622-2.868V372.51c0-1.168.622-2.268 1.623-2.869l9.238-5.553a18.416 18.416 0 0 0 6.435-6.551l20.458-35.435a18.384 18.384 0 0 0 2.456-8.851l.19-10.774a3.366 3.366 0 0 1 1.673-2.841l18.168-10.489a3.362 3.362 0 0 1 3.296-.028l9.429 5.224a18.395 18.395 0 0 0 8.89 2.297h40.918c3.101 0 6.175-.794 8.893-2.298l9.427-5.224a3.368 3.368 0 0 1 3.295.029l18.168 10.489a3.364 3.364 0 0 1 1.673 2.841l.19 10.773a18.395 18.395 0 0 0 2.456 8.851l20.458 35.434a18.39 18.39 0 0 0 6.437 6.554l9.236 5.552a3.366 3.366 0 0 1 1.623 2.869z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M394.685 313.515c-38.313 0-69.483 31.171-69.483 69.484s31.17 69.484 69.483 69.484a69.407 69.407 0 0 0 45.856-17.301 7.501 7.501 0 0 0-9.906-11.264 54.413 54.413 0 0 1-35.95 13.564c-30.042 0-54.483-24.441-54.483-54.484s24.441-54.484 54.483-54.484c30.043 0 54.484 24.441 54.484 54.484 0 6.612-1.181 13.09-3.51 19.252a7.499 7.499 0 0 0 4.364 9.667 7.499 7.499 0 0 0 9.667-4.364 69.207 69.207 0 0 0 4.479-24.555c0-38.312-31.171-69.483-69.484-69.483zM49.969 141.371h36.334c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H49.969c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5zM49.969 187.426h36.334c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H49.969c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5zM49.969 233.483h36.334c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H49.969c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5zM49.969 279.539h36.334c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H49.969c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5zM49.969 325.594h36.334c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H49.969c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                CRM & ERP Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We build powerful CRM and ERP systems that help manage customers, operations, resources, and business data effectively.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 64 64"><g><path d="M52.97 43.32h-2.1c-.55 0-1-.45-1-1s.45-1 1-1h2.1c4.01 0 7.27-3.26 7.27-7.27 0-3.22-2.06-6.02-5.13-6.96-.5-.16-.8-.67-.68-1.19.11-.45.16-.95.16-1.52 0-3.97-3.22-7.24-7.17-7.29a.997.997 0 0 1-.87-.54 16.905 16.905 0 0 0-15.03-9.12c-8.12 0-15.12 5.78-16.65 13.75-.1.52-.58.87-1.11.8-.11-.01-.23-.01-.34-.01-5.33 0-9.67 4.34-9.67 9.68 0 5.33 4.34 9.67 9.67 9.67h1.04c.55 0 1 .45 1 1s-.45 1-1 1h-1.04c-6.44 0-11.67-5.24-11.67-11.67 0-6.33 5.06-11.5 11.34-11.68 2.02-8.48 9.64-14.54 18.43-14.54 6.89 0 13.17 3.7 16.52 9.69 4.76.37 8.55 4.41 8.55 9.26 0 .38-.02.75-.06 1.09 3.45 1.43 5.7 4.77 5.7 8.58.02 5.11-4.14 9.27-9.26 9.27z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M47.64 58.57H17.7c-2.34 0-4.24-1.9-4.24-4.24V32.87c0-2.34 1.9-4.24 4.24-4.24h29.94c2.34 0 4.24 1.9 4.24 4.24v21.46c0 2.34-1.9 4.24-4.24 4.24zM17.7 30.63c-1.23 0-2.24 1-2.24 2.24v21.46c0 1.23 1 2.24 2.24 2.24h29.94c1.23 0 2.24-1 2.24-2.24V32.87c0-1.23-1-2.24-2.24-2.24z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M50.88 37.16H14.46c-.55 0-1-.45-1-1s.45-1 1-1h36.41c.55 0 1 .45 1 1s-.44 1-.99 1zM42.55 33.92h-.81c-.55 0-1-.45-1-1s.45-1 1-1h.81c.55 0 1 .45 1 1s-.45 1-1 1zM46.34 33.92h-.81c-.55 0-1-.45-1-1s.45-1 1-1h.81c.55 0 1 .45 1 1s-.45 1-1 1zM26.35 51.79c-.21 0-.43-.07-.61-.21l-4.89-3.79c-.24-.19-.38-.47-.39-.77s.13-.59.36-.79l4.89-4.08a1 1 0 1 1 1.28 1.54l-3.93 3.28 3.9 3.02c.44.34.52.97.18 1.4-.2.27-.5.4-.79.4zM29.2 54.56a1.001 1.001 0 0 1-.93-1.36l5.21-13.4c.2-.51.78-.77 1.29-.57s.77.78.57 1.29l-5.21 13.4c-.15.39-.53.64-.93.64zM37.26 51.79c-.3 0-.59-.13-.79-.39a.992.992 0 0 1 .18-1.4l3.9-3.02-3.93-3.28c-.42-.35-.48-.98-.13-1.41.35-.42.98-.48 1.41-.13l4.88 4.08c.23.19.36.48.36.79-.01.3-.15.59-.39.77l-4.88 3.79c-.18.13-.4.2-.61.2z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Cloud-Based Applications
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop secure cloud-based applications that provide scalability, accessibility, and flexible business operations.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 512.004 512.004"><g><path d="M118.072 304.44h-19.8c-49.94 0-90.46-40.33-90.77-90.2-.31-50.18 40.59-91.35 90.77-91.35 12.52 0 24.44 2.54 35.29 7.12 2.18.92 4.67-.2 5.39-2.45a135.22 135.22 0 0 1 19.95-39.11M183.082 63.14c23.29-18.8 52.92-30.06 85.18-30.06 65.86 0 120.75 46.93 133.08 109.17.44 2.22 2.63 3.6 4.84 3.1a80.743 80.743 0 0 1 17.78-1.99c44.68 0 80.87 36.39 80.54 81.15-.33 44.41-37.14 79.93-81.55 79.93h-29.02M256.002 423.92v-60.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="256.002" cy="451.424" r="27.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="M158.442 412.91v-21.96c0-1.16.51-2.27 1.4-3.03l28.72-24.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="158.442" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="m323.442 363.32 28.72 24.6c.89.76 1.4 1.87 1.4 3.03v21.96M371.062 212.74h10.87c6.63 0 12 5.37 12 12v126.58c0 6.63-5.37 12-12 12h-251.86c-6.63 0-12-5.37-12-12V224.74c0-6.63 5.37-12 12-12h91.71c2.86 0 5.5-1.53 6.93-4l23.83-41.27c1.54-2.66 5.38-2.66 6.92 0l23.83 41.27c1.43 2.47 4.07 4 6.93 4h45.84" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path><circle cx="353.562" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></circle><path d="m163.586 328.907 30.698-80.602c.627-1.534 2.798-1.536 3.429-.004l30.419 80.605M173.16 308.833h45.552M348.418 247.154v81.753M265.132 247.154v81.753M311.418 270.225c0 12.742-10.781 23.071-23.523 23.071-6.319 0-22.605.102-22.605.102s-.102-16.75-.102-23.173c0-5.275-.057-23.071-.057-23.071h22.764c12.742 0 23.523 10.329 23.523 23.071z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#FFF" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                API Development & Integration
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We create and integrate APIs to enable smooth communication between software systems, applications, and services.
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
                We offer continuous software updates, performance monitoring, bug fixing, and long-term technical support.
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
              We analyze your business requirements, operational challenges, user expectations, and project goals to understand the exact software solution your business needs.
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
              Our team creates a detailed development roadmap covering system architecture, technology stack, workflow planning, scalability, and future business growth.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-medium">Planning</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We define software modules, features, timelines, integrations, and development priorities to ensure a smooth and efficient development process.
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
              We design intuitive and user-friendly interfaces that improve usability, accessibility, and overall user experience across all platforms.
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
              We build secure, scalable, and high-performance software solutions using modern technologies, clean coding practices, and advanced functionalities.
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
              We conduct detailed testing for functionality, security, performance, compatibility, and reliability to ensure a seamless user experience.
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
              After final optimization and quality checks, we deploy the software with smooth configuration and minimal operational disruption.
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
              We provide continuous maintenance, updates, monitoring, and technical support to ensure long-term performance and scalability.
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
              Custom Software Solutions That Power Businesses
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              A showcase of scalable software systems and business applications developed to streamline operations, improve productivity, and support digital transformation.
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