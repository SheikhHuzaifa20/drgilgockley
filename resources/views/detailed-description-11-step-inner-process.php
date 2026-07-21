<?php include "layouts/app.php"; ?>
<?php include "layouts/header.php"; ?>

<style>
    /* Premium Page Styling for Awaken Your Inner Self Blog */

    /* Layout Container */
    .blog-container {
        display: flex;
        gap: 30px;
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 15px;
    }

    /* Main Content (Left Card) */
    .blog-main {
        width: 68%;
        flex-shrink: 0;
    }

    .blog-card {
        background: var(--global-palette9);
        border-radius: 20px;
        box-shadow: 0px 10px 10px 10px rgb(0 0 0 / 20%);
        border: 1px solid rgba(0, 0, 0, 0.05);
        padding: 40px;
        margin-bottom: 30px;
    }

    /* Banner Styling */
    .blog-banner-container {
        position: relative;
        width: 100%;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 30px;
        aspect-ratio: 16/10;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .blog-banner-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/images/blog-2-768x576.jpg') no-repeat center center;
        background-size: cover;
        z-index: 1;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .blog-banner-container:hover .blog-banner-bg {
        transform: scale(1.04);
    }

    .blog-banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.12);
        /* Subtle overlay for text readability */
        z-index: 2;
    }

    .blog-banner-content {
        position: relative;
        z-index: 3;
        padding: 30px;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .blog-banner-title {
        font-family: 'Allura', cursive !important;
        font-size: clamp(2.5rem, 5.5vw, 4.2rem) !important;
        font-weight: 400 !important;
        color: #ffffff !important;
        margin: 0 !important;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.35);
        line-height: 1.15;
    }

    .blog-banner-subtitle {
        font-family: 'Allura', cursive !important;
        font-size: clamp(1.4rem, 2.5vw, 2.2rem) !important;
        font-weight: 400 !important;
        color: #ffffff !important;
        margin-top: 15px !important;
        margin-bottom: 0 !important;
        text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.35);
        line-height: 1.25;
    }

    /* Blog Typography and Content */
    .blog-content p {
        font-size: 1.05rem;
        line-height: 1.75;
        color: var(--global-palette4);
        margin-bottom: 25px;
    }

    .blog-content .section-title {
        font-family: 'Allura', cursive !important;
        font-size: 1.8rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        margin-top: 40px !important;
        margin-bottom: 15px !important;
        line-height: 1.2;
    }

    .blog-content .sub-section-title {
        font-family: 'Allura', cursive !important;
        font-size: 2.2rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        margin-top: 35px !important;
        margin-bottom: 12px !important;
        line-height: 1.2;
    }

    .blog-content ul {
        margin: 0 0 30px 10px;
        padding: 0;
        list-style: none;
    }

    .blog-content ul li {
        position: relative;
        font-size: 1.05rem;
        line-height: 1.7;
        color: var(--global-palette4);
        margin-bottom: 12px;
        padding-left: 24px;
    }

    .blog-content ul li::before {
        content: "•";
        color: var(--global-palette3);
        font-weight: bold;
        font-size: 1.2rem;
        position: absolute;
        left: 5px;
        top: -1px;
    }

    .blog-content ul li strong {
        color: var(--global-palette3);
        font-size: 15px;
    }

    /* Sidebar Column */
    .blog-sidebar-col {
        width: 30%;
        flex-shrink: 0;
    }

    .sidebar-widget-container {
        background: var(--global-palette9);
        border-radius: 20px;
        box-shadow: 0px 10px 10px 10px rgb(0 0 0 / 20%);
        border: 1px solid rgba(0, 0, 0, 0.05);
        padding: 30px 20px;
    }

    /* Profile Widget with Double Border */
    .author-profile-widget {
        border: 3px double #0d1e3d;
        /* Double line border */
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        background: var(--global-palette9);
    }

    .author-img {
        width: 90%;
        max-width: 220px;
        height: auto;
        border-radius: 8px;
        margin: 0 auto 20px auto;
        object-fit: cover;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .author-name {
        font-family: 'Allura', cursive !important;
        font-size: 1.4rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        margin-top: 10px !important;
        margin-bottom: 12px !important;
    }

    .author-bio {
        font-size: 0.92rem;
        line-height: 1.55;
        color: var(--global-palette5);
        margin: 0;
    }

    /* Sidebar Divider */
    .sidebar-divider {
        width: 80px;
        height: 1px;
        background: #a0aec0;
        margin: 30px auto;
    }

    .sidebar-heading {
        font-family: 'Allura', cursive !important;
        font-size: 1.4rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        text-align: center !important;
        margin-bottom: 25px !important;
    }

    /* Recent Blogs Grid list */
    .recent-post-card {
        display: flex;
        align-items: center;
        gap: 15px;
        background: var(--global-palette9);
        border-radius: 12px;
        padding: 12px;
        margin-bottom: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-decoration: none !important;
    }

    .recent-post-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        border-color: rgba(0, 0, 0, 0.08);
    }

    .recent-post-img {
        width: 85px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .recent-post-info {
        flex-grow: 1;
        min-width: 0;
    }

    .recent-post-title {
        font-family: 'Allura', cursive !important;
        font-size: 1.4rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        margin: 0 0 4px 0 !important;
        line-height: 1.2 !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .recent-post-excerpt {
        font-size: 0.82rem;
        color: var(--global-palette6);
        margin: 0;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Comment Section */
    .comments-section {
        margin-top: 50px;
        border-top: 1px solid #edf2f7;
        padding-top: 35px;
    }

    .comments-title {
        font-family: 'Allura', cursive !important;
        font-size: 1.6rem !important;
        font-weight: 600 !important;
        color: var(--global-palette3) !important;
        margin-bottom: 8px !important;
    }

    .comments-subtitle {
        font-size: 0.9rem;
        color: var(--global-palette6);
        margin-bottom: 30px;
    }

    .comments-subtitle span.required {
        color: var(--global-palette13);
    }

    .comment-form-group {
        margin-bottom: 22px;
        display: flex;
        flex-direction: column;
    }

    .comment-form-group label {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--global-palette4);
        margin-bottom: 8px;
    }

    .comment-form-group label span.required {
        color: var(--global-palette13);
    }

    .comment-form-group textarea,
    .comment-form-group input[type="text"],
    .comment-form-group input[type="email"] {
        width: 100%;
        border: 1px solid #cbd5e0;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 0.95rem;
        color: var(--global-palette3);
        background-color: var(--global-palette8);
        transition: all 0.2s ease;
    }

    .comment-form-group textarea:focus,
    .comment-form-group input[type="text"]:focus,
    .comment-form-group input[type="email"]:focus {
        border-color: var(--global-palette1);
        background-color: var(--global-palette9);
        box-shadow: 0 0 0 3px rgba(43, 108, 176, 0.15);
        outline: none;
    }

    .comment-form-group textarea {
        height: 160px;
        resize: vertical;
    }

    .comment-form-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .comment-form-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 25px 0;
    }

    .comment-form-checkbox input[type="checkbox"] {
        margin-top: 4px;
        cursor: pointer;
        width: 16px;
        height: 16px;
    }

    .comment-form-checkbox label {
        font-size: 0.88rem;
        color: var(--global-palette5);
        line-height: 1.4;
        cursor: pointer;
        user-select: none;
    }

    .comment-submit-btn {
        background-color: #0f172a;
        color: #ffffff;
        font-size: 1rem;
        font-weight: 600;
        padding: 12px 32px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .comment-submit-btn:hover {
        background-color: #1e293b;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Responsive Breakpoints */
    @media (max-width: 991px) {
        .blog-container {
            flex-direction: column;
            gap: 40px;
        }

        .blog-main,
        .blog-sidebar-col {
            width: 100%;
        }

        .comment-form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }
    }

    @media (max-width: 575px) {
        .blog-card {
            padding: 20px;
        }

        .blog-banner-content {
            padding: 15px;
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
                                        data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":1178,"url":"assets/images/img-25873-1-scaled.jpg"}],"background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_transition_duration":500}'
                                        data-lzl-bg="">
                                        <div class="e-con-inner" style="justify-content: center !important;">
                                            <div class="elementor-element elementor-element-5e4838d elementor-widget elementor-widget-heading" data-id="5e4838d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default" bis_skin_checked="1">
                                                <div class="elementor-widget-container" bis_skin_checked="1">
                                                    <h1 class="elementor-heading-title elementor-size-default" style="font-family: Allura; color: white; text-align: center;">A More Detailed Description of My 11-Step Inner Process</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="blog-container">
                                        <!-- Left Main Content Area -->
                                        <article class="blog-main">
                                            <div class="blog-card">
                                                <!-- Banner Header -->
                                                <div class="blog-banner-container">
                                                    <div class="blog-banner-bg"></div>
                                                    <div class="blog-banner-overlay"></div>
                                                    <div class="blog-banner-content">
                                                    </div>
                                                </div>

                                                <!-- Post Body Content -->
                                                <div class="blog-content">
                                                    <h2 class="section-title">An Incredible Sequential, Integrated Inner Journey</h2>
                                                    <p>Dr. Gockley’s 11-step inner journey to the heart—a comprehensive, sequential, and integrated inner process—is presented in <a href="about-the-book.php" style="color: pink; text-decoration: none;">Awaken Your Inner Self: Five Life-Changing Miracles</a> by <a href="about-the-author.php" style="color: pink; text-decoration: none;">Dr. Gil Gockley</a> . It is a complete portrayal of <b>The Art of Becoming More Fully Human</b>.</p>

                                                    <h2 class="section-title">Eleven Steps to Emotional and Spiritual Health and Happiness</h2>
                                                    <p>This inner process can be understood as a clear path with</p>

                                                    <h2 class="section-title">Three connected outcomes:</h2>
                                                    <ul>
                                                        <li><strong>Connecting with and strengthening your inner Self</strong></li>
                                                        <li><strong>Nourishing the Spirit within</strong> </li>
                                                        <li><strong>Developing social awareness so you can present your BEST to others</strong></li>
                                                    </ul>
                                                    <p>Below is a high-level view of how the steps flow together.</p>

                                                    <h2 class="section-title">Connecting With and Strengthening Your Inner Self</h2>
                                                    <p>The first step is to identify your feelings to yourself before you say or do anything. This connects you to your inner Self—step two. Dr. Gockley shares that he does not know any other way to connect with the real, honest, and open you.</p>
                                                    <p>Once connected, you can decide on an appropriate way to deal with your feelings <strong>—step three</strong>:</p>
                                                    <ul>
                                                        <li><strong>Flow with it—</strong>ignore the comment, forgive the person, and move on.</li>
                                                        <li><strong>Face it—</strong> express one feeling, one thought, and tell what you need.</li>
                                                    </ul>

                                                    <p>Next, you strengthen your inner Self through <strong>twelve unique, life-enhancing self-discovery activities—steps five through eight</strong>.</p>

                                                    <h3 class="sub-section-title">Acquiring a Tapestry of Inner Goodness — Becoming Your BEST</h3>
                                                    <p>Through the first nine steps, you fill your inner Self with positive concepts of Self—with “good stuff”—with a <strong>tapestry of inner goodness</strong>, becoming your <strong>BEST</strong>.</p>

                                                    <h3 class="sub-section-title">Connecting With and Nourishing the Spirit Within</h3>
                                                    <p>You connect with the Spirit within through <strong>meditation</strong>, and through <strong>contemplation</strong>, you talk with your inner Self in the presence of the Spirit within <strong>—step four</strong>.</p>
                                                    <p>You nourish the Spirit within through acting upon <strong>Five Spiritual Gifts</strong> and <strong>26 messages from Jesus—step ten</strong>.</p>

                                                    <h3 class="sub-section-title">Attaining Communication and Social Skills — Presenting Your BEST to Others</h3>
                                                    <p>Through modeling, listening, asking clarifying questions, seeking support when needed, and learning effective social skills, you are ready to <strong>present your BEST to others</strong>.</p>

                                                    <h3 class="sub-section-title">Takeaway</h3>
                                                    <p>This process is designed to be <strong>sequential and integrated</strong>: you begin with self-awareness, strengthen the inner Self, develop inner goodness, connect deeply with the Spirit within, and then carry what you’ve gained into your relationships and the wider world.</p>

                                                    <h3 class="sub-section-title">Conclusion</h3>
                                                    <p>Part I introduces the foundation of the entire journey: becoming more fully human from the inside out. The steps are not meant to be rushed—they are meant to be lived. As you move through them in order, the result is a stronger inner Self, deeper Spiritual grounding, and a more love-centered way of communicating and living with others.</p>
                                                </div>

                                                <!-- Comments Reply Section -->
                                                <div class="comments-section">
                                                    <h3 class="comments-title">Leave A Reply</h3>
                                                    <p class="comments-subtitle">Your email address will not be published. Required fields are marked <span class="required">*</span></p>

                                                    <form action="#" method="POST" id="comment-form">
                                                        <div class="comment-form-group">
                                                            <label for="comment-textarea">Comment <span class="required">*</span></label>
                                                            <textarea id="comment-textarea" name="comment" required></textarea>
                                                        </div>

                                                        <div class="comment-form-row">
                                                            <div class="comment-form-group">
                                                                <label for="comment-name">Name <span class="required">*</span></label>
                                                                <input type="text" id="comment-name" name="name" required>
                                                            </div>

                                                            <div class="comment-form-group">
                                                                <label for="comment-email">Email <span class="required">*</span></label>
                                                                <input type="email" id="comment-email" name="email" required>
                                                            </div>

                                                            <div class="comment-form-group">
                                                                <label for="comment-website">Website</label>
                                                                <input type="text" id="comment-website" name="website">
                                                            </div>
                                                        </div>

                                                        <div class="comment-form-checkbox">
                                                            <input type="checkbox" id="save-info" name="save-info">
                                                            <label for="save-info">Save My Name, Email, And Website In This Browser For The Next Time I Comment.</label>
                                                        </div>

                                                        <button type="submit" class="comment-submit-btn">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </article>

                                        <!-- Right Sidebar Column -->
                                        <aside class="blog-sidebar-col">
                                            <div class="sidebar-widget-container">
                                                <!-- Profile Card -->
                                                <div class="author-profile-widget">
                                                    <img src="assets/images/54545-768x1024.png" alt="Dr. Gil Gockley" class="author-img">
                                                    <h4 class="author-name">Dr. Gil Gockley</h4>
                                                    <p class="author-bio">Dr. Gil Gockley holds an M.Ed. and a Doctorate in Counseling from the University of Rochester and a Certificate of Advanced Study in Educational Administration from SUNY Brockport.</p>
                                                </div>

                                                <div class="sidebar-divider"></div>

                                                <!-- Recent Blogs -->
                                                <h4 class="sidebar-heading">Recent Blogs</h4>

                                                <div class="recent-posts-list">
                                                    <!-- Card 1 -->
                                                    <a href="https://www.walmart.com/ip/Awaken-your-Inner-Self-five-life-changing-miracles-Paperback-9781969570247/20205123598?classType=REGULAR&from=%2Fsearch&sid=11b79162-8807-49c0-b78d-0a387f79b4de" target="_blank" class="recent-post-card">
                                                        <img src="assets/images/blog-6-768x576.webp" alt="Awareness Four" class="recent-post-img">
                                                        <div class="recent-post-info">
                                                            <h5 class="recent-post-title">Awareness Four – Acquiring A...</h5>
                                                            <p class="recent-post-excerpt">Awareness Four builds on everything that...</p>
                                                        </div>
                                                    </a>

                                                    <!-- Card 2 -->
                                                    <a href="https://www.walmart.com/ip/Awaken-your-Inner-Self-five-life-changing-miracles-Paperback-9781969570247/20205123598?classType=REGULAR&from=%2Fsearch&sid=11b79162-8807-49c0-b78d-0a387f79b4de" target="_blank" class="recent-post-card">
                                                        <img src="assets/images/blog-5-768x576.webp" alt="Awareness Three" class="recent-post-img">
                                                        <div class="recent-post-info">
                                                            <h5 class="recent-post-title">Awareness Three – Strengthening Your...</h5>
                                                            <p class="recent-post-excerpt">Awareness Three focuses on what happens...</p>
                                                        </div>
                                                    </a>

                                                    <!-- Card 3 -->
                                                    <a href="https://www.walmart.com/ip/Awaken-your-Inner-Self-five-life-changing-miracles-Paperback-9781969570247/20205123598?classType=REGULAR&from=%2Fsearch&sid=11b79162-8807-49c0-b78d-0a387f79b4de" target="_blank" class="recent-post-card">
                                                        <img src="assets/images/blog-4-768x576.webp" alt="Awareness Two" class="recent-post-img">
                                                        <div class="recent-post-info">
                                                            <h5 class="recent-post-title">Awareness Two – Connecting With...</h5>
                                                            <p class="recent-post-excerpt">Awareness Two is self-awareness, Step #4...</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>












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