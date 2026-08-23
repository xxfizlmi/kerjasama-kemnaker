document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("navigationSidebar");
    const overlay = document.getElementById("sidebarOverlay");
    const toggle = document.getElementById("sidebarToggle");
    const close = document.getElementById("sidebarClose");

    if (!sidebar || !overlay || !toggle || !close) {
        return;
    }

    /* =========================================================
       SIDEBAR OPEN
       ========================================================= */

    function openSidebar() {
        sidebar.classList.add("active");
        overlay.classList.add("active");

        document.body.classList.add("sidebar-open");

        toggle.setAttribute("aria-expanded", "true");
        sidebar.setAttribute("aria-hidden", "false");
    }

    /* =========================================================
       SIDEBAR CLOSE
       ========================================================= */

    function closeSidebar() {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");

        document.body.classList.remove("sidebar-open");

        toggle.setAttribute("aria-expanded", "false");
        sidebar.setAttribute("aria-hidden", "true");
    }

    toggle.addEventListener("click", openSidebar);

    close.addEventListener("click", closeSidebar);

    overlay.addEventListener("click", closeSidebar);


    /* =========================================================
       ESC
       ========================================================= */

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closeSidebar();
        }
    });


    /* =========================================================
       MOBILE DROPDOWN
       ========================================================= */

    const dropdownParents = sidebar.querySelectorAll(
        ".sidebar-nav > li.dropdown"
    );

    dropdownParents.forEach(function (dropdown) {

        const dropdownToggle = dropdown.querySelector(
            ":scope > a.dropdown-toggle"
        );

        const dropdownMenu = dropdown.querySelector(
            ":scope > .dropdown-menu"
        );

        if (!dropdownToggle || !dropdownMenu) {
            return;
        }

        /* Awalnya tutup */
        dropdownMenu.classList.remove("show");

        dropdownMenu.style.display = "none";

        dropdownToggle.setAttribute("aria-expanded", "false");


        dropdownToggle.addEventListener("click", function (event) {

            /* Hanya untuk mobile */
            if (window.innerWidth > 991.98) {
                return;
            }

            event.preventDefault();
            event.stopPropagation();

            const isOpen =
                dropdown.classList.contains("dropdown-open");

            /* Tutup dropdown lain */
            dropdownParents.forEach(function (otherDropdown) {

                if (otherDropdown !== dropdown) {

                    otherDropdown.classList.remove(
                        "dropdown-open"
                    );

                    const otherMenu =
                        otherDropdown.querySelector(
                            ":scope > .dropdown-menu"
                        );

                    const otherToggle =
                        otherDropdown.querySelector(
                            ":scope > a.dropdown-toggle"
                        );

                    if (otherMenu) {
                        otherMenu.classList.remove("show");
                        otherMenu.style.display = "none";
                    }

                    if (otherToggle) {
                        otherToggle.setAttribute(
                            "aria-expanded",
                            "false"
                        );
                    }
                }
            });


            /* Toggle dropdown */
            if (isOpen) {

                dropdown.classList.remove(
                    "dropdown-open"
                );

                dropdownMenu.classList.remove("show");

                dropdownMenu.style.display = "none";

                dropdownToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            } else {

                dropdown.classList.add(
                    "dropdown-open"
                );

                dropdownMenu.classList.add("show");

                dropdownMenu.style.display = "block";

                dropdownToggle.setAttribute(
                    "aria-expanded",
                    "true"
                );
            }
        });
    });


    /* =========================================================
       LINK DALAM SIDEBAR
       Jangan tutup sidebar ketika klik dropdown toggle
       ========================================================= */

    sidebar.querySelectorAll(
        ".sidebar-nav a"
    ).forEach(function (link) {

        link.addEventListener("click", function (event) {

            /* Dropdown toggle bukan link navigasi */
            if (
                link.classList.contains("dropdown-toggle")
            ) {
                return;
            }

            const href = link.getAttribute("href");

            if (
                href &&
                href !== "#" &&
                !href.startsWith("javascript:")
            ) {
                closeSidebar();
            }
        });
    });


    /* =========================================================
       RESET DROPDOWN SAAT RESIZE KE DESKTOP
       ========================================================= */

    window.addEventListener("resize", function () {

        if (window.innerWidth > 991.98) {

            dropdownParents.forEach(function (dropdown) {

                dropdown.classList.remove(
                    "dropdown-open"
                );

                const menu =
                    dropdown.querySelector(
                        ":scope > .dropdown-menu"
                    );

                const toggle =
                    dropdown.querySelector(
                        ":scope > a.dropdown-toggle"
                    );

                if (menu) {
                    menu.classList.remove("show");
                    menu.style.display = "";
                }

                if (toggle) {
                    toggle.setAttribute(
                        "aria-expanded",
                        "false"
                    );
                }
            });
        }
    });
});