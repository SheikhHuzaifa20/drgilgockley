<?php include "layouts/app.php"; ?>
<?php include "layouts/header.php"; ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .allura {
        font-family: "Allura" !important;
    }

    .contact-section {
        padding: 100px 0;
        background: #fff;
    }

    .contact-section .container {
        width: 90%;
        max-width: 1350px;
        margin: auto;

        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 80px;
    }

    /* LEFT */

    .contact-left {
        width: 45%;
    }

    .contact-left h2 {

        font-family: "Allura", cursive;
        font-size: 85px;
        line-height: 0.9;
        font-weight: 400;
        color: #111;
    }

    /* RIGHT */

    .contact-right {
        width: 48%;
    }

    .contact-right form {

        position: relative;

        padding: 35px 28px 40px;

        border-radius: 18px;

        overflow: hidden;

        background: url("assets/images/img-25873-1-scaled.webp");
        background-size: cover;
        background-position: center;
    }

    /* Overlay */

    .contact-right form::before {

        content: "";
        position: absolute;
        inset: 0;

        background: rgba(0, 0, 0, .55);

    }

    .contact-right form>* {

        position: relative;
        z-index: 2;

    }

    .contact-right h2 {

        font-family: "Allura", cursive;
        font-size: 72px;
        font-weight: 400;
        color: #fff;

        margin-bottom: 35px;

    }

    /* Inputs */

    .input-box {

        margin-bottom: 28px;

    }

    /* .input-box {
        background: transparent !important;
        border: none !important;
        border-bottom: 1px solid white !important;
        border-radius: 0 !important;
    } */

    .input-box input,
    .input-box textarea {
        background: transparent !important;
        border: none !important;
        border-bottom: 1px solid white !important;
        border-radius: 0 !important;
        width: 100%;
    }

    /* .input-box input,
        .input-box textarea {

            width: 100%;

            background: transparent;

            border: none;

            border-bottom: 1px solid rgba(255, 255, 255, .9);

            color: #fff;

            font-size: 18px;

            padding: 12px 15px;

            outline: none;

            font-family: sans-serif;

        } */

    /* .input-box input::placeholder,
        .input-box textarea::placeholder {

            color: #ddd;

        } */

    /* .input-box textarea {

            resize: none;

            height: 110px;

        } */

    /* Button */

    .contact-right button {

        width: 100%;

        height: 55px;

        border-radius: 40px;

        border: 1.5px solid #fff;

        background: #111;

        color: #fff;

        font-size: 22px;

        cursor: pointer;

        transition: .35s;

    }

    .contact-right button:hover {

        background: #fff;
        color: #111;

    }

    /* Responsive */

    @media(max-width:991px) {

        .contact-section .container {

            flex-direction: column;

        }

        .contact-left,
        .contact-right {

            width: 100%;

        }

        .contact-left {

            text-align: center;

        }

        .contact-left h2 {

            font-size: 65px;

        }

        .contact-right h2 {

            font-size: 58px;

        }

    }

    @media(max-width:576px) {

        .contact-section {

            padding: 70px 0;

        }

        .contact-left h2 {

            font-size: 48px;

        }

        .contact-right form {

            padding: 25px;

        }

        .contact-right h2 {

            font-size: 45px;

        }

    }
</style>

<main id="inner-wrap" class="wrap kt-clear" role="main">
    <div id="primary" class="content-area">
        <div class="content-container site-container">
            <div id="main" class="site-main">
                <div class="content-wrap">
                    <article id="post-54"
                        class="entry content-bg single-entry post-54 page type-page status-publish hentry">
                        <div class="entry-content-wrap">
                            <div class="entry-content single-content">
                                <div data-elementor-type="wp-page" data-elementor-id="54"
                                    class="elementor elementor-54" data-elementor-post-type="page">
                                    <div class="elementor-element elementor-element-86040f0 e-flex e-con-boxed e-con e-parent lzl"
                                        data-id="86040f0" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":1372,"url":"assets/images/bgbgbg.png"}],"background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_transition_duration":500}'
                                        data-lzl-bg="">
                                        <div class="e-con-inner" style="justify-content: center !important;">
                                            <div class="elementor-element elementor-element-5e4838d elementor-widget elementor-widget-heading" data-id="5e4838d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default" bis_skin_checked="1">
                                                <div class="elementor-widget-container" bis_skin_checked="1">
                                                    <h1 class="elementor-heading-title elementor-size-default" style="font-family: Allura; color: white;">Contact Me</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>








                                    <section class="contact-section">
                                        <div class="container">

                                            <div class="contact-left">
                                                <h1 class="allura">
                                                    Feel Free To Get in
                                                    <br>
                                                    Touch
                                                </h1>
                                            </div>

                                            <div class="contact-right">

                                                <form action="#">

                                                    <h1 class="allura" style="color: white;">Send a Message</h1>

                                                    <div class="input-box">
                                                        <input type="text" placeholder="Name">
                                                    </div>

                                                    <div class="input-box">
                                                        <input type="text" placeholder="Phone">
                                                    </div>

                                                    <div class="input-box">
                                                        <input type="email" placeholder="Email">
                                                    </div>

                                                    <div class="input-box">
                                                        <textarea placeholder="Message"></textarea>
                                                    </div>

                                                    <button type="submit">Send</button>

                                                </form>

                                            </div>

                                        </div>
                                    </section>










                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include "layouts/footer.php"; ?>