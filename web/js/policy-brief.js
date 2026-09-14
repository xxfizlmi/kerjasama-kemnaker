document.addEventListener('DOMContentLoaded', function () {

    /* =========================================================
       POLICY BRIEF INFOGRAPHIC LIGHTBOX
    ========================================================= */

    const infographicButton =
        document.getElementById('policyInfographicButton');

    const lightbox =
        document.getElementById('policyLightbox');

    const lightboxClose =
        document.getElementById('policyLightboxClose');


    if (!lightbox) {
        return;
    }


    /* =========================================================
       OPEN LIGHTBOX
    ========================================================= */

    function openPolicyLightbox() {

        lightbox.classList.add('active');

        lightbox.setAttribute(
            'aria-hidden',
            'false'
        );

        document.body.style.overflow = 'hidden';
    }


    /* =========================================================
       CLOSE LIGHTBOX
    ========================================================= */

    function closePolicyLightbox() {

        lightbox.classList.remove('active');

        lightbox.setAttribute(
            'aria-hidden',
            'true'
        );

        document.body.style.overflow = '';
    }


    /* =========================================================
       CLICK INFOGRAPHIC
    ========================================================= */

    if (infographicButton) {

        infographicButton.addEventListener(
            'click',
            function (event) {

                event.preventDefault();

                openPolicyLightbox();
            }
        );

    }


    /* =========================================================
       CLOSE BUTTON
    ========================================================= */

    if (lightboxClose) {

        lightboxClose.addEventListener(
            'click',
            function (event) {

                event.preventDefault();

                closePolicyLightbox();
            }
        );

    }


    /* =========================================================
       CLICK BACKDROP
    ========================================================= */

    lightbox.addEventListener(
        'click',
        function (event) {

            if (event.target === lightbox) {

                closePolicyLightbox();
            }

        }
    );


    /* =========================================================
       ESC KEY
    ========================================================= */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                lightbox.classList.contains('active')
            ) {

                closePolicyLightbox();
            }

        }
    );

});