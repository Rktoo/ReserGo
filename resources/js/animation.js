document.addEventListener("DOMContentLoaded", () => {
    const serviceCards = document.querySelectorAll('.service-card');
    const serviceList = document.querySelectorAll('.service-List');


    if (serviceList) {
        gsap.fromTo(serviceList,
            { opacity: 0, x: 100 },
            {
                opacity: 1,
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
            threshold: 0.1
        });
        elements.forEach(el => observer.observe(el));
    }

    if (serviceCards) {
        animationOnScroll(serviceCards, (el) => {
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

    // window.addEventListener('popstate', animateMainContent);
});