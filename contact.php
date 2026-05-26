<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/contact.php'; ?>
</head>

<body class="min-h-screen text-white">
  <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
    <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->

    <section
      class="bg-white px-5 pt-[8rem] pb-12 text-black sm:px-8 md:px-12 md:pt-32 md:pb-24 lg:px-16 lg:pt-36 lg:pb-25"
      bg-[#fbfcfa]>
      <div class="mx-auto max-w-6xl">

        <div class="grid grid-cols-1 gap-y-12 md:grid-cols-12 md:gap-x-10 lg:gap-x-16 xl:gap-x-10 items-start">

          <div class="order-1 md:order-none md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-1">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
              Contact Us
            </p>
            <h2
              class="text-[9vw] leading-[1.05] tracking-[-0.0em] sm:text-[3.3rem] md:text-[4.4vw] lg:text-[3.5rem]  text-black">
              Let’s Build Something <br>
              <span class="text-[#dc8413]">Together</span>
            </h2>
            <p class="mt-6 max-w-xl text-base leading-relaxed text-black md:text-md">
              Thank you for your interest in Wazeefa1 Technologies. Please brief
              us about your business needs to help us serve you better.
            </p>
          </div>


          <div
            class="order-2 md:order-none md:col-span-6 lg:col-span-5 md:col-start-7 lg:col-start-8 md:row-start-1 md:row-span-3 self-start bg-white p-6 sm:p-8 md:p-8 lg:p-8 shadow-[0_10px_60px_rgba(0,0,0,0.05)] border border-black/0 lg:mt-8">
            <div class="mb-8">
              <h3 class="text-[2rem] font-normal leading-tight tracking-[-0.04em] text-black">
                Get in Touch
              </h3>
              <p class="mt-2 text-sm text-black/50">
                You can reach us anytime
              </p>
            </div>

            <form class="space-y-5">
              <div class="grid gap-4 sm:grid-cols-2">
                <input type="text" name="first_name" placeholder="First name" required
                  class="h-12 border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/30 focus:border-black/30" />
                <input type="text" name="last_name" placeholder="Last name" required
                  class="h-12 border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/30 focus:border-black/30" />
              </div>

              <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-black/30">
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-[18px] h-[18px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                  </svg>
                </span>
                <input type="email" name="email" placeholder="Your email" required
                  class="h-12 w-full border border-black/10 bg-transparent pl-11 pr-4 text-sm text-black outline-none transition placeholder:text-black/30 focus:border-black/30" />
              </div>

              <div class="grid grid-cols-[6rem_minmax(0,1fr)] gap-4">
                <div class="relative">
                  <select name="country_code" required
                    class="h-12 w-full appearance-none border border-black/10 bg-transparent pl-4 pr-10 text-sm text-black outline-none transition focus:border-black/30">
                    <option>+91</option>
                  </select>
                  <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-black/45">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"
                      aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </div>
                <input type="tel" name="phone" placeholder="Phone number" required
                  class="h-12 border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/30 focus:border-black/30" />
              </div>

              <div class="relative">
                <textarea name="help" rows="4" maxlength="120" placeholder="How can we help?" required
                  class="min-h-[10rem] w-full resize-none border border-black/10 bg-transparent px-4 py-4 text-sm text-black outline-none transition placeholder:text-black/30 focus:border-black/30"></textarea>
                <span class="pointer-events-none absolute bottom-4 right-4 text-[11px] text-black/30">
                  0/120
                </span>
              </div>

              <div class="h-captcha min-h-[78px] w-full" data-sitekey="69f7c7af-7ddf-4965-867f-a1d1406c11ef"></div>

              <button type="submit"
                class="inline-flex h-14 w-full items-center justify-center bg-black px-6 text-[15px] font-medium text-white transition hover:bg-green-800">
                Submit
              </button>
            </form>
          </div>


          <div class="order-3 md:order-none md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-2 md:mt-2 lg:mt-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-8">
              <article>
                <h3 class="text-[1.15rem] font-medium text-black mb-4">Locate Us :</h3>
                <p class="text-[0.95rem] md:text-sm leading-6 text-black pr-4">
                  Wazeefa1 Technologies Private Limited
                  First Floor, Rajamalli Building Infopark Thrissur
                  Koratty P.O, 680308 Kerala, India
                </p>
              </article>

              <article>
                <h3 class="text-[1.15rem] font-medium text-black mb-4">Let’s Connect :</h3>
                <div class="flex flex-row gap-4 text-[0.95rem] leading-5 text-black">
                  <div class="flex flex-col gap-1 text-[0.95rem] md:text-sm leading-6 text-black ">
                    <a href="tel:914872970765" class="hover:text-black transition">+91 487 2970765</a>
                    <a href="tel:919188339903" class="hover:text-black transition">+91 9188339903</a>
                  </div>
                  <div class="flex flex-col gap-1 text-[0.95rem] md:text-sm leading-6 text-black">
                    <a href="mailto:info@wazeefa.in" class="hover:text-black transition">info@wazeefa.in</a>
                  </div>
                </div>
              </article>
            </div>
          </div>


          <div
            class="order-4 md:order-none w-full  md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-3 md:mt-2 lg:mt-0 overflow-hidden bg-gray-100 border border-black/5">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.9188255081694!2d76.3537425!3d10.2681243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0803db3df36871%3A0xa0666bbc7415ea7e!2sWazeefa1%20Technologies%20Private%20Limited.!5e0!3m2!1sen!2sin!4v1776162420021!5m2!1sen!2sin"
              class="h-[280px] w-full md:h-[90%] lg:h-[270px]" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
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