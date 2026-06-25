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
      class="relative z-0 px-5 pt-24 pb-4 text-black sm:px-8 md:px-12 md:pt-32 md:pb-6 lg:px-16 lg:pt-36 lg:pb-[4rem] bg-gradient-to-b from-[#FFF] to-white ">
      <div class="mx-auto max-w-6xl">
        <div id="aboutIntroTextBlock"
          class="grid max-w-6xl gap-10 md:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] md:items-center md:gap-10">
            <div class="max-w-[40rem] flex flex-col justify-between h-full">
              <div>
              <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
                Careers
              </p>
              <h1
                class="service-hero-h2 text-[2.2rem] leading-[0.92] tracking-[-0.0em] sm:text-[3.3rem] md:text-[48px] md:leading-[1.02] lg:text-[60px] text-black">
                Build Your Future With <span class="text-[#dc8413]">Wazeefa</span>
              </h1>
              <p class="mt-4 text-black/65 md:text-md max-w-[39rem]">Become part of a high-performing, collaborative team where creativity, innovation, and growth come together to build impactful digital solutions.</p>
              </div>
              <div class="pt-6 flex flex-col md:flex-row md:items-center gap-6">
                <a href="#careerOpenRolesSection"
                  class="job-view-link inline-flex items-center gap-2 border border-black/20 bg-transparent hover:bg-black px-4 py-3 text-sm font-normal text-black hover:text-white transition w-fit">
                  <span>View Current Openings</span>
                  <svg viewBox="0 0 24.02 15.27" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                    <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                  </svg>
                </a>
                <p class="max-w-xl text-base leading-5 text-black md:text-md py-4">
                  <span class="text-xs">Say Hello at </span>
                  <a href="mailto:cvs@wazeefa.in"
                    class="block text-[1.1rem] text-black hover:underline">
                    cvs@wazeefa.in
                  </a>
                </p>
            </div>
          </div>
          <div class="w-full md:justify-self-end relative">
            <div id="careerCarousel" class="relative overflow-hidden ">
              <div id="careerCarouselTrack" class="relative h-[300px] sm:h-[340px] md:h-[400px] ">
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img
                    src="assets/images/culture/01.jpg"
                    alt="Team discussing ideas in a modern office" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img
                    src="assets/images/culture/02.jpg"
                    alt="Software engineers collaborating over laptops" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/03.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/04.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/05.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/06.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/07.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/08.jpg"
                    alt="Marketing team reviewing campaign strategy" class="h-full w-full object-cover" />
                </article>
                <article class="career-image-slide absolute inset-0 overflow-hidden">
                  <img src="assets/images/culture/09.jpg"
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
                    Since 2002, we provide the best services 
                  </textPath>
                </text>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="careerOpenRolesSection"
      class="relative z-20 bg-gradient-to-b from-[#F4F4F4] via-[#F2F2F2] to-[#FAFAFA] px-5 py-16 lg:py-16 text-black sm:px-8 md:px-12 md:pb-10 lg:px-16">
      <div class="mx-auto max-w-6xl border-none border-black/12">

       <div class="flex flex-col lg:flex-col lg:items-start lg:justify-between gap-4 pb-8">
        <h2 class="text-[2rem] font-normal leading-[1.05] tracking-[-0.0em] text-black sm:text-[2.2rem] md:text-[2.2rem] lg:max-w-[38rem]">
          Explore Career Opportunities
        </h2>
        <p class="text-[15px] leading-6 text-black/75 lg:max-w-2xl">
          Discover exciting opportunities to grow your career, collaborate with talented professionals, and contribute to meaningful digital projects.
        </p>
      </div>

        <a href="career-details.php?job=ui-ux-designer" class="group block border-b border-black/12 py-8 transition">
          <article class="grid gap-4 md:gap-8 md:grid-cols-[minmax(0,1fr)_auto] md:items-center md:gap-10">
            <div>
              <h3
                class="mt-3 text-[24px] font-normal leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                UI/UX Designer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-normal text-black hover:text-white transition w-fit px-4 py-3">
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
                class="mt-3 text-[24px] font-normal leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                MERN Stack Developer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-normal text-black hover:text-white transition w-fit px-4 py-3">
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
                class="mt-3 text-[24px] font-normal leading-[1.02] tracking-[-0.01em] text-black sm:text-[1.6rem] transition-colors">
                Mobile App Developer
              </h3>
              <p class="mt-4 text-[sm] text-black/60">
                Full Time <span class="mx-3 text-black/60">•</span> 1 - 3 Years Experience <span
                  class="mx-3 text-black/60">•</span> Immediate join
              </p>
            </div>
            <div
              class="job-view-link inline-flex items-center md:justify-center gap-2 border border-black/20 bg-transparent hover:bg-black md:px-4 md:py-3 text-sm font-normal text-black hover:text-white transition w-fit px-4 py-3">
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

    <section id="careerBenefitsSection" class="z-10 px-5 py-16 text-black
         sm:px-8 md:px-12 md:py-24 lg:px-16 lg:pb-15 lg:pt-13 transition-colors duration-700 ease-out" bg-gradient-to-b from-[#04190b] to-[#000e05]>
      <div class="mx-auto max-w-6xl">
        <div class="mx-auto max-w-3xl text-center">
          <p class="mb-4 text-xs  uppercase tracking-[0.2em] text-white/45">
            Why Work With Us
          </p>
          <h2 class="text-[2rem] leading-[1.05] tracking-[-0.0em] text-white sm:text-[2.2rem] md:text-[2.5rem] font-light max-w-lg sm:max-w-lg md:max-w-xl lg:max-w-[38rem] mx-auto">
            Build, Learn, and Grow With Us
          </h2>
          <p class="pt-4 text-[15px] font-light leading-6 text-white/75 mx-auto max-w-md sm:max-w-xl md:max-w-3xl">
            At Wazeefa, we believe great work happens when talented people collaborate in an environment that encourages creativity, innovation, and continuous learning.
          </p>
        </div>

        <div class="mt-12 grid gap-0 sm:grid-cols-2 xl:grid-cols-4">
          <article class="group flex h-full flex-col border-none border-white/10 bg-white/0 p-6 transition hover:border-white/20">
            <div class="inline-flex h-2 w-2 items-center justify-center bg-white/10 text-white">
            </div>
             <p class="text-lg font-light text-white">01</p>
            <h3 class="mt-6 text-xl md:text-[1.3rem] tracking-[-0.02em] font-light leading-tight text-white">Growth Opportunities</h3>
            <p class="mt-3 text-sm leading-6 text-[#cbd5e1]">
              Work on challenging projects that expand your skills, strengthen your expertise, and support long-term professional growth.
            </p>
          </article>

          <article class="group flex h-full flex-col border border-white/10 bg-white/0 p-6 transition hover:border-white/20">
            <div class="inline-flex h-2 w-2 items-center justify-center bg-white/10 text-white">
            </div>
            <p class="text-lg font-light text-white">02</p>
            <h3 class="mt-6 text-xl md:text-[1.3rem] tracking-[-0.02em] font-light leading-tight text-white">Collaborative Culture</h3>
            <p class="mt-3 text-sm leading-6 text-[#cbd5e1]">
              Be part of a supportive environment where ideas are valued, teamwork is encouraged, and achievements are celebrated together.
            </p>
          </article>

          <article class="group flex h-full flex-col border border-white/10 bg-white/0 p-6 transition hover:border-white/20">
            <div class="inline-flex h-2 w-2 items-center justify-center bg-white/10 text-white">
            </div>
              <p class="text-lg font-light text-white">03</p>
            <h3 class="mt-6 text-xl md:text-[1.3rem] tracking-[-0.02em] font-light leading-tight text-white">Learning & Development</h3>
            <p class="mt-3 text-sm leading-6 text-[#cbd5e1]">
              Gain exposure to modern technologies, emerging trends, and industry best practices while continuously enhancing your skills.
            </p>
          </article>

          <article class="group flex h-full flex-col border-none border-white/10 bg-white/0 p-6 transition hover:border-white/20">
            <div class="inline-flex h-2 w-2 items-center justify-center bg-white/10 text-white">
            </div>
              <p class="text-lg font-light text-white">04</p>
            <h3 class="mt-6 text-xl md:text-[1.3rem] tracking-[-0.02em] font-light leading-tight text-white">Meaningful Impact</h3>
            <p class="mt-3 text-sm leading-6 text-[#cbd5e1]">
              Contribute to projects that help businesses grow and create digital solutions used by real customers and organizations.
            </p>
          </article>
        </div>
      </div>
    </section>

    <section id="careerCultureSection" class="bg-[#f8fafc] z-10 px-5 py-16 text-black
         sm:px-8 md:px-12 md:py-24 lg:px-16 lg:pb-15 lg:pt-13 transition-colors duration-700 ease-out">
      <div class="mx-auto max-w-6xl">
        <div class="mx-auto max-w-3xl text-center">
          <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
            Life at Wazeefa
          </p>
          <h2 class="text-[32px] font-light leading-[1.02] tracking-[-0.0em] md:text-[2.5rem] text-black text-center">
            A workplace built on innovation and collaboration
          </h2>
         </div>
         <div class="mx-auto max-w-md sm:max-w-xl md:max-w-4xl text-center">
          <p class="pt-4 text-[15px] font-light leading-6 text-black/75 ">
            We foster a culture where curiosity, ownership, and teamwork drive success. Whether you're designing experiences, developing applications, or supporting digital growth initiatives, you'll work alongside passionate professionals committed to excellence.
          </p>
          <p class="pt-4 text-[15px] font-light leading-6 text-black/75">
            Our goal is to create an environment where every team member can learn, contribute, and grow both personally and professionally while building solutions that create real business value.
          </p>
        </div>
        
      </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
  </div>
  <Script src="assets/js/script.js"></Script>
</body>

</html>