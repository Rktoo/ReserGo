document.addEventListener("DOMContentLoaded", () => {
    const serviceCards = document.querySelectorAll('.service-card');
    const serviceList = document.querySelectorAll('.service-List');
    const reservationCards = document.querySelectorAll('.reservation-card');
    const title_ = document.querySelector('.title_');
    const subtitle_ = document.querySelector(".subtitle_");
    const scrollBtn = document.querySelector("#scrollOver_");
    const sectionList = document.querySelector("#section_");
    let isScrolling = false;

    if (title_ && subtitle_) {
        gsap.fromTo(title_,
            { opacity: 0, y: -200 },
            {
                opacity: 1, y: 0, duration: 1, ease: "power1.out", onComplete: () => {
                    afterTitle();
                }
            }
        );

        gsap.fromTo(subtitle_,
            { opacity: 0 },
            { opacity: 1, duration: 1, ease: "power2.in" }
        );

    }


    function afterTitle() {
        if (serviceList) {
            gsap.fromTo(serviceList,
                { opacity: 0, autoAlpha: 0, x: 100 },
                {
                    opacity: 1,
                    autoAlpha: 1,
                    x: 0,
                    duration: 1,
                    stagger: 0.4,
                    ease: "power2.out"
                })
        }

        const animationOnScroll = (elements, animationFn) => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animationFn(entry.target);
                        if (window.location.pathname === "/services") {
                            observer.unobserve(entry.target);
                        }
                    }
                });
            }, {
                threshold: 0.56
            });
            elements.forEach(el => observer.observe(el));
        }

        if (serviceCards) {
            if (isScrolling) return;
            animationOnScroll(serviceCards, (el) => {
                gsap.fromTo(el,
                    { opacity: 0, y: 40 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7,
                        stagger: 0.5,
                        ease: "power2.out",
                    }
                );
            });
        }

        if (reservationCards) {
            animationOnScroll(reservationCards, (el) => {
                gsap.fromTo(el,
                    { opacity: 0, y: 40 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7,
                        stagger: 0.5,
                        ease: "power2.out"
                    }
                );
            });
        }

    }

    if (!title_) afterTitle();
    // window.addEventListener('popstate', animateMainContent);

    // Scroll
    if (scrollBtn && sectionList) {
        scrollBtn.addEventListener("click", (event) => {
            let i = 0;
            isScrolling = true;

            gsap.globalTimeline.pause();
            const t = setInterval(() => {
                if (i < window.screen.availHeight - 90) {
                    scrollToContent(i)
                    if (i < 200) {
                        i += 25;
                    } else if (i < 300) {
                        i += 50;
                    } else {
                        i += 100;
                    }
                } else {
                    clearInterval(t);
                    isScrolling = false;
                    gsap.globalTimeline.resume();
                }

            }, 20)
        });

        function scrollToContent(position) {
            window.scrollTo({ top: position, behavior: "smooth" })
        }
    }
});