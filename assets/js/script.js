gsap.registerPlugin(ScrollTrigger);

// ==========================================
// 1. GLOBAL UI (HEADER & MENU)
// ==========================================

const siteHeader = document.getElementById("siteHeader");
const navDropdown = document.querySelector(".nav-dropdown");
const menuPanel = document.getElementById("menuPanel");
const mobileMenuButton = document.getElementById("mobileMenuButton");
const desktopMenuButton = document.getElementById("desktopMenuButton");
const menuCloseButton = document.getElementById("menuCloseButton");
const menuLinks = gsap.utils.toArray(".menu-link");

let menuOpen = false;

// Header Scroll & Hover States
function syncHeaderState(isScrolled) {
    if (siteHeader) siteHeader.classList.toggle("is-scrolled", isScrolled);
}

function syncServiceHoverState(isHovering) {
    if (siteHeader && !siteHeader.classList.contains("is-scrolled") && !siteHeader.classList.contains("header-theme-dark")) {
        siteHeader.classList.toggle("service-menu-open", isHovering);
    }
}

function updateHeaderTheme(theme) {
    if (!siteHeader) return;
    siteHeader.classList.toggle("header-theme-light", theme === "light");
    siteHeader.classList.toggle("header-theme-dark", theme === "dark");
    if (theme !== "light" && theme !== "dark") {
        siteHeader.classList.remove("header-theme-light", "header-theme-dark");
    }
}

if (navDropdown) {
    navDropdown.addEventListener("mouseenter", () => syncServiceHoverState(true));
    navDropdown.addEventListener("mouseleave", () => syncServiceHoverState(false));
}

// Menu Animation Timeline
const menuTimeline = gsap.timeline({
    paused: true,
    defaults: { ease: "power3.out" },
});

let desktopMenuAnchor = null;

function syncMenuCloseAnchor() {
    if (!menuCloseButton) return;
    const desktopRect = desktopMenuButton ? desktopMenuButton.getBoundingClientRect() : null;
    const hasDesktopRect = !!(desktopRect && desktopRect.width > 0 && desktopRect.height > 0);
    
    if (hasDesktopRect) {
        desktopMenuAnchor = { left: desktopRect.left, top: desktopRect.top };
    }

    const fallbackAnchor = { left: window.innerWidth - 46 - 16, top: 16 };
    const anchor = desktopMenuAnchor || fallbackAnchor;
    const margin = 8;
    const buttonWidth = menuCloseButton.offsetWidth || 46;
    const buttonHeight = menuCloseButton.offsetHeight || 46;
    const maxLeft = Math.max(margin, window.innerWidth - buttonWidth - margin);
    const maxTop = Math.max(margin, window.innerHeight - buttonHeight - margin);
    const safeLeft = Math.min(Math.max(anchor.left, margin), maxLeft);
    const safeTop = Math.min(Math.max(anchor.top, margin), maxTop);

    gsap.set(menuCloseButton, {
        left: safeLeft,
        top: safeTop,
        right: "auto",
        bottom: "auto",
    });
}

if (menuPanel) {
    gsap.set(menuPanel, { autoAlpha: 0, pointerEvents: "none" });
    syncMenuCloseAnchor();
    menuTimeline
        .to(menuPanel, { autoAlpha: 1, pointerEvents: "auto", duration: 0.62, ease: "power2.out" })
        .fromTo(menuCloseButton, { scale: 0.92, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.42, ease: "power2.out" }, 0.05)
        .fromTo(".menu-panel-visual", { opacity: 0, scale: 1.02 }, { opacity: 1, scale: 1, duration: 0.95, ease: "power2.out" }, 0)
        .fromTo(".menu-panel-label, .menu-panel-lead h2, .menu-panel-lead p", { opacity: 0 }, { opacity: 1, stagger: 0.06, duration: 0.48, ease: "sine.out" }, 0.14)
        .fromTo(menuLinks, { opacity: 0 }, { opacity: 1, stagger: 0.042, duration: 0.44, ease: "sine.out" }, 0.19)
        .fromTo(".menu-panel-meta-row a, .menu-socials a", { opacity: 0 }, { opacity: 1, stagger: 0.028, duration: 0.42, ease: "sine.out" }, 0.24);
}

function setMenuState(open) {
    menuOpen = open;
    if (mobileMenuButton) mobileMenuButton.classList.toggle("menu-open", open);
    if (desktopMenuButton) desktopMenuButton.classList.toggle("menu-open", open);
    if (menuPanel) menuPanel.setAttribute("aria-hidden", open ? "false" : "true");
    document.body.style.overflow = open ? "hidden" : "";
    
    if (open) {
        syncMenuCloseAnchor();
        if (mobileMenuButton) gsap.to(mobileMenuButton, { borderRadius: 9999, duration: 0.34, ease: "power2.out" });
        menuTimeline.play();
    } else {
        menuTimeline.reverse();
    }
}

if (mobileMenuButton) mobileMenuButton.addEventListener("click", () => setMenuState(!menuOpen));
if (desktopMenuButton) desktopMenuButton.addEventListener("click", () => setMenuState(!menuOpen));
if (menuCloseButton) menuCloseButton.addEventListener("click", () => setMenuState(false));
menuLinks.forEach((link) => link.addEventListener("click", () => setMenuState(false)));

window.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && menuOpen) setMenuState(false);
});


// ==========================================
// 2. HOME PAGE ANIMATIONS
// ==========================================
function initHomePage() {
    if (!document.getElementById("heroStage")) return; // Only run on Home Page

    updateHeaderTheme("transparent"); 
    
    const heroShell = document.querySelector(".hero-shell");
    const mediaItems = gsap.utils.toArray(".media-item");
    const mediaVideos = gsap.utils.toArray(".media-item video");
    const copyItems = gsap.utils.toArray(".slide-copy");
    const headlineRotator = document.getElementById("headlineRotator");
    const counter = document.getElementById("counter");
    const heroProgressLine = document.getElementById("heroProgressLine");
    const headlineWords = ["Mobile App Development", "Web Development", "CMS Development", "Digital Marketing", "Software Development"];
    
    let backgroundAutoPlay, headlineAutoPlay, activeIndex = 0;

    // --- Hero Intro ---
    gsap.to("#heroStage", {
        opacity: 0, filter: "blur(0px)", y: -150,
        scrollTrigger: { trigger: "#aboutSection", start: "top bottom", end: "top top", scrub: true }
    });

    ScrollTrigger.create({
        trigger: "#aboutSection", start: "top bottom", end: "top 90%",
        toggleClass: { targets: "#aboutSection", className: "blur-stage" },
    });

    ScrollTrigger.create({
        trigger: "#aboutSection", start: "top 90%", end: "bottom 20%",
        toggleClass: { targets: "#aboutSection", className: "is-active" },
    });

    function animateCopyIn() {
        gsap.fromTo(copyItems, { y: 34, opacity: 0 }, { y: 0, opacity: 1, duration: 0.9, stagger: 0.1, ease: "power3.out", overwrite: true });
    }
    
    function pauseAllVideos() { mediaVideos.forEach((video) => video.pause()); }
    
    function showBackground(index, immediate = false) {
        if (!mediaItems.length || !counter) return;
        const duration = immediate ? 0 : 1.2;
        mediaItems.forEach((item, i) => gsap.to(item, { opacity: i === index ? 1 : 0, scale: i === index ? 1 : 1.06, duration, ease: "power3.inOut", overwrite: true }));
        pauseAllVideos();
        const activeVideo = mediaItems[index]?.querySelector("video");
        if (activeVideo) activeVideo.play().catch(() => {});
        counter.textContent = `${String(index + 1).padStart(2, "0")}/${String(mediaItems.length).padStart(2, "0")}`;
        animateHeroProgress();
    }
    
    function animateHeroProgress(duration = 6.2) {
        if (!heroProgressLine) return;
        gsap.killTweensOf(heroProgressLine);
        gsap.set(heroProgressLine, { width: 0 });
        gsap.to(heroProgressLine, { width: "100%", duration, ease: "none" });
    }
    
    function nextBackground() {
        if (mediaItems.length) showBackground((activeIndex = (activeIndex + 1) % mediaItems.length));
    }
    
    function cycleHeadlineWord() {
        if (!headlineRotator) return;
        const nextIndex = (Number(headlineRotator.dataset.index || "0") + 1) % headlineWords.length;
        gsap.to(headlineRotator, {
            y: -18, opacity: 0, duration: 0.22, ease: "power2.in",
            onComplete: () => {
                headlineRotator.textContent = headlineWords[nextIndex];
                headlineRotator.dataset.index = String(nextIndex);
                gsap.fromTo(headlineRotator, { y: 18, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45, ease: "power3.out" });
            },
        });
    }
    
    function startAutoPlay() {
        clearInterval(backgroundAutoPlay); clearInterval(headlineAutoPlay);
        backgroundAutoPlay = setInterval(nextBackground, 6200);
        headlineAutoPlay = setInterval(cycleHeadlineWord, 1700);
    }

    if (headlineRotator) headlineRotator.dataset.index = "0";
    showBackground(0, true);
    animateCopyIn();
    startAutoPlay();

    // --- About Section Content Switcher ---
    const aboutContentStates = [
        { heading: "We build sharp digital products with strategy, and clean execution.", lines: ["Our team blends product thinking, visual design, and engineering to create websites,", "apps, and digital systems that feel premium from the first scroll to the final click."], ctaText: "Discover more" },
        { heading: "Every interface is shaped to move naturally, tell a story, and support growth.", lines: ["We focus on performance, clear hierarchy, and scroll-led storytelling", "so each section feels intentional. The result is a brand experience that looks refined and performs hard."], ctaText: "Discover more" },
    ];

    const heading = document.getElementById("aboutHeading");
    const paragraph = document.getElementById("aboutParagraph");
    const aboutCta = document.getElementById("aboutCta");
    const aboutSubtext = document.getElementById("aboutSubtext");
    const disableAboutTextAnimations = window.matchMedia("(max-width: 520px)").matches;
    const isMobileAboutLayout = window.matchMedia("(max-width: 767px)").matches;
    let aboutSubtextTextDelayTween = null;

    function buildStaticLetters(target) {
        if (!target) return;
        const cleanText = target.textContent.trim().replace(/\s+/g, " ");
        if (disableAboutTextAnimations) { target.textContent = cleanText; return; }
        target.innerHTML = cleanText.split("").map((char) => `<span class="about-char">${char === " " ? "&nbsp;" : char}</span>`).join("");
    }

    function renderAboutParagraph(lines) {
        if (!paragraph) return;
        if (disableAboutTextAnimations) {
            paragraph.innerHTML = lines.map((line) => `<span class="block">${line}</span>`).join("");
            return;
        }
        paragraph.innerHTML = lines.map((line) => `<span class="about-line-wrap"><span class="about-line">${line}</span></span>`).join("");
    }

    function showAboutSubtext(textDelay = 1) {
        if (!aboutSubtext) return;
        gsap.killTweensOf(aboutSubtext);
        gsap.to(aboutSubtext, { autoAlpha: 1, y: 0, scale: 1, duration: 0.72, ease: "power2.out", overwrite: "auto", pointerEvents: "auto", force3D: true, onComplete: () => setAboutSubtextTextVisible(true, textDelay) });
    }

    function hideAboutSubtext() {
        if (!aboutSubtext) return;
        gsap.killTweensOf(aboutSubtext);
        setAboutSubtextTextVisible(false);
        gsap.to(aboutSubtext, { autoAlpha: 0, y: 18, scale: 0.985, duration: 0.5, ease: "power2.inOut", overwrite: "auto", pointerEvents: "none", force3D: true });
    }

    function setAboutSubtextTextVisible(show, delay = 0) {
        if (!aboutSubtext) return;
        const textWaz = aboutSubtext.querySelector(".reveal-content");
        const actionGroup = aboutSubtext.querySelector(".about-subtext-actions");
        if (!textWaz) return;
        
        if (aboutSubtextTextDelayTween) { aboutSubtextTextDelayTween.kill(); aboutSubtextTextDelayTween = null; }
        gsap.killTweensOf(textWaz);
        if (actionGroup) gsap.killTweensOf(actionGroup);

        if (!show) {
            aboutSubtext.classList.remove("show-text");
            if (actionGroup) gsap.to(actionGroup, { x: 0, duration: 0.28, ease: "power2.inOut", overwrite: "auto" });
            gsap.to(textWaz, { opacity: 0, y: 4, duration: 0.22, ease: "power2.inOut", overwrite: "auto", onComplete: () => { textWaz.style.display = "none"; } });
            return;
        }

        const reveal = () => {
            const tl = gsap.timeline({ defaults: { overwrite: "auto" } });
            if (actionGroup) tl.to(actionGroup, { x: 0, duration: 0.6, ease: "power2.in" }, 0);
            tl.add(() => { aboutSubtext.classList.add("show-text"); textWaz.style.display = "inline-flex"; }, 0.12).fromTo(textWaz, { opacity: 0, y: 6 }, { opacity: 1, y: 0, duration: 0.2, ease: "power2.in" }, 0.12);
        };

        if (delay > 0) {
            aboutSubtext.classList.remove("show-text");
            textWaz.style.display = "none";
            if (actionGroup) gsap.set(actionGroup, { x: 0 });
            aboutSubtextTextDelayTween = gsap.delayedCall(delay, () => { reveal(); aboutSubtextTextDelayTween = null; });
            return;
        }
        if (actionGroup) gsap.set(actionGroup, { x: 0 });
        reveal();
    }

    function swapAboutContent(nextIndex, animated = true) {
        if (disableAboutTextAnimations) animated = false;
        const nextContent = aboutContentStates[nextIndex];
        if (!nextContent) return;

        const applyContent = () => {
            heading.textContent = nextContent.heading;
            buildStaticLetters(heading);
            renderAboutParagraph(nextContent.lines);

            const allMaxWidths = ["max-w-[30rem]", "sm:max-w-[30rem]", "md:max-w-[35rem]", "lg:max-w-[48rem]", "max-w-[28rem]", "sm:max-w-[36rem]", "md:max-w-[42rem]", "lg:max-w-[58rem]"];
            heading.classList.remove(...allMaxWidths);

            if (nextIndex === 0) {
                heading.classList.add("max-w-[30rem]", "sm:max-w-[30rem]", "md:max-w-[35rem]", "lg:max-w-[48rem]");
            } else if (nextIndex === 1) {
                heading.classList.add("max-w-[28rem]", "sm:max-w-[36rem]", "md:max-w-[42rem]", "lg:max-w-[58rem]");
            }

            const nextLines = gsap.utils.toArray("#aboutContent .about-line"), nextLetters = heading.querySelectorAll(".about-char");
            if (disableAboutTextAnimations) {
                gsap.set([heading, paragraph, aboutCta], { y: 0, opacity: 1 });
                return;
            }

            if (animated) {
                gsap.set(heading, { y: 0, opacity: 1 });
                gsap.set(paragraph, { y: 0, opacity: 1 });
                gsap.set(aboutCta, { y: 0, opacity: 1 });
                gsap.set(nextLetters, { opacity: 0.2 });
                gsap.set(nextLines, { yPercent: 110, opacity: 0 });
                const contentTl = gsap.timeline();
                contentTl.to(nextLetters, { opacity: 1, stagger: 0.02, duration: 0.5, ease: "power2.out" }, 0)
                         .to(nextLines, { yPercent: 0, opacity: 1, stagger: 0.1, duration: 0.6, ease: "power3.out" }, 0.2)
                         .fromTo(aboutCta, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: "power3.out" }, 0.4);
            } else {
                gsap.set([heading, paragraph, aboutCta], { y: 0, opacity: 1 });
                gsap.set(nextLetters, { opacity: 1 });
                gsap.set(nextLines, { yPercent: 0, opacity: 1 });
            }
        };

        if (!animated) { applyContent(); return; }
        gsap.timeline({ defaults: { overwrite: "auto" } }).to([heading, paragraph, aboutCta], { y: -20, opacity: 0, duration: 0.3, ease: "power2.in", onComplete: applyContent });
    }

    const wazeefa = document.getElementById("bgWazeefa");
    if (wazeefa) wazeefa.innerHTML = wazeefa.innerText.split("").map((char) => `<span class="bg-wazeefa-char">${char}</span>`).join("");
    
    let verticalStatsAnchorOffset = null;
    let verticalStatsActiveIndex = 0;
    let verticalStatsSmoothProgress = 0;

    function updateVerticalStats(scrollP = 0) {
        const vItems = gsap.utils.toArray(".stat-h4");
        const vInner = document.getElementById("verticalTextInner");
        const verticalText = document.getElementById("verticalText");
        if (!vInner || !vItems.length || !verticalText) return;

        const targetProgress = Math.max(0, Math.min(1, scrollP));
        const activeIndex = Math.round(targetProgress * (vItems.length - 1));
        const containerHeight = verticalText.offsetHeight;
        const activeItem = vItems[activeIndex];
        const itemBottom = activeItem.offsetTop + activeItem.offsetHeight;
        const yTranslation = containerHeight - itemBottom;

        gsap.set(vInner, { y: yTranslation });
        vItems.forEach((item, index) => item.classList.toggle("active", index === activeIndex));
    }

    function toggleFinal(show) {
        if (show) {
            verticalStatsAnchorOffset = null; verticalStatsActiveIndex = 0; verticalStatsSmoothProgress = 0;
            gsap.to("#aboutContent", { opacity: 0, y: -30, duration: 0.6 });
            gsap.to("#aboutFinalStage", { opacity: 1, duration: 0.8, pointerEvents: "auto" });
            hideAboutSubtext();
            gsap.fromTo(".bg-wazeefa-char", { opacity: 0, y: 50, filter: "blur(8px)" }, { opacity: 1, y: 0, filter: "blur(0px)", stagger: 0.03, duration: 0.6, ease: "power2.out", delay: 0.2 });
            gsap.fromTo(".brand-logo-icon", { opacity: 0, scale: 0, filter: "blur(10px)" }, { opacity: 1, scale: 1, filter: "blur(0px)", stagger: 0.1, duration: 0.8, ease: "back.out(1.7)", delay: 0.2 });
            gsap.to(".left-reveal-line", { y: "0%", duration: 0.8, stagger: 0.1, ease: "power4.out", delay: 0.4 });
            const vItems = gsap.utils.toArray(".stat-h4");
            vItems.forEach((item, index) => item.classList.toggle("active", index === 0));
            gsap.to("#circleMain", { rotate: 360, duration: 25, repeat: -1, ease: "none", overwrite: "auto" });
            gsap.delayedCall(0.05, () => updateVerticalStats(0));
        } else {
            verticalStatsAnchorOffset = null; verticalStatsActiveIndex = 0; verticalStatsSmoothProgress = 0;
            gsap.killTweensOf(["#aboutContent", "#aboutFinalStage", ".bg-wazeefa-char", ".brand-logo-icon", ".left-reveal-line", ".stat-h4:first-child"]);
            gsap.to("#aboutFinalStage", { opacity: 0, duration: 0.4, pointerEvents: "none" });
            gsap.to("#aboutContent", { opacity: 1, y: 0, duration: 0.4 });
            if (aboutSubtext) showAboutSubtext(0);
            gsap.set(".left-reveal-line", { y: "110%" });
            gsap.set(".brand-logo-icon", { opacity: 0, y: 10, scale: 0, filter: "blur(0px)" });
            const vItems = gsap.utils.toArray(".stat-h4");
            vItems.forEach((item, index) => item.classList.toggle("active", index === 0));
        }
    }

    gsap.set("#serviceSection", { marginTop: "-100vh" });

    let aboutCurrentState = -1;
    ScrollTrigger.create({
        trigger: "#aboutSection",
        start: "top top",
        end: "+=500%",
        pin: true,
        scrub: 1,
        onUpdate: (self) => {
            const p = Math.min(1, self.progress / 0.8);
            let fadeOpacity = 0, sectionY = 0, sectionScale = 1, sectionOpacity = 1;
            const overlapStart = 0.7, overlapEnd = 1.0;
            if (self.progress > overlapStart) {
                const rawProgress = gsap.utils.mapRange(overlapStart, overlapEnd, 0, 1, self.progress);
                const overlapProgress = Math.max(0, Math.min(1, rawProgress));
                const easedOverlap = overlapProgress * overlapProgress * (3 - 2 * overlapProgress);
                fadeOpacity = 0.72 * easedOverlap;
                sectionY = -30 * easedOverlap;
                sectionScale = 1 - 0.045 * easedOverlap;
                sectionOpacity = 1 - 0.6 * easedOverlap;
            }
            gsap.set("#aboutOverlayFade", { opacity: fadeOpacity });
            gsap.set("#aboutSection", { y: sectionY, scale: sectionScale, opacity: sectionOpacity });
            
            let newState = -1;
            if (isMobileAboutLayout) {
                // Mobile: show first about text, then jump straight to final stage.
                newState = p < 0.38 ? 0 : 2;
            } else {
                if (p < 0.3) newState = 0;
                else if (p < 0.6) newState = 1;
                else newState = 2;
            }

            if (newState !== aboutCurrentState) {
                if (newState === 0) { swapAboutContent(0, true); if (aboutCurrentState === 2) toggleFinal(false); }
                else if (newState === 1) { swapAboutContent(1, true); if (aboutCurrentState === 2) toggleFinal(false); }
                else if (newState === 2) { toggleFinal(true); }
                aboutCurrentState = newState;
            }

            if (newState === 2) {
                const state2Progress = gsap.utils.mapRange(0.5, 1.0, 0, 1, Math.max(0.5, p));
                const initialPause = 0.18;
                let scrollP = 0;
                if (state2Progress > initialPause) {
                    scrollP = gsap.utils.mapRange(initialPause, 1, 0, 1, state2Progress);
                    scrollP = gsap.parseEase("power1.inOut")(scrollP);
                }
                updateVerticalStats(Math.max(0, Math.min(1, scrollP)));
            }
        },
    });

    // Populate Initial About Text
    const firstState = aboutContentStates[0];
    if (heading) {
        heading.textContent = firstState.heading;
        buildStaticLetters(heading);
        renderAboutParagraph(firstState.lines);
    }

    if (!disableAboutTextAnimations) gsap.set([heading, paragraph, aboutCta], { opacity: 0 });

    if (disableAboutTextAnimations) {
        gsap.set([heading, paragraph, aboutCta], { y: 0, opacity: 1 });
        aboutCurrentState = 0;
    } else {
        ScrollTrigger.create({
            trigger: "#aboutSection",
            start: "top 65%",
            onEnter: () => {
                const nextLines = gsap.utils.toArray("#aboutContent .about-line");
                const nextLetters = heading.querySelectorAll(".about-char");
                gsap.set([heading, paragraph, aboutCta], { y: 0, opacity: 1 });
                hideAboutSubtext();
                gsap.set(nextLetters, { opacity: 0.2 });
                gsap.set(nextLines, { yPercent: 110, opacity: 0 });
                gsap.set(aboutCta, { y: 20, opacity: 0 });

                const entrance = gsap.timeline({ overwrite: "auto" });
                entrance.to(nextLetters, { opacity: 1, stagger: 0.02, duration: 0.5, ease: "power2.out" }, 0)
                        .to(nextLines, { yPercent: 0, opacity: 1, stagger: 0.1, duration: 0.6, ease: "power3.out" }, 0.2)
                        .to(aboutCta, { y: 0, opacity: 1, duration: 0.5, ease: "power3.out" }, 0.4);
                if (aboutSubtext) entrance.call(() => showAboutSubtext(1), null, 0.5);
                aboutCurrentState = 0;
            },
            onLeaveBack: () => {
                gsap.to([heading, paragraph, aboutCta], { opacity: 0, y: 20, duration: 0.3, overwrite: "auto" });
                hideAboutSubtext();
                aboutCurrentState = -1;
            },
        });
    }

    // Header Themes
    if (heroShell) ScrollTrigger.create({ trigger: heroShell, start: "top top", end: "bottom top", onLeave: () => syncHeaderState(true), onEnterBack: () => syncHeaderState(false) });
    if (document.getElementById("aboutSection")) ScrollTrigger.create({ trigger: "#aboutSection", start: "top top", end: "bottom top", onEnter: () => updateHeaderTheme("dark"), onLeaveBack: () => updateHeaderTheme("transparent") });
    if (document.getElementById("serviceSection")) ScrollTrigger.create({ trigger: "#serviceSection", start: () => `top top+=${siteHeader ? siteHeader.offsetHeight : 72}`, end: "bottom top", onEnter: () => updateHeaderTheme("light"), onEnterBack: () => updateHeaderTheme("light"), onLeaveBack: () => updateHeaderTheme("dark") });

    // --- Services Liquid section ---
    function initTextReveal(triggerId, linesSelector) {
        const lines = gsap.utils.toArray(linesSelector);
        if (lines.length) {
            gsap.set(lines, { yPercent: 105 });
            ScrollTrigger.create({ trigger: triggerId, start: "top 75%", onEnter: () => gsap.to(lines, { yPercent: 0, duration: 1, stagger: 0.15, ease: "power4.out" }) });
        }
    }

    function playLiquidTransition(items, activeIndex, nextIndex) {
        if (!items[activeIndex] || !items[nextIndex] || activeIndex === nextIndex) return;
        const currentItem = items[activeIndex];
        const nextItem = items[nextIndex];
        const liquidFilter = document.querySelector("#liquidDisplacement");
        gsap.killTweensOf([currentItem, nextItem, liquidFilter]);
        gsap.set(nextItem, { zIndex: 20, autoAlpha: 1 });
        gsap.set(currentItem, { zIndex: 10 });

        if (liquidFilter) {
            gsap.fromTo(liquidFilter, { attr: { scale: 100 } }, { attr: { scale: 0 }, duration: 1.4, ease: "expo.out" });
            gsap.fromTo(nextItem, { opacity: 0, scale: 1.05, filter: "url(#waterFlow) blur(4px)" }, { opacity: 1, scale: 1, filter: "url(#waterFlow) blur(0px)", duration: 1.4, ease: "expo.out", onComplete: () => { gsap.set(nextItem, { filter: "none" }); gsap.set(currentItem, { autoAlpha: 0 }); } });
        } else {
            gsap.to(currentItem, { autoAlpha: 0, duration: 0.6 });
            gsap.fromTo(nextItem, { autoAlpha: 0 }, { autoAlpha: 1, duration: 0.6 });
        }
    }

    function initDesktopServiceSection() {
        const section = document.getElementById("desktopServiceLayout");
        if (!section) return;
        const steps = gsap.utils.toArray("#desktopServiceLayout .feature-service-step");
        const primaryVisuals = gsap.utils.toArray("#desktopServiceLayout .feature-primary-visual");
        const primaryFrame = section.querySelector(".feature-visual-frame");
        if (!steps.length || !primaryVisuals.length || !primaryFrame) return;

        gsap.set(primaryVisuals, { autoAlpha: 0, zIndex: 10 });
        gsap.set(primaryVisuals[0], { autoAlpha: 0, scale: 1.05, filter: "url(#waterFlow) blur(4px)", zIndex: 20 });
        let activeIndex = 0;

        ScrollTrigger.create({
            trigger: section, start: "top 75%", once: true,
            onEnter: () => {
                gsap.fromTo(primaryFrame, { scale: 0.9, opacity: 0 }, { scale: 1, opacity: 1, duration: 1.2, ease: "power4.out" });
                const liquidFilter = document.querySelector("#liquidDisplacement");
                if (liquidFilter) gsap.fromTo(liquidFilter, { attr: { scale: 100 } }, { attr: { scale: 0 }, duration: 1.4, ease: "expo.out" });
                gsap.to(primaryVisuals[0], { autoAlpha: 1, scale: 1, filter: "url(#waterFlow) blur(0px)", duration: 1.4, ease: "expo.out", onComplete: () => gsap.set(primaryVisuals[0], { filter: "none" }) });
            },
        });

        steps.forEach((step) => gsap.set(step.querySelectorAll(".feature-service-copy-line, .feature-service-link"), { yPercent: 105 }));

        steps.forEach((step, index) => {
            const lines = step.querySelectorAll(".feature-service-copy-line, .feature-service-link");
            ScrollTrigger.create({
                trigger: step, start: "top 40%", end: "bottom 40%",
                onEnter: () => activateStep(index), onEnterBack: () => activateStep(index),
                onLeave: () => deactivateStep(index), onLeaveBack: () => deactivateStep(index),
            });
            function activateStep(i) {
                step.classList.add("is-active");
                gsap.to(lines, { yPercent: 0, duration: 0.6, ease: "power3.out", stagger: 0.05, overwrite: "auto" });
                if (activeIndex !== i) { playLiquidTransition(primaryVisuals, activeIndex, i); activeIndex = i; }
            }
            function deactivateStep(i) {
                step.classList.remove("is-active");
                gsap.to(lines, { yPercent: 105, duration: 0.4, ease: "power3.in", overwrite: "auto" });
            }
        });

        ScrollTrigger.create({
            trigger: section, start: "top top+=96", end: "bottom bottom-=96", scrub: 0.9,
            onUpdate: (self) => {
                const activeVisual = primaryVisuals[activeIndex];
                if (activeVisual && !gsap.isTweening(activeVisual)) gsap.to(activeVisual, { scale: 1 + self.progress * 0.055, duration: 0.3, ease: "none", overwrite: "auto" });
            },
        });
    }

    function initMobileServiceSection() {
        const track = document.getElementById("mobileServiceTrack");
        const container = document.getElementById("mobileServiceContainer");
        if (!track || !container) return;

        const serviceData = [
            { title: "Website Development", p: "Offering clients an unmatched web experience using advanced tools and technologies.", href: "web-development.php", media: '<video class="h-full w-full object-cover" autoplay muted loop playsinline><source src="assets/video/web.mp4" type="video/mp4"></video>' },
            { title: "Ecommerce Development", p: "Build your online store to reach new markets with a fast, conversion-ready commerce experience.", href: "ecommerce-website-development.php", media: '<img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/d754be230511570.Y3JvcCwxOTIxLDE1MDMsNCww.jpg" class="h-full w-full object-cover" />' },
            { title: "Mobile App Development", p: "Design and build polished cross-platform mobile apps that keep customers engaged everywhere.", href: "mobile-application-development.php", media: '<video class="h-full w-full object-cover" autoplay muted loop playsinline><source src="assets/video/mobile.mp4" type="video/mp4"></video>' },
            { title: "SEO & Digital Marketing", p: "Grow reach and performance through data-driven SEO, SEM, and content marketing that genuinely converts.", href: "digital-marketing.php", media: '<img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/f850ce239041909.Y3JvcCwxOTM5LDE1MTYsMjczLDI0NA.jpg" class="h-full w-full object-cover" />' },
            { title: "SMM & Social Growth", p: "Humanizing your brand through social storytelling and viral performance marketing loops.", href: "digital-marketing.php", media: '<img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/e85d2d246988107.Y3JvcCwyMDQ4LDE2MDEsMCwyMjM.png" class="h-full w-full object-cover" />' },
            { title: "Software Development", p: "Create adaptable custom software solutions that scale with your processes, users, and business goals.", href: "software-development.php", media: '<img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/4aa307232271915.Y3JvcCwzMjMyLDI1MjgsOCww.jpg" class="h-full w-full object-cover" />' },
        ];

        track.innerHTML = serviceData.map((item) => `
            <div class="mobile-service-slide">
                <div class="mobile-visual-frame">${item.media}</div>
                <div>
                    <h3 class="text-[1.5rem] sm:text-[1.5rem] font-normal leading-tight tracking-[-0.03em] text-black mb-3">${item.title}</h3>
                    <p class="text-[0.98rem] sm:text-base leading-6 text-black/65">${item.p}</p>
                    <a href="${item.href}" class="mt-4 inline-block text-sm text-black transition-colors duration-300 hover:text-accent font-medium">Discover More</a>
                </div>
            </div>`).join("");

        gsap.to(track, {
            x: () => -(track.scrollWidth - container.clientWidth) + "px",
            ease: "none",
            scrollTrigger: { trigger: container, start: "top 18%", end: () => `+=${Math.max(0, track.scrollWidth - container.clientWidth)}`, pin: true, scrub: 1, invalidateOnRefresh: true },
        });
    }

    let mm = gsap.matchMedia();
    mm.add("(min-width: 1024px)", () => { initDesktopServiceSection(); });
    mm.add("(max-width: 1023px)", () => { initMobileServiceSection(); });

    function initHeadingLetterAnimation(selector, triggerSelector, start = "top 78%", end = "top 40%") {
        const headingEl = document.querySelector(selector);
        if (!headingEl) return;
        const text = headingEl.textContent.trim().replace(/\s+/g, " ");
        headingEl.innerHTML = text.split("").map((char) => `<span class="about-char">${char === " " ? "&nbsp;" : char}</span>`).join("");
        const letters = headingEl.querySelectorAll(".about-char");
        gsap.set(letters, { opacity: 0.08 });
        gsap.to(letters, { opacity: 1, stagger: 0.035, ease: "none", scrollTrigger: { trigger: triggerSelector, start, end, scrub: 0.8 } });
    }

    initTextReveal("#serviceSection", "#serviceParagraph .service-line");
    initTextReveal("#clientsSection", "#clientParagraph .client-line");
    gsap.set("#serviceExploreText", { opacity: 0, y: 15 });
    ScrollTrigger.create({ trigger: "#serviceSection", start: "top 70%", once: true, onEnter: () => gsap.to("#serviceExploreText", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out", delay: 0.2 }) });

    mm.add("(min-width: 1024px)", () => {
        initHeadingLetterAnimation("#serviceHeading", "#serviceSection");
        initHeadingLetterAnimation("#testimonialHeading", "#testimonialSection");
        initHeadingLetterAnimation("#clientHeading", "#clientsSection");
    });

    // Home Page Specific SVG Animations
    const icons = ["assets/images/logo.png", "assets/images/icon-4.png", "assets/images/icon-5.png"];
    let currentIcon = 0;
    if (document.getElementById("rotatingIcon")) {
        gsap.timeline({ repeat: -1, repeatDelay: 1 })
            .to("#rotatingIcon", { scale: 0, rotate: 180, duration: 0.4, ease: "power2.in", onComplete: () => { currentIcon = (currentIcon + 1) % icons.length; document.getElementById("rotatingIcon").src = icons[currentIcon]; } })
            .to("#rotatingIcon", { scale: 1, rotate: 360, duration: 0.5, ease: "back.out(1.7)" });
    }

    if (document.getElementById("svg-stage")) {
        gsap.set("#svg-stage", { opacity: 1 });
        const svgTl = gsap.timeline({ repeat: -1, repeatDelay: 0.5 });
        svgTl.to("#g2_mask circle", { duration: 0.4, attr: { r: "124" }, ease: "circ" }, 0)
             .fromTo(".group2", { scale: 1, transformOrigin: "124 124" }, { duration: 1.5, scale: 0.9, ease: "none" }, 0)
             .to("#g2_mask circle", { duration: 0.3, attr: { cx: (i) => ["+=248", "-=248"][i] }, ease: "sine.in" }, 1.15)
             .fromTo(".group3", { transformOrigin: "124 124", rotate: -90 }, { duration: 0.9, rotate: 0, ease: "expo" }, 1.3)
             .fromTo("#g3_mask rect", { transformOrigin: (i) => ["0 124", "124 0", "124 124", "248 124"][i], scale: 0 }, { duration: 0.4, scale: 1, ease: "expo", stagger: -0.03 }, 1.3)
             .to(".group3", { duration: 0.01, scale: 0 }, 2.4)
             .fromTo("#g5_mask path", { transformOrigin: "124 124", scale: 0 }, { duration: 0.8, scale: 1, ease: "expo" }, 2.4)
             .fromTo("#g5_mask circle", { transformOrigin: "83 0", scale: 0 }, { scale: 1, ease: "expo" }, 2.4);
    }
}


// ==========================================
// 3. ABOUT PAGE ANIMATIONS
// ==========================================
function initAboutPage() {
    if (!document.getElementById("aboutIntroMediaSection")) return; // Only run on About Page

    function initAboutIntroParallax() {
        const parallaxImage = document.getElementById('aboutIntroParallaxImage');
        const introSection = document.getElementById('aboutIntroMediaSection');
        const introFrame = document.getElementById('aboutIntroMediaFrame');
        const textBlock = document.getElementById('aboutIntroTextBlock');
        
        if (!parallaxImage || !introSection || !introFrame) return;

        if (textBlock) gsap.set(textBlock, { marginBottom: 0 });
        gsap.set(parallaxImage, { yPercent: -16 });

        if (window.innerWidth >= 768) {
            const initialFrameWidth = introFrame.offsetWidth;
            const initialFrameHeight = introFrame.offsetHeight;
            const getExpandScrollDistance = () => Math.max(520, Math.round(window.innerHeight * 0.95));
            const getExpandedFrameMetrics = () => ({ width: document.documentElement.clientWidth, height: 470 });

            gsap.set(introFrame, { width: initialFrameWidth, height: initialFrameHeight, maxHeight: 'none', transformOrigin: 'right center', force3D: true });
            gsap.set(parallaxImage, { force3D: true });

            gsap.timeline({
                defaults: { ease: 'none' },
                scrollTrigger: { trigger: introSection, start: 'top 74%', end: () => `+=${getExpandScrollDistance()}`, scrub: 2, invalidateOnRefresh: true }
            })
            .to(textBlock, { marginBottom: 55, duration: 1 }, 0)
            .fromTo(introFrame, { width: initialFrameWidth, height: initialFrameHeight }, { width: () => getExpandedFrameMetrics().width, height: () => getExpandedFrameMetrics().height, duration: 1 }, 0)
            .to(parallaxImage, { yPercent: 6, duration: 1 }, 0);
            return;
        }

        if (textBlock) gsap.set(textBlock, { clearProps: 'marginBottom' });
        gsap.to(parallaxImage, { yPercent: 8, ease: 'none', scrollTrigger: { trigger: introSection, start: 'top bottom', end: 'bottom top', scrub: 1, invalidateOnRefresh: true } });
    }

    function initStoryVerticalSection() {
        const storySection = document.getElementById('storySection');
        if (!storySection) return;

        const heroImage = document.getElementById('storyImageHero');
        const videoElement = document.getElementById('storyBackdropVideo');
        const heroOverlay = heroImage.querySelector('.story-overlay'); 
        const headingWrapper = document.getElementById('storyHeadingWrapper');
        const cards = gsap.utils.toArray('.story-rotate-card');

        gsap.set(heroImage, { clearProps: "all" });
        gsap.set(cards, { autoAlpha: 0, scale: 0.6, rotationX: 65, y: 120, z: -150, transformOrigin: "center center" });

        const tl = gsap.timeline({
            scrollTrigger: { id: 'story-vertical-pin', trigger: storySection, start: 'top top', end: () => `+=${window.innerHeight * 4}`, scrub: 1, pin: true, anticipatePin: 1, invalidateOnRefresh: true }
        });

        tl.to(headingWrapper, { y: -50, autoAlpha: 0, duration: 1, ease: 'power2.in' }, 0)
          .to(heroImage, { width: '100vw', height: '100vh', top: '50%', borderRadius: 0, duration: 1.5, ease: 'power2.inOut' }, 0)
          .to(videoElement, { scale: 1, duration: 1.5, ease: 'power2.inOut' }, 0)
          .to(heroOverlay, { opacity: 1, duration: 1.5 }, 0);

        cards.forEach((card, i) => {
            const isLast = i === cards.length - 1;
            tl.to(card, { autoAlpha: 1, scale: 1, rotationX: 0, y: 0, z: 0, duration: 1.4, ease: 'power2.out' }, i === 0 ? "-=0.2" : "-=0.4");
            tl.to(card, { duration: 1.2 });
            if (!isLast) tl.to(card, { autoAlpha: 0, scale: 0.6, rotationX: -65, y: -120, z: -150, duration: 1.4, ease: 'power2.in' });
        });
    }

    function initAboutServiceStory() {
        const featureSection = document.getElementById('featureServiceSection');
        if (!featureSection || window.innerWidth < 768) return;

        const storyDisplay = featureSection.querySelector('.service-story-display');
        const storyStage = featureSection.querySelector('.service-story-stage');
        const storyPanels = gsap.utils.toArray('#featureServiceSection .service-story-panel');
        const storyMarkers = gsap.utils.toArray('#featureServiceSection .service-story-marker');

        if (storyPanels.length && storyDisplay && storyStage) {
            let activeIndex = 0;

            const setDesktopPanelState = (activePanel = 0, immediate = false) => {
                storyPanels.forEach((panel, index) => {
                    const isActive = index === activePanel;
                    panel.classList.toggle('is-active', isActive);
                    gsap.killTweensOf(panel);
                    if (immediate) gsap.set(panel, { autoAlpha: isActive ? 1 : 0, zIndex: isActive ? 3 : 1 });
                });
            };

            const transitionDesktopPanel = (nextIndex) => {
                if (!storyPanels[nextIndex] || nextIndex === activeIndex) return;

                const currentPanel = storyPanels[activeIndex];
                const nextPanel = storyPanels[nextIndex];

                storyPanels.forEach((panel, index) => {
                    if (index !== activeIndex && index !== nextIndex) {
                        panel.classList.remove('is-active');
                        gsap.set(panel, { autoAlpha: 0, zIndex: 1 });
                    }
                });

                storyPanels.forEach((panel, index) => { panel.classList.toggle('is-active', index === nextIndex); });

                gsap.killTweensOf([currentPanel, nextPanel]);
                gsap.set(currentPanel, { autoAlpha: 1, zIndex: 2 });
                gsap.set(nextPanel, { autoAlpha: 0, zIndex: 3 });

                gsap.timeline({ defaults: { overwrite: 'auto' } })
                    .to(currentPanel, { autoAlpha: 0, duration: 0.45, ease: 'power2.out' }, 0)
                    .to(nextPanel, { autoAlpha: 1, duration: 0.7, ease: 'power2.out' }, 0.12);

                activeIndex = nextIndex;
            };

            setDesktopPanelState(0, true);

            if (storyMarkers.length) {
                storyMarkers.forEach((marker, index) => {
                    ScrollTrigger.create({ trigger: marker, start: 'top center', end: 'bottom center', invalidateOnRefresh: true, onEnter: () => transitionDesktopPanel(index), onEnterBack: () => transitionDesktopPanel(index) });
                });

                ScrollTrigger.create({
                    trigger: featureSection, start: 'top bottom', end: 'bottom top', invalidateOnRefresh: true,
                    onEnter: () => setDesktopPanelState(activeIndex, true),
                    onLeaveBack: () => { activeIndex = 0; setDesktopPanelState(0, true); },
                    onLeave: () => { activeIndex = storyPanels.length - 1; setDesktopPanelState(activeIndex, true); }
                });
            }
        }
    }

    initAboutIntroParallax();
    initStoryVerticalSection();
    initAboutServiceStory();
}


// ==========================================
// 4. CAREER PAGE ANIMATIONS
// ==========================================
function initCareerPage() {
    
    // Career Carousel Logic
    const carouselRoot = document.getElementById("careerCarousel");
    const track = document.getElementById("careerCarouselTrack");
    
    if (carouselRoot && track) {
        const prevButton = document.getElementById("careerPrev");
        const nextButton = document.getElementById("careerNext");
        const dotsWrap = document.getElementById("careerCarouselDots");
        const slides = Array.from(track.querySelectorAll(".career-image-slide"));

        if (slides.length) {
            let activeIndex = 0;
            let autoPlayTimer;
            let activeTween;

            const dots = dotsWrap ? slides.map((_, index) => {
                const dot = document.createElement("button");
                dot.type = "button";
                dot.className = "h-2.5 w-2.5 rounded-full transition";
                dot.setAttribute("aria-label", "Go to slide " + (index + 1));
                dot.addEventListener("click", () => { showSlide(index); restartTimer(); });
                dotsWrap.appendChild(dot);
                return dot;
            }) : [];

            slides.forEach((slide, index) => {
                slide.style.zIndex = String(slides.length - index);
                slide.style.opacity = "1";
                slide.style.transform = "translateY(0%)";
                slide.style.clipPath = "inset(0% 0% 0% 0%)";
                slide.style.willChange = "transform, clip-path";
                const image = slide.querySelector("img");
                if (image) {
                    image.style.transform = "translateY(0%) scale(1.08)";
                    image.style.transformOrigin = "center center";
                    image.style.willChange = "transform";
                }
            });

            function renderDots() {
                dots.forEach((dot, index) => {
                    dot.classList.toggle("bg-white", index === activeIndex);
                    dot.classList.toggle("bg-white/35", index !== activeIndex);
                });
            }

            function reorderStack(nextIndex) {
                slides.forEach((slide) => {
                    slide.style.transform = "translateY(0%)";
                    slide.style.clipPath = "inset(0% 0% 0% 0%)";
                    const image = slide.querySelector("img");
                    if (image) image.style.transform = "translateY(0%) scale(1.08)";
                });

                slides[nextIndex].style.zIndex = String(slides.length);
                let z = slides.length - 1;
                slides.forEach((slide, index) => {
                    if (index === nextIndex) return;
                    slide.style.zIndex = String(z);
                    z -= 1;
                });
            }

            function showSlide(index, immediate) {
                const nextIndex = (index + slides.length) % slides.length;
                if (nextIndex === activeIndex && !immediate) return;

                const currentSlide = slides[activeIndex];
                const nextSlide = slides[nextIndex];
                const currentImage = currentSlide.querySelector("img");
                const nextImage = nextSlide.querySelector("img");

                if (immediate) {
                    reorderStack(nextIndex);
                    activeIndex = nextIndex;
                    renderDots();
                    return;
                }

                if (activeTween) activeTween.kill();

                nextSlide.style.zIndex = String(slides.length - 1);
                currentSlide.style.zIndex = String(slides.length);
                gsap.set(nextSlide, { yPercent: 14, clipPath: "inset(100% 0% 0% 0%)" });
                if (nextImage) gsap.set(nextImage, { yPercent: 16, scale: 1.16, transformOrigin: "center center" });

                activeTween = gsap.timeline({ onComplete: () => { reorderStack(nextIndex); activeIndex = nextIndex; renderDots(); } });

                activeTween.to(currentSlide, { yPercent: -16, clipPath: "inset(0% 0% 100% 0%)", duration: 1.2, ease: "power4.inOut" }, 0);
                if (currentImage) activeTween.to(currentImage, { yPercent: -12, scale: 1.02, duration: 1.2, ease: "power3.inOut" }, 0);
                activeTween.to(nextSlide, { yPercent: 0, clipPath: "inset(0% 0% 0% 0%)", duration: 1.2, ease: "power4.out" }, 0.04);
                if (nextImage) activeTween.to(nextImage, { yPercent: 0, scale: 1.08, duration: 1.24, ease: "power3.out" }, 0.03);
            }

            function goTo(index) { showSlide(index, false); renderDots(); }

            function restartTimer() {
                clearInterval(autoPlayTimer);
                autoPlayTimer = setInterval(() => goTo(activeIndex + 1), 4500);
            }

            if (prevButton) prevButton.addEventListener("click", () => { goTo(activeIndex - 1); restartTimer(); });
            if (nextButton) nextButton.addEventListener("click", () => { goTo(activeIndex + 1); restartTimer(); });

            carouselRoot.addEventListener("mouseenter", () => clearInterval(autoPlayTimer));
            carouselRoot.addEventListener("mouseleave", restartTimer);

            showSlide(0, true);
            restartTimer();
        }
    }

    // Shared Testimonials logic
    const testimonialSection = document.getElementById("testimonialSection");
    if (testimonialSection) {
        const testimonialSlides = gsap.utils.toArray("#testimonialSection .testimonial-slide");
        const prevButton = document.getElementById("testimonialPrev");
        const nextButton = document.getElementById("testimonialNext");
        const prevButtonMobile = document.getElementById("testimonialPrevMobile");
        const nextButtonMobile = document.getElementById("testimonialNextMobile");
        const testimonialCarousel = document.querySelector("#testimonialSection .testimonial-carousel");

        if (testimonialSlides.length) {
            let currentSlide = 0;
            let testimonialTimer = null;
            let testimonialAnimating = false;

            function syncActiveTestimonialHeight(animate = false) {
                if (!testimonialCarousel) return;
                const activeSlide = testimonialSlides[currentSlide];
                if (!activeSlide) return;
                const nextHeight = activeSlide.scrollHeight;
                if (animate) gsap.to(testimonialCarousel, { height: nextHeight, duration: 0.35, ease: "power2.out", overwrite: "auto" });
                else gsap.set(testimonialCarousel, { height: nextHeight });
            }

            function setTestimonialSlideState() {
                testimonialSlides.forEach((slide, index) => {
                    slide.classList.toggle("is-active", index === currentSlide);
                    gsap.set(slide, { autoAlpha: index === currentSlide ? 1 : 0, y: 0 });
                });
                syncActiveTestimonialHeight(false);
            }

            function animateToTestimonial(targetIndex, direction = 1) {
                if (testimonialAnimating) return;
                const slideCount = testimonialSlides.length;
                const nextIndex = (targetIndex + slideCount) % slideCount;
                if (nextIndex === currentSlide) return;

                const outgoing = testimonialSlides[currentSlide];
                const incoming = testimonialSlides[nextIndex];
                testimonialAnimating = true;
                incoming.classList.add("is-active");

                gsap.set(incoming, { autoAlpha: 0, y: direction > 0 ? 14 : -14 });
                gsap.set(outgoing, { autoAlpha: 1, y: 0 });

                gsap.timeline({
                    defaults: { duration: 0.6, ease: "power3.out" },
                    onComplete: () => {
                        outgoing.classList.remove("is-active");
                        gsap.set(outgoing, { autoAlpha: 0, y: 0 });
                        gsap.set(incoming, { autoAlpha: 1, y: 0 });
                        currentSlide = nextIndex;
                        syncActiveTestimonialHeight(true);
                        testimonialAnimating = false;
                    },
                })
                .to(outgoing, { autoAlpha: 0, y: direction > 0 ? -12 : 12 }, 0)
                .to(incoming, { autoAlpha: 1, y: 0 }, 0.05);
            }

            function resetTestimonialTimer() {
                if (testimonialTimer) clearInterval(testimonialTimer);
                testimonialTimer = setInterval(() => animateToTestimonial(currentSlide + 1, 1), 4500);
            }

            function bindTestimonialButton(button, handler) {
                if (!button) return;
                button.addEventListener("click", () => { handler(); resetTestimonialTimer(); });
            }

            setTestimonialSlideState();
            bindTestimonialButton(prevButton, () => animateToTestimonial(currentSlide - 1, -1));
            bindTestimonialButton(nextButton, () => animateToTestimonial(currentSlide + 1, 1));
            bindTestimonialButton(prevButtonMobile, () => animateToTestimonial(currentSlide - 1, -1));
            bindTestimonialButton(nextButtonMobile, () => animateToTestimonial(currentSlide + 1, 1));

            resetTestimonialTimer();

            if (testimonialCarousel) {
                testimonialCarousel.addEventListener("mouseenter", () => { if (testimonialTimer) clearInterval(testimonialTimer); });
                testimonialCarousel.addEventListener("mouseleave", resetTestimonialTimer);
            }

            window.addEventListener('resize', () => syncActiveTestimonialHeight(false));
        }
    }

    // Pinned Sections
    if (document.getElementById("careerPinnedHeroSection")) {
        ScrollTrigger.create({
            trigger: "#careerPinnedHeroSection",
            start: "top top",
            pin: true,
            pinSpacing: false,
        });
    }

    if (document.getElementById("careerOpenRolesSection")) {
        ScrollTrigger.create({
            trigger: "#careerOpenRolesSection",
            start: "top bottom",
            toggleClass: { targets: "#careerOpenRolesSection", className: "hero-shadow-active" }
        });
    }
}


// ==========================================
// 5. CAREER DETAILS PAGE & COMPONENTS
// ==========================================

function initCareerDetailsPage() {
    const titleElement = document.getElementById("dynamicJobTitle");
    
    // Only run this logic if we are actually on the Career Details page
    if (!titleElement) return;

    // 5.1. Job Database
    const jobDatabase = {
        "ui-ux-designer": {
            title: "UI/UX Designer",
            meta: "Full Time <span class='mx-3 text-black/60'>•</span> 1 - 3 Years Experience <span class='mx-3 text-black/60'>•</span> On-Site",
            intro: `
                <hr />
                <p>As digital experiences become a standard part of almost every industry, great user experience design is crucial to success. We are looking for a qualified UX Designer to help implement effective and user-friendly designs.</p>
                <p>The ideal candidate will confidently apply UX design skills to shape digital environments for a broad user base. This individual should demonstrate strong creativity and a solid understanding of design principles.</p>
            `,
            responsibilities: [
                "Ideate on new and innovative UX concepts",
                "Identify business and technical requirements",
                "Create design wireframes and prototypes",
                "Design and present UX solutions to stakeholders"
            ],
            requirements: [
                "Bachelor’s degree in Computer Science, IT, or a related field",
                "At least 1+ year of relevant experience in UI/UX design",
                "Strong knowledge of design tools such as Figma, Sketch, or Adobe XD",
                "Basic understanding of HTML, CSS, or JavaScript"
            ]
        },
        "mern-stack-developer": {
            title: "MERN Stack Developer",
            meta: "Full Time <span class='mx-3 text-black/60'>•</span> 2 - 4 Years Experience <span class='mx-3 text-black/60'>•</span> Hybrid",
            intro: `
                <hr />
                <p>We are looking for a skilled MERN Stack Developer to join our engineering team. You will be responsible for building full-stack web applications using MongoDB, Express.js, React.js, and Node.js.</p>
                <p>Your primary focus will be on developing user interface components and implementing them following well-known React workflows, while seamlessly connecting them to robust Node.js backend APIs.</p>
            `,
            responsibilities: [
                "Design, build, and maintain highly reusable JavaScript, HTML and CSS code.",
                "Translate user and business needs into functional frontend design.",
                "Develop scalable RESTful APIs using Node.js and Express.",
                "Manage database architecture utilizing MongoDB."
            ],
            requirements: [
                "In-depth knowledge of JavaScript, DOM manipulation and the JavaScript object model.",
                "Thorough understanding of React.js and its core principles.",
                "Experience with Node.js and Express.js.",
                "Familiarity with RESTful APIs and modern authorization mechanisms."
            ]
        },
        "mobile-app-developer": {
            title: "Mobile App Developer",
            meta: "Full Time <span class='mx-3 text-black/60'>•</span> 1 - 3 Years Experience <span class='mx-3 text-black/60'>•</span> Remote",
            intro: `
                <hr />
                <p>We are seeking an innovative Mobile App Developer to design, build, and maintain next-generation iOS and Android applications. You will collaborate closely with UI/UX designers and backend engineers.</p>
                <p>If you are passionate about mobile platforms and translating code into user-friendly apps, we would like to meet you.</p>
            `,
            responsibilities: [
                "Develop application programming interfaces (APIs) to support mobile functionality.",
                "Write clean, readable, and testable code.",
                "Troubleshoot and debug to optimize performance.",
                "Stay up-to-date with new mobile technology trends, applications, and protocols."
            ],
            requirements: [
                "Proven experience as a Mobile Developer using Flutter or React Native.",
                "Familiarity with OOP design principles.",
                "Experience with third-party libraries and APIs.",
                "Excellent analytical skills with a good problem-solving attitude."
            ]
        }
    };

    // 5.2. Populate Page Content Based on URL Param
    const urlParams = new URLSearchParams(window.location.search);
    const jobId = urlParams.get('job');

    if (!jobId || !jobDatabase[jobId]) {
        window.location.href = "career.php";
        return;
    }

    const job = jobDatabase[jobId];

    document.getElementById("dynamicBreadcrumb").textContent = job.title;
    titleElement.textContent = job.title;
    document.getElementById("dynamicJobMeta").innerHTML = job.meta;
    document.getElementById("dynamicJobIntro").innerHTML = job.intro;

    const bottomStickyTitle = document.querySelector("#bottomStickySection p");
    if (bottomStickyTitle) bottomStickyTitle.textContent = "Apply for " + job.title;

    const generateListHTML = (items) => items.map(item =>
        `<li class="flex items-center gap-3 before:content-[''] before:block before:h-0.5 before:w-2.5 before:rounded-full before:bg-black"><span>${item}</span></li>`
    ).join('');

    document.getElementById("dynamicJobResponsibilities").innerHTML = generateListHTML(job.responsibilities);
    document.getElementById("dynamicJobRequirements").innerHTML = generateListHTML(job.requirements);

    // 5.3. Lock Dropdown Form Selection
    const applyingForSelect = document.querySelector('select[name="applyingFor"]');
    if (applyingForSelect) {
        Array.from(applyingForSelect.options).forEach(option => {
            if (option.text.trim() === job.title || option.value === jobId) {
                applyingForSelect.value = option.value;
                applyingForSelect.innerHTML = `<option selected>Position : ${job.title}</option>`;
                applyingForSelect.style.pointerEvents = 'none';
                applyingForSelect.classList.add('bg-white', 'text-black');
                
                const arrowIcon = applyingForSelect.nextElementSibling;
                if (arrowIcon) arrowIcon.style.display = 'none';
            }
        });
    }

    // 5.4. Application Modal Logic
    const applyButtons = document.querySelectorAll('.apply-now-btn');
    const modal = document.getElementById('applicationModal');
    const modalContent = document.getElementById('modalContent');
    const closeModalBtn = document.getElementById('closeModal');
    const applicationForm = document.getElementById('applicationForm');
    const attachmentInput = document.getElementById('attachmentInput');
    const attachmentLabelText = document.getElementById('attachmentLabelText');

    if (modal && modalContent) {
        applyButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                setTimeout(() => { modalContent.classList.remove('-translate-x-full'); }, 10);
            });
        });

        const closeApplicationModal = () => {
            modalContent.classList.add('-translate-x-full');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                if (applicationForm) applicationForm.reset();
                if (attachmentLabelText) attachmentLabelText.textContent = "Add an attachment";
            }, 300);
        };

        if (closeModalBtn) closeModalBtn.addEventListener('click', closeApplicationModal);
        modal.addEventListener('click', (e) => { if (e.target === modal) closeApplicationModal(); });

        if (attachmentInput && attachmentLabelText) {
            attachmentInput.addEventListener('change', (e) => {
                if (e.target.files && e.target.files.length > 0) {
                    attachmentLabelText.textContent = e.target.files[0].name;
                } else {
                    attachmentLabelText.textContent = "Add an attachment";
                }
            });
        }
    }

    // 5.5. Phone Input Formatting (intl-tel-input)
    const phoneInputField = document.querySelector('input[name="phone"]');
    if (phoneInputField && window.intlTelInput) {
        window.intlTelInput(phoneInputField, {
            initialCountry: "in",
            onlyCountries: ["in"],
            separateDialCode: false,
            showFlags: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js",
        });

        phoneInputField.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    }
}

// ==========================================
// 6. WEB DEVELOPMENT PAGE ANIMATIONS
// ==========================================
function initWebDevPage() {
    // Basic check to ensure we are on the Web Dev page
    const isWebDevPage = document.getElementById("webDevHeroParallaxImage");
    if (!isWebDevPage) return;

    // 6.1. SVG Stage Animation
    function initWebDevSvgAnimation() {
        const svgStage = document.getElementById("svg-stage");
        if (!svgStage) return;

        gsap.set('#svg-stage', { opacity: 1 });

        const webDevSvgTl = gsap.timeline({ repeat: -1, repeatDelay: 0.5 })
            .fromTo('.group1', { scale: 0.1, transformOrigin: '124 124' }, { duration: 0.35, scale: 1, ease: 'expo.inOut' })
            .to('.group1', { duration: 1.2, rotate: 15, ease: 'none' }, 0.1)
            .to('.group1 image', { scale: (i) => [0.4, 0.2, 0.3][i], x: (i) => [0, 135, 100][i], y: (i) => [90, 24, 124][i], ease: 'back' }, 0.4)
            .to('.group1 image', { duration: 0.01, opacity: 0, stagger: 0.06 }, 1.1)
            .to('#g2_mask circle', { duration: 0.4, attr: { r: "124" }, ease: 'circ' }, 1.3)
            .fromTo('.group2', { scale: 1, transformOrigin: '124 124' }, { duration: 1.5, scale: 0.9, ease: 'none' }, 1.3)
            .to('#g2_mask circle', { duration: 0.3, attr: { cx: (i) => ["+=248", "-=248"][i] }, ease: 'sine.in' }, 2.45)
            .fromTo('.group3', { transformOrigin: '124 124', rotate: -90 }, { duration: 0.9, rotate: 0, ease: 'expo' }, 2.6)
            .fromTo('#g3_mask rect', { transformOrigin: (i) => ['0 124', '124 0', '124 124', '248 124'][i], scale: 0 }, { duration: 0.4, scale: 1, ease: 'expo', stagger: -0.03 }, 2.6)
            .to('.group3', { duration: 0.01, scale: 0 }, 3.7)
            .fromTo('#g5_mask path', { transformOrigin: '124 124', scale: 0 }, { duration: 0.8, scale: 1, ease: 'expo' }, 4.7)
            .fromTo('#g5_mask circle', { transformOrigin: '83 0', scale: 0 }, { scale: 1, ease: 'expo' }, 4.7);

        if (typeof GSDevTools !== "undefined") {
            GSDevTools.create({ animation: webDevSvgTl });
        }
    }

    // 6.2. Services Horizontal Scroll
    function initWebDevServicesScroll() {
        const section = document.querySelector("#servicesSection");
        const track = document.querySelector("#servicesHorizontalTrack");
        const cards = gsap.utils.toArray(".services-horizontal-card");

        if (section && track && cards.length > 0) {
            let mm = gsap.matchMedia();

            // DESKTOP & TABLET: Apply horizontal scroll and active states
            mm.add("(min-width: 601px)", () => {
                let currentActiveIndex = -1;

                function activateCard(activeIndex) {
                    if (currentActiveIndex === activeIndex) return; 
                    currentActiveIndex = activeIndex;

                    cards.forEach((card, index) => {
                        if (index === activeIndex) {
                            card.classList.add("is-active");

                            const svgElements = card.querySelectorAll(".card-svg g path");
                            gsap.fromTo(svgElements,
                                { opacity: 0, scale: 0.5, transformOrigin: "center" },
                                { opacity: 1, scale: 1, duration: 0.6, stagger: 0.1, ease: "back.out(2)", overwrite: "auto" }
                            );
                        } else {
                            card.classList.remove("is-active");
                        }
                    });
                }

                gsap.to(track, {
                    x: () => -(track.scrollWidth - window.innerWidth),
                    ease: "none",
                    scrollTrigger: {
                        trigger: section,
                        start: "top top",
                        end: () => `+=${track.scrollWidth}`, 
                        pin: true,
                        scrub: 1,
                        invalidateOnRefresh: true,
                        onUpdate: (self) => {
                            let activeIndex = Math.floor(self.progress * cards.length);

                            if (activeIndex >= cards.length) {
                                activeIndex = cards.length - 1;
                            }

                            activateCard(activeIndex);
                        }
                    }
                });
            });

            // MOBILE: Disable GSAP scroll and ensure SVGs are visible statically
            mm.add("(max-width: 600px)", () => {
                cards.forEach(card => card.classList.remove("is-active"));
                const allSvgs = document.querySelectorAll(".card-svg g path");
                gsap.killTweensOf(allSvgs);
                gsap.set(allSvgs, { opacity: 1, scale: 1, clearProps: "all" });
            });
        }
    }

    // 6.3. Accordion Process
    function initWebDevAccordion() {
        const accordionHeaders = document.querySelectorAll(".accordion-header");
        accordionHeaders.forEach((header) => {
            header.addEventListener("click", () => {
                const content = header.nextElementSibling;
                const verticalLine = header.querySelector(".vertical-line");
                const isOpen = header.classList.contains("active");

                // Close all other open items
                document.querySelectorAll(".accordion-header").forEach(h => {
                    if (h !== header && h.classList.contains("active")) {
                        h.click();
                    }
                });

                header.classList.toggle("active");

                if (!isOpen) {
                    gsap.to(content, { height: "auto", duration: 0.5, ease: "power2.out" });
                    gsap.to(verticalLine, { rotation: 90, duration: 0.3 });
                } else {
                    gsap.to(content, { height: 0, duration: 0.5, ease: "power2.inOut" });
                    gsap.to(verticalLine, { rotation: 0, duration: 0.3 });
                }
            });
        });
    }

    // 6.4. Case Studies Slider
    function initWebDevSlider() {
        const webDevSlider = document.getElementById("slider");
        if (!webDevSlider) return;

        const desktopPrevBtn = document.getElementById("desktopPrevBtn");
        const desktopNextBtn = document.getElementById("desktopNextBtn");
        const mobilePrevBtn = document.getElementById("mobilePrevBtn");
        const mobileNextBtn = document.getElementById("mobileNextBtn");

        const originalSlides = Array.from(webDevSlider.children);
        const totalOriginal = originalSlides.length;

        originalSlides.forEach(slide => {
            const cloneBefore = slide.cloneNode(true);
            const cloneAfter = slide.cloneNode(true);
            
            webDevSlider.appendChild(cloneAfter);
            webDevSlider.insertBefore(cloneBefore, webDevSlider.firstChild);
        });

        let currentIndex = totalOriginal;
        let isAnimating = false;

        function getSlideWidth() {
            const slide = webDevSlider.querySelector("article");
            const gap = parseFloat(window.getComputedStyle(webDevSlider).gap) || 24; 
            return slide.offsetWidth + gap;
        }

        function setPosition(smooth = true) {
            webDevSlider.style.transition = smooth ? "transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)" : "none";
            webDevSlider.style.transform = `translate3d(-${currentIndex * getSlideWidth()}px, 0, 0)`;
        }

        setPosition(false);

        function handleSlide(direction) {
            if (isAnimating) return;
            isAnimating = true;

            currentIndex += direction;
            setPosition(true);
        }

        webDevSlider.addEventListener("transitionend", () => {
            isAnimating = false;

            if (currentIndex >= totalOriginal * 2) {
                currentIndex -= totalOriginal;
                setPosition(false);
            }
            
            if (currentIndex < totalOriginal) {
                currentIndex += totalOriginal;
                setPosition(false);
            }
        });

        desktopNextBtn?.addEventListener("click", () => handleSlide(1));
        mobileNextBtn?.addEventListener("click", () => handleSlide(1));
        
        desktopPrevBtn?.addEventListener("click", () => handleSlide(-1));
        mobilePrevBtn?.addEventListener("click", () => handleSlide(-1));

        window.addEventListener("resize", () => {
            setPosition(false);
        });
    }

    // Initialize all Web Dev components
    initWebDevSvgAnimation();
    initWebDevServicesScroll();
    initWebDevAccordion();
    initWebDevSlider();
}


// Sub-Component: Bottom Sticky Banner
function initBottomStickySection() {
    const bottomSection = document.getElementById("bottomStickySection");
    const footer = document.getElementById("siteFooter");
    if (!bottomSection || !footer) return;

    let isVisible = false;
    let mm = gsap.matchMedia();

    mm.add({
        isMobile: "(max-width: 767px)",
        isDesktop: "(min-width: 768px)"
    }, (context) => {
        let { isMobile } = context.conditions;
        let hiddenY = isMobile ? -250 : 100;
        isVisible = false;
        gsap.set(bottomSection, { yPercent: hiddenY });

        function updateVisibility() {
            const footerRect = footer.getBoundingClientRect();
            const showAfterScroll = window.scrollY > 260;
            const footerNotReached = footerRect.top > window.innerHeight - 80;
            const shouldShow = showAfterScroll && footerNotReached;

            if (shouldShow !== isVisible) {
                isVisible = shouldShow;
                gsap.to(bottomSection, { yPercent: shouldShow ? 0 : hiddenY, duration: 0.5, ease: "power2.out" });
            }
        }

        window.addEventListener("scroll", updateVisibility, { passive: true });
        updateVisibility();

        return () => window.removeEventListener("scroll", updateVisibility);
    });
}


// ==========================================
// 7. MASTER INITIALIZATION
// ==========================================
function initAll() {
    initHomePage();
    initAboutPage();
    initCareerPage();
    initCareerDetailsPage();
    initWebDevPage();
    initBottomStickySection();
}

window.addEventListener("DOMContentLoaded", () => {
    initAll();
});

window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
    syncMenuCloseAnchor();
});

window.addEventListener('load', () => {
    setTimeout(() => { ScrollTrigger.refresh(); }, 100);
});

// ==========================================
// 8. DEV TOOLS (Live Reload)
// ==========================================
if ("WebSocket" in window) {
    (function () {
        function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
                var elem = sheets[i];
                var parent = elem.parentElement || head;
                parent.removeChild(elem);
                var rel = elem.rel;
                if ((elem.href && typeof rel != "string") || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, "");
                    elem.href = url + (url.indexOf("?") >= 0 ? "&" : "?") + "_cacheOverride=" + new Date().valueOf();
                }
                parent.appendChild(elem);
            }
        }
        var protocol = window.location.protocol === "http:" ? "ws://" : "wss://";
        var address = protocol + window.location.host + window.location.pathname + "/ws";
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
            if (msg.data == "reload") window.location.reload();
            else if (msg.data == "refreshcss") refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem("IsThisFirstTime_Log_From_LiveServer")) {
            console.log("Live reload enabled.");
            sessionStorage.setItem("IsThisFirstTime_Log_From_LiveServer", true);
        }
    })();
}
