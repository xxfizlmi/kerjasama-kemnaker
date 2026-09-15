document.addEventListener("DOMContentLoaded", function () {
  /* =========================================================
       SCROLL TO TOP
    ========================================================= */

  const scrollTopButton = document.getElementById("inpassingScrollTop");

  if (!scrollTopButton) {
    return;
  }

  function updateScrollButton() {
    if (window.scrollY > 300) {
      scrollTopButton.classList.add("show");
    } else {
      scrollTopButton.classList.remove("show");
    }
  }

  window.addEventListener("scroll", updateScrollButton, {
    passive: true,
  });

  scrollTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  updateScrollButton();
});

document.addEventListener("DOMContentLoaded", function () {
  /* =========================================================
       SCROLL TO TOP
    ========================================================= */

  const scrollTopButton = document.getElementById("inpassingScrollTop");

  if (scrollTopButton) {
    function updateScrollButton() {
      if (window.scrollY > 300) {
        scrollTopButton.classList.add("show");
      } else {
        scrollTopButton.classList.remove("show");
      }
    }

    window.addEventListener("scroll", updateScrollButton, {
      passive: true,
    });

    scrollTopButton.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });

    updateScrollButton();
  }

  /* =========================================================
       VIDEO TUTORIAL
    ========================================================= */

  const videoPlayer = document.getElementById("inpassingVideoPlayer");

  const videoSource = document.getElementById("inpassingVideoSource");

  const videoTitle = document.getElementById("inpassingVideoTitle");

  const videoButtons = document.querySelectorAll(
    ".inpassing-video-selector [data-video-src]",
  );

  if (videoPlayer && videoSource && videoButtons.length) {
    videoButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const source = button.dataset.videoSrc;

        const title = button.dataset.videoTitle;

        if (!source) {
          return;
        }

        /* active button */
        videoButtons.forEach(function (item) {
          item.classList.remove("active");
        });

        button.classList.add("active");

        /* ubah video */
        videoPlayer.pause();

        videoSource.src = source;

        videoPlayer.load();

        /* title */
        if (videoTitle) {
          videoTitle.textContent = title || "Video Tutorial";
        }

        /*
         * Jangan autoplay paksa.
         * Browser tertentu memblokir autoplay.
         */

        videoPlayer.scrollIntoView({
          behavior: "smooth",
          block: "center",
        });
      });
    });
  }
});
