$(document).ready(function () {
    $(window).scrollTop(0);
    var e = 0;
    $(window).scroll(function (t) {
        var r = $(this).scrollTop();
        0 === r ? $("header").removeClass("fixed no-fixed") : r > e ? ($("header").removeClass("fixed"), $("header").addClass("no-fixed")) : ($("header").addClass("fixed"), $("header").removeClass("no-fixed")), (e = r);
    }),
        $(".burger").click(function () {
            $(".burger").toggleClass("clicked");
        }),
        $(document).on("click", function (e) {
            const t = $(".navbar-collapse"),
                r = $(".burger");
            if (t.hasClass("show") && !t.is(e.target) && 0 === t.has(e.target).length && !r.is(e.target) && 0 === r.has(e.target).length) {
                bootstrap.Collapse.getInstance(t[0]).hide(), r.removeClass("clicked");
            }
        });
    var t = {
        loop: !1,
        speed: 2e3,
        grabCursor: !1,
        autoplay: { delay: 5e3, disableOnInteraction: !1 },
        watchSlidesProgress: !0,
        mousewheelControl: !0,
        keyboardControl: !0,
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        on: {
            slideChangeTransitionStart: r,
            progress: function () {
                for (var e = this, t = 0; t < e.slides.length; t++) {
                    var r = e.slides[t].progress * (0.5 * e.width);
                    e.slides[t].querySelector(".slide-inner").style.transform = "translate3d(" + r + "px, 0, 0)";
                }
            },
            touchStart: function () {
                for (var e = 0; e < this.slides.length; e++) this.slides[e].style.transition = "";
            },
            setTransition: function (e) {
                for (var t = this, r = 0; r < t.slides.length; r++) (t.slides[r].style.transition = e + "ms"), (t.slides[r].querySelector(".slide-inner").style.transition = e + "ms");
            },
        },
    };
    new Swiper(".banner-slider", t);
    function r() {
        const e = document.querySelector(".swiper-slide-active");
        if (!e) return void console.warn("No active slide found. Skipping animations.");
        gsap.killTweensOf(".first-img, .second-img");
        const t = e.querySelector(".first-img");
        t && gsap.fromTo(t, { y: "-10%", opacity: 0 }, { y: "0%", opacity: 1, duration: 3, ease: "power1.out" });
        const r = e.querySelector(".second-img");
        r && gsap.fromTo(r, { y: "10%", opacity: 0 }, { y: "0%", opacity: 1, duration: 3, ease: "power1.out" });
    }
    if (
        (document.addEventListener("DOMContentLoaded", () => {
            r();
        }),
        document.querySelectorAll(".listening-img").forEach((e) => {
            gsap.from(e, { y: "-10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
        }),
        $(".box-care").hover(function () {
            var e = $(this).attr("data-src");
            $(".image-are img").attr("src", e);
        }),
        document.querySelectorAll(".text-animation").forEach((e) => {
            gsap.from(e, { y: "10%", opacity: 0.5, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "top 80%", toggleActions: "play none none reverse" } });
        }),
        document.querySelectorAll(".box-left-animation").forEach((e) => {
            gsap.from(e, { x: "-10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
        }),
        document.querySelectorAll(".box-right-animation").forEach((e) => {
            gsap.from(e, { x: "10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
        }),
        document.querySelectorAll(".blood-animation").forEach((e) => {
            gsap.from(e, { y: "-30%", opacity: 1, duration: 4.5, ease: "power1.out", scrollTrigger: { trigger: e, start: "top 80%", toggleActions: "play none none reverse" } });
        }),
        document.querySelectorAll(".caption-animation").forEach((e) => {
            gsap.from(e, { x: "-20%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
        }),
        document.querySelectorAll(".box-animation").forEach((e) => {
            gsap.from(e, { y: "10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
        }),
        gsap.registerPlugin(ScrollTrigger),
        document.querySelector(".world-class"))
    ) {
        var o = $(".world-class svg").drawsvg({ duration: 6e3, reverse: !1 });
        ScrollTrigger.create({
            trigger: ".world-class svg",
            start: "top 90%",
            onEnter: () => {
                o.drawsvg("animate");
            },
        }),
            ScrollTrigger.create({
                trigger: ".world-class",
                start: "top center",
                onEnter: () => {
                    [".india", ".germany", ".uk", ".usa"].forEach((e, t) => {
                        document.querySelector(e) && gsap.fromTo(e, { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, delay: 1 * t });
                    });
                },
            });
    }
    if (document.querySelector(".listening")) {
        const e = $(".listening svg").drawsvg({ duration: 1e3, reverse: !1 });
        ScrollTrigger.create({
            trigger: ".listening svg",
            start: "top 80%",
            onEnter: () => {
                e.drawsvg("animate");
            },
        });
    }
    new Swiper(".test-portfolio-slider", {
        loop: !1,
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        slidesPerView: 4,
        paginationClickable: !0,
        spaceBetween: 20,
        pagination: { el: ".slider__pagination", clickable: !0 },
        autoplay: { delay: 3e3, disableOnInteraction: !1 },
        breakpoints: { 1920: { slidesPerView: 4, spaceBetween: 30 }, 1028: { slidesPerView: 3, spaceBetween: 30 }, 991: { slidesPerView: 2, spaceBetween: 30 }, 480: { slidesPerView: 1, spaceBetween: 10 } },
    });
    const n = document.querySelector(".right-card").scrollHeight,
        i = gsap.utils.toArray(".solutions-item");
    gsap.to(".right-card", {
        y: () => -(n - document.querySelector(".right-card").clientHeight),
        ease: "none",
        scrollTrigger: { trigger: ".solutions-screening", start: "top top", end: () => `+=${n}`, scrub: 0, pin: ".solutions-screening", pinSpacing: !0 },
    }),
        i.forEach((e) => {
            gsap.from(e, { y: 10, scrollTrigger: { trigger: e, start: "top 5%", end: "bottom 5%", toggleActions: "play none none reverse" } });
        }),
        gsap.set(".therapy-card", { position: "absolute" }),
        gsap.from(".therapy-card", { yPercent: 400, stagger: 0.5, scrollTrigger: { trigger: ".therapy-guidance", start: "top top", end: "3000px", scrub: 3, pin: !0 } });
    let s = gsap.timeline({ scrollTrigger: { trigger: ".factsContainer", start: "top 30%", end: "bottom 100%", scrub: 2 } }),
        a = [...document.querySelectorAll(".fact")];
    gsap.matchMedia().add("(min-width: 769px)", () => {
        s.to(a, { xPercent: -400, x: () => 0.5 * a.scrollWidth, scrollTrigger: { trigger: ".factsContainer_sm", start: "top 0", end: "+=3000", pin: !0, invalidateOnRefresh: !0, markers: !1, scrub: 2, duration: 10 } });
    }),
        gsap.matchMedia().add("(max-width: 768px)", () => {
            s && s.kill();
        });
}),
    document.addEventListener("DOMContentLoaded", function () {
        if (window.location.hash) {
            let e = document.querySelector(window.location.hash);
            e && e.scrollIntoView({ behavior: "smooth" });
        }
    }),
    document.addEventListener("DOMContentLoaded", () => {
        const e = document.querySelector(".product-horizontal"),
            t = document.querySelector(".product-sec");
        if (e && t) {
            const t = gsap.matchMedia();
            t.add("(min-width: 768px)", () =>
                gsap.to(".product-horizontal", {
                    x: () => -1 * e.scrollWidth,
                    xPercent: 100,
                    scrollTrigger: { trigger: ".product-horizontal", start: "center center", end: "+=2000px", pin: ".product-sec", scrub: 2, invalidateOnRefresh: !0 },
                })
            ),
                t.add("(max-width: 767px)", () => {
                    const e = [...document.querySelectorAll(".card-wrapper")].reduce((e, t) => e + t.offsetHeight, -600);
                    return gsap.to(".product-horizontal", { y: -e, scrollTrigger: { trigger: ".product-horizontal", start: "top top", end: `+=${e}px`, pin: ".product-sec", scrub: 2, invalidateOnRefresh: !0 } });
                });
        }
    }),
    (window.onload = function () {
        setTimeout(function () {
            let e = document.querySelector(".abc");
            e && (e.style.display = "block");
        }, 0);
    });
const scroll = () => {
    const e = document.querySelectorAll(".qwqw"),
        t = e.length;
    e.forEach((e, r) => {
        const o = 0 === r,
            n = r === t - 1;
        gsap.timeline({ scrollTrigger: { trigger: e, start: "top top", end: "+=100%", scrub: !0, pin: !0, pinSpacing: !1 } }).to(
            e,
            { ease: "none", startAt: { filter: "brightness(100%)" }, filter: n ? "none" : "brightness(50%)", scale: o ? 1 : 0.95, borderRadius: o ? 0 : 40 },
            0
        );
    });
};
document.addEventListener("DOMContentLoaded", scroll);
