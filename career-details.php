<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/job-details.php'; ?>
</head>

<body class="min-h-screen text-white">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->
    <section class="relative z-0 bg-white px-5 pt-24 pb-14 text-black sm:px-8 md:px-12 md:pt-32 lg:px-16 lg:py-[7rem]">
      <div class="mx-auto max-w-5xl">
        <div class="max-w-6xl">
          <nav class="flex items-center space-x-3 text-sm text-black/60 py-4">
            <a href="index.php" class="hover:text-black">Home</a>
            <span>/</span>
            <a href="career.php" class="hover:text-black">Careers</a>
            <span>/</span>
            <span id="dynamicBreadcrumb" class="text-black font-medium">Loading...</span>
          </nav>

          <div class="bg-white py-4">
            <h2 id="dynamicJobTitle"
              class="text-[2.2rem] leading-[1.05] tracking-[-0.0em] text-black sm:text-[3rem] md:text-[3.4rem]">
              Loading...
            </h2>

            <div class="mt-2 lg:mt-7 grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
              <div class="flex flex-span gap-4 order-2 justify-start lg:order-1">
                <a href="#"
                  class="apply-now-btn inline-flex items-center justify-center bg-black px-5 py-2.5 text-sm font-medium text-white transition hover:bg-green-800">
                  Apply Now
                </a>
                <a href="#"
                  class="inline-flex items-center justify-center text-sm font-normal text-black hover:text-green-800">
                  <svg viewBox="0 0 24 24" fill="green" class="h-4 w-4 mr-1"
                    aria-hidden="true">
                    <path
                      d="M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.6 2 2.18 6.42 2.18 11.85c0 1.74.46 3.45 1.32 4.95L2 22l5.36-1.41a9.84 9.84 0 0 0 4.67 1.19h.01c5.43 0 9.85-4.42 9.85-9.85a9.8 9.8 0 0 0-2.84-7.02Zm-7.02 15.2h-.01a8.14 8.14 0 0 1-4.14-1.13l-.3-.18-3.18.84.85-3.1-.2-.32a8.16 8.16 0 0 1-1.25-4.37c0-4.52 3.68-8.2 8.21-8.2 2.19 0 4.25.85 5.8 2.41a8.15 8.15 0 0 1 2.39 5.8c0 4.52-3.68 8.2-8.17 8.2Zm4.5-6.15c-.25-.13-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.13-1.05-.39-2.01-1.24-.74-.66-1.24-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.38-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.06 0 1.21.89 2.38 1.01 2.55.13.17 1.75 2.67 4.24 3.74.59.25 1.06.4 1.42.51.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29Z">
                    </path>
                  </svg> Connect with Us
                </a>
              </div>
              <div class="flex flex-span text-black/75 lg:justify-end order-1 lg:order-2">
                <p id="dynamicJobMeta" class="mt-4 text-sm text-black/60">
                  Loading...
                </p>
              </div>
            </div>
          </div>

          <div id="dynamicJobIntro" class="pt-4 space-y-5 text-[15px] leading-7 text-black/75">
            <hr />
          </div>

          <div class="mt-14">
            <h3 class="text-[1.5rem] leading-[1.05] font-medium text-black">Responsibilities</h3>
            <ul id="dynamicJobResponsibilities" class="mt-6 space-y-2 text-[15px] leading-7 text-black/80"></ul>
          </div>

          <div class="mt-14">
            <h3 class="text-[1.5rem] leading-[1.05] font-medium text-black">Requirements</h3>
            <ul id="dynamicJobRequirements" class="mt-6 space-y-2 text-[15px] leading-7 text-black/80"></ul>
          </div>

          <div class="mt-14">
            <h3 class="text-[1.5rem] leading-[1.05] font-medium text-black">
              Excited to Meet You
            </h3>

            <p class="mt-6 text-[15px] leading-7 text-black/75">
              Thank you for your interest in joining Wazeefa1 Technologies. We
              look forward to learning more about your qualifications through
              this application.
            </p>
          </div>


        </div>
      </div>
    </section>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bottom Sticky Section -->
    <div id="bottomStickySection"
      class="fixed top-[76px] md:top-auto md:bottom-0 left-0 right-0 z-[10000] bg-[#0e1410] text-white px-5 py-6 md:px-5 md:py-6">
      <div class="mx-auto max-w-5xl flex items-center justify-between gap-3">

        <div class="flex-1 min-w-0">
          <h3 class="text-[1.3rem] sm:text-[1.5rem] md:text-[1.5rem] font-medium truncate">Ready to Join Our Team?</h3>
          <p class="text-[0.7rem] sm:text-[0.8rem] md:text-sm text-white/70 mt-0.5 truncate">
            Apply for UI/UX Designer
          </p>
        </div>

        <div class="flex items-center gap-3 sm:gap-4 shrink-0">
          <a href="#"
            class="hidden sm:inline-flex items-center justify-center text-xs md:text-sm font-normal text-white/70 hover:text-accent whitespace-nowrap">
            <svg viewBox="0 0 24 24" fill="green" class="h-4 w-4 mr-1"
              aria-hidden="true">
              <path
                d="M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.6 2 2.18 6.42 2.18 11.85c0 1.74.46 3.45 1.32 4.95L2 22l5.36-1.41a9.84 9.84 0 0 0 4.67 1.19h.01c5.43 0 9.85-4.42 9.85-9.85a9.8 9.8 0 0 0-2.84-7.02Zm-7.02 15.2h-.01a8.14 8.14 0 0 1-4.14-1.13l-.3-.18-3.18.84.85-3.1-.2-.32a8.16 8.16 0 0 1-1.25-4.37c0-4.52 3.68-8.2 8.21-8.2 2.19 0 4.25.85 5.8 2.41a8.15 8.15 0 0 1 2.39 5.8c0 4.52-3.68 8.2-8.17 8.2Zm4.5-6.15c-.25-.13-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.13-1.05-.39-2.01-1.24-.74-.66-1.24-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.38-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.06 0 1.21.89 2.38 1.01 2.55.13.17 1.75 2.67 4.24 3.74.59.25 1.06.4 1.42.51.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29Z">
              </path>
            </svg> Connect with Us
          </a>
          <a href="#"
            class="apply-now-btn inline-flex items-center justify-center px-4 py-2 md:px-5 md:py-2.5 text-xs md:text-sm font-medium text-white bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 transition whitespace-nowrap">
            Apply Now
          </a>
        </div>
      </div>
    </div>

    <!-- Application Modal -->
    <div id="applicationModal" class="fixed inset-0 z-[99999] hidden bg-black/50 backdrop-blur-sm">
      <div
        class="absolute left-0 top-0 h-full w-full max-w-2xl bg-white shadow-2xl transform transition-transform duration-300 ease-out -translate-x-full overflow-hidden"
        id="modalContent">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-6 border-b border-black/10">
          <h3 class="text-xl text-black">We Hire People, Not Just Resumes</h3>
          <button id="closeModal"
            class="flex h-9 w-9 p-2 items-center justify-center rounded-full text-gray-400 border border-gray-200 transition-colors duration-200 hover:bg-black hover:text-white hover:border-black">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="p-6 max-h-[calc(100vh-70px)] overflow-y-auto">
          <form id="applicationForm" class="space-y-4">
            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                  >First Name</label
                > -->
                <input type="text" name="firstName" required placeholder="First name"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                  >Last Name</label
                > -->
                <input type="text" name="lastName" required placeholder="Last name"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                >Email</label
              > -->
                <input type="email" name="email" required placeholder="Your email"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>

              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                >Phone Number</label
              > -->
                <input type="tel" name="phone" required placeholder="Phone number" pattern="[0-9]*" inputmode="numeric"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
              <!-- <div>
                <label class="block text-sm font-medium text-black/80 mb-1"
                  >Country</label
                >
                <input
                  type="text"
                  name="country"
                  required
                  placeholder="Country"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18"
                />
              </div> -->
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                  >State</label
                > -->
                <input type="text" name="state" required placeholder="State"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                  >Place</label
                > -->
                <input type="text" name="place" required placeholder="Place"
                  class="h-12 w-full border border-black/8 bg-white px-4 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18" />
              </div>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                >Applying for</label
              > -->
                <div class="relative">
                  <select name="applyingFor" required
                    class="h-12 w-full appearance-none border border-black/8 bg-white pl-4 pr-10 text-sm text-black outline-none transition focus:border-black/18">
                    <option value="">Select Position</option>
                    <option value="ui-ux-designer">UI/UX Designer</option>
                    <option value="mern-stack-developer">MERN Stack Developer</option>
                    <option value="mobile-app-developer">Mobile App Developer</option>
                  </select>
                  <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-black/45">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"
                      aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 0 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </div>
              </div>

              <div>
                <!-- <label class="block text-sm font-medium text-black/80 mb-1"
                >Years of Experience</label
              > -->
                <div class="relative">
                  <select name="experience" required
                    class="h-12 w-full appearance-none border border-black/8 bg-white pl-4 pr-10 text-sm outline-none text-black transition focus:border-black/18">
                    <option value="" disabled selected hidden>
                      Select Experience
                    </option>
                    <option value="0-1">0-1 years</option>
                    <option value="1-3">1-3 years</option>
                    <option value="3-5">3-5 years</option>
                    <option value="5-10">5-10 years</option>
                    <option value="10+">10+ years</option>
                  </select>
                  <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-black/45">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"
                      aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 0 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div>
              <div class="relative">
                <textarea name="additionalInfo" rows="4" placeholder="Tell us about yourself..."
                  class="min-h-[4rem] w-full border border-black/8 bg-white px-4 py-3 pb-6 text-sm text-black outline-none transition placeholder:text-black/28 focus:border-black/18"></textarea>
              </div>
            </div>
            <div class="w-full max-w-md pb-3">
              <!-- Label -->
              <label for="attachmentInput" class="flex items-center gap-2 text-sm text-gray-800 cursor-pointer">
                <!-- Paperclip Icon -->
                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15" height="15" x="0" y="0" viewBox="0 0 12 12" style="enable-background:new 0 0 512 512"
                  xml:space="preserve" class="">
                  <g>
                    <path
                      d="M6 11.875A3.378 3.378 0 0 1 2.625 8.5v-6C2.625 1.19 3.69.125 5 .125S7.375 1.19 7.375 2.5V8c0 .758-.617 1.375-1.375 1.375S4.625 8.758 4.625 8V3.5a.375.375 0 0 1 .75 0V8a.626.626 0 0 0 1.25 0V2.5C6.625 1.604 5.896.875 5 .875S3.375 1.604 3.375 2.5v6c0 1.447 1.178 2.625 2.625 2.625S8.625 9.947 8.625 8.5v-5a.375.375 0 0 1 .75 0v5A3.378 3.378 0 0 1 6 11.875z"
                      fill="#000000" opacity="1" data-original="#000000" class=""></path>
                  </g>
                </svg>
                <span id="attachmentLabelText">Add an attachment</span><span class="text-red-500">*</span>
              </label>
              <!-- Hidden File Input -->
              <input type="file" id="attachmentInput" name="attachment" accept=".pdf,.png,.jpeg,.jpg,.docx"
                class="hidden" />
              <!-- Sub text -->
              <p class="text-xs text-gray-500 mt-1">
                Max. 10 MB. (File Type: pdf, png, jpeg, docx)
              </p>
            </div>
            <button type="submit"
              class="inline-flex h-12 w-full items-center justify-center bg-black px-6 text-sm text-white transition hover:bg-green-900">
              I’m Excited to Join
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <Script src="assets/js/script.js"></Script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.min.js"></script>
</body>

</html>