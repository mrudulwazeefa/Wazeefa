<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/ecommerce-website-development.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->

    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/pexels-bosichong-27453102.jpg" alt="Web Development"
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
            <span class="text-black">Ecommerce Website Development</span>
          </nav>
          <div class="py-4">
            <h2
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              From products to purchases, we craft seamless ecommerce experiences.
            </h2>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              The future of business begins with powerful ecommerce experiences.
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
                    Seamless Stores, Powerful Shopping Experiences
                  </h3>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    In today’s fast-growing digital marketplace, having a powerful ecommerce website is essential for
                    business success. A professionally developed online store not only strengthens your brand identity
                    but also helps you reach more customers, increase sales, and stay ahead of the competition. At
                    Wazeefa1 Technologies, we specialize in building secure, scalable, and user-friendly ecommerce
                    solutions tailored to modern business needs.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    We combine creative storefront design, seamless user experiences, and advanced ecommerce
                    technologies to create high-performing online shopping platforms that drive customer engagement and
                    business growth.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    Every ecommerce website we develop is designed with your customers in mind — focusing on smooth
                    navigation, faster checkout experiences, mobile responsiveness, and conversion-driven functionality.
                    Since online shopping has become a major part of customer behavior, having an SEO-optimized and
                    performance-focused ecommerce platform is crucial for visibility and long-term success. With
                    expertise in leading ecommerce technologies and platforms, we build online stores that not only look
                    impressive but also deliver exceptional shopping experiences and measurable business results.
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
            Ecommerce Built for Growth
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-lg sm:max-w-xl">
            We build powerful, conversion-focused ecommerce websites that enhance your brand, improve customer shopping
            experiences, and drive online sales growth.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 64 64"><g><path d="M52 62H12c-1.7 0-3-1.3-3-3V25h2v34c0 .6.4 1 1 1h40c.6 0 1-.4 1-1V25h2v34c0 1.7-1.3 3-3 3zM11 11H9V5c0-1.7 1.3-3 3-3h40c1.7 0 3 1.3 3 3v6h-2V5c0-.6-.4-1-1-1H12c-.6 0-1 .4-1 1z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M10 10h44v2H10z" fill="#FFF" opacity="1" data-original="#FFF"></path><circle cx="50" cy="7" r="1" fill="#FFF" opacity="1" data-original="#FFF"></circle><circle cx="46" cy="7" r="1" fill="#FFF" opacity="1" data-original="#FFF"></circle><circle cx="42" cy="7" r="1" fill="#FFF" opacity="1" data-original="#FFF"></circle><path d="M8 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M16 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M24 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M32 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M40 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M48 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M56 27c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5zM15.066 10.617l1.856.744-4.018 10.022-1.856-.744zM21.034 10.802l1.962.392-2 10.006-1.962-.392zM27 11h2v10h-2zM36.013 10.931l1 9.95-1.99.2-1-9.95zM42.97 10.817l1.999 10.006-1.962.392-2-10.006zM48.898 10.632l4.006 10.034-1.858.742-4.006-10.034z" fill="#FFF" opacity="1" data-original="#FFF"></path><path d="M3 22h58v-1.3l-6.1-10.2-1.8 1 5.1 8.5H5.8l5.1-8.5-1.8-1L3 20.7zM29 55h-3c-2.8 0-5-2.2-5-5v-2.9c0-1-.5-1.9-1.3-2.5L17.2 43l2.5-1.6c.8-.6 1.3-1.5 1.3-2.5V36c0-2.8 2.2-5 5-5h3v2h-3c-1.7 0-3 1.3-3 3v2.9c0 1.7-.8 3.2-2.2 4.1 1.4.9 2.2 2.5 2.2 4.1V50c0 1.7 1.3 3 3 3h3zM38 55h-3v-2h3c1.7 0 3-1.3 3-3v-2.9c0-1.7.8-3.2 2.2-4.1-1.4-.9-2.2-2.5-2.2-4.1V36c0-1.7-1.3-3-3-3h-3v-2h3c2.8 0 5 2.2 5 5v2.9c0 1 .5 1.9 1.3 2.5l2.5 1.6-2.5 1.6c-.8.6-1.3 1.5-1.3 2.5V50c0 2.8-2.2 5-5 5z" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Online Store Development
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We create secure and user-friendly ecommerce websites designed to improve online sales and customer experience.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 60 60"><g><path d="M30.1 48.8H7.5c-2.8 0-5-2.2-5-5V11.3c0-2.8 2.2-5 5-5h45c2.8 0 5 2.2 5 5V33H55V11.3c0-1.4-1.1-2.5-2.5-2.5h-45C6.1 8.8 5 9.9 5 11.3v32.5c0 1.4 1.1 2.5 2.5 2.5h22.6z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M3.8 17.5h52.5V20H3.8zM10 38.7h11.3v2.5H10zM43.8 57.5c-9 0-16.3-7.3-16.3-16.3S34.8 25 43.8 25 60 32.3 60 41.3s-7.3 16.2-16.2 16.2zm0-30c-7.6 0-13.7 6.2-13.7 13.7S36.2 55 43.8 55s13.7-6.2 13.7-13.7-6.2-13.8-13.7-13.8zM10 31.3h5v2.5h-5zM20 31.3h5v2.5h-5z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="m42.5 49.3-9.1-9.1 1.8-1.8 7.3 7.3 9.8-9.8 1.8 1.8z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Payment Gateway Integration
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We integrate reliable payment gateways for smooth, secure, and hassle-free online transactions.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 500 500"><g><path fill-rule="evenodd" d="M174.787 444.648c.12-.164.23-.329.329-.498.033-.055.066-.093.093-.148a6.81 6.81 0 0 0 .345-.695c.093-.23.17-.477.246-.723.017-.06.027-.12.044-.181.055-.197.088-.389.12-.586.011-.066.016-.137.027-.208a6.235 6.235 0 0 0 0-1.566c-.011-.066-.016-.137-.027-.203a5.8 5.8 0 0 0-.12-.586c-.017-.06-.027-.121-.044-.181a8.746 8.746 0 0 0-.246-.723 7.506 7.506 0 0 0-.345-.696c-.027-.055-.06-.093-.093-.148a5.485 5.485 0 0 0-.329-.498c-.044-.055-.088-.115-.131-.164a7.328 7.328 0 0 0-.465-.542c-.006-.011-.016-.027-.033-.033a5.464 5.464 0 0 0-.57-.498c-.049-.044-.104-.077-.164-.12a4.202 4.202 0 0 0-.515-.345.406.406 0 0 0-.093-.06l-27.146-15.679a6.442 6.442 0 0 0-8.817 2.355 6.453 6.453 0 0 0 2.366 8.822l6.287 3.631h-31.517v-55.607a6.458 6.458 0 0 0-6.457-6.457 6.45 6.45 0 0 0-6.451 6.457v62.058a6.45 6.45 0 0 0 6.451 6.457h37.973l-6.287 3.631a6.449 6.449 0 0 0-2.366 8.817 6.434 6.434 0 0 0 5.597 3.226 6.368 6.368 0 0 0 3.22-.865l27.146-15.668c.033-.028.06-.044.093-.071a5.02 5.02 0 0 0 .515-.345c.06-.044.115-.077.164-.12.197-.153.4-.318.57-.498.017-.006.017-.022.033-.033.164-.175.318-.351.465-.542.045-.058.088-.107.132-.167zm127.617-333.152c-.121.164-.23.329-.334.498-.027.055-.06.093-.087.148a6.296 6.296 0 0 0-.34.695v.011c-.099.23-.186.46-.252.712-.017.06-.028.121-.044.192a6.153 6.153 0 0 0-.12.581c-.005.071-.027.131-.027.203a6.102 6.102 0 0 0-.055.783c0 .263.022.52.055.783 0 .066.022.137.027.203.033.203.071.4.12.586.016.06.027.121.044.192.066.241.153.482.252.712.099.241.213.471.34.696.027.055.06.104.087.148.104.175.214.334.334.498.044.06.077.115.12.175.159.186.312.367.477.531.005.016.016.027.022.033.181.181.378.345.581.504.049.038.099.082.159.115.164.131.34.241.52.356.033.016.06.044.088.06l27.152 15.673a6.456 6.456 0 0 0 8.822-2.366 6.445 6.445 0 0 0-2.366-8.806l-6.303-3.642h31.528v55.613a6.455 6.455 0 0 0 12.908 0v-62.064a6.45 6.45 0 0 0-6.457-6.457h-37.979l6.303-3.631a6.455 6.455 0 0 0 2.366-8.817 6.466 6.466 0 0 0-8.822-2.36l-27.152 15.679c-.027.016-.055.044-.088.06a5.715 5.715 0 0 0-.52.345c-.06.038-.11.077-.159.12-.203.164-.4.323-.581.509a.228.228 0 0 0-.022.022c-.164.17-.318.356-.477.542-.044.056-.077.116-.12.165zM431.515 337.54v-9.671h-26.779v33.039c0 12.152-7.535 21.675-17.158 21.675h-14.567c-9.617 0-17.147-9.523-17.147-21.675v-33.039H329.09v102.425h102.425zm-217.763 92.754h102.431V327.869h-26.779v33.039c0 12.152-7.536 21.675-17.147 21.675h-14.578c-9.611 0-17.147-9.523-17.147-21.675v-33.039h-26.78zm-12.903-87.058H80.44c-6.588 0-11.955-5.356-11.955-11.95V81.185c0-6.594 5.367-11.95 11.955-11.95h42.124v2.525c0 8.751 7.125 15.876 15.876 15.876h61.237c8.751 0 15.876-7.125 15.876-15.876v-2.525h42.124c6.594 0 11.955 5.356 11.955 11.95v233.776H207.3a6.456 6.456 0 0 0-6.451 6.457zM135.472 71.76c0 1.61 1.358 2.968 2.968 2.968h61.237c1.61 0 2.968-1.358 2.968-2.968V52.921c0-1.615-1.358-2.974-2.968-2.974H138.44c-1.61 0-2.968 1.358-2.968 2.974zm117.967 289.148v-33.039H276.5v33.039c0 5.438-2.755 8.768-4.244 8.768h-14.578c-1.495 0-4.239-3.33-4.239-8.768zm115.333 0v-33.039h23.056v33.039c0 5.438-2.749 8.768-4.25 8.768h-14.567c-1.495 0-4.239-3.33-4.239-8.768zM329.09 212.547v102.414h102.425V212.547h-26.779v33.592c0 12.278-7.535 21.895-17.158 21.895h-14.567c-9.617 0-17.147-9.617-17.147-21.895v-33.592zm39.682 33.592v-33.592h23.056v33.592c0 5.487-2.788 8.987-4.25 8.987h-14.567c-1.451 0-4.239-3.5-4.239-8.987zm75.646-40.043V436.75a6.451 6.451 0 0 1-6.451 6.451H207.301a6.455 6.455 0 0 1-6.451-6.451v-80.607H80.44c-13.707 0-24.857-11.15-24.857-24.857V81.185c0-13.708 11.15-24.858 24.857-24.858h42.124v-3.406c0-8.751 7.125-15.876 15.876-15.876h61.237c8.751 0 15.876 7.125 15.876 15.876v3.406h42.124c13.708 0 24.863 11.15 24.863 24.858v233.776h33.641V206.096a6.453 6.453 0 0 1 6.451-6.457h115.333a6.45 6.45 0 0 1 6.453 6.457zM246.709 268.51a6.453 6.453 0 0 0-6.451-6.457h-71.889a6.455 6.455 0 1 0 0 12.908h71.889a6.455 6.455 0 0 0 6.451-6.451zm-78.34-55.826h71.889c3.56 0 6.451-2.88 6.451-6.451a6.456 6.456 0 0 0-6.451-6.457h-71.889a6.458 6.458 0 0 0-6.457 6.457 6.45 6.45 0 0 0 6.457 6.451zm-35.761 33.959a6.448 6.448 0 0 0-8.812 2.361l-14.594 25.268-6.78-6.785a6.459 6.459 0 0 0-9.129 0 6.463 6.463 0 0 0 0 9.129l12.733 12.722a6.427 6.427 0 0 0 4.562 1.895c.285 0 .564-.016.843-.049a6.5 6.5 0 0 0 4.753-3.176l18.789-32.552a6.45 6.45 0 0 0-2.365-8.813zm-26.582-19.573a6.452 6.452 0 0 0 4.562 1.895c.285 0 .564-.016.843-.066a6.43 6.43 0 0 0 4.753-3.165l18.789-32.546a6.45 6.45 0 0 0-2.366-8.812 6.436 6.436 0 0 0-8.812 2.355l-14.594 25.263-6.78-6.78a6.459 6.459 0 0 0-9.129 0c-2.514 2.525-2.519 6.61 0 9.129zm62.343-76.658h71.889a6.451 6.451 0 0 0 0-12.902h-71.889a6.45 6.45 0 1 0 0 12.902zm-75.076 1.659 12.733 12.727a6.452 6.452 0 0 0 4.562 1.895c.285 0 .564-.016.843-.06a6.457 6.457 0 0 0 4.753-3.165l18.789-32.552c1.78-3.089.723-7.037-2.366-8.817s-7.032-.723-8.812 2.366l-14.594 25.263-6.78-6.78a6.448 6.448 0 0 0-9.129 0c-2.518 2.518-2.513 6.604.001 9.123z" clip-rule="evenodd" fill="#FFF" opacity="1" data-original="#FFF"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Inventory Management Systems
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We develop inventory management solutions that simplify stock tracking, product management, and order handling.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 64 64"><g><path d="M45 30c-2.891 0-5.333-2.442-5.333-5.333a1 1 0 1 1 2 0C41.667 26.474 43.193 28 45 28s3.333-1.526 3.333-3.333a1 1 0 1 1 2 0C50.333 27.558 47.891 30 45 30zM27.667 30c-2.892 0-5.334-2.442-5.334-5.333a1 1 0 1 1 2 0c0 1.807 1.526 3.333 3.334 3.333C29.474 28 31 26.474 31 24.667a1 1 0 1 1 2 0C33 27.558 30.558 30 27.667 30z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M36.333 30C33.442 30 31 27.558 31 24.667a1 1 0 1 1 2 0C33 26.474 34.526 28 36.333 28c1.808 0 3.334-1.526 3.334-3.333a1 1 0 1 1 2 0c0 2.891-2.442 5.333-5.334 5.333zM19 30c-2.891 0-5.333-2.442-5.333-5.333a1 1 0 1 1 2 0C15.667 26.474 17.193 28 19 28s3.333-1.526 3.333-3.333a1 1 0 1 1 2 0C24.333 27.558 21.891 30 19 30zM53.667 30c-2.892 0-5.334-2.442-5.334-5.333a1 1 0 1 1 2 0c0 1.807 1.526 3.333 3.334 3.333C55.474 28 57 26.474 57 24.667a1 1 0 1 1 2 0C59 27.558 56.558 30 53.667 30z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M10.333 30C7.442 30 5 27.558 5 24.667a1 1 0 1 1 2 0C7 26.474 8.526 28 10.333 28c1.808 0 3.334-1.526 3.334-3.333a1 1 0 1 1 2 0c0 2.891-2.442 5.333-5.334 5.333z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M6 25.667a1 1 0 0 1-1-1V19a1 1 0 1 1 2 0v5.667a1 1 0 0 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M58 20H6a1 1 0 1 1 0-2h52a1 1 0 1 1 0 2z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M58 25.667a1 1 0 0 1-1-1V19a1 1 0 1 1 2 0v5.667a1 1 0 0 1-1 1zM6 20a.999.999 0 0 1-.707-1.707l6.828-6.829a.999.999 0 1 1 1.414 1.414l-6.828 6.829A.997.997 0 0 1 6 20z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M12.828 13.171a.999.999 0 0 1-.707-1.707A4.968 4.968 0 0 1 15.657 10a1 1 0 1 1 0 2c-.802 0-1.556.312-2.122.878a.993.993 0 0 1-.707.293z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M48.343 12H15.657a1 1 0 1 1 0-2h32.686a1 1 0 1 1 0 2zM58 20a.997.997 0 0 1-.707-.293l-6.828-6.829a.999.999 0 1 1 1.414-1.414l6.828 6.829A.999.999 0 0 1 58 20z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M51.172 13.171a.997.997 0 0 1-.707-.293A2.983 2.983 0 0 0 48.343 12a1 1 0 1 1 0-2c1.336 0 2.592.52 3.536 1.464a.999.999 0 0 1-.707 1.707zM52 54a1 1 0 1 1 0-2c.552 0 1-.449 1-1a1 1 0 1 1 2 0c0 1.654-1.346 3-3 3zM12 54c-1.654 0-3-1.346-3-3a1 1 0 1 1 2 0c0 .551.448 1 1 1a1 1 0 1 1 0 2z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M10 52a1 1 0 0 1-1-1V28.987a1 1 0 1 1 2 0V51a1 1 0 0 1-1 1zM54 52a1 1 0 0 1-1-1V32.993a1 1 0 1 1 2 0V51a1 1 0 0 1-1 1zM38 54a1 1 0 0 1-1-1V39a1 1 0 1 1 2 0v14a1 1 0 0 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M38 40a1 1 0 0 1-1-1c0-.551-.448-1-1-1a1 1 0 1 1 0-2c1.654 0 3 1.346 3 3a1 1 0 0 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M36 38h-8a1 1 0 1 1 0-2h8a1 1 0 1 1 0 2zM26 54a1 1 0 0 1-1-1V39a1 1 0 1 1 2 0v14a1 1 0 0 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M26 40a1 1 0 0 1-1-1c0-1.654 1.346-3 3-3a1 1 0 1 1 0 2c-.552 0-1 .449-1 1a1 1 0 0 1-1 1zM34 54H12a1 1 0 1 1 0-2h22a1 1 0 1 1 0 2zM52 54H38a1 1 0 1 1 0-2h14a1 1 0 1 1 0 2zM23.333 25.667a1 1 0 0 1-1-1V23a1 1 0 1 1 2 0v1.667a1 1 0 0 1-1 1zM40.667 25.667a1 1 0 0 1-1-1V23a1 1 0 1 1 2 0v1.667a1 1 0 0 1-1 1zM49.333 25.667a1 1 0 0 1-1-1V23a1 1 0 1 1 2 0v1.667a1 1 0 0 1-1 1zM32 25.667a1 1 0 0 1-1-1V23a1 1 0 1 1 2 0v1.667a1 1 0 0 1-1 1zM14.667 25.667a1 1 0 0 1-1-1V23a1 1 0 1 1 2 0v1.667a1 1 0 0 1-1 1z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Marketplace Solutions
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We build scalable multi-vendor marketplace platforms with advanced management and customer-focused features.
              </p>
            </div>
          </article>
          
          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="52" height="52" class="card-svg" viewBox="0 0 64 64"><g><path d="M40.456 55.95v-4.284a1 1 0 0 0-2 0v4.284a4.055 4.055 0 0 1-4.05 4.05H10.085a4.055 4.055 0 0 1-4.05-4.05V8.05A4.055 4.055 0 0 1 10.085 4h24.32a4.055 4.055 0 0 1 4.05 4.05v2.728a1 1 0 0 0 2 0V8.05A6.057 6.057 0 0 0 34.405 2h-24.32a6.057 6.057 0 0 0-6.05 6.05v47.9a6.057 6.057 0 0 0 6.05 6.05h24.32a6.057 6.057 0 0 0 6.05-6.05z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path><path d="M17.023 56.185a1 1 0 0 0 1 1h8.444a1 1 0 0 0 0-2h-8.444a1 1 0 0 0-1 1zM26.023 7.815a1 1 0 0 0-1-1h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 1-1zM59.885 22.815c-.005-.013-.013-.025-.018-.038-.023-.05-.042-.102-.073-.149l-5.824-8.631a1.001 1.001 0 0 0-.829-.44H26.107a1 1 0 0 0-.829.44l-5.824 8.631c-.032.047-.05.099-.073.149-.006.013-.013.024-.018.038a.988.988 0 0 0-.074.366l-.002.009v3.285c0 1.553.744 2.922 1.88 3.814v17.203h-.88a1 1 0 0 0 0 2h38.674a1 1 0 0 0 0-2h-.88V30.288c1.136-.892 1.88-2.261 1.88-3.814v-3.285l-.002-.009a.969.969 0 0 0-.074-.366zm-1.924 3.659c0 1.581-1.287 2.867-2.868 2.867s-2.867-1.286-2.867-2.867v-2.285h5.735zm-7.735 0c0 1.581-1.287 2.867-2.868 2.867s-2.867-1.286-2.867-2.867v-2.285h5.735zm-15.47 0c0 1.581-1.286 2.867-2.867 2.867s-2.868-1.286-2.868-2.867v-2.285h5.735zm-13.47 0v-2.285h5.735v2.285c0 1.581-1.286 2.867-2.867 2.867s-2.868-1.286-2.868-2.867zm14.487-10.918-.406 3.031-.483 3.601h-5.379l2.682-6.631h3.587zm1.535 3.601.483-3.601h3.664l.623 4.645.266 1.987h-5.443l.406-3.031zm9.752-3.601 2.682 6.631h-5.38l-.623-4.645-.266-1.987h3.587zm-10.305 8.633h5.735v2.285c0 1.581-1.287 2.867-2.868 2.867s-2.868-1.286-2.868-2.867v-2.285zm20.327-2.002H51.9l-2.682-6.631h3.39l4.475 6.631zm-30.444-6.631h3.39l-2.682 6.631h-5.182l4.475-6.631zM56.08 47.489H23.167V31.24c.319.066.649.101.987.101 1.583 0 2.978-.771 3.867-1.945.89 1.174 2.285 1.945 3.868 1.945s2.978-.771 3.867-1.945c.89 1.174 2.285 1.945 3.868 1.945s2.978-.771 3.868-1.945c.89 1.174 2.284 1.945 3.867 1.945s2.978-.771 3.868-1.945c.89 1.174 2.284 1.945 3.867 1.945.338 0 .668-.035.987-.101v16.249z" fill="#FFF" opacity="1" data-original="#FFF" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-normal leading-tight text-white">
                Mobile Commerce Solutions
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                We create mobile-friendly ecommerce experiences that improve accessibility, engagement, and conversions across devices.
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
                We provide ongoing ecommerce maintenance, updates, security monitoring, and technical assistance for smooth operations.
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
              We understand your products, target customers, business goals, and selling strategy to create a tailored ecommerce solution.
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
              Our team plans the store structure, customer journey, payment methods, product organization, and conversion-focused ecommerce strategy.
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
              We create user-focused layouts and shopping flow structures to improve navigation, engagement, and purchase experience.
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
              We craft visually engaging and responsive ecommerce designs that reflect your brand and enhance customer trust.
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
              We develop secure, scalable, and high-performing ecommerce platforms with payment gateways, product management, and custom integrations.
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
              We test checkout functionality, responsiveness, speed, security, and user experience to ensure flawless store performance.
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
              After optimization and final reviews, we launch the ecommerce platform with smooth deployment and performance monitoring.
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
              We provide ongoing maintenance, updates, feature enhancements, and technical support for continuous ecommerce growth.
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
              Ecommerce Platforms Built for Growth
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              A curated portfolio of ecommerce platforms built to enhance online shopping experiences, improve conversions, and support scalable business success.
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