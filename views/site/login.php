<?php

use yii\helpers\Html;

$this->title = 'Login';

?>

<div class="login-page">

    <div class="login-card">

        <!-- THEME / DISPLAY TOGGLE -->
        <button
            type="button"
            class="login-theme-toggle"
            id="loginThemeToggle"
            aria-label="Ubah tampilan">
            <i class="bi bi-circle-half"></i>
        </button>


        <!-- =====================================================
             LEFT : ILLUSTRATION
        ====================================================== -->
        <section class="login-illustration-panel">

            <div class="login-illustration-wrap">

                <?= Html::img(
                    '@web/images/login/mobile-login-concept-illustration_114360-83.avif',
                    [
                        'class' => 'login-illustration-image',
                        'alt' => 'Ilustrasi login Layanan Informasi Kerja Sama',
                    ]
                ) ?>

            </div>

        </section>


        <!-- =====================================================
             RIGHT : LOGIN FORM
        ====================================================== -->
        <section class="login-form-panel">

            <div class="login-form-content">

                <!-- LOGO LINKS -->
                <div class="login-logo">

                    <?= Html::img(
                        '@web/images/logo/logo_final.png',
                        [
                            'class' => 'login-logo-image',
                            'alt' => 'LINKS - Layanan Informasi Kerja Sama',
                        ]
                    ) ?>

                </div>


                <!-- HEADING -->
                <div class="login-heading">

                    <h1>
                        Layanan Informasi Kerja Sama
                    </h1>

                    <p>
                        Selamat Siang, silakan masuk akun anda.
                    </p>

                </div>


                <!-- FORM -->
                <form
                    id="loginForm"
                    class="login-form"
                    action="#"
                    method="post">

                    <!-- USERNAME -->
                    <div class="login-field">

                        <label for="username">
                            Username
                        </label>

                        <div class="login-input-wrapper">

                            <i class="bi bi-person-fill login-input-icon"></i>

                            <input
                                type="text"
                                id="username"
                                name="username"
                                class="login-input"
                                placeholder="Username"
                                autocomplete="username"
                                required>

                        </div>

                    </div>


                    <!-- PASSWORD -->
                    <div class="login-field">

                        <label for="password">
                            Password
                        </label>

                        <div class="login-input-wrapper">

                            <i class="bi bi-lock-fill login-input-icon"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="login-input"
                                placeholder="Password"
                                autocomplete="current-password"
                                required>

                            <button
                                type="button"
                                class="login-password-toggle"
                                id="togglePassword"
                                aria-label="Tampilkan password">
                                <i class="bi bi-eye-fill"></i>
                            </button>

                        </div>

                    </div>


                    <!-- OPTIONS -->
                    <div class="login-options">

                        <label class="login-remember">

                            <input
                                type="checkbox"
                                name="remember"
                                checked>

                            <span>
                                Remember Me
                            </span>

                        </label>


                        <a
                            href="#"
                            class="login-forgot">
                            Lupa Password?
                        </a>

                    </div>


                    <!-- SUBMIT -->
                    <button
                        type="submit"
                        class="login-submit"
                        id="loginSubmit">

                        <span class="login-submit-text">
                            MASUK SEKARANG
                        </span>

                        <span
                            class="login-loading"
                            aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>

                    </button>

                </form>


                <!-- FOOTER -->
                <footer class="login-footer">

                    <p>
                        © 2026 Biro Kerja Sama - Kemnaker RI
                    </p>

                    <div class="login-footer-links">

                        <a href="#">
                            Kebijakan Privasi
                        </a>

                        <span>•</span>

                        <a href="#">
                            Bantuan
                        </a>

                    </div>

                </footer>

            </div>

        </section>

    </div>

</div>

<?php

$loginJs = <<<'JS'

document.addEventListener('DOMContentLoaded', function () {

    const passwordInput =
        document.getElementById('password');

    const togglePassword =
        document.getElementById('togglePassword');

    const loginForm =
        document.getElementById('loginForm');

    const loginSubmit =
        document.getElementById('loginSubmit');

    const themeToggle =
        document.getElementById('loginThemeToggle');

    const loginCard =
        document.querySelector('.login-card');


    /* =====================================================
       SHOW / HIDE PASSWORD
    ====================================================== */

    if (togglePassword && passwordInput) {

        togglePassword.addEventListener('click', function () {

            const isPassword =
                passwordInput.type === 'password';

            passwordInput.type =
                isPassword
                    ? 'text'
                    : 'password';


            const icon =
                togglePassword.querySelector('i');


            if (icon) {

                icon.className =
                    isPassword
                        ? 'bi bi-eye-slash-fill'
                        : 'bi bi-eye-fill';

            }


            togglePassword.setAttribute(
                'aria-label',
                isPassword
                    ? 'Sembunyikan password'
                    : 'Tampilkan password'
            );

        });

    }


    /* =====================================================
       TOGGLE DISPLAY
    ====================================================== */

    if (themeToggle && loginCard) {

        themeToggle.addEventListener('click', function () {

            loginCard.classList.toggle(
                'login-card-dark'
            );

        });

    }


    /* =====================================================
       LOGIN BUTTON LOADING
    ====================================================== */

    if (loginForm && loginSubmit) {

        loginForm.addEventListener(
            'submit',
            function (event) {

                /*
                 * Untuk demo saja.
                 * Kalau login sudah terhubung backend Yii,
                 * hapus event.preventDefault().
                 */
                event.preventDefault();


                loginSubmit.classList.add(
                    'loading'
                );

                loginSubmit.disabled = true;


                setTimeout(function () {

                    loginSubmit.classList.remove(
                        'loading'
                    );

                    loginSubmit.disabled = false;

                }, 1000);

            }
        );

    }

});

JS;


$this->registerJs(
    $loginJs,
    \yii\web\View::POS_END
);

?>