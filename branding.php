<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/branding.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->
    <section id="webDevHeroParallax" class="relative h-[30vh] overflow-hidden">
      <img id="webDevHeroParallaxImage" src="assets/images/branding.webp" alt="Branding"
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
            <span class="text-[#dc8413]">Branding</span>
          </nav>
          <div class="py-4">
            <h1
              class="service-hero-h2 text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.1rem] max-w-4xl">
              Strategic Branding Solutions That Build Lasting Connections
            </h1>
            <p class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
              Transforming Ideas Into Powerful Brand Experiences
            </p>
          </div>

          <div class="flex flex-col lg:flex-col items-center gap-12 pt-5 sm:pt-10 pb-0">
            <div class="w-full lg:w-[100%]">

              <div
                class="grid grid-cols-1 md:grid-cols-[0.3fr_2fr] gap-6 md:gap-10 text-[15px] leading-7 text-black/75">

                <div>
                  <div class="relative w-[42px] h-[42px] flex items-center justify-center">
                    <img id="shape-1" src="assets/images/branding.png" alt="Icon 4" 
                        class="absolute inset-0 w-full h-full object-contain will-change-transform" />  
                    <img id="shape-2" src="assets/images/branding2.png" alt="Icon 5" 
                        class="absolute inset-0 w-full h-full object-contain opacity-0 will-change-transform" />                      
                    <img id="shape-3" src="assets/images/branding3.png" alt="Logo" 
                        class="absolute inset-0 w-full h-full object-contain opacity-0 will-change-transform" />
                  </div>
                </div>

                <div class="space-y-5 mb-5 sm:mb-6 md:mb-5 lg:mb-12">
                  <h2 class="text-[1.5rem] lg:text-[1.5rem] font-light tracking-[-0.03rem] leading-[1.2] text-black">
                    Crafting Memorable Brands, Creating Lasting Impact
                  </h2>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    In today's competitive marketplace, a strong brand is one of the most valuable assets a business can have. At Wazeefa, we help businesses build distinctive brand identities that communicate their values, strengthen customer trust, and create lasting market presence.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    Our branding solutions combine strategy, creativity, and market insights to create a consistent and impactful brand experience across digital and offline touchpoints.
                  </p>
                  <p class="text-sm leading-relaxed md:text-[15px]">
                    From brand positioning and visual identity design to messaging and communication, we ensure every element works together to tell your story effectively. We focus on building brands that resonate with audiences, inspire confidence, and support sustainable business growth.
                  </p>
                  <a href="contact-us.php"
                    class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-light text-black hover:text-white transition w-fit px-4 py-3">
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
            Elevating Brands Through Creativity
          </h2>
          <p class="pt-4 text-[15px] leading-6 text-white/75 mx-auto max-w-md sm:max-w-xl">
            We combine strategic thinking, compelling design, and consistent messaging to build brands that stand out, engage audiences, and drive long-term growth.
          </p>
        </div>
      </div>

      <div id="servicesHorizontalPin" class="relative mt-12 w-full flex-grow flex items-center">
        <div id="servicesHorizontalTrack" class="flex flex-nowrap w-max gap-8 px-5 sm:px-8 md:px-12 lg:px-16">

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 74 74"><g><path d="M10.339 25.96a1 1 0 0 1-.8-1.6 24.142 24.142 0 0 1 2.036-2.338 1 1 0 0 1 1.425 1.4 22.013 22.013 0 0 0-1.865 2.141 1 1 0 0 1-.796.397zM31.03 68.39A27.282 27.282 0 0 1 3.8 42.707a1 1 0 1 1 2-.114 25.285 25.285 0 0 0 36.321 21.239 25.269 25.269 0 0 0 7.061-40.286 25.248 25.248 0 0 0-30.75-4.311.994.994 0 0 1-.5.135 1 1 0 0 1-.422-1.911A27.264 27.264 0 1 1 31.03 68.39zM5.721 35.11a.968.968 0 0 1-.254-.033 1 1 0 0 1-.714-1.221 24.247 24.247 0 0 1 1.063-3.118 1 1 0 0 1 1.849.764 22.168 22.168 0 0 0-.977 2.861 1 1 0 0 1-.967.747z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M31.031 59.308a18.183 18.183 0 1 1 18.181-18.182 18.2 18.2 0 0 1-18.181 18.182zm0-34.365a16.183 16.183 0 1 0 16.181 16.183 16.2 16.2 0 0 0-16.181-16.183z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M31.031 50.223a9.1 9.1 0 1 1 9.1-9.1 9.108 9.108 0 0 1-9.1 9.1zm0-16.195a7.1 7.1 0 1 0 7.1 7.1 7.106 7.106 0 0 0-7.1-7.1z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M32.25 41.126a1 1 0 0 1-.7-1.714l27.042-26.474a1 1 0 1 1 1.4 1.428L32.95 40.84a1 1 0 0 1-.7.286z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M63.263 18.7h-.056l-7.677-.431a1 1 0 0 1-.941-.924l-.613-8.153a1 1 0 0 1 .293-.786l6.155-6.116a1 1 0 0 1 1.686.519l1.3 6.706 6.025 1.25a1 1 0 0 1 .5 1.688L63.969 18.4a1 1 0 0 1-.706.3zm-6.745-2.381 6.356.357 4.341-4.325-4.859-1.008a1 1 0 0 1-.778-.788L60.5 5.029 56 9.494zM47.014 72a1 1 0 0 1-.817-.421l-4.448-6.27a1 1 0 1 1 1.63-1.158l3.909 5.508 4.214-2.58-3.813-5.813a1 1 0 0 1 1.673-1.1l4.378 6.675a1 1 0 0 1-.314 1.4l-5.891 3.607a1 1 0 0 1-.521.152zM15.048 72a1 1 0 0 1-.522-.147l-5.891-3.607a1 1 0 0 1-.314-1.4l4.379-6.677a1 1 0 0 1 1.673 1.1l-3.813 5.81 4.214 2.58 3.908-5.508a1 1 0 0 1 1.631 1.158l-4.449 6.27a1 1 0 0 1-.816.421z" fill="currentColor" opacity="1" data-original="currentColor"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Brand Strategy
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Build a strong foundation with a clear brand vision, positioning, and strategy that helps you connect with your audience and stand out in the market.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            

            <svg width="42" height="42" class="card-svg" viewBox="0 0 512 512" ><g><path d="M256 16.02c-92.461 0-167.684 75.223-167.684 167.684 0 48.13 20.73 93.998 56.876 125.845 14.631 12.891 22.05 29.313 22.05 48.813v29.896c0 12.436 10.112 22.553 22.545 22.561v18.949c0 36.51 29.703 66.213 66.213 66.213s66.213-29.703 66.213-66.213v-18.949c12.433-.008 22.545-10.125 22.545-22.561v-29.896c0-19.5 7.419-35.923 22.05-48.813 36.146-31.847 56.876-77.715 56.876-125.845C423.684 91.242 348.461 16.02 256 16.02zm0 463.96c-27.688 0-50.213-22.525-50.213-50.213v-18.949h18v18.949c0 17.763 14.45 32.213 32.213 32.213s32.213-14.45 32.213-32.213v-18.949h18v18.949c0 27.688-22.525 50.213-50.213 50.213zm-16.213-69.162h32.426v18.949c0 8.788-7.425 16.213-16.213 16.213s-16.213-7.425-16.213-16.213zm82.411-16H189.802a6.568 6.568 0 0 1-6.56-6.561v-21.896h145.516v21.896a6.568 6.568 0 0 1-6.56 6.561zm34.033-97.276c-15.942 14.046-25.201 32.185-27.094 52.819H264V224.673l38.788-41.417a8 8 0 0 0-11.678-10.938L256 209.809l-35.11-37.49a8 8 0 0 0-11.678 10.938L248 224.673v125.688h-65.138c-1.893-20.635-11.151-38.773-27.094-52.819-32.698-28.81-51.452-70.302-51.452-113.839 0-83.639 68.045-151.684 151.684-151.684s151.684 68.045 151.684 151.684c0 43.537-18.754 85.029-51.453 113.839zM512 183.807a8 8 0 0 1-8 8h-48.316a8 8 0 0 1 0-16H504a8 8 0 0 1 8 8zm-34.297 128a8 8 0 0 1-10.929 2.928l-41.868-24.172a8 8 0 0 1-2.928-10.928 7.998 7.998 0 0 1 10.928-2.928l41.868 24.172a8 8 0 0 1 2.929 10.928zM422.068 87.928A8 8 0 0 1 424.996 77l41.778-24.121a7.999 7.999 0 0 1 10.928 2.928 8 8 0 0 1-2.928 10.928l-41.778 24.121a7.997 7.997 0 0 1-10.928-2.928zM34.298 55.807a7.998 7.998 0 0 1 10.928-2.928L87.004 77a8 8 0 0 1-4.008 14.929 7.966 7.966 0 0 1-3.992-1.073L37.226 66.734a7.997 7.997 0 0 1-2.928-10.927zm22.018 136H8a8 8 0 0 1 0-16h48.316a8 8 0 0 1 0 16zm33.705 87.828a8 8 0 0 1-2.928 10.928l-41.868 24.172a8 8 0 0 1-10.929-2.928 8 8 0 0 1 2.929-10.928l41.868-24.172a7.998 7.998 0 0 1 10.928 2.928z" fill="currentColor" opacity="1" data-original="currentColor"></path></g></svg>
            
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Identity Design
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Create a unique and consistent brand identity that reflects your values, personality, and business goals across every customer touchpoint.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 68 68" ><g><path d="M60.855 1.75H48.648a1 1 0 1 0 0 2h12.207a2.91 2.91 0 0 1 2.907 2.906v12.207a1 1 0 1 0 2 0V6.656a4.912 4.912 0 0 0-4.907-4.906zM64.762 48.137a1 1 0 0 0-1 1v12.207a2.91 2.91 0 0 1-2.907 2.906H48.648a1 1 0 1 0 0 2h12.207a4.912 4.912 0 0 0 4.907-4.906V49.137a1 1 0 0 0-1-1zM3.238 48.137a1 1 0 0 0-1 1v12.207a4.912 4.912 0 0 0 4.907 4.906h12.207a1 1 0 1 0 0-2H7.145a2.91 2.91 0 0 1-2.907-2.906V49.137a1 1 0 0 0-1-1zM19.352 1.75H7.145a4.912 4.912 0 0 0-4.907 4.906v12.207a1 1 0 1 0 2 0V6.656A2.91 2.91 0 0 1 7.145 3.75h12.207a1 1 0 1 0 0-2zM6.48 36.767c4.054 4.053 14.85 13.48 27.515 13.483H34c12.662 0 23.463-9.429 27.519-13.482a3.925 3.925 0 0 0-.002-5.568C57.46 27.156 46.657 17.75 34 17.75c-12.668 0-23.464 9.406-27.518 13.45a3.927 3.927 0 0 0-.003 5.567zm13.12-2.762c0-7.855 6.46-14.245 14.4-14.245s14.4 6.39 14.4 14.245S41.94 48.25 34 48.25h-.006c-7.937-.003-14.393-6.393-14.393-14.245zm40.505-1.389a1.927 1.927 0 0 1 0 2.737c-2.562 2.56-7.939 7.352-14.72 10.32 3.085-2.956 5.014-7.09 5.014-11.668 0-4.594-1.943-8.74-5.048-11.697 6.796 2.958 12.186 7.75 14.753 10.308h.001zm-52.21 0c2.566-2.56 7.957-7.354 14.758-10.313-3.107 2.958-5.052 7.106-5.052 11.702 0 4.58 1.93 8.714 5.018 11.67-6.786-2.967-12.163-7.76-14.725-10.322-.76-.761-.758-1.98.001-2.737z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M42.813 34.005c0-4.86-3.954-8.813-8.813-8.813s-8.813 3.954-8.813 8.813 3.954 8.812 8.813 8.812 8.813-3.953 8.813-8.812zm-15.626 0c0-3.757 3.057-6.813 6.813-6.813s6.813 3.056 6.813 6.813-3.057 6.812-6.813 6.812-6.813-3.055-6.813-6.812z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M35.977 32.752a3.348 3.348 0 0 0-3.338-3.352 3.356 3.356 0 0 0-3.352 3.352 3.349 3.349 0 0 0 3.352 3.337 3.341 3.341 0 0 0 3.338-3.337zm-3.338 1.337c-.745 0-1.352-.6-1.352-1.337 0-.745.607-1.352 1.352-1.352.737 0 1.338.607 1.338 1.352 0 .737-.6 1.337-1.338 1.337zM26.238 16.135a1 1 0 0 0 .39-1.36l-2.75-4.966a1 1 0 0 0-1.75.968l2.75 4.967a1 1 0 0 0 1.36.39zM43.121 15.744l2.751-4.967a1 1 0 1 0-1.75-.968l-2.75 4.966a1 1 0 1 0 1.75.97zM35 15.26V8.892a1 1 0 1 0-2 0v6.368a1 1 0 1 0 2 0zM41.762 51.865a1 1 0 0 0-.39 1.36l2.75 4.966a1 1 0 0 0 1.75-.968l-2.75-4.967a1 1 0 0 0-1.36-.39zM24.879 52.256l-2.751 4.967a1 1 0 1 0 1.75.968l2.75-4.966a1 1 0 1 0-1.75-.97zM33 52.74v6.368a1 1 0 1 0 2 0V52.74a1 1 0 1 0-2 0z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Logo & Visual Branding
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Design distinctive logos and visual assets that strengthen recognition, build trust, and create a professional brand image.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 128 128" ><g><path d="m24.037 58.189.916 2.695a2 2 0 0 1-1.08 2.467l-9.402 4.658a2.001 2.001 0 0 1-2.639-.846l-7.225-13.41a1.994 1.994 0 0 1 .436-2.442l24.914-23.615-5.143-6.411a1.994 1.994 0 0 1 .309-2.802 1.57 1.57 0 0 1 .328-.215v-.007c3.143-1.634 6.248-1.564 9.214-.536 2.505.864 4.865 2.411 7.049 4.146 3.667-.183 7.074.277 10.224 1.274 9.037 2.859 15.854 10.053 20.561 18.756 4.613 8.532 7.207 18.554 7.863 27.275.436 5.818.012 11.113-1.236 15.07a1.999 1.999 0 0 1-1.863 1.4c-1.748.146-3.514.973-4.934 2.229-1.182 1.041-2.109 2.359-2.582 3.818a6.728 6.728 0 0 0 .063 4.486c.639 1.729 2.027 3.502 4.432 5.176a2.003 2.003 0 0 1 .504 2.783 2.007 2.007 0 0 1-1.641.857H22.763c-.94 0-1.735-.65-1.944-1.533-.453-1.539-4.594-16.982 8.779-30.355 9.819-9.819 10.734-12.59 9.15-16.313-2.777 2.605-6.702 2.051-10.306 1.546-1.823-.259-3.521-.499-4.405-.151zm-3.426 2.33-.752-2.209a1.988 1.988 0 0 1 .139-1.591c1.818-3.344 5.238-2.865 8.993-2.334 3.212.453 6.803.965 8.166-2.298v.007a2 2 0 0 1 .921-1.004 1.993 1.993 0 0 1 2.689.84l.334.643c.019.032.037.07.057.102 3.768 7.156 5.01 9.523-8.734 23.262-10.021 10.027-8.892 21.197-8.104 25.059h43.69c-.889-1.123-1.527-2.277-1.949-3.439-.902-2.453-.84-4.891-.113-7.098.707-2.146 2.051-4.072 3.736-5.561 1.717-1.514 3.799-2.6 5.963-3.041.84-3.346 1.086-7.643.727-12.383-.613-8.229-3.055-17.664-7.391-25.685-4.246-7.857-10.313-14.319-18.251-16.831-2.903-.915-6.077-1.313-9.517-1.054v-.006a1.983 1.983 0 0 1-1.413-.448c-2.045-1.679-4.235-3.199-6.437-3.963-1.193-.41-2.405-.594-3.629-.448l4.474 5.585.007.007c.644.802.58 1.975-.178 2.694L8.842 53.205l5.591 10.367z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M16.004 100.996h63.082a4.08 4.08 0 0 1 2.896 1.205 4.095 4.095 0 0 1 1.199 2.896v6.816c0 1.129-.461 2.15-1.199 2.896a4.1 4.1 0 0 1-2.896 1.197H16.004a4.092 4.092 0 0 1-2.891-1.197 4.09 4.09 0 0 1-1.205-2.896v-6.816c0-1.129.461-2.158 1.205-2.896h.007a4.058 4.058 0 0 1 2.884-1.205zm63.082 4H16.004a.151.151 0 0 0-.07.025l.007.008a.096.096 0 0 0-.031.068v6.816a.08.08 0 0 0 .031.063c.019.02.038.031.063.031h63.082c.025 0 .051-.012.063-.031.02-.012.031-.037.031-.063v-6.816a.094.094 0 0 0-.031-.068c-.012-.02-.037-.031-.063-.031z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M5.029 124.023H90.06a.912.912 0 0 0 .65-.266v-.006a.92.92 0 0 0 .271-.656v-6.16a.926.926 0 0 0-.266-.656l-.006-.006a.914.914 0 0 0-.65-.266H5.029a.923.923 0 0 0-.65.266l-.006.006a.926.926 0 0 0-.266.656v6.16c0 .258.107.486.271.656v.006a.922.922 0 0 0 .651.266zm85.032 4H5.029a4.905 4.905 0 0 1-3.47-1.451l-.006.006a4.92 4.92 0 0 1-1.445-3.482v-6.16c0-1.35.555-2.58 1.445-3.477h.006v-.006a4.92 4.92 0 0 1 3.47-1.445H90.06c1.344 0 2.574.555 3.471 1.445l.006.006a4.926 4.926 0 0 1 1.445 3.477v6.16a4.919 4.919 0 0 1-1.445 3.482v-.006a4.913 4.913 0 0 1-3.476 1.451zM92.086 26.415a2.002 2.002 0 0 1 4.002 0v27.061h17.941c1.104 0 2 .89 2 1.994v24.1a2 2 0 0 1-4.002 0v-22.1H94.086a2 2 0 0 1-2-2.001z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M87.908 36.373a1.993 1.993 0 0 1-3.104-2.499l7.723-9.561a2.004 2.004 0 0 1 3.112 0v-.006l7.73 9.554a2 2 0 1 1-3.111 2.517l-6.178-7.636zM94.086.023c2.135 0 4.064.864 5.467 2.266a7.71 7.71 0 0 1 2.258 5.465 7.723 7.723 0 0 1-2.258 5.466 7.725 7.725 0 0 1-5.467 2.259 7.711 7.711 0 0 1-5.465-2.259 7.708 7.708 0 0 1-2.266-5.466c0-2.133.865-4.07 2.266-5.465A7.692 7.692 0 0 1 94.086.023zm2.639 5.093a3.718 3.718 0 0 0-2.637-1.092c-1.029 0-1.963.416-2.639 1.092s-1.092 1.609-1.092 2.638.416 1.963 1.092 2.638a3.748 3.748 0 0 0 2.639 1.092 3.749 3.749 0 0 0 2.637-1.092 3.744 3.744 0 0 0 1.092-2.638 3.735 3.735 0 0 0-1.092-2.638zM114.029 89.541c2.133 0 4.064.865 5.465 2.26a7.721 7.721 0 0 1 2.26 5.465c0 2.141-.865 4.07-2.26 5.465a7.697 7.697 0 0 1-5.465 2.266 7.678 7.678 0 0 1-5.467-2.266 7.68 7.68 0 0 1-2.264-5.465c0-2.133.863-4.064 2.264-5.465a7.708 7.708 0 0 1 5.467-2.26zm2.631 5.094a3.691 3.691 0 0 0-2.631-1.092 3.71 3.71 0 0 0-2.639 1.092 3.688 3.688 0 0 0-1.092 2.631 3.71 3.71 0 0 0 1.092 2.639 3.719 3.719 0 0 0 2.639 1.092 3.7 3.7 0 0 0 2.631-1.092 3.71 3.71 0 0 0 1.092-2.639c0-1.03-.416-1.963-1.092-2.631zM124.693 25.411a1.998 1.998 0 1 1 2.828 2.827l-10.414 10.413a1.995 1.995 0 0 1-2.826 0 1.995 1.995 0 0 1 0-2.827z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M127.521 35.824a1.998 1.998 0 1 1-2.828 2.827l-10.412-10.413a1.995 1.995 0 0 1 0-2.827 1.995 1.995 0 0 1 2.826 0zM69.588 7.161a1.998 1.998 0 1 1 2.828 2.827L62.002 20.4a1.995 1.995 0 0 1-2.826 0 1.995 1.995 0 0 1 0-2.827z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path><path d="M72.416 17.573c.783.782.783 2.045 0 2.827s-2.045.782-2.828 0L59.176 9.988a1.997 1.997 0 0 1 0-2.827 1.997 1.997 0 0 1 2.827 0zM47.135 33.861a2 2 0 0 1-1.035-2.625 2 2 0 0 1 2.625-1.035c5.818 2.531 12.111 8.255 16.49 17.146 3.477 7.068 5.768 16.162 5.668 27.27a1.99 1.99 0 0 1-2.008 1.975 1.984 1.984 0 0 1-1.975-2.008c.094-10.418-2.039-18.906-5.264-25.47-3.931-7.976-9.447-13.056-14.501-15.253z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Communication Strategy
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Develop clear messaging that communicates your brand story, strengthens customer relationships, and delivers a consistent voice.
              </p>
            </div>
          </article>

        
          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 512 512" ><g><path d="M320.129 368.742H39.564C26.02 368.742 15 357.722 15 344.177V111.193h32.581a7.5 7.5 0 0 0 0-15H15V71.629c0-13.545 11.02-24.564 24.564-24.564h336.677c13.545 0 24.565 11.02 24.565 24.564v24.564H79.645a7.5 7.5 0 0 0 0 15h321.162v136.791a7.5 7.5 0 0 0 15 0V71.629c0-21.816-17.749-39.564-39.565-39.564H39.564C17.749 32.064 0 49.813 0 71.629v272.548c0 21.816 17.749 39.564 39.564 39.564h280.564a7.5 7.5 0 0 0 .001-14.999z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M39.564 64.129a7.5 7.5 0 0 0 0 15h8.016a7.5 7.5 0 0 0 0-15zM79.645 79.129h8.016a7.5 7.5 0 0 0 0-15h-8.016a7.5 7.5 0 0 0 0 15zM376.242 79.129a7.5 7.5 0 0 0 0-15H119.726a7.5 7.5 0 0 0 0 15zM304.097 192.387h-8.532v-29.475c0-4.974-2.409-9.679-6.443-12.587a15.552 15.552 0 0 0-13.979-2.133l-108.537 36.179h-46.88c-12.976 0-23.532 10.557-23.532 23.532v24.048c0 12.976 10.557 23.532 23.532 23.532h8.533v56.629c0 8.556 6.96 15.516 15.516 15.516h16.032c8.556 0 15.516-6.96 15.516-15.516V258.39l99.819 33.272a15.548 15.548 0 0 0 13.979-2.132 15.555 15.555 0 0 0 6.444-12.587v-29.475h8.532c12.976 0 23.532-10.557 23.532-23.532v-8.016c0-12.976-10.557-23.533-23.532-23.533zm-192.904 39.565v-24.048c0-4.705 3.828-8.532 8.532-8.532h40.597v41.113h-40.597c-4.704-.001-8.532-3.829-8.532-8.533zm48.614 80.677h-16.032a.516.516 0 0 1-.516-.516v-56.629h17.064v56.629a.517.517 0 0 1-.516.516zm120.757-35.686c0 .086 0 .264-.214.418a.463.463 0 0 1-.465.071l-104.562-34.854v-45.301l104.562-34.854c.082-.027.251-.083.465.071.214.155.214.333.214.419zm32.065-53.007c0 4.705-3.828 8.532-8.532 8.532h-8.532v-25.081h8.532c4.705 0 8.532 3.828 8.532 8.532zM505.107 326.163l-46.721-46.722a23.378 23.378 0 0 0-16.64-6.893h-81.537c-8.556 0-15.516 6.96-15.516 15.516v176.355c0 8.556 6.96 15.516 15.516 15.516h136.274c8.556 0 15.516-6.96 15.516-15.516V342.802a23.367 23.367 0 0 0-6.892-16.639zm-18.714 2.498h-29.99a.516.516 0 0 1-.516-.516v-29.99zm10.091 136.275H360.209a.516.516 0 0 1-.516-.516V288.064c0-.285.231-.516.516-.516h80.678v40.597c0 8.556 6.96 15.516 15.516 15.516H497v120.758a.517.517 0 0 1-.516.517z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M392.274 343.661h24.048a7.5 7.5 0 0 0 0-15h-24.048a7.5 7.5 0 0 0 0 15zM464.419 360.726h-72.145a7.5 7.5 0 0 0 0 15h72.145a7.5 7.5 0 0 0 0-15zM464.419 392.791h-72.145a7.5 7.5 0 0 0 0 15h72.145a7.5 7.5 0 0 0 0-15zM464.419 424.855h-72.145a7.5 7.5 0 0 0 0 15h72.145a7.5 7.5 0 0 0 0-15z" fill="currentColor" opacity="1" data-original="currentColor"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Digital Branding Solutions
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Enhance your online presence with cohesive digital branding that creates engaging experiences across websites, social media, and digital platforms.
              </p>
            </div>
          </article>

          <article
            class="services-horizontal-card relative isolate flex w-[85vw] sm:w-[50vw] lg:w-[35vw] flex-shrink-0 flex-col justify-between gap-4 overflow-hidden p-8 md:min-h-[45vh] lg:p-12 bg-white/5 border border-white/5">
            <div class="bottom-line absolute bottom-0 left-0 h-[3px] bg-white"></div>
            <svg width="42" height="42" class="card-svg" viewBox="0 0 128 128" ><g><path d="m126.89 93.13-13.12-6.56-8.35-21.72a2 2 0 0 0-1.12-1.14L52.49 43a2 2 0 0 0-2.15.44l-6.91 6.91a2 2 0 0 0-.43 2.14l20.71 51.81a2 2 0 0 0 1.14 1.12l21.72 8.35 6.56 13.12A2 2 0 0 0 94.6 128a1.73 1.73 0 0 0 .32 0 2 2 0 0 0 1.41-.59l31.08-31.08a2 2 0 0 0 .59-1.73 2 2 0 0 0-1.11-1.47zm-79.7-40.9 1.11-1.1 25.79 25.79a11.77 11.77 0 1 0 2.83-2.83L51.13 48.3l1.1-1.11L102 67.1l7.85 20.42-22.33 22.33L67.1 102zm36.51 23.7a7.77 7.77 0 1 1-5.5 2.27 7.78 7.78 0 0 1 5.5-2.27zm11.77 46.69-5-10 22.13-22.13 10 5z" fill="currentColor" opacity="1" data-original="currentColor"></path><path d="M38.25 107a2.06 2.06 0 0 0-2.83 0l-2.54 2.54a54.91 54.91 0 0 1-1-63.74 10.26 10.26 0 0 0 13.96-13.89 54.91 54.91 0 0 1 63.74 1L107 35.42a2 2 0 0 0-.58 1.41 2 2 0 0 0 .58 1.42l8.82 8.75a2 2 0 0 0 2.82 0l8.77-8.77a2 2 0 0 0 0-2.83l-8.77-8.77a2 2 0 0 0-2.82 0L112.43 30a58.91 58.91 0 0 0-59.1-6.87l11.53-11.5A6.13 6.13 0 1 0 62 8.8L42.54 28.29a10.27 10.27 0 0 0-14.25 14.25L8.8 62a6.14 6.14 0 1 0 2.83 2.83l11.53-11.5a58.91 58.91 0 0 0 6.84 59.1l-3.38 3.39a2 2 0 0 0 0 2.82l8.77 8.77a2 2 0 0 0 1.41.59 2 2 0 0 0 1.42-.59l8.78-8.77a2 2 0 0 0 0-2.82zm79-76.15 5.94 5.94-5.94 5.94-5.94-5.94zM66 4.63a2.13 2.13 0 1 1 0 3 2.12 2.12 0 0 1 0-3zM32.4 32.4a6.25 6.25 0 0 1 8.86 0 6.27 6.27 0 1 1-8.86 0zM7.64 69a2.13 2.13 0 0 1-3-3 2.14 2.14 0 0 1 3 0 2.12 2.12 0 0 1 0 3zm29.19 54.13-5.94-5.94 5.94-5.94 5.94 5.94z" fill="currentColor" opacity="1" data-original="currentColor"></path></g></svg>
            <div>
              <h3 class="text-xl md:text-[1.4rem] tracking-[-0.02em] font-light leading-tight text-white">
                Graphic Design
              </h3>
              <p class="mt-3 text-[15px] leading-relaxed text-white/70">
                Transform ideas into impactful visual assets through creative design solutions that strengthen your brand and support marketing efforts.
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
            class="text-[2.2rem] leading-[1.05] font-light tracking-[-0.0em] text-black sm:text-[2.2rem] md:text-[2.5rem] text-center mb-4">
            Creating Brands That Connect</h2>
          <p class="text-md text-black/70 text-center max-w-3xl mx-auto">
            Through collaboration, creativity, and strategy, we build authentic brand experiences that resonate with customers and strengthen market presence.
          </p>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Brand Discovery</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We begin by understanding your business, goals, target audience, and industry landscape to uncover opportunities for meaningful brand development.
            </p>
          </div>
        </div>

        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Research & Analysis</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              Our team analyzes competitors, market trends, and customer behavior to identify opportunities for differentiation and strategic positioning.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Brand Strategy</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We define your positioning, mission, vision, values, and messaging to create a strong strategic foundation for your brand.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Identity Development</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We develop the visual and verbal elements that shape your brand personality and ensure consistency across customer interactions.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Logo & Visual Design</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             We design logos, color palettes, typography, and visual assets that enhance recognition, credibility, and brand consistency.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Brand Guidelines</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             We create detailed brand guidelines covering logos, colors, typography, imagery, and messaging to maintain consistency across channels.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Implementation & Rollout</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
             We apply the brand identity across digital platforms, marketing materials, and business assets to create a unified brand experience.
            </p>
          </div>
        </div>
        <div class="accordion-item border-b border-black/10">
          <button class="accordion-header flex w-full items-center justify-between py-6 text-left">
            <span class="text-lg font-normal">Brand Growth & Support</span>
            <div class="icon-wrapper relative h-6 w-6">
              <span class="absolute left-1/2 top-1/2 h-0.5 w-4 -translate-x-1/2 -translate-y-1/2 bg-black"></span>
              <span
                class="vertical-line absolute left-1/2 top-1/2 h-4 w-0.5 -translate-x-1/2 -translate-y-1/2 bg-black transition-transform duration-300"></span>
            </div>
          </button>
          <div class="accordion-content h-0 overflow-hidden">
            <p class="pb-6 text-black/70 leading-relaxed">
              We provide ongoing creative support and strategic guidance to help your brand evolve, strengthen customer relationships, and achieve sustainable growth.
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
              class="text-[2.2rem] leading-[1.05] font-light tracking-[-0.0em] text-black sm:max-w-xl sm:text-[2.5rem] md:text-[2.2rem] lg:text-[2.5rem] mb-4">
              Creative Branding That Drives Growth
            </h2>

            <p class="mt-6 max-w-1xl sm:max-w-xl lg:max-w-sm text-[15px] leading-6 text-neutral-500">
              Explore branding projects designed to strengthen market presence, build trust, increase visibility, and help businesses stand out in competitive industries.
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

              <img src="assets/images/case-studies/beefrus-ads.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Poster Design
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="assets/images/case-studies/beefrus-logo.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Logo Design
              </p>

            </article>

            <article class="relative min-w-[85%] md:min-w-[80%] flex-none overflow-hidden ">

              <img src="assets/images/case-studies/tekhive.avif"
                alt="" class="h-[320px] w-full object-cover" />

              <p
                class="absolute bottom-5 left-5 z-10 border border-white/20 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl">
                Booklet Design
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