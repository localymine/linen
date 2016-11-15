<?php get_header(); ?>

<body class="ps-static  cms-index-index cms-home">
    <div class="wrapper ps-static en-lang-class">
        <noscript>&lt;div
        class="global-site-notice noscript"&gt;&lt;div
        class="notice-inner"&gt;&lt;p&gt;
        &lt;strong&gt;JavaScript seems to be disabled in your browser.&lt;/strong&gt;&lt;br
        /&gt;
        You must have JavaScript enabled in your browser to utilize the functionality of this website.&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;
        </noscript>
        <div class="page">
            <?php get_template_part('p-left-side') ?>
            <div class="main_site_wrapper">
                <?php get_template_part('p-main-site-wrapper') ?>

                <?php get_template_part('p-main-content') ?>

                <?php get_footer(); ?>