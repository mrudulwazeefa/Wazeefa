<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/web-development.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->
    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/banners/web-development.webp" alt="Web Development"
        class="h-[45vh] w-full object-cover object-center will-change-transform" />
    </section>
    <section
      class="relative overflow-hidden bg-white px-5 pt-[2.5rem] pb-14 text-black sm:px-8 md:px-12 md:pt-[2.5rem] lg:px-16 lg:pt-[2.5rem] lg:pb-[2rem]"
      lg:pt-10>
      <div class="mx-auto max-w-6xl">
        <div class="max-w-full">
          <nav class="flex items-center gap-x-3 text-sm text-black/60 py-4">
            <a href="index.php" class="hidden sm:flex hover:text-black">Home</a>
            <span class="hidden sm:flex">/</span>
            <a href="services.php" class="hover:text-black">Services</a>
            <span>/</span>
            <span class="text-[#dc8413]">Web Development</span>
          </nav>
          <div class="py-4">
            <h1
              class="service-hero-h2 text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              Custom Web Development Solutions Built for Business Growth
            </h1>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              Technology That Powers Modern Business Growth
            </p>
          </div>

          <div class="flex flex-col lg:flex-col items-center gap-12 pt-5 sm:pt-10 pb-0">
            <div class="w-full lg:w-[100%]">

              <div
                class="grid grid-cols-1 md:grid-cols-[0.3fr_2fr] gap-6 md:gap-10 text-[15px] leading-7 text-black/75">

                <div>
                  <div class="relative w-[42px] h-[42px] flex items-center justify-center">
                    <img id="shape-2" src="assets/images/icons/web.png" alt="Icon 4" 
                        class="absolute inset-0 w-full h-full object-contain will-change-transform" />  
                    <img id="shape-3" src="assets/images/icons/web3.png" alt="Icon 5" 
                        class="absolute inset-0 w-full h-full object-contain opacity-0 will-change-transform" />                      
                    <img id="shape-1" src="assets/images/icons/web2.png" alt="Logo" 
                        class="absolute inset-0 w-full h-full object-contain opacity-0 will-change-transform" />
                  </div>
                </div>
                

                <div class="space-y-5 mb-5 sm:mb-6 md:mb-5 lg:mb-12">
                  <h2 class="text-[1.5rem] lg:text-[1.5rem] font-light tracking-[-0.03rem] leading-[1.2] text-black">
                    High-Performance Websites Built for Success
                  </h2>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    In today's competitive digital landscape, a professional website is essential for building credibility, attracting customers, and driving business growth. At Wazeefa, we create modern, scalable, and user-focused websites using the latest web technologies and development practices.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    We combine strategic thinking, creative design, and technical expertise to deliver digital experiences tailored to your business goals.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    Every website we build is designed around user behavior, engagement, and seamless navigation. With SEO-friendly architecture, responsive design, and performance-focused development, we create websites that not only look exceptional but also improve visibility, increase conversions, and support long-term success.
                  </p>
                  <a href="contact-us.php"
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
            class="text-[2rem] leading-[1.05] tracking-[-0.0em] text-white sm:text-[2.2rem] md:text-[2.5rem] font-light max-w-lg sm:max-w-lg md:max-w-xl lg:max-w-[40rem] mx-auto font-light">
            Web Development Solutions Tailored to Your Business
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-md sm:max-w-xl">
            We build modern, high-performing websites that enhance your brand, improve user experience, and support business growth.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 424 424">
              <g>
                <path
                  d="M167.29 272.133a6.972 6.972 0 0 1-4.532-1.672l-45.297-38.57a7 7 0 0 1 0-10.66l45.297-38.57a7 7 0 0 1 9.867.788c2.504 2.946 2.152 7.363-.793 9.867l-39.035 33.243 39.035 33.242a7 7 0 0 1-4.543 12.332zM256.71 272.133c-1.98 0-3.948-.836-5.331-2.465a7 7 0 0 1 .789-9.867l39.035-33.242-39.035-33.243a7 7 0 0 1 9.074-10.656l45.297 38.57a7 7 0 0 1 0 10.66l-45.297 38.57a6.972 6.972 0 0 1-4.531 1.673zM195.965 301.063a7.002 7.002 0 0 1-6.86-8.445l28.23-134.036a7 7 0 0 1 13.7 2.887l-28.23 134.035a7.001 7.001 0 0 1-6.84 5.559zm0 0"
                  fill="currentColor"></path>
                <path
                  d="M377 374.086H47c-25.914 0-47-21.082-47-47V47C0 21.086 21.086 0 47 0h330c25.914 0 47 21.086 47 47v280.086c0 25.918-21.086 47-47 47zM47 14c-18.195 0-33 14.805-33 33v280.086c0 18.195 14.805 33 33 33h330c18.195 0 33-14.805 33-33V47c0-18.195-14.805-33-33-33zm0 0"
                  fill="currentColor"></path>
                <path
                  d="M417 112.09H7a7.001 7.001 0 0 1 0-14h410a7.001 7.001 0 0 1 0 14zM119.602 78.594c-12.211 0-22.153-9.942-22.153-22.153 0-12.214 9.942-22.152 22.153-22.152 12.214 0 22.152 9.938 22.152 22.152 0 12.211-9.938 22.153-22.152 22.153zm0-30.305c-4.493 0-8.153 3.656-8.153 8.152s3.66 8.153 8.153 8.153c4.496 0 8.152-3.656 8.152-8.153s-3.656-8.152-8.152-8.152zM51.54 78.379c-12.216 0-22.153-9.938-22.153-22.152 0-12.215 9.937-22.153 22.152-22.153 12.215 0 22.152 9.938 22.152 22.153 0 12.214-9.937 22.152-22.152 22.152zm0-30.305c-4.493 0-8.153 3.66-8.153 8.153 0 4.496 3.66 8.152 8.152 8.152 4.496 0 8.152-3.656 8.152-8.152 0-4.493-3.656-8.153-8.152-8.153zM187.664 78.805c-12.21 0-22.148-9.938-22.148-22.153 0-12.21 9.937-22.148 22.148-22.148 12.215 0 22.152 9.937 22.152 22.148 0 12.215-9.937 22.153-22.152 22.153zm0-30.305c-4.492 0-8.148 3.656-8.148 8.152s3.656 8.153 8.148 8.153c4.496 0 8.152-3.657 8.152-8.153s-3.656-8.152-8.152-8.152zm0 0"
                  fill="currentColor"></path>
              </g>
            </svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Corporate Website Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We create professional, responsive, and modern corporate websites that strengthen brand credibility and improve customer engagement.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 424 424"><g><path d="M140.61 269.379a7 7 0 0 1-4.543-12.328l39.035-33.242-39.036-33.243a7 7 0 0 1-.789-9.867 7.003 7.003 0 0 1 9.868-.793l45.292 38.574a6.992 6.992 0 0 1 2.461 5.329c0 2.05-.898 4-2.46 5.328l-45.293 38.574a6.97 6.97 0 0 1-4.536 1.668zM283.395 275.848h-90c-3.868 0-7-3.133-7-7 0-3.868 3.132-7 7-7h90c3.867 0 7 3.132 7 7 0 3.867-3.133 7-7 7zm0 0" fill="currentColor" opacity="1" data-original="currentColor" class="hovered-path"></path><path d="M377 374.086H47c-25.914 0-47-21.082-47-47V47C0 21.086 21.086 0 47 0h330c25.914 0 47 21.086 47 47v280.086c0 25.918-21.086 47-47 47zM47 14c-18.195 0-33 14.805-33 33v280.086c0 18.195 14.805 33 33 33h330c18.195 0 33-14.805 33-33V47c0-18.195-14.805-33-33-33zm0 0" fill="currentColor" opacity="1" data-original="currentColor" class="hovered-path"></path><path d="M417 112.09H7a7.001 7.001 0 0 1 0-14h410a7.001 7.001 0 0 1 0 14zM119.602 78.594c-12.211 0-22.153-9.942-22.153-22.153 0-12.214 9.942-22.152 22.153-22.152 12.214 0 22.152 9.938 22.152 22.152 0 12.211-9.938 22.153-22.152 22.153zm0-30.305c-4.493 0-8.153 3.656-8.153 8.152s3.66 8.153 8.153 8.153c4.496 0 8.152-3.656 8.152-8.153s-3.656-8.152-8.152-8.152zM51.54 78.379c-12.216 0-22.153-9.938-22.153-22.152 0-12.215 9.937-22.153 22.152-22.153 12.215 0 22.152 9.938 22.152 22.153 0 12.214-9.937 22.152-22.152 22.152zm0-30.305c-4.493 0-8.153 3.66-8.153 8.153 0 4.496 3.66 8.152 8.152 8.152 4.496 0 8.152-3.656 8.152-8.152 0-4.493-3.656-8.153-8.152-8.153zM187.664 78.805c-12.21 0-22.148-9.938-22.148-22.153 0-12.21 9.937-22.148 22.148-22.148 12.215 0 22.152 9.937 22.152 22.148 0 12.215-9.937 22.153-22.152 22.153zm0-30.305c-4.492 0-8.148 3.656-8.148 8.152s3.656 8.153 8.148 8.153c4.496 0 8.152-3.657 8.152-8.153s-3.656-8.152-8.152-8.152zm0 0" fill="currentColor" opacity="1" data-original="currentColor" class="hovered-path"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Custom Web Applications
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We build scalable and secure web applications tailored to your business processes, workflows, and operational requirements.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 64 64"><g><path d="M5.29 57h53.42A3.29 3.29 0 0 0 62 53.71V10.29A3.29 3.29 0 0 0 58.71 7H5.29A3.29 3.29 0 0 0 2 10.29v43.42A3.29 3.29 0 0 0 5.29 57zM4 10.29A1.29 1.29 0 0 1 5.29 9h53.42A1.29 1.29 0 0 1 60 10.29V15H4zM4 17h56v36.71A1.29 1.29 0 0 1 58.71 55H5.29A1.29 1.29 0 0 1 4 53.71z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M6 11h20v2H6zM54 11h2v2h-2zM47 11h2v2h-2zM32 49a13 13 0 0 0 13-13 1 1 0 0 0-1-1H33V24a1 1 0 0 0-1-1 13 13 0 0 0 0 26zm-1-24v11a1 1 0 0 0 1 1h11a11 11 0 1 1-12-12z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M36 33h12a1 1 0 0 0 1-1 13 13 0 0 0-13-13 1 1 0 0 0-1 1v12a1 1 0 0 0 1 1zm1-12a11 11 0 0 1 10 10H37z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Web Applications & Dashboards
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop interactive dashboards and web-based platforms with real-time data management and intuitive functionality.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 511 511"><g><path d="M455.5 40h-400C24.897 40 0 64.897 0 95.5v320C0 446.103 24.897 471 55.5 471h400c30.603 0 55.5-24.897 55.5-55.5v-320c0-30.603-24.897-55.5-55.5-55.5zM496 415.5c0 22.332-18.168 40.5-40.5 40.5h-400C33.168 456 15 437.832 15 415.5v-320C15 73.168 33.168 55 55.5 55h400c22.332 0 40.5 18.168 40.5 40.5v320z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M471.5 120h-432c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h432c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5zM55.5 95a7.51 7.51 0 0 0 7.5-7.5c0-1.971-.8-3.91-2.2-5.3a7.528 7.528 0 0 0-5.3-2.2 7.51 7.51 0 0 0-7.5 7.5 7.512 7.512 0 0 0 7.5 7.5zM119.5 95a7.51 7.51 0 0 0 7.5-7.5c0-1.971-.8-3.91-2.2-5.3a7.528 7.528 0 0 0-5.3-2.2 7.51 7.51 0 0 0-7.5 7.5 7.512 7.512 0 0 0 7.5 7.5zM87.5 95a7.51 7.51 0 0 0 7.5-7.5 7.51 7.51 0 0 0-7.5-7.5c-1.97 0-3.91.8-5.3 2.2a7.526 7.526 0 0 0-2.2 5.3 7.512 7.512 0 0 0 7.5 7.5z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Website Redesign & Revamp
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We transform outdated websites with modern design, improved performance, responsive layouts, and better user experiences.
              </p>
            </div>
          </article>

        
          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 512.004 512.004"><g><path d="M118.072 304.44h-19.8c-49.94 0-90.46-40.33-90.77-90.2-.31-50.18 40.59-91.35 90.77-91.35 12.52 0 24.44 2.54 35.29 7.12 2.18.92 4.67-.2 5.39-2.45a135.22 135.22 0 0 1 19.95-39.11M183.082 63.14c23.29-18.8 52.92-30.06 85.18-30.06 65.86 0 120.75 46.93 133.08 109.17.44 2.22 2.63 3.6 4.84 3.1a80.743 80.743 0 0 1 17.78-1.99c44.68 0 80.87 36.39 80.54 81.15-.33 44.41-37.14 79.93-81.55 79.93h-29.02M256.002 423.92v-60.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></path><circle cx="256.002" cy="451.424" r="27.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></circle><path d="M158.442 412.91v-21.96c0-1.16.51-2.27 1.4-3.03l28.72-24.6" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></path><circle cx="158.442" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></circle><path d="m323.442 363.32 28.72 24.6c.89.76 1.4 1.87 1.4 3.03v21.96M371.062 212.74h10.87c6.63 0 12 5.37 12 12v126.58c0 6.63-5.37 12-12 12h-251.86c-6.63 0-12-5.37-12-12V224.74c0-6.63 5.37-12 12-12h91.71c2.86 0 5.5-1.53 6.93-4l23.83-41.27c1.54-2.66 5.38-2.66 6.92 0l23.83 41.27c1.43 2.47 4.07 4 6.93 4h45.84" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></path><circle cx="353.562" cy="435.415" r="22.5" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></circle><path d="m163.586 328.907 30.698-80.602c.627-1.534 2.798-1.536 3.429-.004l30.419 80.605M173.16 308.833h45.552M348.418 247.154v81.753M265.132 247.154v81.753M311.418 270.225c0 12.742-10.781 23.071-23.523 23.071-6.319 0-22.605.102-22.605.102s-.102-16.75-.102-23.173c0-5.275-.057-23.071-.057-23.071h22.764c12.742 0 23.523 10.329 23.523 23.071z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="currentColor" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                API Integrations
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We integrate third-party APIs and custom services to improve automation, functionality, and system connectivity.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 sm:min-h-[42vh] md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg class="card-svg w-[45px] h-[45px] sm:w-[50px] sm:h-[50px] md:w-[55px] md:h-[55px] lg:w-[42px] lg:h-[42px] 2xl:w-[58px] 2xl:h-[58px]" viewBox="0 0 64 64"><g><path d="M58.7 9H5.3C4 9 3 10 3 11.3v32.2c0 1.3 1 2.3 2.3 2.3h21.8l-1 7.2h-5.4c-.6 0-1 .4-1 1s.4 1 1 1h22.6c.6 0 1-.4 1-1s-.4-1-1-1h-5.4l-1-7.2h21.8c1.3 0 2.3-1 2.3-2.3V11.3C61 10 60 9 58.7 9zM35.9 53h-7.8l1-7.2h5.8zM59 43.5c0 .2-.1.3-.3.3H5.3c-.2 0-.3-.1-.3-.3V11.3c0-.2.1-.3.3-.3h53.4c.2 0 .3.1.3.3z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M32 23.2c-2.6 0-4.8 2.2-4.8 4.8s2.2 4.8 4.8 4.8 4.8-2.2 4.8-4.8-2.2-4.8-4.8-4.8zm0 7.6c-1.5 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="m40.9 24 1.7-1.7-4.9-4.9-1.7 1.7c-.2-.1-.4-.2-.5-.2v-2.4h-6.9v2.4c-.2.1-.4.1-.5.2l-1.7-1.7-4.9 4.9 1.7 1.7c-.1.2-.2.4-.2.5h-2.4v6.9H23c.1.2.1.4.2.5l-1.7 1.7 4.9 4.9 1.7-1.7c.2.1.4.2.5.2v2.4h6.9V37c.2-.1.4-.1.5-.2l1.7 1.7 4.9-4.9-1.7-1.6c.1-.2.2-.4.2-.5h2.4v-6.9h-2.4c0-.3-.1-.4-.2-.6zm.6 5.5h-1.8l-.2.7c-.2.5-.4 1.1-.6 1.5l-.4.7 1.3 1.3-2.1 2.1-1.3-1.3-.7.4c-.5.3-1 .5-1.5.6l-.7.2v1.8h-2.9v-1.8l-.7-.2c-.5-.2-1.1-.4-1.5-.6l-.7-.4-1.3 1.3-2.1-2.1 1.3-1.3-.4-.7c-.3-.5-.5-1-.6-1.5l-.2-.7h-1.8v-2.9h1.8l.2-.7c.2-.5.4-1.1.6-1.5l.4-.7-1.3-1.3 2.1-2.1 1.3 1.3.7-.4c.5-.3 1-.5 1.5-.6l.7-.2v-1.8h2.9v1.8l.7.2c.5.2 1.1.4 1.5.6l.7.4 1.3-1.3 2.1 2.1-1.3 1.3.4.7c.3.5.5 1 .6 1.5l.2.7h1.8z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Maintenance & Support
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We provide ongoing maintenance, updates, monitoring, and technical support to ensure reliable website performance.
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
            class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[2.2rem] md:text-[2.5rem] text-center mb-4 font-light">
            From Strategy to Digital Success</h2>
          <p class="text-md text-black/70 text-center max-w-3xl mx-auto">
            We combine strategy, design, technology, and innovation to create digital solutions that enhance user experiences, strengthen brands, and support sustainable business growth.
          </p>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Research</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We begin by understanding your business goals, target audience, market landscape, and project requirements. This phase establishes a strong foundation for project success.
            </p>
          </div>
        </div>

        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Planning & Strategy</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              Our team develops a clear strategy focused on user experience, website architecture, functionality, content structure, and business objectives.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Wireframes</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We create wireframes and user flows to define navigation, content placement, and functionality before design and development begin.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Design</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We craft responsive and user-focused UI/UX designs that reflect your brand identity while delivering a seamless experience across devices.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Development</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             Using modern technologies and frameworks, we build secure, scalable, and high-performance websites with robust functionality and optimized performance.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Testing & Quality Assurance</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             We conduct comprehensive testing to ensure reliability, responsiveness, performance, security, and compatibility across devices and browsers.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Deployment</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             After final approval, we deploy your website with careful monitoring and performance checks to ensure a smooth and reliable launch.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Maintenance & Support</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We provide ongoing support, updates, monitoring, and performance improvements to keep your website secure and future-ready.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-100 py-24 text-black overflow-hidden">
      <div class="mx-auto grid max-w-6xl grid-cols-1 gap-14 px-5 md:grid-cols-[0.7fr_1.3fr] lg:gap-20">

        <div class="flex flex-col justify-between">

          <div>
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45 ">
              Case Studies
            </p>

            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:max-w-xl sm:text-[2.5rem] md:text-[2.2rem] lg:text-[2.5rem] mb-4 font-light">
              Crafted Web Experiences That Drive Results
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              Explore a selection of responsive websites and custom web solutions designed to strengthen brand presence, improve user engagement, and deliver measurable business growth.
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

              <img src="assets/images/caseStudies/loanitol.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Corporate Website
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="assets/images/caseStudies/aaa.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Corporate Website
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="assets/images/caseStudies/osoul.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Corporate Website
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