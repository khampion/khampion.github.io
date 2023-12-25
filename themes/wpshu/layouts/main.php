<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>" />
    <meta property="og:description" content="<?= $description; ?>" />
    <meta property="og:site_name" content="<?= option('site_name'); ?>" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:url" content="<?= canonical_url(); ?>" />
	<meta name="Language" content="en-ID" />
	<meta name="geo.placename" content="Indonesia" />
	<meta name="geo.region" content="ID" />
    <meta name="robots" content="<?= $robots; ?>">
    <link rel="canonical" href="<?= canonical_url(); ?>" />
    <link rel="icon" type="image/x-icon" href="<?= theme_url('/assets/img/favicon.png'); ?>">
    <link rel="stylesheet" href="//cdn.rawgit.com/FortAwesome/Font-Awesome/v4.6.3/css/font-awesome.min.css">
	<meta name="generator" content="WordPress 4.9.1" />
	<meta content='article' property='og:type' />
    <meta content='James' name='author' />
    <meta content='James' property='article:author' />
    <meta content='James' property='fb:admins' />
    <meta content='https://www.facebook.com/xyyxx' property='article:author' />
    <meta content='https://www.facebook.com/xtyxxx' property='article:publisher' />
    <meta content='@YOURusername' name='twitter:site' />
    <meta content='<?= option('site_name'); ?>' property='og:site_name' />
    <meta content='en_ID' property='og:locale' />
    <meta content='en_ID' property='og:locale:alternate' />
    <meta content='summary' name='twitter:card' />
    <link rel="preconnect" href="https://i2.wp.com" />
    <link rel="dns-prefetch" href="https://i2.wp.com" />
    <link rel="preconnect" href="https://i.pinimg.com" />
    <link rel="dns-prefetch" href="https://i.pinimg.com" />
	<!-- Default Statcounter code for dev.halcyonschool.com/
https://dev.halcyonschool.com/ -->
<script type="text/javascript">
var sc_project=12946285; 
var sc_invisible=1; 
var sc_security="327de5c1"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="free web stats"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/12946285/0/327de5c1/1/"
alt="free web stats"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
<!-- Head tag Code -->
    <style rel="preload" as="style" type='text/css'>
        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2)format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2)format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2)format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2)format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2)format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2)format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2)format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2)format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-display: swap;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc4.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }
    </style>
    <style rel="preload" as="style" id='page-skin-1' type='text/css'>
        .text-center {
            text-align: center
        }

        .clearfix {
            overflow: auto
        }

        .master_title h3 {
            color: #b8b7b5;
            margin-left: 20px;
            font-size: 13px;
            text-transform: uppercase
        }

        .jimg {
            float: left;
            width: 178px;
            height: 220px;
            overflow: hidden
        }

        .jimg h2 {
            text-decoration: none;
            font-style: initial;
            font-weight: 400;
            font-size: 12px;
            margin: 0;
            display: inline
        }

        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden],
        template {
            display: none
        }

        a {
            background: 0 0
        }

        a:active,
        a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        h1 {
            margin: .67em 0
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        hr {
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code,
        kbd,
        pre,
        samp {
            font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, sans-serif
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible;
            border: 0;
            outline: 0;
            margin: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
            outline: 0
        }

        input {
            line-height: normal;
            border: 0;
            outline: 0
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: textfield;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: .35em .625em .75em
        }

        legend {
            border: 0;
            padding: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td,
        th {
            padding: 0
        }

        :focus {
            outline: 0
        }

        h1 {
            font-size: 1.75em
        }

        iframe {
            width: 100%
        }

        body,
        html {
            font-family: -apple-system, BlinkMacSystemFont, Roboto, Ubuntu, 'Segoe UI', Oxygen-Sans, 'Helvetica Neue', Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5rem
        }

        body {
            background-color: #fff;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-tap-highlight-color: transparent
        }

        a {
            text-decoration: none
        }

        .lazyload {
            width: 100%;
            max-height: 522px;
        }

        .image-max {
            width: 100%;
            max-height: 522px;
        }

        .comment-content a,
        .comment-content a:hover,
        .post-body a,
        .post-body a:hover,
        .post-location a,
        .post-location a:hover {
            color: #1a73e8
        }

        .comment-content a:hover,
        .post-body a:hover,
        .post-location a:hover {
            text-decoration: underline
        }

        .post-body h2,
        .post-body h3,
        .post-body h4,
        .post-body h5,
        .post-body h6 {
            line-height: 2rem
        }

        .tr-caption,
        figcaption {
            color: #666;
            font-style: italic;
            line-height: 1.35rem;
            text-align: center
        }

        :target::before {
            height: 55px;
            margin-top: -55px;
            opacity: 0;
            visibility: hidden
        }

        .invisible {
            visibility: hidden
        }

        .clear {
            clear: both
        }

        blockquote {
            font-size: 18px;
            font-style: italic;
            margin: 20px 0;
            padding: 1.25rem 1.25rem 1.25rem 4rem
        }

        blockquote:before {
            content: '\201D';
            color: rgba(255, 255, 255, .5);
            font: 600 4.5rem Arial, sans-serif;
            left: 1rem;
            top: 0
        }

        button {
            padding: .25rem .75rem;
            margin: .25rem;
            cursor: pointer
        }

        #comment-holder .loadmore a:hover,
        #top-continue.continue a:hover,
        .FollowByEmail .submit:hover,
        .drajatShare a:hover,
        button:hover {
            box-shadow: inset 0 0 0 99999px rgba(255, 255, 255, .25)
        }

        .separator,
        figure {
            margin: 1.25rem 0
        }

        .drop {
            float: left;
            font-size: 3.5rem;
            margin-top: .9rem;
            padding-right: .85rem
        }

        .lazy {
            background-color: rgba(0, 0, 0, .25);
            opacity: .25
        }

        .lazyloaded {
            background-color: transparent;
            opacity: 1
        }

        hr {
            border-top-width: 1px;
            border-bottom-width: 0;
            margin: 1rem 0
        }

        code,
        kbd {
            background-color: #efefef;
            padding: .15rem .3rem
        }

        code {
            color: #ff6060
        }

        kbd {
            border: 1px solid #9fa6ad;
            box-shadow: 0 1px 1px rgba(12, 13, 14, .15), inset 0 1px 0 0 #fff;
            text-shadow: 0 1px 0 #fff;
            white-space: nowrap
        }

        #comments .user,
        .FeaturedPost .title,
        .Profile .name,
        .drajatAuthor .author-name,
        .drajatShare .text,
        h1,
        h2,
        h3,
        h4,
        h5,
        ul.noimage li:before {
            font-family: Roboto, Arial, sans-serif;
            margin: 0 0 .65rem
        }

        .drajatSearch .check:checked~.input,
        .drajatSearch .input:focus,
        .post-body h1,
        .post-body h2,
        .post-body h3,
        .post-body h4,
        .post-body h5,
        .post-body h6,
        a,
        body,
        header .section,
        html {
            color: #36383a
        }

        #blog-pager a:hover,
        #blog-pager.numbering .right a:hover,
        #comments .comment .comment-actions a:hover,
        #comments .user,
        #comments .user a,
        .BlogArchive a:hover,
        .Feed a:hover,
        .Label a:hover,
        .PopularPosts a:hover,
        .PopularPosts ul.noimage li:before,
        .Profile .profile-link,
        .drajatAdditional .menu a:hover,
        .drajatAuthor a,
        .drajatRelated a:hover,
        .drajatRelated ul.noimage li:before,
        .drop,
        .entry-title a:hover,
        .post-filter-message .view a:hover,
        .post-labels a:hover,
        .status-msg-body .error,
        .status-msg-body .text,
        .status-msg-body:before,
        a:hover {
            color: #009688
        }

        .drajatMenu a:hover {
            color: #ddd
        }

        #comment-holder .loadmore a,
        #top-continue.continue a,
        .BlogArchive select:hover,
        .FeaturedPost .entry-content,
        .FeaturedPost .entry-title a,
        .FeaturedPost .title,
        .FollowByEmail .submit,
        .drajatShare a,
        .drajatShare a:hover,
        .post-body table th,
        blockquote,
        button {
            color: #fff
        }

        #comment-holder .loadmore a,
        #top-continue.continue a,
        .BlogArchive select:hover,
        .FeaturedPost .nothumb .post-outer,
        .FollowByEmail .submit,
        .drajatMultiRelated,
        .post-body table th,
        blockquote,
        button {
            background-color: #009688
        }

        .Feed .item-title,
        .drajatMenu ul li ul,
        .post-filter-message .view {
            font-weight: 400
        }

        #blog-pager.numbering .selected,
        #comments .comment .comment-actions,
        #comments .user,
        .BlogArchive .hierarchy-title,
        .FeaturedPost .title,
        .FollowByEmail .submit,
        .PopularPosts ul.noimage li:before,
        .Profile .name,
        .drajatAdditional .title,
        .drajatAuthor .author-name,
        .drajatRelated ul.noimage li:before,
        .drajatShare .text,
        .drajatMultiRelated .content .text,
        .post-body table th,
        .post-filter-message span,
        .post-location .label,
        .post-reaction .label,
        .status-msg-body .error,
        .status-msg-body .text,
        .status-msg-body:before,
        h1,
        h2,
        h3,
        h4,
        h5,
        ul.noimage li:before {
            font-weight: 700
        }

        .info>span:not(:first-child):before,
        .single .entry-content,
        .widget .title {
            font-size: 1rem
        }

        #blog-pager,
        .BlogArchive .flat,
        .BlogArchive .hierarchy-content .hierarchy-content,
        .BlogArchive .hierarchy-title,
        .BlogArchive .post-count,
        .FeaturedPost .title,
        .Feed .item-author,
        .Feed .item-date,
        .FollowByEmail .follow-by-email-address,
        .FollowByEmail .submit,
        .Label,
        .Label .cloud-label-widget-content a,
        .PopularPosts .snippet,
        .Profile .location,
        .breadcrumb,
        .drajatAdditional,
        .drajatAuthor .author-desc,
        .drajatMenu,
        .drajatSearch .input,
        .drajatShare i,
        .post .info,
        .post-filter-message,
        .post-inner,
        .tr-caption,
        code,
        figcaption,
        kbd {
            font-size: .875rem
        }

        #comments .comment .comment-actions>*,
        #comments .datetime,
        .info,
        .post-filter-message .view a,
        .post-labels,
        footer {
            font-size: .75rem
        }

        #comment-holder .loadmore a,
        #comments .comment-block:before,
        #comments .comment-replies ol li:after,
        #top-continue.continue a,
        .Feed .item-title,
        .drajatAdditional .title,
        .drajatMenu ul li ul,
        .drajatMenu ul li ul li,
        .post-body pre code,
        .single .Blog article,
        .status-msg-body:before,
        :target::before,
        blockquote {
            display: block
        }

        .BlogArchive a,
        .BlogArchive svg,
        .Label svg,
        .Profile .profile-link,
        .drajat,
        .drajatAdditional .menu a:not(:last-child):after,
        .drajatAdditional .social a,
        .drajatMenu ul li,
        .entry-title a,
        .post-filter-message .view a,
        .post-labels a {
            display: inline-block
        }

        #HTML101 .title,
        #HTML202 .title,
        #HTML303 .title,
        #HTML404 .title,
        #billboard .title,
        #comment-editor-src,
        #comments .comment-form h4,
        #comments .comment-replies .comment-block:before,
        #comments .comment-thread .comment-replies .continue,
        #comments .comment-thread .thread-count,
        #comments .item-control,
        #configuration,
        #header .description,
        .BlogSearch .title,
        .PageList .title,
        .aMiddle .title,
        .billboard .title,
        .check,
        .drajatMenu label,
        .hidden,
        .drajatMultiRelated .icon,
        .jump-link,
        .replaced {
            display: none
        }

        .Blog .post-outer,
        .Feed ul,
        .PopularPosts ul,
        .drajatAdditional .section,
        .drajatRelated ul {
            display: grid
        }

        #blog-pager,
        #blog-pager.numbering .right,
        .BlogArchive .flat ul,
        .BlogArchive .flat ul li,
        .BlogArchive .hierarchy-content .hierarchy-content ul.posts li,
        .Label .cloud-label-widget-content,
        .Label ul,
        .Label ul li,
        .PopularPosts ul.noimage li,
        .drajatAdditional form,
        .drajatAuthor,
        .drajatMenu,
        .drajatMenu a,
        .drajatMenu li label,
        .drajatRelated ul li,
        .drajatShare,
        .drajatMultiRelated,
        .post-labels,
        .post-reaction,
        footer .inner,
        header .section {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex
        }

        #blog-pager,
        .BlogArchive .hierarchy-content .hierarchy-content ul.posts li,
        .PopularPosts ul.noimage li,
        .drajatAdditional form,
        .drajatAuthor,
        .drajatMenu,
        .drajatMenu a,
        .drajatMenu li label,
        .drajatRelated ul li,
        .drajatShare,
        .drajatMultiRelated,
        .post-reaction,
        footer .inner,
        header .section {
            flex-wrap: nowrap
        }

        #blog-pager.numbering,
        #blog-pager.numbering .right,
        .BlogArchive .flat ul,
        .Label .cloud-label-widget-content,
        .Label ul,
        .post-labels {
            flex-wrap: wrap
        }

        #blog-pager,
        .BlogArchive .flat ul li,
        .BlogArchive .flat ul li a,
        .Label ul li,
        .Label ul li a,
        .drajatAdditional form,
        .drajatMenu a,
        .drajatMenu li label,
        .drajatShare,
        .post-reaction,
        footer .inner {
            align-items: center
        }

        #blog-pager,
        .BlogArchive .flat ul li,
        .Label ul li,
        .drajatAdditional form,
        .drajatMultiRelated,
        footer .inner {
            justify-content: space-between
        }

        #comments .comment-replies ol,
        .FeaturedPost article,
        .drajatMenu,
        .drajatMenu ul li,
        .post-filter-message span,
        blockquote,
        header .section,
        main {
            position: relative
        }

        #comments .comment .comment-actions,
        #comments .comment-block:before,
        #comments .comment-replies ol li:after,
        #comments .comments-content .icon.blog-author:after,
        #comments .comments-content .icon.blog-author:before,
        .FeaturedPost .post-outer,
        .comment .avatar-image-container,
        .drajatMenu ul li ul,
        .drajatSearch .icon,
        .drajatSearch form,
        .item-view #comments .comment-form h4,
        blockquote:before {
            position: absolute
        }

        #sidebarSticky,
        header {
            position: sticky;
            position: -webkit-sticky;
            position: -moz-sticky;
            position: -ms-sticky;
            position: -o-sticky
        }

        #comments .comment-block:before,
        #comments .comment-replies ol li:after,
        #comments .comments-content .icon.blog-author:after,
        #comments .comments-content .icon.blog-author:before,
        .drajatAdditional .menu a:not(:last-child):after,
        .drajatMenu ul li a:not(:last-child):after,
        .post-filter-message span:after,
        :target::before {
            content: ''
        }

        code,
        kbd {
            border-radius: 3px
        }

        #blog-pager a,
        #blog-pager.numbering .right>*,
        #blog-pager>*,
        #comment-holder .loadmore a,
        #comments .comment .comment-actions a,
        #top-continue.continue a,
        .BlogArchive select,
        .FollowByEmail .follow-by-email-address,
        .FollowByEmail .submit,
        .FollowByEmail .widget-content,
        .Label .cloud-label-widget-content a,
        .Profile .profile-link,
        .drajatShare a,
        .drajatMultiRelated,
        .post-filter-message .view a,
        .post-labels a,
        button {
            border-radius: 5px
        }

        .FeaturedPost .nothumb .post-outer,
        .PopularPosts img,
        .Profile img,
        .comment .avatar-image-container img,
        .drajatAuthor img,
        .drajatMenu ul li ul,
        .drajatRelated img,
        .post-body pre,
        .snippet-thumbnail img,
        .totop,
        blockquote {
            border-radius: 10px
        }

        #comment-holder .loadmore a,
        #top-continue.continue a,
        .BlogArchive select,
        .FollowByEmail .submit,
        .drajatMenu,
        .drajatMenu ul,
        .drajatMenu ul li a:not(:last-child):after,
        .drajatSearch .icon,
        .drajatSearch .input,
        .drajatShare a,
        .drajatShare i,
        .drajatMultiRelated,
        .drajatMultiRelated .icon,
        .lazy,
        .lazyloaded,
        .totop,
        a,
        button,
        header svg,
        svg,
        svg path {
            transition: all .2s ease
        }

        header {
            background-color: #009688;
            color: #fff;
            margin: auto;
            top: 0;
            transition: all .3s ease-in-out;
            z-index: 2
        }

        header.shadow {
            box-shadow: 0 1px 5px rgba(0, 0, 0, .3)
        }

        header svg {
            width: 1.5rem;
            height: 1.5rem;
            vertical-align: -.5rem
        }

        header svg path {
            fill: #36383a
        }

        .drajatAdditional .section,
        footer .inner,
        header .section,
        main {
            max-width: calc(980px + 6rem)
        }

        .drajatMenu ul li,
        .drajatSearch form {
            line-height: 50px
        }

        .drajatSearch .icon {
            line-height: 47px
        }

        header .section {
            height: 50px;
            margin: auto;
            padding: 0 2rem
        }

        .Header {
            align-self: center;
            margin-right: 3rem
        }

        #header img {
            max-height: 27px;
            max-width: 300px;
            vertical-align: middle
        }

        #header h1,
        #header h1 a,
        #header h2,
        #header h2 a {
            font-size: 1.5rem;
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: uppercase;
            white-space: nowrap;
            max-width: 65vw
        }

        #header .widget {
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center
        }

        #header h1,
        #header h1 a,
        #header h2,
        #header h2 a,
        .drajatMenu,
        .drajatMenu a,
        .drajatMenu label {
            color: #fff
        }

        .drajatMenu label {
            cursor: pointer
        }

        .drajatMenu a,
        .drajatMenu li label {
            padding: 0 .9rem;
            white-space: nowrap
        }

        .drajatMenu ul {
            padding: 0
        }

        .drajatMenu li,
        .drajatMenu ul {
            list-style: none;
            list-style-type: none;
            margin: 0
        }

        .drajatMenu ul li {
            cursor: pointer;
            white-space: nowrap
        }

        .drajatMenu ul li.open,
        .drajatMenu ul li:hover {
            background-color: rgba(255, 255, 255, .05)
        }

        .drajatMenu ul li a:not(:last-child):after {
            background-color: #36383a;
            color: #36383a;
            clip-path: polygon(50% 100%, 0 0, 100% 0);
            -webkit-clip-path: polygon(50% 100%, 0 0, 100% 0);
            width: .5rem;
            height: .35rem;
            margin-left: .5rem
        }

        .drajatMenu ul li.open a:not(:last-child):after,
        .drajatMenu ul li:hover a:not(:last-child):after {
            transform: rotate(180deg)
        }

        .drajatMenu ul li ul {
            background-color: #36383a;
            left: 0;
            min-width: 100%;
            opacity: 0;
            transform: translateY(-1rem);
            -webkit-transform: translateY(-1rem);
            transition: all .3s ease-in-out 0s;
            visibility: hidden
        }

        .drajatMenu ul li ul li a,
        .drajatMenu ul li ul li a:hover {
            color: #fff
        }

        .drajatMenu ul li:hover>ul {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            -webkit-transform: translateY(0)
        }

        .drajatSearch form {
            display: inline-table;
            margin: auto;
            right: 2rem;
            top: 0;
            bottom: 0
        }

        .drajatSearch .input {
            background-color: transparent;
            line-height: 35px;
            padding: 0;
            margin-right: -1px;
            width: 0
        }

        .drajatSearch .input::placeholder {
            color: #36383a;
            opacity: .75
        }

        .drajatSearch .check:checked~.input,
        .drajatSearch .input:focus {
            background-color: #fff;
            border-bottom: 1px solid #36383a;
            color: #36383a;
            padding-right: 2.5rem;
            width: calc(980px + 4.1rem)
        }

        .drajatSearch .icon {
            float: right;
            cursor: pointer;
            right: 0
        }

        main {
            background-color: #fff;
            margin: auto;
            padding: 1.5rem 2rem;
            z-index: 1
        }

        .drajat {
            width: 100%;
            max-width: 100%
        }

        #main {
            float: left;
            margin: 0 2rem 0 0;
            width: calc(100% - (300px + 2rem));
            max-width: 680px
        }

        .page #main {
            width: 100%;
            max-width: 100%;
            margin: 0
        }

        .post-filter-message {
            margin-bottom: 2.25rem;
            text-align: center
        }

        .post-filter-message span {
            text-transform: none;
            font-style: italic
        }

        .post-filter-message span:after {
            border-bottom: 3px solid #009688;
            position: absolute;
            left: 0;
            bottom: -7px;
            width: 100%
        }

        .post-filter-message .view {
            margin: 1rem 0 0
        }

        .post-filter-message .view a {
            background-color: #efefef;
            color: #4b4f56;
            padding: .2rem .75rem
        }

        .status-msg-body {
            text-align: center
        }

        .status-msg-body:before {
            content: '404';
            font-size: 7rem;
            line-height: initial
        }

        .status-msg-body .error {
            font-size: 7rem
        }

        .status-msg-body .text {
            font-size: 150%
        }

        .status-msg-body .infos {
            margin-top: 20px
        }

        .Blog article:not(:last-child),
        .infeed {
            margin-bottom: 3rem
        }

        .single .Blog article {
            margin-bottom: 0
        }

        .breadcrumb,
        .breadcrumb a,
        .info,
        .info a {
            color: #666
        }

        #comments .comment-timestamp a:hover,
        #comments .datetime a:hover,
        #comments .user a:hover,
        .breadcrumb a:hover,
        .info a:hover {
            text-decoration: underline
        }

        .Blog .post-outer {
            grid-template-areas: 'title thumbnail''info thumbnail''inner thumbnail';
            grid-template-columns: 1fr auto;
            grid-template-rows: auto auto 1fr;
            margin-top: .5rem
        }

        .FeaturedPost .post-outer {
            background: linear-gradient(to top, rgba(0, 0, 0, .85) 15%, rgba(0, 0, 0, .65) 60%, transparent 100%);
            background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .85) 15%, rgba(0, 0, 0, .65) 60%, transparent 100%);
            border-radius: 0 0 10px 10px;
            bottom: 0;
            padding: 1.5rem;
            width: 100%;
            z-index: 1
        }

        .FeaturedPost .nothumb .post-outer {
            position: static
        }

        .post-inner {
            grid-area: inner;
            margin-top: .25rem;
            text-align: justify;
            word-break: break-word
        }

        .FeaturedPost article {
            margin-bottom: 2rem
        }

        .snippet-thumbnail {
            grid-area: thumbnail;
            line-height: 0
        }

        .PopularPosts img,
        .drajatRelated img,
        .snippet-thumbnail img {
            object-fit: cover
        }

        .FeaturedPost img {
            width: 100vw
        }

        .Blog .snippet-thumbnail {
            margin-left: 2rem
        }

        .FeaturedPost .snippet-thumbnail {
            margin-top: 0;
            overflow: hidden
        }

        .info {
            grid-area: info;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .breadcrumb a,
        .info a {
            padding: 1rem 0
        }

        .breadcrumb {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .post-timestamp {
            cursor: help
        }

        .info>span:not(:first-child):before {
            content: '\2014';
            margin: 0 3px
        }

        .entry-title {
            font-size: 1.3rem;
            grid-area: title;
            line-height: 1.75rem;
            margin: 0;
            padding-bottom: .25rem
        }

        .single-post .entry-title {
            font-size: 2rem;
            line-height: 2.75rem;
            margin: .25rem 0
        }

        .FeaturedPost .entry-title {
            font-size: 1.5rem;
            line-height: 2rem;
            padding-bottom: .5rem
        }

        .single .entry-content {
            color: #4b4f56;
            line-height: 1.75rem;
            word-break: break-word
        }

        .aBottom,
        .aTop {
            margin: 1rem 0
        }

        .post-body table {
            width: 100%;
            margin: 20px 0
        }

        .post-body table th {
            padding: 10px;
            border: 1px solid #009688
        }

        .post-body table th:not(:last-child) {
            border-right-color: #ccc
        }

        .post-body table td {
            border: 1px solid #ccc;
            padding: 10px
        }

        .post-body table tr:nth-child(odd) {
            background-color: #f1f1f1
        }

        .post-body .separator a {
            margin: 0 !important
        }

        .post-body pre,
        .post-body pre code {
            overflow: auto;
            user-select: text;
            -webkit-user-select: text;
            -khtml-user-select: text;
            -moz-user-select: text;
            -ms-user-select: text
        }

        .post-body pre {
            background-color: #353844;
            hyphens: none;
            -webkit-hyphens: none;
            -moz-hyphens: none;
            -ms-hyphens: none;
            margin: .5em auto;
            padding: 0;
            tab-size: 2;
            -moz-tab-size: 2;
            -o-tab-size: 2;
            white-space: pre;
            width: 100%;
            word-break: normal;
            word-wrap: break-word
        }

        .post-body pre code {
            background-color: transparent;
            border: none;
            color: #eee;
            line-height: 1.5rem;
            max-height: 300px;
            padding: .75rem 1.25rem
        }

        .post-labels {
            margin-top: .5rem
        }

        .post .post-labels {
            margin-top: 1rem
        }

        #blog-pager a,
        #blog-pager.numbering .right>*,
        #blog-pager>*,
        #comments .comment .comment-actions a,
        .BlogArchive select,
        .Label .cloud-label-widget-content a,
        .post-labels a {
            background-color: #efefef
        }

        #blog-pager.numbering .right>*,
        #blog-pager>*,
        #comments .comment .comment-actions a,
        .BlogArchive select,
        .post-labels a {
            line-height: normal;
            padding: .5rem .75rem
        }

        #blog-pager a,
        #blog-pager.numbering,
        #comments .comment .comment-actions a,
        .post-labels a {
            color: #666
        }

        .post-labels a {
            margin-bottom: .5rem
        }

        #blog-pager a:hover,
        #blog-pager.numbering .right a:hover,
        #comments .comment .comment-actions a:hover,
        .Label a:hover,
        .post-labels a:hover {
            text-decoration: none
        }

        .post-labels a:before {
            content: '#';
            margin-right: .15rem
        }

        .post-labels a:not(:last-child) {
            margin-right: .5rem
        }

        .drajatAuthor,
        .drajatShare,
        .post-location,
        .post-reaction {
            margin-top: 1.35rem
        }

        .post-location .label,
        .post-reaction .label {
            margin-right: .25rem;
            white-space: nowrap
        }

        .post-reaction {
            position: relative
        }

        .post-reaction:after {
            content: '';
            background: linear-gradient(to right, transparent, #fff);
            background: -webkit-linear-gradient(left, transparent, #fff);
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 3rem
        }

        .post-reaction .iframe {
            overflow: auto
        }

        .post-reaction iframe {
            height: 1.5rem;
            margin-top: .5rem;
            width: auto
        }

        .post-reaction svg {
            min-height: 1.15rem;
            height: 1.15rem;
            min-width: 1.15rem;
            width: 1.15rem;
            margin-right: .25rem
        }

        .post-reaction svg path {
            fill: #36383a
        }

        .drajatShare svg {
            width: 1.25rem;
            height: 1.25rem;
            vertical-align: -.25rem
        }

        .drajatShare svg path {
            fill: #fff
        }

        .drajatShare .facebook {
            background-color: #3a579a
        }

        .drajatShare .twitter {
            background-color: #00abf0
        }

        .drajatShare .pinterest {
            background-color: #cd1c1f
        }

        .drajatShare .linkedin {
            background-color: #2554bf
        }

        .drajatShare .telegram {
            background-color: #08c
        }

        .drajatShare .whatsapp {
            background-color: #4dc247
        }

        .drajatShare .text {
            margin-bottom: 0;
            margin-right: 1rem
        }

        .drajatShare a {
            padding: .5rem .35rem;
            width: 100%;
            text-align: center;
            white-space: nowrap
        }

        .drajatShare a:not(:last-child) {
            margin-right: .35rem
        }

        .drajatShare i {
            font-style: normal;
            margin: 0 .35rem
        }

        .drajatAuthor {
            border-top: 1px solid #ccc;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 1.35rem
        }

        .drajatAuthor .left {
            margin-right: 1rem
        }

        .drajatAuthor img {
            max-width: 65px
        }

        .drajatAuthor .author-name {
            margin-bottom: 0
        }

        .drajatAuthor .author-desc {
            line-height: 1.35rem;
            margin-top: .35rem
        }

        .drajatRelated {
            margin-top: 2.5rem
        }

        .drajatRelated img {
            width: 75px;
            height: 75px
        }

        .drajatRelated .title {
            margin-bottom: 1.5rem
        }

        .drajatRelated a {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .drajatRelated ul {
            grid-template-columns: repeat(2, 1fr);
            margin: 20px 0 0;
            padding: 0;
            column-gap: 1.5rem;
            row-gap: 1.25rem
        }

        .drajatRelated ul.noimage li {
            counter-increment: drajatRelated
        }

        .drajatRelated ul.noimage li:before {
            content: '0'counter(drajatRelated)
        }

        .drajatRelated .thumb {
            flex-shrink: 0;
            margin-right: 1rem;
            overflow: hidden;
            line-height: 0
        }

        #blog-pager {
            justify-content: space-between;
            margin-top: 2.25rem;
            text-transform: uppercase
        }

        #blog-pager.numbering {
            text-transform: none
        }

        #blog-pager .nolink,
        #blog-pager.numbering .selected {
            cursor: not-allowed
        }

        #blog-pager .newest {
            visibility: hidden
        }

        #blog-pager.numbering .left,
        #blog-pager.numbering .right>:not(:last-child) {
            margin-right: .5rem
        }

        #blog-pager.numbering .left,
        #blog-pager.numbering .right>* {
            margin-bottom: .5rem
        }

        #blog-pager.numbering .right {
            background-color: transparent;
            padding: 0
        }

        #comments {
            margin-top: 2.5rem
        }

        #comments .comment-form {
            margin-top: 1rem
        }

        #comments ol>li:first-child {
            margin-top: 1.5rem
        }

        #comments ol>li {
            margin-top: 3rem
        }

        #comment-editor {
            margin-top: 2rem
        }

        #comments .comment-replybox-single #comment-editor {
            margin: 1rem 0 .5rem 50px;
            width: calc(100% - 50px)
        }

        #comments .comment-thread ol {
            margin: 0;
            padding: 0
        }

        #comments .comment-replies ol li {
            padding-top: 1rem
        }

        #comments .comment-replies ol li:after {
            border-top: 1px solid #ccc;
            bottom: 0;
            left: -2rem;
            top: 2rem;
            width: 1rem;
            height: auto;
            margin-top: 0;
            opacity: 1;
            visibility: visible
        }

        #comments .comment-thread .comment-replies {
            margin-left: 50px
        }

        #comments .comment {
            list-style-type: none;
            padding: 0 0 2.5rem;
            position: relative
        }

        #comments .comment .comment {
            padding-bottom: 0
        }

        .comment .avatar-image-container {
            left: 0;
            width: 35px;
            height: 35px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z' fill='%23777'/%3E%3C/svg%3E") center/35px no-repeat
        }

        .comment .avatar-image-container .avatar-icon {
            border-radius: 50%;
            border: solid 1px #666;
            box-sizing: border-box;
            fill: #666;
            height: 35px;
            margin: 0;
            padding: 7px;
            width: 35px
        }

        #comments .comments-content .icon.blog-author:before {
            background-color: #fff;
            border-radius: 100px;
            height: 17px;
            width: 17px;
            left: 27px
        }

        #comments .comments-content .icon.blog-author:after {
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z' fill='%23118ff9'/%3E%3C/svg%3E") center no-repeat;
            height: 17px;
            width: 17px;
            left: 27px
        }

        #comments .comment-block {
            margin-left: 50px
        }

        #comments .comment-block:before {
            border-left: 1px solid #ccc;
            bottom: 40px;
            left: 18px;
            top: 50px;
            height: auto;
            margin-top: 0;
            opacity: 1;
            visibility: visible
        }

        #comments .comment:target::before {
            height: 0;
            margin-top: 0
        }

        #comments .comment-author-header-wrapper {
            margin-left: 40px
        }

        .comment-header {
            margin-bottom: .35rem
        }

        #comments .comment-header .user,
        #comments .comment-header .user a {
            font-style: normal
        }

        #comments .comment .comment-actions {
            bottom: 0;
            left: 0
        }

        #comments .comment .comment-actions>* {
            text-transform: uppercase
        }

        #comments .datetime {
            margin-left: .5rem
        }

        #comments .comment-timestamp a,
        #comments .datetime,
        #comments .datetime a {
            color: #666
        }

        #comments .datetime:before {
            content: '('
        }

        #comments .datetime:after {
            content: ')'
        }

        #comments .comment .comment-content,
        .comment .comment-body {
            color: #4b4f56;
            line-height: 1.75rem;
            margin: 0;
            word-break: break-word
        }

        .comment-body {
            margin-bottom: 10px
        }

        .comments .comments-content .loadmore.loaded {
            max-height: 0;
            opacity: 0;
            overflow: hidden
        }

        .item-view #comments .comment-form h4 {
            clip: rect(1px, 1px, 1px, 1px);
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden
        }

        #comments .item-control {
            margin-left: .5rem
        }

        #comment-holder .loadmore,
        #top-continue.continue {
            margin: 20px auto;
            text-align: center;
            text-transform: capitalize
        }

        #comment-holder .loadmore a,
        #top-continue.continue a {
            padding: .5rem .75rem
        }

        .drajatAdditional {
            background-color: #ddd;
            color: #606060
        }

        .drajatAdditional .section,
        footer .inner {
            margin: auto;
            padding: 1rem 2rem
        }

        .drajatAdditional .menu,
        .drajatAdditional .social {
            align-self: flex-end;
            text-align: right
        }

        .drajatAdditional .title {
            margin-bottom: 10px
        }

        .drajatAdditional .section {
            grid-column-gap: 2rem;
            grid-template-areas: 'subs menu''subs social';
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr
        }

        .drajatAdditional .FollowByEmail {
            grid-area: subs
        }

        .drajatAdditional .menu {
            grid-area: menu
        }

        .drajatAdditional .menu a {
            color: #606060
        }

        .drajatAdditional .menu a:not(:last-child) {
            margin-right: 3px
        }

        .drajatAdditional .menu a:not(:last-child):after {
            background-color: #606060;
            width: 3px;
            height: 3px;
            margin-left: 5px;
            vertical-align: middle;
            border-radius: 100px
        }

        .drajatAdditional .social {
            grid-area: social
        }

        .drajatAdditional .social a:not(:last-child) {
            margin-right: 10px
        }

        .drajatAdditional .social svg {
            width: 25px;
            height: 25px
        }

        .drajatAdditional .social svg path {
            fill: #606060
        }

        .drajatAdditional .social a:hover svg path {
            fill: #009688
        }

        footer {
            background-color: #009688;
            color: #fff;
            line-height: 1.35rem
        }

        footer a,
        footer a:hover {
            color: #000
        }

        footer a:hover {
            text-decoration: underline
        }

        .widget .title {
            border-bottom: 2px solid #009688;
            display: table;
            margin-bottom: 1rem;
            padding-bottom: .5rem
        }

        .FeaturedPost .title {
            border-color: #fff
        }

        .drajatAdditional .title {
            border: 0;
            display: block;
            padding-bottom: 0;
            text-align: center
        }

        #billboard {
            margin: auto;
            text-align: center
        }

        .billboard .widget-content {
            margin-bottom: 2rem
        }

        .aMiddle .widget-content {
            margin: 1rem 0
        }

        .sidebar {
            float: right;
            width: 300px
        }

        .sidebar .widget {
            margin-bottom: 40px
        }

        .sidebar .widget li,
        .sidebar .widget ol,
        .sidebar .widget ul {
            margin: 0;
            padding: 0;
            list-style-position: inside
        }

        #sidebarSticky {
            clear: right;
            float: right;
            top: 60px
        }

        #sidebar .widget li,
        #sidebar .widget ol,
        #sidebar .widget ul {
            -webkit-text-size-adjust: 100%;
            font: 400 14px Montserrat, -apple-system, BlinkMacSystemFont, Roboto, 'Segoe UI', Oxygen-Sans, 'Helvetica Neue', Arial, sans-serif;
            color: #26282a;
            line-height: 1.75em;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
            margin: 0;
            padding: 0;
            list-style-position: inside
        }

        #withnumber ul li:before {
            content: counter(textrimPopular);
            font-size: 18px;
            font-weight: 600;
            font-style: italic;
            color: #4267b2;
            margin-right: 15px;
            margin-top: 3px
        }

        #sidebar ul li:before {
            font-size: 28px;
            font-weight: 600;
            font-style: italic;
            color: #4267b2;
            margin-right: 15px;
            margin-top: 3px
        }

        #sidebar ul li {
            counter-increment: textrimPopular;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: nowrap;
            list-style: none;
            list-style-type: none
        }

        #sidebar ul li:not(:last-child) {
            border-bottom: 1px dashed #ccc
        }

        #sidebar .widget li,
        #sidebar .widget ol,
        #sidebar .widget ul {
            margin: 0;
            padding: 0;
            list-style-position: inside
        }

        #sidebar ul li {
            counter-increment: textrimPopular;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: nowrap;
            list-style: none;
            list-style-type: none
        }

        #sidebar .widget li,
        #sidebar .widget ol,
        #sidebar .widget ul {
            margin: 0;
            padding: 0;
            list-style-position: inside
        }

        .Feed ul,
        .PopularPosts ul {
            grid-template-columns: repeat(1, 1fr)
        }

        .PopularPosts ul {
            grid-gap: .5rem
        }

        .Feed ul,
        .PopularPosts ul.noimage {
            grid-gap: 1rem
        }

        .Feed ul li,
        .PopularPosts ul li,
        .drajatRelated ul li {
            list-style: none;
            list-style-type: none
        }

        .PopularPosts ul.noimage li {
            counter-increment: drajatPopular
        }

        .PopularPosts ul.noimage li:before,
        .drajatRelated ul.noimage li:before {
            font-size: 1.75rem;
            margin-bottom: 0;
            margin-right: .85rem;
            margin-top: .15rem
        }

        .PopularPosts ul.noimage li:before {
            content: counter(drajatPopular)
        }

        .Feed .item-title,
        .PopularPosts ul.noimage a {
            font-family: inherit
        }

        .PopularPosts .thumbnail {
            margin-bottom: .25rem
        }

        .PopularPosts .entry {
            line-height: 1.35rem
        }

        .PopularPosts ul.noimage .entry {
            line-height: inherit
        }

        .PopularPosts .snippet {
            color: #666;
            line-height: 1.25rem;
            margin-top: .25rem
        }

        .Feed .item-author,
        .Feed .item-date {
            color: #666
        }

        .BlogArchive svg,
        .Label svg {
            min-width: 1rem;
            width: 1rem;
            height: 1rem;
            vertical-align: middle;
            margin-right: .5rem
        }

        .BlogArchive svg path,
        .Label svg path {
            fill: #009688
        }

        .BlogArchive .flat ul,
        .Label ul {
            list-style: none;
            list-style-type: none
        }

        .BlogArchive .flat ul li,
        .Label ul li {
            width: calc(50% - 15px);
            margin-bottom: 10px !important
        }

        .BlogArchive .flat ul li:nth-child(odd),
        .Label ul li:nth-child(odd) {
            margin-right: 30px !important
        }

        .BlogArchive .flat ul li a,
        .Label ul li a {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 100%
        }

        .Label .cloud-label-widget-content a {
            flex-grow: 1;
            margin-bottom: .35rem;
            margin-right: .35rem;
            padding: .25rem .6rem;
            text-align: center
        }

        .BlogArchive .flat .post-count,
        .Label .label-count {
            color: #666;
            font-size: .65rem;
            margin-left: 7px
        }

        .BlogArchive .post-count:before,
        .Label .label-count:before {
            content: '('
        }

        .BlogArchive .post-count:after,
        .Label .label-count:after {
            content: ')'
        }

        .BlogArchive li,
        .BlogArchive ul {
            list-style: none;
            list-style-type: none
        }

        .BlogArchive .post-count {
            margin-left: 5px
        }

        .BlogArchive .hierarchy-title {
            line-height: 1.75rem
        }

        .BlogArchive .hierarchy-content {
            margin-left: 1rem
        }

        .BlogArchive .hierarchy-content .hierarchy-content {
            margin-left: 0
        }

        .BlogArchive .hierarchy-content .hierarchy-content ul.posts li {
            counter-reset: li;
            counter-increment: drajatArchive
        }

        .BlogArchive .hierarchy-content .hierarchy-content ul.posts li:before {
            content: counter(drajatArchive) ".";
            margin-right: 7px
        }

        .BlogArchive .hierarchy-content .hierarchy-content ul.posts li:last-child {
            margin-bottom: 10px !important
        }

        .BlogArchive select {
            border: 0;
            cursor: pointer;
            width: 100%
        }

        .Profile .title {
            margin-left: auto;
            margin-right: auto
        }

        .Profile .widget-content {
            text-align: center
        }

        .Profile svg {
            height: 1.25rem;
            width: 1.25rem;
            margin-right: .25rem;
            vertical-align: -.25rem
        }

        .Profile svg path {
            fill: #666
        }

        .Profile .default-avatar svg {
            width: 4rem;
            height: 4rem
        }

        .Profile .default-avatar svg path {
            fill: #eb633a
        }

        .Profile img {
            margin-bottom: .35rem
        }

        .Profile .name {
            margin-bottom: .35rem
        }

        .Profile .location {
            color: #666
        }

        .Profile dd,
        .Profile dl,
        .Profile dt {
            margin: 0
        }

        .Profile dl {
            margin-bottom: .85rem
        }

        .Profile .profile-textblock {
            font-style: italic;
            margin-top: .5rem
        }

        .Profile .profile-link {
            border: 1px solid #009688;
            font-size: .85em;
            padding: .35rem .75rem
        }

        .FollowByEmail .widget-content {
            border: 1px solid #ccc;
            padding: .75rem
        }

        .drajatAdditional .FollowByEmail .widget-content {
            border: 0;
            margin-bottom: .5rem;
            padding: 0
        }

        .FollowByEmail .follow-by-email-address {
            background-color: #efefef;
            margin-bottom: .75rem;
            padding: .5rem .75rem;
            width: 100%
        }

        .drajatAdditional .FollowByEmail .follow-by-email-address {
            background-color: #fff;
            border-radius: 25px 0 0 25px;
            height: 2.5rem;
            margin-bottom: 0;
            padding: .75rem 1rem
        }

        .FollowByEmail .submit {
            padding: .5rem .75rem;
            width: 100%
        }

        .drajatAdditional .FollowByEmail .submit {
            background-color: #606060;
            border-radius: 0 25px 25px 0;
            height: 2.5rem;
            padding: 0 .75rem;
            width: auto
        }

        .totop {
            background: #009688 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z' fill='%23fff'/%3E%3C/svg%3E") center no-repeat;
            background-size: 1.5rem;
            bottom: 100px;
            cursor: pointer;
            height: 2.5rem;
            opacity: 0;
            position: fixed;
            right: 50px;
            visibility: hidden;
            width: 2.5rem;
            z-index: 99
        }

        .totop.show {
            bottom: 50px;
            opacity: .75;
            visibility: visible
        }

        .totop.show:hover {
            opacity: 1
        }

        .drajatMultiRelated {
            box-shadow: inset 0 0 0 99999px rgba(255, 255, 255, .9);
            border-left: 3px solid #009688;
            margin: 10px 0
        }

        .drajatMultiRelated .content {
            padding: .5rem .75rem
        }

        .drajatMultiRelated .icon {
            border-radius: 0 3px 3px 0;
            height: auto;
            min-width: 50px;
            background: #009688 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z' fill='%23fff'/%3E%3C/svg%3E") center/40px no-repeat
        }

        [dir=rtl] .Header {
            margin-left: 3rem;
            margin-right: 0
        }

        [dir=rtl] #main {
            float: right;
            margin-left: 2rem;
            margin-right: 0
        }

        [dir=rtl] .drajatSearch form {
            left: 2rem;
            right: unset
        }

        [dir=rtl] .drajatSearch .icon {
            float: left;
            left: 0;
            right: unset
        }

        [dir=rtl] .drajatSearch .check:checked~.input,
        [dir=rtl] .drajatSearch .input:focus {
            padding-left: 2.5rem;
            padding-right: 0
        }

        [dir=rtl] .drajatMenu ul li a:not(:last-child):after {
            margin-left: 0;
            margin-right: .5rem
        }

        [dir=rtl] .Blog .snippet-thumbnail {
            margin-left: 0;
            margin-right: 2rem
        }

        [dir=rtl] .post-labels a:not(:last-child) {
            margin-left: .5rem;
            margin-right: 0
        }

        [dir=rtl] .post-location .label,
        [dir=rtl] .post-reaction .label,
        [dir=rtl] .post-reaction svg {
            margin-left: .25rem;
            margin-right: 0
        }

        [dir=rtl] #blog-pager.numbering .left,
        [dir=rtl] #blog-pager.numbering .right>:not(:last-child) {
            margin-left: .5rem;
            margin-right: 0
        }

        [dir=rtl] .drajatMultiRelated {
            border-left: 0;
            border-right: 3px solid #009688
        }

        [dir=rtl] blockquote:before {
            left: unset;
            right: 1rem
        }

        [dir=rtl] blockquote {
            padding-left: 1.25rem;
            padding-right: 4rem
        }

        [dir=rtl] .drajatAuthor .left,
        [dir=rtl] .drajatRelated .thumb,
        [dir=rtl] .drajatShare .text {
            margin-left: 1rem;
            margin-right: 0
        }

        [dir=rtl] .drajatShare a:not(:last-child) {
            margin-left: .35rem;
            margin-right: 0
        }

        [dir=rtl] .PopularPosts ul.noimage li:before,
        [dir=rtl] .drajatRelated ul.noimage li:before {
            margin-left: .85rem;
            margin-right: 0
        }

        [dir=rtl] .post-reaction:after {
            background: linear-gradient(to left, transparent, #fff);
            background: -webkit-linear-gradient(right, transparent, #fff);
            left: 0;
            right: unset
        }

        [dir=rtl] .BlogArchive .flat ul li:nth-child(odd),
        [dir=rtl] .Label ul li:nth-child(odd) {
            margin-left: 30px !important;
            margin-right: 0 !important
        }

        [dir=rtl] .Label .cloud-label-widget-content a {
            margin-left: .35rem;
            margin-right: 0
        }

        [dir=rtl] .BlogArchive svg,
        [dir=rtl] .Label svg {
            margin-left: .5rem;
            margin-right: 0
        }

        [dir=rtl] .BlogArchive .hierarchy-content {
            margin-left: 0;
            margin-right: 1rem
        }

        [dir=rtl] .drajatAdditional .menu,
        [dir=rtl] .drajatAdditional .social {
            text-align: left
        }

        [dir=rtl] .drajatAdditional .social a:not(:last-child) {
            margin-left: 10px;
            margin-right: 0
        }

        [dir=rtl] .drajatAdditional form {
            flex-direction: row-reverse
        }

        [dir=rtl] #comments .comment-block,
        [dir=rtl] #comments .comment-thread .comment-replies {
            margin-left: 0;
            margin-right: 50px
        }

        [dir=rtl] #comments .datetime {
            margin-left: 0;
            margin-right: .5rem
        }

        [dir=rtl] .comment .avatar-image-container {
            left: unset;
            right: 0
        }

        [dir=rtl] #comments .comments-content .icon.blog-author:after,
        [dir=rtl] #comments .comments-content .icon.blog-author:before {
            left: unset;
            right: 27px
        }

        [dir=rtl] #comments .comment-block:before {
            left: unset;
            right: 18px
        }

        [dir=rtl] #comments .comment-replies ol li:after {
            left: unset;
            right: -2rem
        }

        [dir=rtl] #comments .comment .comment-actions {
            left: unset;
            right: 0
        }

        [dir=rtl] .BlogArchive .hierarchy-content .hierarchy-content ul.posts li:before {
            margin-left: 7px;
            margin-right: 0
        }

        @media screen and (max-width:1024px) {

            #header h1,
            #header h1 a,
            #header h2,
            #header h2 a {
                text-align: center
            }

            .drajatMenu label,
            .drajatMenu ul,
            .drajatMenu ul li {
                display: block
            }

            .drajatMenu ul li ul {
                background-color: transparent
            }

            #header .widget {
                margin-left: -24px
            }

            .Blog .post-outer {
                grid-template-columns: 1fr 1fr
            }

            header .section {
                justify-content: space-between
            }

            .drajatMenu {
                align-self: center;
                order: 1
            }

            .drajatMenu ul {
                background-color: #36383a;
                border-radius: 5px;
                opacity: 0;
                visibility: hidden;
                left: 0;
                position: absolute;
                top: 37px;
                transform: translateY(-1rem);
                transition: all .2s ease-in-out;
                -webkit-transform: translateY(-1rem)
            }

            .drajatMenu ul li {
                line-height: 2.75rem;
                min-width: 50vw
            }

            .drajatMenu ul li a,
            .drajatMenu ul li a:hover {
                color: #fff
            }

            .drajatMenu ul li ul,
            .drajatMenu ul li:hover>ul {
                transform: unset;
                -webkit-transform: unset
            }

            .drajatMenu ul li ul {
                border-radius: 0;
                max-height: 0;
                overflow: hidden;
                position: static
            }

            .drajatMenu ul li ul,
            .drajatMenu>.check:checked~ul {
                opacity: 1;
                visibility: visible
            }

            .drajatMenu ul li ul li a {
                padding-left: 3rem
            }

            .drajatMenu ul li a:not(:last-child):after {
                background-color: #fff;
                margin-left: auto
            }

            .drajatMenu>.check:checked~ul {
                transform: translateY(0);
                -webkit-transform: translateY(0);
                z-index: 1
            }

            .Header {
                margin-right: 0;
                order: 2
            }

            .drajatSearch {
                order: 3
            }

            .drajatSearch .check:checked~.input,
            .drajatSearch .input:focus {
                width: calc(100vw - 4rem)
            }

            [dir=rtl] #header .widget {
                margin-left: 24px
            }

            [dir=rtl] .drajatMenu ul {
                left: unset;
                right: 0
            }

            [dir=rtl] .drajatMenu ul li ul li a {
                padding-left: 0;
                padding-right: 3rem
            }
        }

        @media screen and (max-width:950px) {
            header .section {
                padding: 0 2rem
            }

            .billboard .widget-content {
                margin: 1.5rem 0
            }

            main {
                padding: 0 2rem 2rem
            }

            .drajat {
                margin-top: 0
            }

            #main,
            .sidebar,
            [dir=rtl] #main {
                float: none
            }

            #main {
                margin: 0 0 2.5rem;
                width: auto;
                max-width: 100%
            }

            .sidebar {
                width: auto;
                margin: auto
            }

            #sidebarSticky {
                position: static
            }

            .FeaturedPost article {
                margin-bottom: 0
            }

            .Blog {
                margin-top: 2rem
            }

            .Blog .post-outer {
                grid-column-gap: 3rem;
                grid-template-columns: 1fr auto
            }

            .PopularPosts ul {
                grid-template-columns: repeat(2, 1fr)
            }

            .PopularPosts ul.noimage {
                grid-template-columns: repeat(1, 1fr)
            }

            .PopularPosts img {
                width: 100vw
            }

            .drajatAdditional .section {
                grid-template-columns: 1fr auto
            }

            [dir=rtl] #main {
                margin-left: 0
            }
        }

        @media screen and (max-width:640px) {

            .Blog article,
            .drajatAdditional .section,
            footer .inner {
                display: block
            }

            blockquote {
                font-size: 17px
            }

            .Blog .post-outer {
                grid-template-columns: 1fr 1fr
            }

            .page .Blog article:not(:last-child),
            .post .Blog article:not(:last-child) {
                margin-bottom: 0;
                padding-bottom: 0
            }

            .drajatShare a {
                padding: .35rem
            }

            .drajatShare i {
                display: none
            }

            .drajatAdditional .section {
                padding: 15px 20px 10px
            }

            .drajatAdditional .menu,
            .drajatAdditional .social,
            [dir=rtl] .drajatAdditional .menu,
            [dir=rtl] .drajatAdditional .social {
                text-align: center
            }

            .drajatAdditional .FollowByEmail {
                margin-bottom: 1rem
            }

            .drajatAdditional .social {
                margin-top: .5rem
            }

            footer .inner {
                text-align: center
            }
        }

        @media screen and (max-width:568px) {
            figcaption {
                margin: 0 20px
            }

            header .section {
                padding: 0 20px
            }

            .drajatSearch form {
                right: 20px
            }

            .drajatSearch .check:checked~.input,
            .drajatSearch .input:focus {
                width: calc(100vw - 40px)
            }

            .drajatMenu ul {
                border-radius: 0;
                left: -20px
            }

            .drajatMenu ul li {
                min-width: 100vw
            }

            .drajatMenu a,
            .drajatMenu li label {
                padding: 0 20px
            }

            .billboard .widget-content {
                margin: 1rem 0
            }

            main {
                padding: 0 20px 20px
            }

            .Blog {
                margin-top: 20px
            }

            .Blog article:not(:last-child),
            .infeed {
                margin-bottom: 2rem
            }

            .FeaturedPost article {
                margin-left: -20px;
                max-width: calc(100% + 40px);
                width: calc(100% + 40px)
            }

            .Blog .post-outer {
                grid-template-columns: auto;
                grid-template-rows: auto auto auto;
                grid-template-areas: 'title''info''thumbnail''inner';
                margin-top: .25rem
            }

            .snippet-thumbnail {
                margin: .5rem 0
            }

            .Blog .snippet-thumbnail {
                margin-left: 0
            }

            .snippet-thumbnail img {
                height: 46vw;
                width: 100vw
            }

            .FeaturedPost .snippet-thumbnail img {
                border-radius: 0;
                height: 51vh
            }

            .FeaturedPost .entry-title,
            .entry-title {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .FeaturedPost .post-outer {
                background: unset;
                background-color: rgba(0, 0, 0, .5);
                border-radius: 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-content: center;
                top: 0
            }

            .FeaturedPost .nothumb .post-outer {
                border-radius: 0
            }

            .FeaturedPost .entry-title {
                margin-bottom: 0;
                flex-basis: 100%;
                width: 100%
            }

            .single .entry-title {
                font-size: 1.5rem;
                line-height: 2rem
            }

            .FeaturedPost .entry-content,
            .post-inner {
                font-size: .9rem;
                line-height: 1.35rem
            }

            .post-inner {
                margin-top: 0
            }

            .Blog .entry-content {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden
            }

            .single .entry-content {
                display: block;
                overflow: unset
            }

            .labels {
                margin-bottom: .5rem
            }

            .PopularPosts ul {
                grid-gap: 1.5rem
            }

            .drajatAdditional .section {
                padding: 15px 15px 10px
            }

            .totop {
                bottom: 50px;
                right: 25px
            }

            .totop.show {
                bottom: 25px
            }

            .drajatRelated ul {
                grid-gap: 1rem;
                grid-template-columns: repeat(1, 1fr)
            }

            .drajatRelated a {
                -webkit-line-clamp: 4
            }

            [dir=rtl] .drajatMenu ul {
                right: -20px
            }

            [dir=rtl] .drajatSearch form {
                left: 20px
            }

            [dir=rtl] .FeaturedPost article {
                margin-left: 0;
                margin-right: -20px
            }

            [dir=rtl] .Blog .snippet-thumbnail {
                margin-right: 0
            }
        }

        @media screen and (max-width:480px) {
            .PopularPosts ul {
                grid-gap: 2rem;
                grid-template-columns: repeat(1, 1fr)
            }
        }

        @media screen and (max-width:360px) {

            body,
            html {
                font-size: 14px
            }

            header .section {
                padding: 0 15px
            }

            .drajatSearch form {
                right: 15px
            }

            .drajatSearch .check:checked~.input,
            .drajatSearch .input:focus {
                width: calc(100vw - 30px)
            }

            .drajatMenu ul {
                left: -15px
            }

            .drajatMenu a,
            .drajatMenu li label {
                padding: 0 15px
            }

            main {
                padding: 0 15px 15px
            }

            .Blog {
                margin-top: 15px
            }

            .FeaturedPost article {
                margin-left: -15px;
                max-width: calc(100% + 30px);
                width: calc(100% + 30px)
            }

            figcaption {
                margin: 0 15px
            }

            .labels a {
                font-size: 10px;
                padding: 4px 8px
            }

            .BlogArchive .flat ul li a:before,
            .Label a:before {
                min-width: 7px;
                min-height: 7px;
                width: 7px;
                height: 7px
            }

            .drajatAdditional .menu a:not(:last-child) {
                margin-right: 1px
            }

            .drajatAdditional .menu a:not(:last-child):after {
                margin-left: 3px
            }

            [dir=rtl] .drajatMenu ul {
                right: -15px
            }

            [dir=rtl] .drajatSearch form {
                left: 15px
            }
        }

        @media screen and (max-width:320px) {

            body,
            html {
                font-size: 12px
            }

            .drajatMenu ul {
                top: 35px
            }

            .FeaturedPost .snippet-thumbnail img {
                height: 35vh
            }
        }
    </style>
</head>

<body class='post single' itemscope='itemscope' itemtype='http://schema.org/WebPage'>
    <header>
        <div class='section' id='header'>
            <div class='widget Header' data-version='2' id='Header1'>
                <div>
                    <h2>
                        <a href='/' title='<?= option('site_name'); ?>'><?= option('site_name'); ?></a>
                    </h2>
                </div>
                <div class='description'>
                </div>
            </div>
            <div class='drajatMenu' data-version='2' id='HTML101'>
                <input aria-label='Menu' class='check' id='drajatMenu' type='checkbox' />
                <label for='drajatMenu'>
                    <svg viewBox='0 0 24 24'>
                        <path d='M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z'></path>
                    </svg>
                </label>
                <ul>
                    <li><a href="<?= page_permalink('dmca'); ?>" rel="nofollow" target="_blank">Dmca</a>
                    </li>
                    <li><a href="<?= page_permalink('contact'); ?> rel="nofollow" target="_blank">Contact</a></li>
                    <li><a href="<?= page_permalink('privacy-policy'); ?>" rel="nofollow" target="_blank">Privacy
                            Policy</a></li>
                    <li><a href="<?= page_permalink('copyright'); ?>" rel="nofollow" target="_blank">Copyright</a></li>
                </ul>
            </div>
            <div class='drajatSearch' data-version='2' id='BlogSearch1'>
                <form action="/" id="search-box" class="form-inline my-2 my-lg-0">
                    <div class="input-group-prepend">
                        <input id="search_query" name="q" style="border-radius: .5rem;" type="text"
                            class="form-control" aria-label="Search input" placeholder="Search here..">
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class='inner'>
            <div class='section' id='footerBottom'>
                <div data-version='2' id='HTML303'>
                    Copyright &#169; <?= date('Y') ?></div>
            </div>
            <div class='right'>
                All of the pictures on this website was taken from source that we believe as "Public Domain", If you
                want to claim your image please Contact Us
            </div>
        </div>

    </footer>
    <div class='totop'></div>
</body>

</html>