<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>/img/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- <style>
        :root {
            --blue: #4e73df;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #e74a3b;
            --orange: #fd7e14;
            --yellow: #f6c23e;
            --green: #1cc88a;
            --teal: #20c9a6;
            --cyan: #36b9cc;
            --white: #fff;
            --gray: #858796;
            --gray-dark: #5a5c69;
            --primary: #4e73df;
            --secondary: #858796;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        body {
            margin: 0;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            background-color: #fff;
        }

        [tabindex="-1"]:focus {
            outline: 0 !important;
        }

        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title],
        abbr[data-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            color: #4e73df;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: #224abe;
            text-decoration: underline;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):hover,
        a:not([href]):not([tabindex]):focus {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
        }

        figure {
            margin: 0 0 1rem;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #858796;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: inherit;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        select {
            word-wrap: normal;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="radio"],
        input[type="checkbox"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="date"],
        input[type="time"],
        input[type="datetime-local"],
        input[type="month"] {
            -webkit-appearance: listbox;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: none;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            margin-bottom: 0.5rem;
            font-weight: 400;
            line-height: 1.2;
        }

        h1,
        .h1 {
            font-size: 2.5rem;
        }

        h2,
        .h2 {
            font-size: 2rem;
        }

        h3,
        .h3 {
            font-size: 1.75rem;
        }

        h4,
        .h4 {
            font-size: 1.5rem;
        }

        h5,
        .h5 {
            font-size: 1.25rem;
        }

        h6,
        .h6 {
            font-size: 1rem;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        small,
        .small {
            font-size: 80%;
            font-weight: 400;
        }

        mark,
        .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #858796;
        }

        .blockquote-footer::before {
            content: "\2014\00A0";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dddfeb;
            border-radius: 0.35rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 90%;
            color: #858796;
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-break: break-word;
        }

        a>code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #3a3b45;
            border-radius: 0.2rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700;
        }

        pre {
            display: block;
            font-size: 87.5%;
            color: #3a3b45;
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        .container {
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .container-fluid {
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>.col,
        .no-gutters>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }

        .order-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }

        .order-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }

        .order-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .order-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .order-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        .order-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }

        .order-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }

        .order-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }

        .order-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }

        .order-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }

        .order-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }

        .order-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }

        .order-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }

        .order-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }

        .offset-1 {
            margin-left: 8.33333%;
        }

        .offset-2 {
            margin-left: 16.66667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333%;
        }

        .offset-5 {
            margin-left: 41.66667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333%;
        }

        .offset-8 {
            margin-left: 66.66667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333%;
        }

        .offset-11 {
            margin-left: 91.66667%;
        }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-sm-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-sm-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-sm-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-sm-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-sm-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-sm-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-sm-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-sm-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-sm-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-sm-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-sm-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-sm-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-sm-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-sm-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-sm-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333%;
            }

            .offset-sm-2 {
                margin-left: 16.66667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333%;
            }

            .offset-sm-5 {
                margin-left: 41.66667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333%;
            }

            .offset-sm-8 {
                margin-left: 66.66667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333%;
            }

            .offset-sm-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-md-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-md-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-md-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-md-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-md-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-md-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-md-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-md-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-md-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-md-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-md-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-md-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-md-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-md-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-md-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333%;
            }

            .offset-md-2 {
                margin-left: 16.66667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333%;
            }

            .offset-md-5 {
                margin-left: 41.66667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333%;
            }

            .offset-md-8 {
                margin-left: 66.66667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333%;
            }

            .offset-md-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-lg-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-lg-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-lg-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-lg-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-lg-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-lg-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-lg-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-lg-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-lg-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-lg-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-lg-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-lg-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-lg-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-lg-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-lg-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-lg-0 {
                margin-left: 0;
            }

            .offset-lg-1 {
                margin-left: 8.33333%;
            }

            .offset-lg-2 {
                margin-left: 16.66667%;
            }

            .offset-lg-3 {
                margin-left: 25%;
            }

            .offset-lg-4 {
                margin-left: 33.33333%;
            }

            .offset-lg-5 {
                margin-left: 41.66667%;
            }

            .offset-lg-6 {
                margin-left: 50%;
            }

            .offset-lg-7 {
                margin-left: 58.33333%;
            }

            .offset-lg-8 {
                margin-left: 66.66667%;
            }

            .offset-lg-9 {
                margin-left: 75%;
            }

            .offset-lg-10 {
                margin-left: 83.33333%;
            }

            .offset-lg-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-xl-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-xl-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-xl-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-xl-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-xl-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-xl-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-xl-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-xl-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-xl-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-xl-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-xl-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-xl-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-xl-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-xl-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-xl-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-xl-0 {
                margin-left: 0;
            }

            .offset-xl-1 {
                margin-left: 8.33333%;
            }

            .offset-xl-2 {
                margin-left: 16.66667%;
            }

            .offset-xl-3 {
                margin-left: 25%;
            }

            .offset-xl-4 {
                margin-left: 33.33333%;
            }

            .offset-xl-5 {
                margin-left: 41.66667%;
            }

            .offset-xl-6 {
                margin-left: 50%;
            }

            .offset-xl-7 {
                margin-left: 58.33333%;
            }

            .offset-xl-8 {
                margin-left: 66.66667%;
            }

            .offset-xl-9 {
                margin-left: 75%;
            }

            .offset-xl-10 {
                margin-left: 83.33333%;
            }

            .offset-xl-11 {
                margin-left: 91.66667%;
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #858796;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #e3e6f0;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #e3e6f0;
        }

        .table tbody+tbody {
            border-top: 2px solid #e3e6f0;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #e3e6f0;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #e3e6f0;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #858796;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #cdd8f6;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody+tbody {
            border-color: #a3b6ee;
        }

        .table-hover .table-primary:hover {
            background-color: #b7c7f2;
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #b7c7f2;
        }

        .table-secondary,
        .table-secondary>th,
        .table-secondary>td {
            background-color: #dddde2;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody+tbody {
            border-color: #c0c1c8;
        }

        .table-hover .table-secondary:hover {
            background-color: #cfcfd6;
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #cfcfd6;
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #bff0de;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody+tbody {
            border-color: #89e2c2;
        }

        .table-hover .table-success:hover {
            background-color: #aaebd3;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #aaebd3;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #c7ebf1;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody+tbody {
            border-color: #96dbe4;
        }

        .table-hover .table-info:hover {
            background-color: #b3e4ec;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #b3e4ec;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #fceec9;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody+tbody {
            border-color: #fadf9b;
        }

        .table-hover .table-warning:hover {
            background-color: #fbe6b1;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #fbe6b1;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f8ccc8;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody+tbody {
            border-color: #f3a199;
        }

        .table-hover .table-danger:hover {
            background-color: #f5b7b1;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f5b7b1;
        }

        .table-light,
        .table-light>th,
        .table-light>td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody+tbody {
            border-color: #fbfcfd;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark>th,
        .table-dark>td {
            background-color: #d1d1d5;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #a9aab1;
        }

        .table-hover .table-dark:hover {
            background-color: #c4c4c9;
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #c4c4c9;
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #5a5c69;
            border-color: #6c6e7e;
        }

        .table .thead-light th {
            color: #6e707e;
            background-color: #eaecf4;
            border-color: #e3e6f0;
        }

        .table-dark {
            color: #fff;
            background-color: #5a5c69;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #6c6e7e;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:focus {
            color: #6e707e;
            background-color: #fff;
            border-color: #bac8f3;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .form-control::-webkit-input-placeholder {
            color: #858796;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #858796;
            opacity: 1;
        }

        .form-control::-ms-input-placeholder {
            color: #858796;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #858796;
            opacity: 1;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #eaecf4;
            opacity: 1;
        }

        select.form-control:focus::-ms-value {
            color: #6e707e;
            background-color: #fff;
        }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%;
        }

        .col-form-label {
            padding-top: calc(0.375rem + 1px);
            padding-bottom: calc(0.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5;
        }

        .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            margin-bottom: 0;
            line-height: 1.5;
            color: #858796;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext.form-control-sm,
        .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        select.form-control[size],
        select.form-control[multiple] {
            height: auto;
        }

        textarea.form-control {
            height: auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-text {
            display: block;
            margin-top: 0.25rem;
        }

        .form-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }

        .form-row>.col,
        .form-row>[class*="col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem;
        }

        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem;
        }

        .form-check-input:disabled~.form-check-label {
            color: #858796;
        }

        .form-check-label {
            margin-bottom: 0;
        }

        .form-check-inline {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 0;
            margin-right: 0.75rem;
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: 0.3125rem;
            margin-left: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #1cc88a;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(28, 200, 138, 0.9);
            border-radius: 0.35rem;
        }

        .was-validated .form-control:valid,
        .form-control.is-valid {
            border-color: #1cc88a;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%231cc88a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center right calc(0.375em + 0.1875rem);
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .form-control:valid:focus,
        .form-control.is-valid:focus {
            border-color: #1cc88a;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
        }

        .was-validated .form-control:valid~.valid-feedback,
        .was-validated .form-control:valid~.valid-tooltip,
        .form-control.is-valid~.valid-feedback,
        .form-control.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .custom-select:valid,
        .custom-select.is-valid {
            border-color: #1cc88a;
            padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%231cc88a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .custom-select:valid:focus,
        .custom-select.is-valid:focus {
            border-color: #1cc88a;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
        }

        .was-validated .custom-select:valid~.valid-feedback,
        .was-validated .custom-select:valid~.valid-tooltip,
        .custom-select.is-valid~.valid-feedback,
        .custom-select.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .form-control-file:valid~.valid-feedback,
        .was-validated .form-control-file:valid~.valid-tooltip,
        .form-control-file.is-valid~.valid-feedback,
        .form-control-file.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .form-check-input:valid~.form-check-label,
        .form-check-input.is-valid~.form-check-label {
            color: #1cc88a;
        }

        .was-validated .form-check-input:valid~.valid-feedback,
        .was-validated .form-check-input:valid~.valid-tooltip,
        .form-check-input.is-valid~.valid-feedback,
        .form-check-input.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:valid~.custom-control-label,
        .custom-control-input.is-valid~.custom-control-label {
            color: #1cc88a;
        }

        .was-validated .custom-control-input:valid~.custom-control-label::before,
        .custom-control-input.is-valid~.custom-control-label::before {
            border-color: #1cc88a;
        }

        .was-validated .custom-control-input:valid~.valid-feedback,
        .was-validated .custom-control-input:valid~.valid-tooltip,
        .custom-control-input.is-valid~.valid-feedback,
        .custom-control-input.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:valid:checked~.custom-control-label::before,
        .custom-control-input.is-valid:checked~.custom-control-label::before {
            border-color: #34e3a4;
            background-color: #34e3a4;
        }

        .was-validated .custom-control-input:valid:focus~.custom-control-label::before,
        .custom-control-input.is-valid:focus~.custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
        }

        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
            border-color: #1cc88a;
        }

        .was-validated .custom-file-input:valid~.custom-file-label,
        .custom-file-input.is-valid~.custom-file-label {
            border-color: #1cc88a;
        }

        .was-validated .custom-file-input:valid~.valid-feedback,
        .was-validated .custom-file-input:valid~.valid-tooltip,
        .custom-file-input.is-valid~.valid-feedback,
        .custom-file-input.is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .custom-file-input:valid:focus~.custom-file-label,
        .custom-file-input.is-valid:focus~.custom-file-label {
            border-color: #1cc88a;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #e74a3b;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(231, 74, 59, 0.9);
            border-radius: 0.35rem;
        }

        .was-validated .form-control:invalid,
        .form-control.is-invalid {
            border-color: #e74a3b;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23e74a3b' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23e74a3b' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
            background-repeat: no-repeat;
            background-position: center right calc(0.375em + 0.1875rem);
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .form-control:invalid:focus,
        .form-control.is-invalid:focus {
            border-color: #e74a3b;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
        }

        .was-validated .form-control:invalid~.invalid-feedback,
        .was-validated .form-control:invalid~.invalid-tooltip,
        .form-control.is-invalid~.invalid-feedback,
        .form-control.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .custom-select:invalid,
        .custom-select.is-invalid {
            border-color: #e74a3b;
            padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23e74a3b' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23e74a3b' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .custom-select:invalid:focus,
        .custom-select.is-invalid:focus {
            border-color: #e74a3b;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
        }

        .was-validated .custom-select:invalid~.invalid-feedback,
        .was-validated .custom-select:invalid~.invalid-tooltip,
        .custom-select.is-invalid~.invalid-feedback,
        .custom-select.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .form-control-file:invalid~.invalid-feedback,
        .was-validated .form-control-file:invalid~.invalid-tooltip,
        .form-control-file.is-invalid~.invalid-feedback,
        .form-control-file.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .form-check-input:invalid~.form-check-label,
        .form-check-input.is-invalid~.form-check-label {
            color: #e74a3b;
        }

        .was-validated .form-check-input:invalid~.invalid-feedback,
        .was-validated .form-check-input:invalid~.invalid-tooltip,
        .form-check-input.is-invalid~.invalid-feedback,
        .form-check-input.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:invalid~.custom-control-label,
        .custom-control-input.is-invalid~.custom-control-label {
            color: #e74a3b;
        }

        .was-validated .custom-control-input:invalid~.custom-control-label::before,
        .custom-control-input.is-invalid~.custom-control-label::before {
            border-color: #e74a3b;
        }

        .was-validated .custom-control-input:invalid~.invalid-feedback,
        .was-validated .custom-control-input:invalid~.invalid-tooltip,
        .custom-control-input.is-invalid~.invalid-feedback,
        .custom-control-input.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
        .custom-control-input.is-invalid:checked~.custom-control-label::before {
            border-color: #ed7468;
            background-color: #ed7468;
        }

        .was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
        .custom-control-input.is-invalid:focus~.custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
        }

        .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
        .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
            border-color: #e74a3b;
        }

        .was-validated .custom-file-input:invalid~.custom-file-label,
        .custom-file-input.is-invalid~.custom-file-label {
            border-color: #e74a3b;
        }

        .was-validated .custom-file-input:invalid~.invalid-feedback,
        .was-validated .custom-file-input:invalid~.invalid-tooltip,
        .custom-file-input.is-invalid~.invalid-feedback,
        .custom-file-input.is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .custom-file-input:invalid:focus~.custom-file-label,
        .custom-file-input.is-invalid:focus~.custom-file-label {
            border-color: #e74a3b;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.25);
        }

        .form-inline {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .form-inline .form-check {
            width: 100%;
        }

        @media (min-width: 576px) {
            .form-inline label {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 0;
            }

            .form-inline .form-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0;
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }

            .form-inline .form-control-plaintext {
                display: inline-block;
            }

            .form-inline .input-group,
            .form-inline .custom-select {
                width: auto;
            }

            .form-inline .form-check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: auto;
                padding-left: 0;
            }

            .form-inline .form-check-input {
                position: relative;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: 0.25rem;
                margin-left: 0;
            }

            .form-inline .custom-control {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .form-inline .custom-control-label {
                margin-bottom: 0;
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #858796;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.35rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                -webkit-transition: none;
                transition: none;
            }
        }

        .btn:hover {
            color: #858796;
            text-decoration: none;
        }

        .btn:focus,
        .btn.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .btn.disabled,
        .btn:disabled {
            opacity: 0.65;
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #2e59d9;
            border-color: #2653d4;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(105, 136, 228, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(105, 136, 228, 0.5);
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #2653d4;
            border-color: #244ec9;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(105, 136, 228, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(105, 136, 228, 0.5);
        }

        .btn-secondary {
            color: #fff;
            background-color: #858796;
            border-color: #858796;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #717384;
            border-color: #6b6d7d;
        }

        .btn-secondary:focus,
        .btn-secondary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(151, 153, 166, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(151, 153, 166, 0.5);
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #fff;
            background-color: #858796;
            border-color: #858796;
        }

        .btn-secondary:not(:disabled):not(.disabled):active,
        .btn-secondary:not(:disabled):not(.disabled).active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6b6d7d;
            border-color: #656776;
        }

        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(151, 153, 166, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(151, 153, 166, 0.5);
        }

        .btn-success {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #17a673;
            border-color: #169b6b;
        }

        .btn-success:focus,
        .btn-success.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(62, 208, 156, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(62, 208, 156, 0.5);
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-success:not(:disabled):not(.disabled):active,
        .btn-success:not(:disabled):not(.disabled).active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #169b6b;
            border-color: #149063;
        }

        .btn-success:not(:disabled):not(.disabled):active:focus,
        .btn-success:not(:disabled):not(.disabled).active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(62, 208, 156, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(62, 208, 156, 0.5);
        }

        .btn-info {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #2c9faf;
            border-color: #2a96a5;
        }

        .btn-info:focus,
        .btn-info.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(84, 196, 212, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(84, 196, 212, 0.5);
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc;
        }

        .btn-info:not(:disabled):not(.disabled):active,
        .btn-info:not(:disabled):not(.disabled).active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #2a96a5;
            border-color: #278c9b;
        }

        .btn-info:not(:disabled):not(.disabled):active:focus,
        .btn-info:not(:disabled):not(.disabled).active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(84, 196, 212, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(84, 196, 212, 0.5);
        }

        .btn-warning {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #f4b619;
            border-color: #f4b30d;
        }

        .btn-warning:focus,
        .btn-warning.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(247, 203, 91, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(247, 203, 91, 0.5);
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e;
        }

        .btn-warning:not(:disabled):not(.disabled):active,
        .btn-warning:not(:disabled):not(.disabled).active,
        .show>.btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #f4b30d;
            border-color: #e9aa0b;
        }

        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(247, 203, 91, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(247, 203, 91, 0.5);
        }

        .btn-danger {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #e02d1b;
            border-color: #d52a1a;
        }

        .btn-danger:focus,
        .btn-danger.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(235, 101, 88, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(235, 101, 88, 0.5);
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b;
        }

        .btn-danger:not(:disabled):not(.disabled):active,
        .btn-danger:not(:disabled):not(.disabled).active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #d52a1a;
            border-color: #ca2819;
        }

        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(235, 101, 88, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(235, 101, 88, 0.5);
        }

        .btn-light {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc;
        }

        .btn-light:hover {
            color: #3a3b45;
            background-color: #dde2f1;
            border-color: #d4daed;
        }

        .btn-light:focus,
        .btn-light.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 221, 225, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 221, 225, 0.5);
        }

        .btn-light.disabled,
        .btn-light:disabled {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc;
        }

        .btn-light:not(:disabled):not(.disabled):active,
        .btn-light:not(:disabled):not(.disabled).active,
        .show>.btn-light.dropdown-toggle {
            color: #3a3b45;
            background-color: #d4daed;
            border-color: #cbd3e9;
        }

        .btn-light:not(:disabled):not(.disabled):active:focus,
        .btn-light:not(:disabled):not(.disabled).active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 221, 225, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 221, 225, 0.5);
        }

        .btn-dark {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #484a54;
            border-color: #42444e;
        }

        .btn-dark:focus,
        .btn-dark.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(115, 116, 128, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(115, 116, 128, 0.5);
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69;
        }

        .btn-dark:not(:disabled):not(.disabled):active,
        .btn-dark:not(:disabled):not(.disabled).active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #42444e;
            border-color: #3d3e47;
        }

        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(115, 116, 128, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(115, 116, 128, 0.5);
        }

        .btn-outline-primary {
            color: #4e73df;
            border-color: #4e73df;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-outline-primary:focus,
        .btn-outline-primary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #4e73df;
            background-color: transparent;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
        }

        .btn-outline-secondary {
            color: #858796;
            border-color: #858796;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #858796;
            border-color: #858796;
        }

        .btn-outline-secondary:focus,
        .btn-outline-secondary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #858796;
            background-color: transparent;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .show>.btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #858796;
            border-color: #858796;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
        }

        .btn-outline-success {
            color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-outline-success:focus,
        .btn-outline-success.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #1cc88a;
            background-color: transparent;
        }

        .btn-outline-success:not(:disabled):not(.disabled):active,
        .btn-outline-success:not(:disabled):not(.disabled).active,
        .show>.btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
        }

        .btn-outline-info {
            color: #36b9cc;
            border-color: #36b9cc;
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc;
        }

        .btn-outline-info:focus,
        .btn-outline-info.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #36b9cc;
            background-color: transparent;
        }

        .btn-outline-info:not(:disabled):not(.disabled):active,
        .btn-outline-info:not(:disabled):not(.disabled).active,
        .show>.btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc;
        }

        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
        }

        .btn-outline-warning {
            color: #f6c23e;
            border-color: #f6c23e;
        }

        .btn-outline-warning:hover {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e;
        }

        .btn-outline-warning:focus,
        .btn-outline-warning.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #f6c23e;
            background-color: transparent;
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .show>.btn-outline-warning.dropdown-toggle {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e;
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
        }

        .btn-outline-danger {
            color: #e74a3b;
            border-color: #e74a3b;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b;
        }

        .btn-outline-danger:focus,
        .btn-outline-danger.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #e74a3b;
            background-color: transparent;
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .show>.btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b;
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
        }

        .btn-outline-light {
            color: #f8f9fc;
            border-color: #f8f9fc;
        }

        .btn-outline-light:hover {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc;
        }

        .btn-outline-light:focus,
        .btn-outline-light.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #f8f9fc;
            background-color: transparent;
        }

        .btn-outline-light:not(:disabled):not(.disabled):active,
        .btn-outline-light:not(:disabled):not(.disabled).active,
        .show>.btn-outline-light.dropdown-toggle {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc;
        }

        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
        }

        .btn-outline-dark {
            color: #5a5c69;
            border-color: #5a5c69;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69;
        }

        .btn-outline-dark:focus,
        .btn-outline-dark.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #5a5c69;
            background-color: transparent;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .show>.btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
        }

        .btn-link {
            font-weight: 400;
            color: #4e73df;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #224abe;
            text-decoration: underline;
        }

        .btn-link:focus,
        .btn-link.focus {
            text-decoration: underline;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-link:disabled,
        .btn-link.disabled {
            color: #858796;
            pointer-events: none;
        }

        .btn-lg,
        .btn-group-lg>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn-block+.btn-block {
            margin-top: 0.5rem;
        }

        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%;
        }

        .fade {
            -webkit-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                -webkit-transition: none;
                transition: none;
            }
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition: height 0.15s ease;
            transition: height 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                -webkit-transition: none;
                transition: none;
            }
        }

        .dropup,
        .dropright,
        .dropdown,
        .dropleft {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 0.85rem;
            color: #858796;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
        }

        .dropdown-menu-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto;
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem;
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0.125rem;
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0.125rem;
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
        }

        .dropleft .dropdown-toggle::after {
            display: none;
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-menu[x-placement^="top"],
        .dropdown-menu[x-placement^="right"],
        .dropdown-menu[x-placement^="bottom"],
        .dropdown-menu[x-placement^="left"] {
            right: auto;
            bottom: auto;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #eaecf4;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #3a3b45;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #2e2f37;
            text-decoration: none;
            background-color: #f8f9fc;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #4e73df;
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #858796;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            color: #858796;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.25rem 1.5rem;
            color: #3a3b45;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .btn-group>.btn:hover,
        .btn-group-vertical>.btn:hover {
            z-index: 1;
        }

        .btn-group>.btn:focus,
        .btn-group>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group>.btn:not(:first-child),
        .btn-group>.btn-group:not(:first-child) {
            margin-left: -1px;
        }

        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:last-child)>.btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-group>.btn:not(:first-child),
        .btn-group>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem;
        }

        .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-sm+.dropdown-toggle-split,
        .btn-group-sm>.btn+.dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem;
        }

        .btn-lg+.dropdown-toggle-split,
        .btn-group-lg>.btn+.dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        .btn-group-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%;
        }

        .btn-group-vertical>.btn:not(:first-child),
        .btn-group-vertical>.btn-group:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical>.btn-group:not(:last-child)>.btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group-vertical>.btn:not(:first-child),
        .btn-group-vertical>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .btn-group-toggle>.btn,
        .btn-group-toggle>.btn-group>.btn {
            margin-bottom: 0;
        }

        .btn-group-toggle>.btn input[type="radio"],
        .btn-group-toggle>.btn input[type="checkbox"],
        .btn-group-toggle>.btn-group>.btn input[type="radio"],
        .btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .input-group>.form-control,
        .input-group>.form-control-plaintext,
        .input-group>.custom-select,
        .input-group>.custom-file {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
        }

        .input-group>.form-control+.form-control,
        .input-group>.form-control+.custom-select,
        .input-group>.form-control+.custom-file,
        .input-group>.form-control-plaintext+.form-control,
        .input-group>.form-control-plaintext+.custom-select,
        .input-group>.form-control-plaintext+.custom-file,
        .input-group>.custom-select+.form-control,
        .input-group>.custom-select+.custom-select,
        .input-group>.custom-select+.custom-file,
        .input-group>.custom-file+.form-control,
        .input-group>.custom-file+.custom-select,
        .input-group>.custom-file+.custom-file {
            margin-left: -1px;
        }

        .input-group>.form-control:focus,
        .input-group>.custom-select:focus,
        .input-group>.custom-file .custom-file-input:focus~.custom-file-label {
            z-index: 3;
        }

        .input-group>.custom-file .custom-file-input:focus {
            z-index: 4;
        }

        .input-group>.form-control:not(:last-child),
        .input-group>.custom-select:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group>.form-control:not(:first-child),
        .input-group>.custom-select:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group>.custom-file {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .input-group>.custom-file:not(:last-child) .custom-file-label,
        .input-group>.custom-file:not(:last-child) .custom-file-label::after {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group>.custom-file:not(:first-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group-prepend,
        .input-group-append {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .input-group-prepend .btn,
        .input-group-append .btn {
            position: relative;
            z-index: 2;
        }

        .input-group-prepend .btn:focus,
        .input-group-append .btn:focus {
            z-index: 3;
        }

        .input-group-prepend .btn+.btn,
        .input-group-prepend .btn+.input-group-text,
        .input-group-prepend .input-group-text+.input-group-text,
        .input-group-prepend .input-group-text+.btn,
        .input-group-append .btn+.btn,
        .input-group-append .btn+.input-group-text,
        .input-group-append .input-group-text+.input-group-text,
        .input-group-append .input-group-text+.btn {
            margin-left: -1px;
        }

        .input-group-prepend {
            margin-right: -1px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            text-align: center;
            white-space: nowrap;
            background-color: #eaecf4;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
        }

        .input-group-text input[type="radio"],
        .input-group-text input[type="checkbox"] {
            margin-top: 0;
        }

        .input-group-lg>.form-control:not(textarea),
        .input-group-lg>.custom-select {
            height: calc(1.5em + 1rem + 2px);
        }

        .input-group-lg>.form-control,
        .input-group-lg>.custom-select,
        .input-group-lg>.input-group-prepend>.input-group-text,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-append>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .input-group-sm>.form-control:not(textarea),
        .input-group-sm>.custom-select {
            height: calc(1.5em + 0.5rem + 2px);
        }

        .input-group-sm>.form-control,
        .input-group-sm>.custom-select,
        .input-group-sm>.input-group-prepend>.input-group-text,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-append>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .input-group-lg>.custom-select,
        .input-group-sm>.custom-select {
            padding-right: 1.75rem;
        }

        .input-group>.input-group-prepend>.btn,
        .input-group>.input-group-prepend>.input-group-text,
        .input-group>.input-group-append:not(:last-child)>.btn,
        .input-group>.input-group-append:not(:last-child)>.input-group-text,
        .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group>.input-group-append>.btn,
        .input-group>.input-group-append>.input-group-text,
        .input-group>.input-group-prepend:not(:first-child)>.btn,
        .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
        .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
        .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
        }

        .custom-control-inline {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 1rem;
        }

        .custom-control-input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #4e73df;
            background-color: #4e73df;
        }

        .custom-control-input:focus~.custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-control-input:focus:not(:checked)~.custom-control-label::before {
            border-color: #bac8f3;
        }

        .custom-control-input:not(:disabled):active~.custom-control-label::before {
            color: #fff;
            background-color: #e5ebfa;
            border-color: #e5ebfa;
        }

        .custom-control-input:disabled~.custom-control-label {
            color: #858796;
        }

        .custom-control-input:disabled~.custom-control-label::before {
            background-color: #eaecf4;
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top;
        }

        .custom-control-label::before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #b7b9cc solid 1px;
        }

        .custom-control-label::after {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat 50% / 50% 50%;
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.35rem;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
            border-color: #4e73df;
            background-color: #4e73df;
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, 0.5);
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
            background-color: rgba(78, 115, 223, 0.5);
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, 0.5);
        }

        .custom-switch {
            padding-left: 2.25rem;
        }

        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: 0.5rem;
        }

        .custom-switch .custom-control-label::after {
            top: calc(0.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #b7b9cc;
            border-radius: 0.5rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-switch .custom-control-label::after {
                -webkit-transition: none;
                transition: none;
            }
        }

        .custom-switch .custom-control-input:checked~.custom-control-label::after {
            background-color: #fff;
            -webkit-transform: translateX(0.75rem);
            transform: translateX(0.75rem);
        }

        .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, 0.5);
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            vertical-align: middle;
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-select:focus {
            border-color: #bac8f3;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-select:focus::-ms-value {
            color: #6e707e;
            background-color: #fff;
        }

        .custom-select[multiple],
        .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: 0.75rem;
            background-image: none;
        }

        .custom-select:disabled {
            color: #858796;
            background-color: #eaecf4;
        }

        .custom-select::-ms-expand {
            display: none;
        }

        .custom-select-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem;
        }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin: 0;
            opacity: 0;
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #bac8f3;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-file-input:disabled~.custom-file-label {
            background-color: #eaecf4;
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse";
        }

        .custom-file-input~.custom-file-label[data-browse]::after {
            content: attr(data-browse);
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 0.75rem);
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #6e707e;
            content: "Browse";
            background-color: #eaecf4;
            border-left: inherit;
            border-radius: 0 0.35rem 0.35rem 0;
        }

        .custom-range {
            width: 100%;
            height: calc(1rem + 0.4rem);
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-range:focus {
            outline: none;
        }

        .custom-range:focus::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .custom-range::-moz-focus-outer {
            border: 0;
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #e5ebfa;
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dddfeb;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-moz-range-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #e5ebfa;
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dddfeb;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: 0.2rem;
            margin-left: 0.2rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-ms-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .custom-range::-ms-thumb:active {
            background-color: #e5ebfa;
        }

        .custom-range::-ms-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: 0.5rem;
        }

        .custom-range::-ms-fill-lower {
            background-color: #dddfeb;
            border-radius: 1rem;
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dddfeb;
            border-radius: 1rem;
        }

        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #b7b9cc;
        }

        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default;
        }

        .custom-range:disabled::-moz-range-thumb {
            background-color: #b7b9cc;
        }

        .custom-range:disabled::-moz-range-track {
            cursor: default;
        }

        .custom-range:disabled::-ms-thumb {
            background-color: #b7b9cc;
        }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                -webkit-transition: none;
                transition: none;
            }
        }

        .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover,
        .nav-link:focus {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #858796;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #dddfeb;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link:focus {
            border-color: #eaecf4 #eaecf4 #dddfeb;
        }

        .nav-tabs .nav-link.disabled {
            color: #858796;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #6e707e;
            background-color: #fff;
            border-color: #dddfeb #dddfeb #fff;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.35rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #4e73df;
        }

        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }

        .navbar>.container,
        .navbar>.container-fluid {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none;
        }

        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none;
        }

        .navbar-text {
            display: inline-block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .navbar-toggler {
            padding: 0.25rem 0.75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.35rem;
        }

        .navbar-toggler:hover,
        .navbar-toggler:focus {
            text-decoration: none;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%;
        }

        @media (max-width: 575.98px) {

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-sm .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 767.98px) {

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-md .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 991.98px) {

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 1199.98px) {

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-xl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }
        }

        .navbar-expand {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .navbar-expand .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-brand:hover,
        .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7);
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-text a {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-text a:hover,
        .navbar-light .navbar-text a:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .navbar-dark .navbar-brand:hover,
        .navbar-dark .navbar-brand:focus {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 0.5);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-text a {
            color: #fff;
        }

        .navbar-dark .navbar-text a:hover,
        .navbar-dark .navbar-text a:focus {
            color: #fff;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card>.list-group:first-child .list-group-item:first-child {
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .card>.list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-title {
            margin-bottom: 0.75rem;
        }

        .card-subtitle {
            margin-top: -0.375rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link+.card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .card-header:first-child {
            border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0;
        }

        .card-header+.list-group .list-group-item:first-child {
            border-top: 0;
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: #f8f9fc;
            border-top: 1px solid #e3e6f0;
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.35rem - 1px) calc(0.35rem - 1px);
        }

        .card-header-tabs {
            margin-right: -0.625rem;
            margin-bottom: -0.75rem;
            margin-left: -0.625rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.625rem;
            margin-left: -0.625rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
        }

        .card-img {
            width: 100%;
            border-radius: calc(0.35rem - 1px);
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(0.35rem - 1px);
            border-top-right-radius: calc(0.35rem - 1px);
        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(0.35rem - 1px);
            border-bottom-left-radius: calc(0.35rem - 1px);
        }

        .card-deck {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card-deck .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-deck {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -0.75rem;
                margin-left: -0.75rem;
            }

            .card-deck .card {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 0.75rem;
                margin-bottom: 0;
                margin-left: 0.75rem;
            }
        }

        .card-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card-group>.card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-group {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .card-group>.card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-top,
            .card-group>.card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-bottom,
            .card-group>.card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-top,
            .card-group>.card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-bottom,
            .card-group>.card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                -webkit-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .accordion>.card {
            overflow: hidden;
        }

        .accordion>.card:not(:first-of-type) .card-header:first-child {
            border-radius: 0;
        }

        .accordion>.card:not(:first-of-type):not(:last-of-type) {
            border-bottom: 0;
            border-radius: 0;
        }

        .accordion>.card:first-of-type {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion>.card:last-of-type {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .accordion>.card .card-header {
            margin-bottom: -1px;
        }

        .breadcrumb {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #eaecf4;
            border-radius: 0.35rem;
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: 0.5rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            display: inline-block;
            padding-right: 0.5rem;
            color: #858796;
            content: "/";
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: underline;
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #858796;
        }

        .pagination {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.35rem;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #4e73df;
            background-color: #fff;
            border: 1px solid #dddfeb;
        }

        .page-link:hover {
            z-index: 2;
            color: #224abe;
            text-decoration: none;
            background-color: #eaecf4;
            border-color: #dddfeb;
        }

        .page-link:focus {
            z-index: 2;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .page-item:last-child .page-link {
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .page-item.disabled .page-link {
            color: #858796;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dddfeb;
        }

        .pagination-lg .page-link {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5;
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
        }

        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
        }

        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.35rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .badge {
                -webkit-transition: none;
                transition: none;
            }
        }

        a.badge:hover,
        a.badge:focus {
            text-decoration: none;
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .badge-pill {
            padding-right: 0.6em;
            padding-left: 0.6em;
            border-radius: 10rem;
        }

        .badge-primary {
            color: #fff;
            background-color: #4e73df;
        }

        a.badge-primary:hover,
        a.badge-primary:focus {
            color: #fff;
            background-color: #2653d4;
        }

        a.badge-primary:focus,
        a.badge-primary.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.5);
        }

        .badge-secondary {
            color: #fff;
            background-color: #858796;
        }

        a.badge-secondary:hover,
        a.badge-secondary:focus {
            color: #fff;
            background-color: #6b6d7d;
        }

        a.badge-secondary:focus,
        a.badge-secondary.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(133, 135, 150, 0.5);
        }

        .badge-success {
            color: #fff;
            background-color: #1cc88a;
        }

        a.badge-success:hover,
        a.badge-success:focus {
            color: #fff;
            background-color: #169b6b;
        }

        a.badge-success:focus,
        a.badge-success.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.5);
        }

        .badge-info {
            color: #fff;
            background-color: #36b9cc;
        }

        a.badge-info:hover,
        a.badge-info:focus {
            color: #fff;
            background-color: #2a96a5;
        }

        a.badge-info:focus,
        a.badge-info.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.5);
        }

        .badge-warning {
            color: #fff;
            background-color: #f6c23e;
        }

        a.badge-warning:hover,
        a.badge-warning:focus {
            color: #fff;
            background-color: #f4b30d;
        }

        a.badge-warning:focus,
        a.badge-warning.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(246, 194, 62, 0.5);
        }

        .badge-danger {
            color: #fff;
            background-color: #e74a3b;
        }

        a.badge-danger:hover,
        a.badge-danger:focus {
            color: #fff;
            background-color: #d52a1a;
        }

        a.badge-danger:focus,
        a.badge-danger.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(231, 74, 59, 0.5);
        }

        .badge-light {
            color: #3a3b45;
            background-color: #f8f9fc;
        }

        a.badge-light:hover,
        a.badge-light:focus {
            color: #3a3b45;
            background-color: #d4daed;
        }

        a.badge-light:focus,
        a.badge-light.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 252, 0.5);
        }

        .badge-dark {
            color: #fff;
            background-color: #5a5c69;
        }

        a.badge-dark:hover,
        a.badge-dark:focus {
            color: #fff;
            background-color: #42444e;
        }

        a.badge-dark:focus,
        a.badge-dark.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(90, 92, 105, 0.5);
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #eaecf4;
            border-radius: 0.3rem;
        }

        @media (min-width: 576px) {
            .jumbotron {
                padding: 4rem 2rem;
            }
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.35rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 4rem;
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
        }

        .alert-primary {
            color: #293c74;
            background-color: #dce3f9;
            border-color: #cdd8f6;
        }

        .alert-primary hr {
            border-top-color: #b7c7f2;
        }

        .alert-primary .alert-link {
            color: #1c294e;
        }

        .alert-secondary {
            color: #45464e;
            background-color: #e7e7ea;
            border-color: #dddde2;
        }

        .alert-secondary hr {
            border-top-color: #cfcfd6;
        }

        .alert-secondary .alert-link {
            color: #2d2e33;
        }

        .alert-success {
            color: #0f6848;
            background-color: #d2f4e8;
            border-color: #bff0de;
        }

        .alert-success hr {
            border-top-color: #aaebd3;
        }

        .alert-success .alert-link {
            color: #093b29;
        }

        .alert-info {
            color: #1c606a;
            background-color: #d7f1f5;
            border-color: #c7ebf1;
        }

        .alert-info hr {
            border-top-color: #b3e4ec;
        }

        .alert-info .alert-link {
            color: #113b42;
        }

        .alert-warning {
            color: #806520;
            background-color: #fdf3d8;
            border-color: #fceec9;
        }

        .alert-warning hr {
            border-top-color: #fbe6b1;
        }

        .alert-warning .alert-link {
            color: #574516;
        }

        .alert-danger {
            color: #78261f;
            background-color: #fadbd8;
            border-color: #f8ccc8;
        }

        .alert-danger hr {
            border-top-color: #f5b7b1;
        }

        .alert-danger .alert-link {
            color: #4f1915;
        }

        .alert-light {
            color: #818183;
            background-color: #fefefe;
            border-color: #fdfdfe;
        }

        .alert-light hr {
            border-top-color: #ececf6;
        }

        .alert-light .alert-link {
            color: #686869;
        }

        .alert-dark {
            color: #2f3037;
            background-color: #dedee1;
            border-color: #d1d1d5;
        }

        .alert-dark hr {
            border-top-color: #c4c4c9;
        }

        .alert-dark .alert-link {
            color: #18181c;
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }

            to {
                background-position: 0 0;
            }
        }

        .progress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: 0.75rem;
            background-color: #eaecf4;
            border-radius: 0.35rem;
        }

        .progress-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #4e73df;
            -webkit-transition: width 0.6s ease;
            transition: width 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                -webkit-transition: none;
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .media {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .media-body {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .list-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
        }

        .list-group-item-action {
            width: 100%;
            color: #6e707e;
            text-align: inherit;
        }

        .list-group-item-action:hover,
        .list-group-item-action:focus {
            z-index: 1;
            color: #6e707e;
            text-decoration: none;
            background-color: #f8f9fc;
        }

        .list-group-item-action:active {
            color: #858796;
            background-color: #eaecf4;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .list-group-item:first-child {
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #858796;
            pointer-events: none;
            background-color: #fff;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .list-group-horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }

        .list-group-horizontal .list-group-item:first-child {
            border-top-left-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0;
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-sm .list-group-item {
                margin-right: -1px;
                margin-bottom: 0;
            }

            .list-group-horizontal-sm .list-group-item:first-child {
                border-top-left-radius: 0.35rem;
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-sm .list-group-item:last-child {
                margin-right: 0;
                border-top-right-radius: 0.35rem;
                border-bottom-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-md .list-group-item {
                margin-right: -1px;
                margin-bottom: 0;
            }

            .list-group-horizontal-md .list-group-item:first-child {
                border-top-left-radius: 0.35rem;
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-md .list-group-item:last-child {
                margin-right: 0;
                border-top-right-radius: 0.35rem;
                border-bottom-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-lg .list-group-item {
                margin-right: -1px;
                margin-bottom: 0;
            }

            .list-group-horizontal-lg .list-group-item:first-child {
                border-top-left-radius: 0.35rem;
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-lg .list-group-item:last-child {
                margin-right: 0;
                border-top-right-radius: 0.35rem;
                border-bottom-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-xl .list-group-item {
                margin-right: -1px;
                margin-bottom: 0;
            }

            .list-group-horizontal-xl .list-group-item:first-child {
                border-top-left-radius: 0.35rem;
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-xl .list-group-item:last-child {
                margin-right: 0;
                border-top-right-radius: 0.35rem;
                border-bottom-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }
        }

        .list-group-flush .list-group-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }

        .list-group-flush .list-group-item:last-child {
            margin-bottom: -1px;
        }

        .list-group-flush:first-child .list-group-item:first-child {
            border-top: 0;
        }

        .list-group-flush:last-child .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom: 0;
        }

        .list-group-item-primary {
            color: #293c74;
            background-color: #cdd8f6;
        }

        .list-group-item-primary.list-group-item-action:hover,
        .list-group-item-primary.list-group-item-action:focus {
            color: #293c74;
            background-color: #b7c7f2;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #293c74;
            border-color: #293c74;
        }

        .list-group-item-secondary {
            color: #45464e;
            background-color: #dddde2;
        }

        .list-group-item-secondary.list-group-item-action:hover,
        .list-group-item-secondary.list-group-item-action:focus {
            color: #45464e;
            background-color: #cfcfd6;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #45464e;
            border-color: #45464e;
        }

        .list-group-item-success {
            color: #0f6848;
            background-color: #bff0de;
        }

        .list-group-item-success.list-group-item-action:hover,
        .list-group-item-success.list-group-item-action:focus {
            color: #0f6848;
            background-color: #aaebd3;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #0f6848;
            border-color: #0f6848;
        }

        .list-group-item-info {
            color: #1c606a;
            background-color: #c7ebf1;
        }

        .list-group-item-info.list-group-item-action:hover,
        .list-group-item-info.list-group-item-action:focus {
            color: #1c606a;
            background-color: #b3e4ec;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #1c606a;
            border-color: #1c606a;
        }

        .list-group-item-warning {
            color: #806520;
            background-color: #fceec9;
        }

        .list-group-item-warning.list-group-item-action:hover,
        .list-group-item-warning.list-group-item-action:focus {
            color: #806520;
            background-color: #fbe6b1;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #806520;
            border-color: #806520;
        }

        .list-group-item-danger {
            color: #78261f;
            background-color: #f8ccc8;
        }

        .list-group-item-danger.list-group-item-action:hover,
        .list-group-item-danger.list-group-item-action:focus {
            color: #78261f;
            background-color: #f5b7b1;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #78261f;
            border-color: #78261f;
        }

        .list-group-item-light {
            color: #818183;
            background-color: #fdfdfe;
        }

        .list-group-item-light.list-group-item-action:hover,
        .list-group-item-light.list-group-item-action:focus {
            color: #818183;
            background-color: #ececf6;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818183;
            border-color: #818183;
        }

        .list-group-item-dark {
            color: #2f3037;
            background-color: #d1d1d5;
        }

        .list-group-item-dark.list-group-item-action:hover,
        .list-group-item-dark.list-group-item-action:focus {
            color: #2f3037;
            background-color: #c4c4c9;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #2f3037;
            border-color: #2f3037;
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }

        .close:hover {
            color: #000;
            text-decoration: none;
        }

        .close:not(:disabled):not(.disabled):hover,
        .close:not(:disabled):not(.disabled):focus {
            opacity: .75;
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        a.close.disabled {
            pointer-events: none;
        }

        .toast {
            max-width: 350px;
            overflow: hidden;
            font-size: 0.875rem;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            opacity: 0;
            border-radius: 0.25rem;
        }

        .toast:not(:last-child) {
            margin-bottom: 0.75rem;
        }

        .toast.showing {
            opacity: 1;
        }

        .toast.show {
            display: block;
            opacity: 1;
        }

        .toast.hide {
            display: none;
        }

        .toast-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.25rem 0.75rem;
            color: #858796;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .toast-body {
            padding: 0.75rem;
        }

        .modal-open {
            overflow: hidden;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                -webkit-transition: none;
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
        }

        .modal-dialog-scrollable {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            max-height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-header,
        .modal-dialog-scrollable .modal-footer {
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            content: "";
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none;
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none;
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #e3e6f0;
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem;
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 1px solid #e3e6f0;
            border-bottom-right-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
        }

        .modal-footer> :not(:first-child) {
            margin-left: .25rem;
        }

        .modal-footer> :not(:last-child) {
            margin-right: .25rem;
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem);
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem);
            }

            .modal-sm {
                max-width: 300px;
            }
        }

        @media (min-width: 992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: 0.9;
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }

        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top,
        .bs-tooltip-auto[x-placement^="top"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-top .arrow,
        .bs-tooltip-auto[x-placement^="top"] .arrow {
            bottom: 0;
        }

        .bs-tooltip-top .arrow::before,
        .bs-tooltip-auto[x-placement^="top"] .arrow::before {
            top: 0;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000;
        }

        .bs-tooltip-right,
        .bs-tooltip-auto[x-placement^="right"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-right .arrow,
        .bs-tooltip-auto[x-placement^="right"] .arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-right .arrow::before,
        .bs-tooltip-auto[x-placement^="right"] .arrow::before {
            right: 0;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #000;
        }

        .bs-tooltip-bottom,
        .bs-tooltip-auto[x-placement^="bottom"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-bottom .arrow,
        .bs-tooltip-auto[x-placement^="bottom"] .arrow {
            top: 0;
        }

        .bs-tooltip-bottom .arrow::before,
        .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
            bottom: 0;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #000;
        }

        .bs-tooltip-left,
        .bs-tooltip-auto[x-placement^="left"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-left .arrow,
        .bs-tooltip-auto[x-placement^="left"] .arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-left .arrow::before,
        .bs-tooltip-auto[x-placement^="left"] .arrow::before {
            left: 0;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #000;
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.25rem 0.5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 0.35rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
            margin: 0 0.3rem;
        }

        .popover .arrow::before,
        .popover .arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-top,
        .bs-popover-auto[x-placement^="top"] {
            margin-bottom: 0.5rem;
        }

        .bs-popover-top>.arrow,
        .bs-popover-auto[x-placement^="top"]>.arrow {
            bottom: calc((0.5rem + 1px) * -1);
        }

        .bs-popover-top>.arrow::before,
        .bs-popover-auto[x-placement^="top"]>.arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-top>.arrow::after,
        .bs-popover-auto[x-placement^="top"]>.arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-right,
        .bs-popover-auto[x-placement^="right"] {
            margin-left: 0.5rem;
        }

        .bs-popover-right>.arrow,
        .bs-popover-auto[x-placement^="right"]>.arrow {
            left: calc((0.5rem + 1px) * -1);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0;
        }

        .bs-popover-right>.arrow::before,
        .bs-popover-auto[x-placement^="right"]>.arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-right>.arrow::after,
        .bs-popover-auto[x-placement^="right"]>.arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .bs-popover-bottom,
        .bs-popover-auto[x-placement^="bottom"] {
            margin-top: 0.5rem;
        }

        .bs-popover-bottom>.arrow,
        .bs-popover-auto[x-placement^="bottom"]>.arrow {
            top: calc((0.5rem + 1px) * -1);
        }

        .bs-popover-bottom>.arrow::before,
        .bs-popover-auto[x-placement^="bottom"]>.arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-bottom>.arrow::after,
        .bs-popover-auto[x-placement^="bottom"]>.arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }

        .bs-popover-bottom .popover-header::before,
        .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #f7f7f7;
        }

        .bs-popover-left,
        .bs-popover-auto[x-placement^="left"] {
            margin-right: 0.5rem;
        }

        .bs-popover-left>.arrow,
        .bs-popover-auto[x-placement^="left"]>.arrow {
            right: calc((0.5rem + 1px) * -1);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0;
        }

        .bs-popover-left>.arrow::before,
        .bs-popover-auto[x-placement^="left"]>.arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-left>.arrow::after,
        .bs-popover-auto[x-placement^="left"]>.arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .popover-header {
            padding: 0.5rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 0.5rem 0.75rem;
            color: #858796;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.6s ease-in-out;
            transition: -webkit-transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        .carousel-item-next:not(.carousel-item-left),
        .active.carousel-item-right {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-right),
        .active.carousel-item-left {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none;
        }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            -webkit-transition: 0s 0.6s opacity;
            transition: 0s 0.6s opacity;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: 0.5;
            -webkit-transition: opacity 0.15s ease;
            transition: opacity 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-control-prev,
            .carousel-control-next {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev:hover,
        .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: no-repeat 50% / 100% 100%;
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators li {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            -webkit-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators li {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner-border .75s linear infinite;
            animation: spinner-border .75s linear infinite;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner-grow .75s linear infinite;
            animation: spinner-grow .75s linear infinite;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .bg-primary {
            background-color: #4e73df !important;
        }

        a.bg-primary:hover,
        a.bg-primary:focus,
        button.bg-primary:hover,
        button.bg-primary:focus {
            background-color: #2653d4 !important;
        }

        .bg-secondary {
            background-color: #858796 !important;
        }

        a.bg-secondary:hover,
        a.bg-secondary:focus,
        button.bg-secondary:hover,
        button.bg-secondary:focus {
            background-color: #6b6d7d !important;
        }

        .bg-success {
            background-color: #1cc88a !important;
        }

        a.bg-success:hover,
        a.bg-success:focus,
        button.bg-success:hover,
        button.bg-success:focus {
            background-color: #169b6b !important;
        }

        .bg-info {
            background-color: #36b9cc !important;
        }

        a.bg-info:hover,
        a.bg-info:focus,
        button.bg-info:hover,
        button.bg-info:focus {
            background-color: #2a96a5 !important;
        }

        .bg-warning {
            background-color: #f6c23e !important;
        }

        a.bg-warning:hover,
        a.bg-warning:focus,
        button.bg-warning:hover,
        button.bg-warning:focus {
            background-color: #f4b30d !important;
        }

        .bg-danger {
            background-color: #e74a3b !important;
        }

        a.bg-danger:hover,
        a.bg-danger:focus,
        button.bg-danger:hover,
        button.bg-danger:focus {
            background-color: #d52a1a !important;
        }

        .bg-light {
            background-color: #f8f9fc !important;
        }

        a.bg-light:hover,
        a.bg-light:focus,
        button.bg-light:hover,
        button.bg-light:focus {
            background-color: #d4daed !important;
        }

        .bg-dark {
            background-color: #5a5c69 !important;
        }

        a.bg-dark:hover,
        a.bg-dark:focus,
        button.bg-dark:hover,
        button.bg-dark:focus {
            background-color: #42444e !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .bg-transparent {
            background-color: transparent !important;
        }

        .border {
            border: 1px solid #e3e6f0 !important;
        }

        .border-top {
            border-top: 1px solid #e3e6f0 !important;
        }

        .border-right {
            border-right: 1px solid #e3e6f0 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #e3e6f0 !important;
        }

        .border-left {
            border-left: 1px solid #e3e6f0 !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-right-0 {
            border-right: 0 !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-left-0 {
            border-left: 0 !important;
        }

        .border-primary {
            border-color: #4e73df !important;
        }

        .border-secondary {
            border-color: #858796 !important;
        }

        .border-success {
            border-color: #1cc88a !important;
        }

        .border-info {
            border-color: #36b9cc !important;
        }

        .border-warning {
            border-color: #f6c23e !important;
        }

        .border-danger {
            border-color: #e74a3b !important;
        }

        .border-light {
            border-color: #f8f9fc !important;
        }

        .border-dark {
            border-color: #5a5c69 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .rounded-sm {
            border-radius: 0.2rem !important;
        }

        .rounded {
            border-radius: 0.35rem !important;
        }

        .rounded-top {
            border-top-left-radius: 0.35rem !important;
            border-top-right-radius: 0.35rem !important;
        }

        .rounded-right {
            border-top-right-radius: 0.35rem !important;
            border-bottom-right-radius: 0.35rem !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.35rem !important;
            border-bottom-left-radius: 0.35rem !important;
        }

        .rounded-left {
            border-top-left-radius: 0.35rem !important;
            border-bottom-left-radius: 0.35rem !important;
        }

        .rounded-lg {
            border-radius: 0.3rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .d-none {
            display: none !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        @media (min-width: 576px) {
            .d-sm-none {
                display: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
        }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-md-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
        }

        @media (min-width: 1200px) {
            .d-xl-none {
                display: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
        }

        @media print {
            .d-print-none {
                display: none !important;
            }

            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-print-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive::before {
            display: block;
            content: "";
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe,
        .embed-responsive embed,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%;
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%;
        }

        .embed-responsive-4by3::before {
            padding-top: 75%;
        }

        .embed-responsive-1by1::before {
            padding-top: 100%;
        }

        .flex-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .flex-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .justify-content-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .align-items-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        @media (min-width: 576px) {
            .flex-sm-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-sm-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-sm-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-sm-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-sm-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-sm-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-sm-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-sm-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
        }

        @media (min-width: 768px) {
            .flex-md-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-md-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-md-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-md-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-md-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-md-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-md-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-md-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-md-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-md-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
        }

        @media (min-width: 992px) {
            .flex-lg-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-lg-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-lg-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-lg-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-lg-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-lg-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-lg-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-lg-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
        }

        @media (min-width: 1200px) {
            .flex-xl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-xl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-xl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-xl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        @media (min-width: 576px) {
            .float-sm-left {
                float: left !important;
            }

            .float-sm-right {
                float: right !important;
            }

            .float-sm-none {
                float: none !important;
            }
        }

        @media (min-width: 768px) {
            .float-md-left {
                float: left !important;
            }

            .float-md-right {
                float: right !important;
            }

            .float-md-none {
                float: none !important;
            }
        }

        @media (min-width: 992px) {
            .float-lg-left {
                float: left !important;
            }

            .float-lg-right {
                float: right !important;
            }

            .float-lg-none {
                float: none !important;
            }
        }

        @media (min-width: 1200px) {
            .float-xl-left {
                float: left !important;
            }

            .float-xl-right {
                float: right !important;
            }

            .float-xl-none {
                float: none !important;
            }
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        @supports ((position: -webkit-sticky) or (position: sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal;
        }

        .shadow-sm {
            -webkit-box-shadow: 0 0.125rem 0.25rem 0 rgba(58, 59, 69, 0.2) !important;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(58, 59, 69, 0.2) !important;
        }

        .shadow {
            -webkit-box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
        }

        .shadow-lg {
            -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }

        .shadow-none {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0);
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important;
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important;
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important;
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .mt-1,
        .my-1 {
            margin-top: 0.25rem !important;
        }

        .mr-1,
        .mx-1 {
            margin-right: 0.25rem !important;
        }

        .mb-1,
        .my-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-1,
        .mx-1 {
            margin-left: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .mt-2,
        .my-2 {
            margin-top: 0.5rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: 0.5rem !important;
        }

        .mb-2,
        .my-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-2,
        .mx-2 {
            margin-left: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important;
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important;
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important;
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important;
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important;
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .pt-1,
        .py-1 {
            padding-top: 0.25rem !important;
        }

        .pr-1,
        .px-1 {
            padding-right: 0.25rem !important;
        }

        .pb-1,
        .py-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-1,
        .px-1 {
            padding-left: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .pt-2,
        .py-2 {
            padding-top: 0.5rem !important;
        }

        .pr-2,
        .px-2 {
            padding-right: 0.5rem !important;
        }

        .pb-2,
        .py-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important;
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important;
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important;
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important;
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important;
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important;
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important;
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important;
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .mt-n1,
        .my-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .mt-n2,
        .my-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important;
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important;
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important;
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important;
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important;
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important;
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important;
        }

        @media (min-width: 576px) {
            .m-sm-0 {
                margin: 0 !important;
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important;
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important;
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important;
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: 0.25rem !important;
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: 0.5rem !important;
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 1rem !important;
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 1rem !important;
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 1rem !important;
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important;
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 3rem !important;
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 3rem !important;
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 3rem !important;
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 3rem !important;
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 3rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important;
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important;
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important;
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: 0.25rem !important;
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: 0.5rem !important;
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 1rem !important;
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 1rem !important;
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important;
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 3rem !important;
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 3rem !important;
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 3rem !important;
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 3rem !important;
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 3rem !important;
            }

            .m-sm-n1 {
                margin: -0.25rem !important;
            }

            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -0.25rem !important;
            }

            .m-sm-n2 {
                margin: -0.5rem !important;
            }

            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -0.5rem !important;
            }

            .m-sm-n3 {
                margin: -1rem !important;
            }

            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -1rem !important;
            }

            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -1rem !important;
            }

            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -1rem !important;
            }

            .m-sm-n4 {
                margin: -1.5rem !important;
            }

            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important;
            }

            .m-sm-n5 {
                margin: -3rem !important;
            }

            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -3rem !important;
            }

            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -3rem !important;
            }

            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -3rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important;
            }

            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important;
            }

            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important;
            }

            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 768px) {
            .m-md-0 {
                margin: 0 !important;
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important;
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important;
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important;
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: 0.25rem !important;
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: 0.25rem !important;
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: 0.5rem !important;
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: 0.5rem !important;
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 1rem !important;
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 1rem !important;
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 1rem !important;
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 1rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important;
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important;
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important;
            }

            .m-md-5 {
                margin: 3rem !important;
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 3rem !important;
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 3rem !important;
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 3rem !important;
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 3rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important;
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important;
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important;
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: 0.25rem !important;
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: 0.25rem !important;
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: 0.5rem !important;
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: 0.5rem !important;
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 1rem !important;
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 1rem !important;
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 1rem !important;
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 1rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important;
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important;
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important;
            }

            .p-md-5 {
                padding: 3rem !important;
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 3rem !important;
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 3rem !important;
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 3rem !important;
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 3rem !important;
            }

            .m-md-n1 {
                margin: -0.25rem !important;
            }

            .mt-md-n1,
            .my-md-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -0.25rem !important;
            }

            .m-md-n2 {
                margin: -0.5rem !important;
            }

            .mt-md-n2,
            .my-md-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -0.5rem !important;
            }

            .m-md-n3 {
                margin: -1rem !important;
            }

            .mt-md-n3,
            .my-md-n3 {
                margin-top: -1rem !important;
            }

            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -1rem !important;
            }

            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -1rem !important;
            }

            .m-md-n4 {
                margin: -1.5rem !important;
            }

            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important;
            }

            .m-md-n5 {
                margin: -3rem !important;
            }

            .mt-md-n5,
            .my-md-n5 {
                margin-top: -3rem !important;
            }

            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -3rem !important;
            }

            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -3rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important;
            }

            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important;
            }

            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important;
            }

            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 992px) {
            .m-lg-0 {
                margin: 0 !important;
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important;
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important;
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important;
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: 0.25rem !important;
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: 0.5rem !important;
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 1rem !important;
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 1rem !important;
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 1rem !important;
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important;
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 3rem !important;
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 3rem !important;
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 3rem !important;
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 3rem !important;
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 3rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important;
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important;
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important;
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: 0.25rem !important;
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: 0.5rem !important;
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 1rem !important;
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 1rem !important;
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important;
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 3rem !important;
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 3rem !important;
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 3rem !important;
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 3rem !important;
            }

            .m-lg-n1 {
                margin: -0.25rem !important;
            }

            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -0.25rem !important;
            }

            .m-lg-n2 {
                margin: -0.5rem !important;
            }

            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -0.5rem !important;
            }

            .m-lg-n3 {
                margin: -1rem !important;
            }

            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -1rem !important;
            }

            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -1rem !important;
            }

            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -1rem !important;
            }

            .m-lg-n4 {
                margin: -1.5rem !important;
            }

            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important;
            }

            .m-lg-n5 {
                margin: -3rem !important;
            }

            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -3rem !important;
            }

            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -3rem !important;
            }

            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -3rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important;
            }

            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important;
            }

            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important;
            }

            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 1200px) {
            .m-xl-0 {
                margin: 0 !important;
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important;
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important;
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important;
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: 0.25rem !important;
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: 0.5rem !important;
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 1rem !important;
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 1rem !important;
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 1rem !important;
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important;
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 3rem !important;
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 3rem !important;
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 3rem !important;
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 3rem !important;
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 3rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important;
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important;
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important;
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: 0.25rem !important;
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: 0.5rem !important;
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 1rem !important;
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 1rem !important;
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important;
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 3rem !important;
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 3rem !important;
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 3rem !important;
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 3rem !important;
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 3rem !important;
            }

            .m-xl-n1 {
                margin: -0.25rem !important;
            }

            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -0.25rem !important;
            }

            .m-xl-n2 {
                margin: -0.5rem !important;
            }

            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -0.5rem !important;
            }

            .m-xl-n3 {
                margin: -1rem !important;
            }

            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -1rem !important;
            }

            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -1rem !important;
            }

            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -1rem !important;
            }

            .m-xl-n4 {
                margin: -1.5rem !important;
            }

            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important;
            }

            .m-xl-n5 {
                margin: -3rem !important;
            }

            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -3rem !important;
            }

            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -3rem !important;
            }

            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -3rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important;
            }

            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important;
            }

            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important;
            }

            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important;
            }
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
        }

        .text-justify {
            text-align: justify !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        @media (min-width: 576px) {
            .text-sm-left {
                text-align: left !important;
            }

            .text-sm-right {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }
        }

        @media (min-width: 768px) {
            .text-md-left {
                text-align: left !important;
            }

            .text-md-right {
                text-align: right !important;
            }

            .text-md-center {
                text-align: center !important;
            }
        }

        @media (min-width: 992px) {
            .text-lg-left {
                text-align: left !important;
            }

            .text-lg-right {
                text-align: right !important;
            }

            .text-lg-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .text-xl-left {
                text-align: left !important;
            }

            .text-xl-right {
                text-align: right !important;
            }

            .text-xl-center {
                text-align: center !important;
            }
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase,
        .dropdown .dropdown-menu .dropdown-header,
        .sidebar .sidebar-heading {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .font-weight-light {
            font-weight: 300 !important;
        }

        .font-weight-lighter {
            font-weight: lighter !important;
        }

        .font-weight-normal {
            font-weight: 400 !important;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .font-weight-bolder {
            font-weight: bolder !important;
        }

        .font-italic {
            font-style: italic !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-primary {
            color: #4e73df !important;
        }

        a.text-primary:hover,
        a.text-primary:focus {
            color: #224abe !important;
        }

        .text-secondary {
            color: #858796 !important;
        }

        a.text-secondary:hover,
        a.text-secondary:focus {
            color: #60616f !important;
        }

        .text-success {
            color: #1cc88a !important;
        }

        a.text-success:hover,
        a.text-success:focus {
            color: #13855c !important;
        }

        .text-info {
            color: #36b9cc !important;
        }

        a.text-info:hover,
        a.text-info:focus {
            color: #258391 !important;
        }

        .text-warning {
            color: #f6c23e !important;
        }

        a.text-warning:hover,
        a.text-warning:focus {
            color: #dda20a !important;
        }

        .text-danger {
            color: #e74a3b !important;
        }

        a.text-danger:hover,
        a.text-danger:focus {
            color: #be2617 !important;
        }

        .text-light {
            color: #f8f9fc !important;
        }

        a.text-light:hover,
        a.text-light:focus {
            color: #c2cbe5 !important;
        }

        .text-dark {
            color: #5a5c69 !important;
        }

        a.text-dark:hover,
        a.text-dark:focus {
            color: #373840 !important;
        }

        .text-body {
            color: #858796 !important;
        }

        .text-muted {
            color: #858796 !important;
        }

        .text-black-50 {
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-break {
            word-break: break-word !important;
            overflow-wrap: break-word !important;
        }

        .text-reset {
            color: inherit !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media print {

            *,
            *::before,
            *::after {
                text-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " ("attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            pre,
            blockquote {
                border: 1px solid #b7b9cc;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            tr,
            img {
                page-break-inside: avoid;
            }

            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }

            h2,
            h3 {
                page-break-after: avoid;
            }

            @page {
                /* size: a3; */
                size: f4;
            }

            body {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #000;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td,
            .table th {
                background-color: #fff !important;
            }

            .table-bordered th,
            .table-bordered td {
                border: 1px solid #dddfeb !important;
            }

            .table-dark {
                color: inherit;
            }

            .table-dark th,
            .table-dark td,
            .table-dark thead th,
            .table-dark tbody+tbody {
                border-color: #e3e6f0;
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #e3e6f0;
            }
        }

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            height: 100%;
        }

        a:focus {
            outline: none;
        }

        #wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        #wrapper #content-wrapper {
            background-color: #f8f9fc;
            width: 100%;
            overflow-x: hidden;
        }

        #wrapper #content-wrapper #content {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .container,
        .container-fluid {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .scroll-to-top {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: none;
            width: 2.75rem;
            height: 2.75rem;
            text-align: center;
            color: #fff;
            background: rgba(90, 92, 105, 0.5);
            line-height: 46px;
        }

        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: white;
        }

        .scroll-to-top:hover {
            background: #5a5c69;
        }

        .scroll-to-top i {
            font-weight: 800;
        }

        @-webkit-keyframes growIn {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes growIn {
            0% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        .animated--grow-in,
        .sidebar .nav-item .collapse {
            -webkit-animation-name: growIn;
            animation-name: growIn;
            -webkit-animation-duration: 200ms;
            animation-duration: 200ms;
            -webkit-animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
            animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animated--fade-in {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: 200ms;
            animation-duration: 200ms;
            -webkit-animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
            animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
        }

        .bg-gradient-primary {
            background-color: #4e73df;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #4e73df), to(#224abe));
            background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            background-size: cover;
        }

        .bg-gradient-success {
            background-color: #1cc88a;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #1cc88a), to(#13855c));
            background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%);
            background-size: cover;
        }

        .bg-gradient-info {
            background-color: #36b9cc;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #36b9cc), to(#258391));
            background-image: linear-gradient(180deg, #36b9cc 10%, #258391 100%);
            background-size: cover;
        }

        .bg-gradient-warning {
            background-color: #f6c23e;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #f6c23e), to(#dda20a));
            background-image: linear-gradient(180deg, #f6c23e 10%, #dda20a 100%);
            background-size: cover;
        }

        .bg-gradient-danger {
            background-color: #e74a3b;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #e74a3b), to(#be2617));
            background-image: linear-gradient(180deg, #e74a3b 10%, #be2617 100%);
            background-size: cover;
        }

        .bg-gray-100 {
            background-color: #f8f9fc !important;
        }

        .bg-gray-200 {
            background-color: #eaecf4 !important;
        }

        .bg-gray-300 {
            background-color: #dddfeb !important;
        }

        .bg-gray-400 {
            background-color: #d1d3e2 !important;
        }

        .bg-gray-500 {
            background-color: #b7b9cc !important;
        }

        .bg-gray-600 {
            background-color: #858796 !important;
        }

        .bg-gray-700 {
            background-color: #6e707e !important;
        }

        .bg-gray-800 {
            background-color: #5a5c69 !important;
        }

        .bg-gray-900 {
            background-color: #3a3b45 !important;
        }

        .o-hidden {
            overflow: hidden !important;
        }

        .text-xs {
            font-size: .7rem;
        }

        .text-lg {
            font-size: 1.2rem;
        }

        .text-gray-100 {
            color: #f8f9fc !important;
        }

        .text-gray-200 {
            color: #eaecf4 !important;
        }

        .text-gray-300 {
            color: #dddfeb !important;
        }

        .text-gray-400 {
            color: #d1d3e2 !important;
        }

        .text-gray-500 {
            color: #b7b9cc !important;
        }

        .text-gray-600 {
            color: #858796 !important;
        }

        .text-gray-700 {
            color: #6e707e !important;
        }

        .text-gray-800 {
            color: #5a5c69 !important;
        }

        .text-gray-900 {
            color: #3a3b45 !important;
        }

        .icon-circle {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .border-left-primary {
            border-left: 0.25rem solid #4e73df !important;
        }

        .border-left-success {
            border-left: 0.25rem solid #1cc88a !important;
        }

        .border-left-info {
            border-left: 0.25rem solid #36b9cc !important;
        }

        .border-left-warning {
            border-left: 0.25rem solid #f6c23e !important;
        }

        .border-left-danger {
            border-left: 0.25rem solid #e74a3b !important;
        }

        .border-bottom-primary {
            border-bottom: 0.25rem solid #4e73df !important;
        }

        .border-bottom-success {
            border-bottom: 0.25rem solid #1cc88a !important;
        }

        .border-bottom-info {
            border-bottom: 0.25rem solid #36b9cc !important;
        }

        .border-bottom-warning {
            border-bottom: 0.25rem solid #f6c23e !important;
        }

        .border-bottom-danger {
            border-bottom: 0.25rem solid #e74a3b !important;
        }

        .progress-sm {
            height: .5rem;
        }

        .rotate-15 {
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        .rotate-n-15 {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        .dropdown .dropdown-menu {
            font-size: 0.85rem;
        }

        .dropdown .dropdown-menu .dropdown-header {
            font-weight: 800;
            font-size: 0.65rem;
            color: #b7b9cc;
        }

        .dropdown.no-arrow .dropdown-toggle::after {
            display: none;
        }

        .sidebar .nav-item.dropdown .dropdown-toggle::after,
        .topbar .nav-item.dropdown .dropdown-toggle::after {
            width: 1rem;
            text-align: center;
            float: right;
            vertical-align: 0;
            border: 0;
            font-weight: 900;
            content: '\f105';
            font-family: 'Font Awesome 5 Free';
        }

        .sidebar .nav-item.dropdown.show .dropdown-toggle::after,
        .topbar .nav-item.dropdown.show .dropdown-toggle::after {
            content: '\f107';
        }

        .sidebar .nav-item .nav-link,
        .topbar .nav-item .nav-link {
            position: relative;
        }

        .sidebar .nav-item .nav-link .badge-counter,
        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
            -webkit-transform-origin: top right;
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem;
        }

        .sidebar .nav-item .nav-link .img-profile,
        .topbar .nav-item .nav-link .img-profile {
            height: 2rem;
            width: 2rem;
        }

        .topbar {
            height: 4.375rem;
        }

        .topbar #sidebarToggleTop {
            height: 2.5rem;
            width: 2.5rem;
        }

        .topbar #sidebarToggleTop:hover {
            background-color: #eaecf4;
        }

        .topbar #sidebarToggleTop:active {
            background-color: #dddfeb;
        }

        .topbar .navbar-search {
            width: 25rem;
        }

        .topbar .navbar-search input {
            font-size: 0.85rem;
        }

        .topbar .topbar-divider {
            width: 0;
            border-right: 1px solid #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem;
        }

        .topbar .nav-item .nav-link {
            height: 4.375rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 0.75rem;
        }

        .topbar .nav-item .nav-link:focus {
            outline: none;
        }

        .topbar .nav-item:focus {
            outline: none;
        }

        .topbar .dropdown {
            position: static;
        }

        .topbar .dropdown .dropdown-menu {
            width: calc(100% - 1.5rem);
            right: 0.75rem;
        }

        .topbar .dropdown-list {
            padding: 0;
            border: none;
            overflow: hidden;
        }

        .topbar .dropdown-list .dropdown-header {
            background-color: #4e73df;
            border: 1px solid #4e73df;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #fff;
        }

        .topbar .dropdown-list .dropdown-item {
            white-space: normal;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border-left: 1px solid #e3e6f0;
            border-right: 1px solid #e3e6f0;
            border-bottom: 1px solid #e3e6f0;
            line-height: 1.3rem;
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image {
            position: relative;
            height: 2.5rem;
            width: 2.5rem;
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image img {
            height: 2.5rem;
            width: 2.5rem;
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image .status-indicator {
            background-color: #eaecf4;
            height: 0.75rem;
            width: 0.75rem;
            border-radius: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
            border: 0.125rem solid #fff;
        }

        .topbar .dropdown-list .dropdown-item .text-truncate {
            max-width: 10rem;
        }

        .topbar .dropdown-list .dropdown-item:active {
            background-color: #eaecf4;
            color: #3a3b45;
        }

        @media (min-width: 576px) {
            .topbar .dropdown {
                position: relative;
            }

            .topbar .dropdown .dropdown-menu {
                width: auto;
                right: 0;
            }

            .topbar .dropdown-list {
                width: 20rem !important;
            }

            .topbar .dropdown-list .dropdown-item .text-truncate {
                max-width: 13.375rem;
            }
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link {
            color: #d1d3e2;
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
            color: #b7b9cc;
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:active {
            color: #858796;
        }

        .sidebar {
            width: 6.5rem;
            min-height: 100vh;
        }

        .sidebar .nav-item {
            position: relative;
        }

        .sidebar .nav-item:last-child {
            margin-bottom: 1rem;
        }

        .sidebar .nav-item .nav-link {
            text-align: center;
            padding: 0.75rem 1rem;
            width: 6.5rem;
        }

        .sidebar .nav-item .nav-link span {
            font-size: 0.65rem;
            display: block;
        }

        .sidebar .nav-item.active .nav-link {
            font-weight: 700;
        }

        .sidebar .nav-item .collapse {
            position: absolute;
            left: calc(6.5rem + 1.5rem / 2);
            z-index: 1;
            top: 2px;
        }

        .sidebar .nav-item .collapse .collapse-inner {
            border-radius: 0.35rem;
            -webkit-box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .sidebar .nav-item .collapsing {
            display: none;
            -webkit-transition: none;
            transition: none;
        }

        .sidebar .nav-item .collapse .collapse-inner,
        .sidebar .nav-item .collapsing .collapse-inner {
            padding: .5rem 0;
            min-width: 10rem;
            font-size: 0.85rem;
            margin: 0 0 1rem 0;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-header,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-header {
            margin: 0;
            white-space: nowrap;
            padding: .5rem 1.5rem;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 0.65rem;
            color: #b7b9cc;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item {
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            display: block;
            color: #3a3b45;
            text-decoration: none;
            border-radius: 0.35rem;
            white-space: nowrap;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item:hover,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item:hover {
            background-color: #eaecf4;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item:active,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item:active {
            background-color: #dddfeb;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item.active,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item.active {
            color: #4e73df;
            font-weight: 700;
        }

        .sidebar #sidebarToggle {
            width: 2.5rem;
            height: 2.5rem;
            text-align: center;
            margin-bottom: 1rem;
            cursor: pointer;
        }

        .sidebar #sidebarToggle::after {
            font-weight: 900;
            content: '\f104';
            font-family: 'Font Awesome 5 Free';
            margin-right: 0.1rem;
        }

        .sidebar #sidebarToggle:hover {
            text-decoration: none;
        }

        .sidebar #sidebarToggle:focus {
            outline: none;
        }

        .sidebar.toggled {
            width: 0 !important;
            overflow: hidden;
        }

        .sidebar.toggled #sidebarToggle::after {
            content: '\f105';
            font-family: 'Font Awesome 5 Free';
            margin-left: 0.25rem;
        }

        .sidebar .sidebar-brand {
            height: 4.375rem;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 800;
            padding: 1.5rem 1rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
            z-index: 1;
        }

        .sidebar .sidebar-brand .sidebar-brand-icon i {
            font-size: 2rem;
        }

        .sidebar .sidebar-brand .sidebar-brand-text {
            display: none;
        }

        .sidebar hr.sidebar-divider {
            margin: 0 1rem 1rem;
        }

        .sidebar .sidebar-heading {
            text-align: center;
            padding: 0 1rem;
            font-weight: 800;
            font-size: 0.65rem;
        }

        @media (min-width: 768px) {
            .sidebar {
                width: 14rem !important;
            }

            .sidebar .nav-item .collapse {
                position: relative;
                left: 0;
                z-index: 1;
                top: 0;
                -webkit-animation: none;
                animation: none;
            }

            .sidebar .nav-item .collapse .collapse-inner {
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .sidebar .nav-item .collapsing {
                display: block;
                -webkit-transition: height 0.15s ease;
                transition: height 0.15s ease;
            }

            .sidebar .nav-item .collapse,
            .sidebar .nav-item .collapsing {
                margin: 0 1rem;
            }

            .sidebar .nav-item .nav-link {
                display: block;
                width: 100%;
                text-align: left;
                padding: 1rem;
                width: 14rem;
            }

            .sidebar .nav-item .nav-link i {
                font-size: 0.85rem;
                margin-right: 0.25rem;
            }

            .sidebar .nav-item .nav-link span {
                font-size: 0.85rem;
                display: inline;
            }

            .sidebar .nav-item .nav-link[data-toggle="collapse"]::after {
                width: 1rem;
                text-align: center;
                float: right;
                vertical-align: 0;
                border: 0;
                font-weight: 900;
                content: '\f107';
                font-family: 'Font Awesome 5 Free';
            }

            .sidebar .nav-item .nav-link[data-toggle="collapse"].collapsed::after {
                content: '\f105';
            }

            .sidebar .sidebar-brand .sidebar-brand-icon i {
                font-size: 2rem;
            }

            .sidebar .sidebar-brand .sidebar-brand-text {
                display: inline;
            }

            .sidebar .sidebar-heading {
                text-align: left;
            }

            .sidebar.toggled {
                overflow: visible;
                width: 6.5rem !important;
            }

            .sidebar.toggled .nav-item .collapse {
                position: absolute;
                left: calc(6.5rem + 1.5rem / 2);
                z-index: 1;
                top: 2px;
                -webkit-animation-name: growIn;
                animation-name: growIn;
                -webkit-animation-duration: 200ms;
                animation-duration: 200ms;
                -webkit-animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
                animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
            }

            .sidebar.toggled .nav-item .collapse .collapse-inner {
                -webkit-box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
                box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
                border-radius: 0.35rem;
            }

            .sidebar.toggled .nav-item .collapsing {
                display: none;
                -webkit-transition: none;
                transition: none;
            }

            .sidebar.toggled .nav-item .collapse,
            .sidebar.toggled .nav-item .collapsing {
                margin: 0;
            }

            .sidebar.toggled .nav-item:last-child {
                margin-bottom: 1rem;
            }

            .sidebar.toggled .nav-item .nav-link {
                text-align: center;
                padding: 0.75rem 1rem;
                width: 6.5rem;
            }

            .sidebar.toggled .nav-item .nav-link span {
                font-size: 0.65rem;
                display: block;
            }

            .sidebar.toggled .nav-item .nav-link i {
                margin-right: 0;
            }

            .sidebar.toggled .nav-item .nav-link[data-toggle="collapse"]::after {
                display: none;
            }

            .sidebar.toggled .sidebar-brand .sidebar-brand-icon i {
                font-size: 2rem;
            }

            .sidebar.toggled .sidebar-brand .sidebar-brand-text {
                display: none;
            }

            .sidebar.toggled .sidebar-heading {
                text-align: center;
            }
        }

        .sidebar-light .sidebar-brand {
            color: #6e707e;
        }

        .sidebar-light hr.sidebar-divider {
            border-top: 1px solid #eaecf4;
        }

        .sidebar-light .sidebar-heading {
            color: #b7b9cc;
        }

        .sidebar-light .nav-item .nav-link {
            color: #858796;
        }

        .sidebar-light .nav-item .nav-link i {
            color: #d1d3e2;
        }

        .sidebar-light .nav-item .nav-link:active,
        .sidebar-light .nav-item .nav-link:focus,
        .sidebar-light .nav-item .nav-link:hover {
            color: #6e707e;
        }

        .sidebar-light .nav-item .nav-link:active i,
        .sidebar-light .nav-item .nav-link:focus i,
        .sidebar-light .nav-item .nav-link:hover i {
            color: #6e707e;
        }

        .sidebar-light .nav-item .nav-link[data-toggle="collapse"]::after {
            color: #b7b9cc;
        }

        .sidebar-light .nav-item.active .nav-link {
            color: #6e707e;
        }

        .sidebar-light .nav-item.active .nav-link i {
            color: #6e707e;
        }

        .sidebar-light #sidebarToggle {
            background-color: #eaecf4;
        }

        .sidebar-light #sidebarToggle::after {
            color: #b7b9cc;
        }

        .sidebar-light #sidebarToggle:hover {
            background-color: #dddfeb;
        }

        .sidebar-dark .sidebar-brand {
            color: #fff;
        }

        .sidebar-dark hr.sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }

        .sidebar-dark .sidebar-heading {
            color: rgba(255, 255, 255, 0.4);
        }

        .sidebar-dark .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.8);
        }

        .sidebar-dark .nav-item .nav-link i {
            color: rgba(255, 255, 255, 0.3);
        }

        .sidebar-dark .nav-item .nav-link:active,
        .sidebar-dark .nav-item .nav-link:focus,
        .sidebar-dark .nav-item .nav-link:hover {
            color: #fff;
        }

        .sidebar-dark .nav-item .nav-link:active i,
        .sidebar-dark .nav-item .nav-link:focus i,
        .sidebar-dark .nav-item .nav-link:hover i {
            color: #fff;
        }

        .sidebar-dark .nav-item .nav-link[data-toggle="collapse"]::after {
            color: rgba(255, 255, 255, 0.5);
        }

        .sidebar-dark .nav-item.active .nav-link {
            color: #fff;
        }

        .sidebar-dark .nav-item.active .nav-link i {
            color: #fff;
        }

        .sidebar-dark #sidebarToggle {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .sidebar-dark #sidebarToggle::after {
            color: rgba(255, 255, 255, 0.5);
        }

        .sidebar-dark #sidebarToggle:hover {
            background-color: rgba(255, 255, 255, 0.25);
        }

        .sidebar-dark.toggled #sidebarToggle::after {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-circle {
            border-radius: 100%;
            height: 2.5rem;
            width: 2.5rem;
            font-size: 1rem;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-circle.btn-sm,
        .btn-group-sm>.btn-circle.btn {
            height: 1.8rem;
            width: 1.8rem;
            font-size: 0.75rem;
        }

        .btn-circle.btn-lg,
        .btn-group-lg>.btn-circle.btn {
            height: 3.5rem;
            width: 3.5rem;
            font-size: 1.35rem;
        }

        .btn-icon-split {
            padding: 0;
            overflow: hidden;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-icon-split .icon {
            background: rgba(0, 0, 0, 0.15);
            display: inline-block;
            padding: 0.375rem 0.75rem;
        }

        .btn-icon-split .text {
            display: inline-block;
            padding: 0.375rem 0.75rem;
        }

        .btn-icon-split.btn-sm .icon,
        .btn-group-sm>.btn-icon-split.btn .icon {
            padding: 0.25rem 0.5rem;
        }

        .btn-icon-split.btn-sm .text,
        .btn-group-sm>.btn-icon-split.btn .text {
            padding: 0.25rem 0.5rem;
        }

        .btn-icon-split.btn-lg .icon,
        .btn-group-lg>.btn-icon-split.btn .icon {
            padding: 0.5rem 1rem;
        }

        .btn-icon-split.btn-lg .text,
        .btn-group-lg>.btn-icon-split.btn .text {
            padding: 0.5rem 1rem;
        }

        .card .card-header .dropdown {
            line-height: 1;
        }

        .card .card-header .dropdown .dropdown-menu {
            line-height: 1.5;
        }

        .card .card-header[data-toggle="collapse"] {
            text-decoration: none;
            position: relative;
            padding: 0.75rem 3.25rem 0.75rem 1.25rem;
        }

        .card .card-header[data-toggle="collapse"]::after {
            position: absolute;
            right: 0;
            top: 0;
            padding-right: 1.725rem;
            line-height: 51px;
            font-weight: 900;
            content: '\f107';
            font-family: 'Font Awesome 5 Free';
            color: #d1d3e2;
        }

        .card .card-header[data-toggle="collapse"].collapsed {
            border-radius: 0.35rem;
        }

        .card .card-header[data-toggle="collapse"].collapsed::after {
            content: '\f105';
        }

        .chart-area {
            position: relative;
            height: 10rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-area {
                height: 20rem;
            }
        }

        .chart-bar {
            position: relative;
            height: 10rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-bar {
                height: 20rem;
            }
        }

        .chart-pie {
            position: relative;
            height: 15rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-pie {
                height: calc(20rem - 43px) !important;
            }
        }

        .bg-login-image {
            background: url("https://source.unsplash.com/K4mSJ7kc0As/600x800");
            background-position: center;
            background-size: cover;
        }

        .bg-register-image {
            background: url("https://source.unsplash.com/Mv9hjnEUHR4/600x800");
            background-position: center;
            background-size: cover;
        }

        .bg-password-image {
            background: url("https://source.unsplash.com/oWTW-jNGl9I/600x800");
            background-position: center;
            background-size: cover;
        }

        form.user .custom-checkbox.small label {
            line-height: 1.5rem;
        }

        form.user .form-control-user {
            font-size: 0.8rem;
            border-radius: 10rem;
            padding: 1.5rem 1rem;
        }

        form.user .btn-user {
            font-size: 0.8rem;
            border-radius: 10rem;
            padding: 0.75rem 1rem;
        }

        .btn-google {
            color: #fff;
            background-color: #ea4335;
            border-color: #fff;
        }

        .btn-google:hover {
            color: #fff;
            background-color: #e12717;
            border-color: #e6e6e6;
        }

        .btn-google:focus,
        .btn-google.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .btn-google.disabled,
        .btn-google:disabled {
            color: #fff;
            background-color: #ea4335;
            border-color: #fff;
        }

        .btn-google:not(:disabled):not(.disabled):active,
        .btn-google:not(:disabled):not(.disabled).active,
        .show>.btn-google.dropdown-toggle {
            color: #fff;
            background-color: #d62516;
            border-color: #dfdfdf;
        }

        .btn-google:not(:disabled):not(.disabled):active:focus,
        .btn-google:not(:disabled):not(.disabled).active:focus,
        .show>.btn-google.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .btn-facebook {
            color: #fff;
            background-color: #3b5998;
            border-color: #fff;
        }

        .btn-facebook:hover {
            color: #fff;
            background-color: #30497c;
            border-color: #e6e6e6;
        }

        .btn-facebook:focus,
        .btn-facebook.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .btn-facebook.disabled,
        .btn-facebook:disabled {
            color: #fff;
            background-color: #3b5998;
            border-color: #fff;
        }

        .btn-facebook:not(:disabled):not(.disabled):active,
        .btn-facebook:not(:disabled):not(.disabled).active,
        .show>.btn-facebook.dropdown-toggle {
            color: #fff;
            background-color: #2d4373;
            border-color: #dfdfdf;
        }

        .btn-facebook:not(:disabled):not(.disabled):active:focus,
        .btn-facebook:not(:disabled):not(.disabled).active:focus,
        .show>.btn-facebook.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
        }

        .error {
            color: #5a5c69;
            font-size: 7rem;
            position: relative;
            line-height: 1;
            width: 12.5rem;
        }

        @-webkit-keyframes noise-anim {
            0% {
                clip: rect(89px, 9999px, 5px, 0);
            }

            5% {
                clip: rect(92px, 9999px, 71px, 0);
            }

            10% {
                clip: rect(63px, 9999px, 67px, 0);
            }

            15% {
                clip: rect(85px, 9999px, 47px, 0);
            }

            20% {
                clip: rect(76px, 9999px, 50px, 0);
            }

            25% {
                clip: rect(99px, 9999px, 10px, 0);
            }

            30% {
                clip: rect(76px, 9999px, 83px, 0);
            }

            35% {
                clip: rect(5px, 9999px, 45px, 0);
            }

            40% {
                clip: rect(3px, 9999px, 11px, 0);
            }

            45% {
                clip: rect(1px, 9999px, 87px, 0);
            }

            50% {
                clip: rect(56px, 9999px, 79px, 0);
            }

            55% {
                clip: rect(12px, 9999px, 54px, 0);
            }

            60% {
                clip: rect(38px, 9999px, 21px, 0);
            }

            65% {
                clip: rect(5px, 9999px, 15px, 0);
            }

            70% {
                clip: rect(20px, 9999px, 75px, 0);
            }

            75% {
                clip: rect(14px, 9999px, 33px, 0);
            }

            80% {
                clip: rect(70px, 9999px, 79px, 0);
            }

            85% {
                clip: rect(68px, 9999px, 78px, 0);
            }

            90% {
                clip: rect(96px, 9999px, 69px, 0);
            }

            95% {
                clip: rect(16px, 9999px, 95px, 0);
            }

            100% {
                clip: rect(96px, 9999px, 60px, 0);
            }
        }

        @keyframes noise-anim {
            0% {
                clip: rect(89px, 9999px, 5px, 0);
            }

            5% {
                clip: rect(92px, 9999px, 71px, 0);
            }

            10% {
                clip: rect(63px, 9999px, 67px, 0);
            }

            15% {
                clip: rect(85px, 9999px, 47px, 0);
            }

            20% {
                clip: rect(76px, 9999px, 50px, 0);
            }

            25% {
                clip: rect(99px, 9999px, 10px, 0);
            }

            30% {
                clip: rect(76px, 9999px, 83px, 0);
            }

            35% {
                clip: rect(5px, 9999px, 45px, 0);
            }

            40% {
                clip: rect(3px, 9999px, 11px, 0);
            }

            45% {
                clip: rect(1px, 9999px, 87px, 0);
            }

            50% {
                clip: rect(56px, 9999px, 79px, 0);
            }

            55% {
                clip: rect(12px, 9999px, 54px, 0);
            }

            60% {
                clip: rect(38px, 9999px, 21px, 0);
            }

            65% {
                clip: rect(5px, 9999px, 15px, 0);
            }

            70% {
                clip: rect(20px, 9999px, 75px, 0);
            }

            75% {
                clip: rect(14px, 9999px, 33px, 0);
            }

            80% {
                clip: rect(70px, 9999px, 79px, 0);
            }

            85% {
                clip: rect(68px, 9999px, 78px, 0);
            }

            90% {
                clip: rect(96px, 9999px, 69px, 0);
            }

            95% {
                clip: rect(16px, 9999px, 95px, 0);
            }

            100% {
                clip: rect(96px, 9999px, 60px, 0);
            }
        }

        .error:after {
            content: attr(data-text);
            position: absolute;
            left: 2px;
            text-shadow: -1px 0 #e74a3b;
            top: 0;
            color: #5a5c69;
            background: #f8f9fc;
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim 2s infinite linear alternate-reverse;
        }

        @-webkit-keyframes noise-anim-2 {
            0% {
                clip: rect(50px, 9999px, 32px, 0);
            }

            5% {
                clip: rect(32px, 9999px, 76px, 0);
            }

            10% {
                clip: rect(28px, 9999px, 55px, 0);
            }

            15% {
                clip: rect(64px, 9999px, 11px, 0);
            }

            20% {
                clip: rect(23px, 9999px, 53px, 0);
            }

            25% {
                clip: rect(69px, 9999px, 48px, 0);
            }

            30% {
                clip: rect(84px, 9999px, 66px, 0);
            }

            35% {
                clip: rect(66px, 9999px, 70px, 0);
            }

            40% {
                clip: rect(21px, 9999px, 86px, 0);
            }

            45% {
                clip: rect(70px, 9999px, 85px, 0);
            }

            50% {
                clip: rect(40px, 9999px, 4px, 0);
            }

            55% {
                clip: rect(62px, 9999px, 47px, 0);
            }

            60% {
                clip: rect(17px, 9999px, 97px, 0);
            }

            65% {
                clip: rect(57px, 9999px, 94px, 0);
            }

            70% {
                clip: rect(78px, 9999px, 85px, 0);
            }

            75% {
                clip: rect(97px, 9999px, 48px, 0);
            }

            80% {
                clip: rect(8px, 9999px, 31px, 0);
            }

            85% {
                clip: rect(14px, 9999px, 17px, 0);
            }

            90% {
                clip: rect(92px, 9999px, 92px, 0);
            }

            95% {
                clip: rect(95px, 9999px, 63px, 0);
            }

            100% {
                clip: rect(49px, 9999px, 11px, 0);
            }
        }

        @keyframes noise-anim-2 {
            0% {
                clip: rect(50px, 9999px, 32px, 0);
            }

            5% {
                clip: rect(32px, 9999px, 76px, 0);
            }

            10% {
                clip: rect(28px, 9999px, 55px, 0);
            }

            15% {
                clip: rect(64px, 9999px, 11px, 0);
            }

            20% {
                clip: rect(23px, 9999px, 53px, 0);
            }

            25% {
                clip: rect(69px, 9999px, 48px, 0);
            }

            30% {
                clip: rect(84px, 9999px, 66px, 0);
            }

            35% {
                clip: rect(66px, 9999px, 70px, 0);
            }

            40% {
                clip: rect(21px, 9999px, 86px, 0);
            }

            45% {
                clip: rect(70px, 9999px, 85px, 0);
            }

            50% {
                clip: rect(40px, 9999px, 4px, 0);
            }

            55% {
                clip: rect(62px, 9999px, 47px, 0);
            }

            60% {
                clip: rect(17px, 9999px, 97px, 0);
            }

            65% {
                clip: rect(57px, 9999px, 94px, 0);
            }

            70% {
                clip: rect(78px, 9999px, 85px, 0);
            }

            75% {
                clip: rect(97px, 9999px, 48px, 0);
            }

            80% {
                clip: rect(8px, 9999px, 31px, 0);
            }

            85% {
                clip: rect(14px, 9999px, 17px, 0);
            }

            90% {
                clip: rect(92px, 9999px, 92px, 0);
            }

            95% {
                clip: rect(95px, 9999px, 63px, 0);
            }

            100% {
                clip: rect(49px, 9999px, 11px, 0);
            }
        }

        .error:before {
            content: attr(data-text);
            position: absolute;
            left: -2px;
            text-shadow: 1px 0 #4e73df;
            top: 0;
            color: #5a5c69;
            background: #f8f9fc;
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim-2 3s infinite linear alternate-reverse;
        }

        footer.sticky-footer {
            padding: 2rem 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        footer.sticky-footer .copyright {
            line-height: 1;
            font-size: 0.8rem;
        }

        body.sidebar-toggled footer.sticky-footer {
            width: 100%;
        }

        .fa,
        .fab,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: .08em solid #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            animation: fa-spin 2s infinite linear
        }

        .fa-pulse {
            animation: fa-spin 1s infinite steps(8)
        }

        @keyframes fa-spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            transform: scaleX(-1)
        }

        .fa-flip-vertical {
            transform: scaleY(-1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical,
        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            transform: scale(-1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270 {
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: #fff
        }

        .fa-500px:before {
            content: "\f26e"
        }

        .fa-accessible-icon:before {
            content: "\f368"
        }

        .fa-accusoft:before {
            content: "\f369"
        }

        .fa-acquisitions-incorporated:before {
            content: "\f6af"
        }

        .fa-ad:before {
            content: "\f641"
        }

        .fa-address-book:before {
            content: "\f2b9"
        }

        .fa-address-card:before {
            content: "\f2bb"
        }

        .fa-adjust:before {
            content: "\f042"
        }

        .fa-adn:before {
            content: "\f170"
        }

        .fa-adobe:before {
            content: "\f778"
        }

        .fa-adversal:before {
            content: "\f36a"
        }

        .fa-affiliatetheme:before {
            content: "\f36b"
        }

        .fa-air-freshener:before {
            content: "\f5d0"
        }

        .fa-algolia:before {
            content: "\f36c"
        }

        .fa-align-center:before {
            content: "\f037"
        }

        .fa-align-justify:before {
            content: "\f039"
        }

        .fa-align-left:before {
            content: "\f036"
        }

        .fa-align-right:before {
            content: "\f038"
        }

        .fa-alipay:before {
            content: "\f642"
        }

        .fa-allergies:before {
            content: "\f461"
        }

        .fa-amazon:before {
            content: "\f270"
        }

        .fa-amazon-pay:before {
            content: "\f42c"
        }

        .fa-ambulance:before {
            content: "\f0f9"
        }

        .fa-american-sign-language-interpreting:before {
            content: "\f2a3"
        }

        .fa-amilia:before {
            content: "\f36d"
        }

        .fa-anchor:before {
            content: "\f13d"
        }

        .fa-android:before {
            content: "\f17b"
        }

        .fa-angellist:before {
            content: "\f209"
        }

        .fa-angle-double-down:before {
            content: "\f103"
        }

        .fa-angle-double-left:before {
            content: "\f100"
        }

        .fa-angle-double-right:before {
            content: "\f101"
        }

        .fa-angle-double-up:before {
            content: "\f102"
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-angle-up:before {
            content: "\f106"
        }

        .fa-angry:before {
            content: "\f556"
        }

        .fa-angrycreative:before {
            content: "\f36e"
        }

        .fa-angular:before {
            content: "\f420"
        }

        .fa-ankh:before {
            content: "\f644"
        }

        .fa-app-store:before {
            content: "\f36f"
        }

        .fa-app-store-ios:before {
            content: "\f370"
        }

        .fa-apper:before {
            content: "\f371"
        }

        .fa-apple:before {
            content: "\f179"
        }

        .fa-apple-alt:before {
            content: "\f5d1"
        }

        .fa-apple-pay:before {
            content: "\f415"
        }

        .fa-archive:before {
            content: "\f187"
        }

        .fa-archway:before {
            content: "\f557"
        }

        .fa-arrow-alt-circle-down:before {
            content: "\f358"
        }

        .fa-arrow-alt-circle-left:before {
            content: "\f359"
        }

        .fa-arrow-alt-circle-right:before {
            content: "\f35a"
        }

        .fa-arrow-alt-circle-up:before {
            content: "\f35b"
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab"
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8"
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa"
        }

        .fa-arrow-down:before {
            content: "\f063"
        }

        .fa-arrow-left:before {
            content: "\f060"
        }

        .fa-arrow-right:before {
            content: "\f061"
        }

        .fa-arrow-up:before {
            content: "\f062"
        }

        .fa-arrows-alt:before {
            content: "\f0b2"
        }

        .fa-arrows-alt-h:before {
            content: "\f337"
        }

        .fa-arrows-alt-v:before {
            content: "\f338"
        }

        .fa-artstation:before {
            content: "\f77a"
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2"
        }

        .fa-asterisk:before {
            content: "\f069"
        }

        .fa-asymmetrik:before {
            content: "\f372"
        }

        .fa-at:before {
            content: "\f1fa"
        }

        .fa-atlas:before {
            content: "\f558"
        }

        .fa-atlassian:before {
            content: "\f77b"
        }

        .fa-atom:before {
            content: "\f5d2"
        }

        .fa-audible:before {
            content: "\f373"
        }

        .fa-audio-description:before {
            content: "\f29e"
        }

        .fa-autoprefixer:before {
            content: "\f41c"
        }

        .fa-avianex:before {
            content: "\f374"
        }

        .fa-aviato:before {
            content: "\f421"
        }

        .fa-award:before {
            content: "\f559"
        }

        .fa-aws:before {
            content: "\f375"
        }

        .fa-baby:before {
            content: "\f77c"
        }

        .fa-baby-carriage:before {
            content: "\f77d"
        }

        .fa-backspace:before {
            content: "\f55a"
        }

        .fa-backward:before {
            content: "\f04a"
        }

        .fa-bacon:before {
            content: "\f7e5"
        }

        .fa-balance-scale:before {
            content: "\f24e"
        }

        .fa-ban:before {
            content: "\f05e"
        }

        .fa-band-aid:before {
            content: "\f462"
        }

        .fa-bandcamp:before {
            content: "\f2d5"
        }

        .fa-barcode:before {
            content: "\f02a"
        }

        .fa-bars:before {
            content: "\f0c9"
        }

        .fa-baseball-ball:before {
            content: "\f433"
        }

        .fa-basketball-ball:before {
            content: "\f434"
        }

        .fa-bath:before {
            content: "\f2cd"
        }

        .fa-battery-empty:before {
            content: "\f244"
        }

        .fa-battery-full:before {
            content: "\f240"
        }

        .fa-battery-half:before {
            content: "\f242"
        }

        .fa-battery-quarter:before {
            content: "\f243"
        }

        .fa-battery-three-quarters:before {
            content: "\f241"
        }

        .fa-bed:before {
            content: "\f236"
        }

        .fa-beer:before {
            content: "\f0fc"
        }

        .fa-behance:before {
            content: "\f1b4"
        }

        .fa-behance-square:before {
            content: "\f1b5"
        }

        .fa-bell:before {
            content: "\f0f3"
        }

        .fa-bell-slash:before {
            content: "\f1f6"
        }

        .fa-bezier-curve:before {
            content: "\f55b"
        }

        .fa-bible:before {
            content: "\f647"
        }

        .fa-bicycle:before {
            content: "\f206"
        }

        .fa-bimobject:before {
            content: "\f378"
        }

        .fa-binoculars:before {
            content: "\f1e5"
        }

        .fa-biohazard:before {
            content: "\f780"
        }

        .fa-birthday-cake:before {
            content: "\f1fd"
        }

        .fa-bitbucket:before {
            content: "\f171"
        }

        .fa-bitcoin:before {
            content: "\f379"
        }

        .fa-bity:before {
            content: "\f37a"
        }

        .fa-black-tie:before {
            content: "\f27e"
        }

        .fa-blackberry:before {
            content: "\f37b"
        }

        .fa-blender:before {
            content: "\f517"
        }

        .fa-blender-phone:before {
            content: "\f6b6"
        }

        .fa-blind:before {
            content: "\f29d"
        }

        .fa-blog:before {
            content: "\f781"
        }

        .fa-blogger:before {
            content: "\f37c"
        }

        .fa-blogger-b:before {
            content: "\f37d"
        }

        .fa-bluetooth:before {
            content: "\f293"
        }

        .fa-bluetooth-b:before {
            content: "\f294"
        }

        .fa-bold:before {
            content: "\f032"
        }

        .fa-bolt:before {
            content: "\f0e7"
        }

        .fa-bomb:before {
            content: "\f1e2"
        }

        .fa-bone:before {
            content: "\f5d7"
        }

        .fa-bong:before {
            content: "\f55c"
        }

        .fa-book:before {
            content: "\f02d"
        }

        .fa-book-dead:before {
            content: "\f6b7"
        }

        .fa-book-medical:before {
            content: "\f7e6"
        }

        .fa-book-open:before {
            content: "\f518"
        }

        .fa-book-reader:before {
            content: "\f5da"
        }

        .fa-bookmark:before {
            content: "\f02e"
        }

        .fa-bowling-ball:before {
            content: "\f436"
        }

        .fa-box:before {
            content: "\f466"
        }

        .fa-box-open:before {
            content: "\f49e"
        }

        .fa-boxes:before {
            content: "\f468"
        }

        .fa-braille:before {
            content: "\f2a1"
        }

        .fa-brain:before {
            content: "\f5dc"
        }

        .fa-bread-slice:before {
            content: "\f7ec"
        }

        .fa-briefcase:before {
            content: "\f0b1"
        }

        .fa-briefcase-medical:before {
            content: "\f469"
        }

        .fa-broadcast-tower:before {
            content: "\f519"
        }

        .fa-broom:before {
            content: "\f51a"
        }

        .fa-brush:before {
            content: "\f55d"
        }

        .fa-btc:before {
            content: "\f15a"
        }

        .fa-bug:before {
            content: "\f188"
        }

        .fa-building:before {
            content: "\f1ad"
        }

        .fa-bullhorn:before {
            content: "\f0a1"
        }

        .fa-bullseye:before {
            content: "\f140"
        }

        .fa-burn:before {
            content: "\f46a"
        }

        .fa-buromobelexperte:before {
            content: "\f37f"
        }

        .fa-bus:before {
            content: "\f207"
        }

        .fa-bus-alt:before {
            content: "\f55e"
        }

        .fa-business-time:before {
            content: "\f64a"
        }

        .fa-buysellads:before {
            content: "\f20d"
        }

        .fa-calculator:before {
            content: "\f1ec"
        }

        .fa-calendar:before {
            content: "\f133"
        }

        .fa-calendar-alt:before {
            content: "\f073"
        }

        .fa-calendar-check:before {
            content: "\f274"
        }

        .fa-calendar-day:before {
            content: "\f783"
        }

        .fa-calendar-minus:before {
            content: "\f272"
        }

        .fa-calendar-plus:before {
            content: "\f271"
        }

        .fa-calendar-times:before {
            content: "\f273"
        }

        .fa-calendar-week:before {
            content: "\f784"
        }

        .fa-camera:before {
            content: "\f030"
        }

        .fa-camera-retro:before {
            content: "\f083"
        }

        .fa-campground:before {
            content: "\f6bb"
        }

        .fa-canadian-maple-leaf:before {
            content: "\f785"
        }

        .fa-candy-cane:before {
            content: "\f786"
        }

        .fa-cannabis:before {
            content: "\f55f"
        }

        .fa-capsules:before {
            content: "\f46b"
        }

        .fa-car:before {
            content: "\f1b9"
        }

        .fa-car-alt:before {
            content: "\f5de"
        }

        .fa-car-battery:before {
            content: "\f5df"
        }

        .fa-car-crash:before {
            content: "\f5e1"
        }

        .fa-car-side:before {
            content: "\f5e4"
        }

        .fa-caret-down:before {
            content: "\f0d7"
        }

        .fa-caret-left:before {
            content: "\f0d9"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-caret-square-down:before {
            content: "\f150"
        }

        .fa-caret-square-left:before {
            content: "\f191"
        }

        .fa-caret-square-right:before {
            content: "\f152"
        }

        .fa-caret-square-up:before {
            content: "\f151"
        }

        .fa-caret-up:before {
            content: "\f0d8"
        }

        .fa-carrot:before {
            content: "\f787"
        }

        .fa-cart-arrow-down:before {
            content: "\f218"
        }

        .fa-cart-plus:before {
            content: "\f217"
        }

        .fa-cash-register:before {
            content: "\f788"
        }

        .fa-cat:before {
            content: "\f6be"
        }

        .fa-cc-amazon-pay:before {
            content: "\f42d"
        }

        .fa-cc-amex:before {
            content: "\f1f3"
        }

        .fa-cc-apple-pay:before {
            content: "\f416"
        }

        .fa-cc-diners-club:before {
            content: "\f24c"
        }

        .fa-cc-discover:before {
            content: "\f1f2"
        }

        .fa-cc-jcb:before {
            content: "\f24b"
        }

        .fa-cc-mastercard:before {
            content: "\f1f1"
        }

        .fa-cc-paypal:before {
            content: "\f1f4"
        }

        .fa-cc-stripe:before {
            content: "\f1f5"
        }

        .fa-cc-visa:before {
            content: "\f1f0"
        }

        .fa-centercode:before {
            content: "\f380"
        }

        .fa-centos:before {
            content: "\f789"
        }

        .fa-certificate:before {
            content: "\f0a3"
        }

        .fa-chair:before {
            content: "\f6c0"
        }

        .fa-chalkboard:before {
            content: "\f51b"
        }

        .fa-chalkboard-teacher:before {
            content: "\f51c"
        }

        .fa-charging-station:before {
            content: "\f5e7"
        }

        .fa-chart-area:before {
            content: "\f1fe"
        }

        .fa-chart-bar:before {
            content: "\f080"
        }

        .fa-chart-line:before {
            content: "\f201"
        }

        .fa-chart-pie:before {
            content: "\f200"
        }

        .fa-check:before {
            content: "\f00c"
        }

        .fa-check-circle:before {
            content: "\f058"
        }

        .fa-check-double:before {
            content: "\f560"
        }

        .fa-check-square:before {
            content: "\f14a"
        }

        .fa-cheese:before {
            content: "\f7ef"
        }

        .fa-chess:before {
            content: "\f439"
        }

        .fa-chess-bishop:before {
            content: "\f43a"
        }

        .fa-chess-board:before {
            content: "\f43c"
        }

        .fa-chess-king:before {
            content: "\f43f"
        }

        .fa-chess-knight:before {
            content: "\f441"
        }

        .fa-chess-pawn:before {
            content: "\f443"
        }

        .fa-chess-queen:before {
            content: "\f445"
        }

        .fa-chess-rook:before {
            content: "\f447"
        }

        .fa-chevron-circle-down:before {
            content: "\f13a"
        }

        .fa-chevron-circle-left:before {
            content: "\f137"
        }

        .fa-chevron-circle-right:before {
            content: "\f138"
        }

        .fa-chevron-circle-up:before {
            content: "\f139"
        }

        .fa-chevron-down:before {
            content: "\f078"
        }

        .fa-chevron-left:before {
            content: "\f053"
        }

        .fa-chevron-right:before {
            content: "\f054"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-child:before {
            content: "\f1ae"
        }

        .fa-chrome:before {
            content: "\f268"
        }

        .fa-church:before {
            content: "\f51d"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-circle-notch:before {
            content: "\f1ce"
        }

        .fa-city:before {
            content: "\f64f"
        }

        .fa-clinic-medical:before {
            content: "\f7f2"
        }

        .fa-clipboard:before {
            content: "\f328"
        }

        .fa-clipboard-check:before {
            content: "\f46c"
        }

        .fa-clipboard-list:before {
            content: "\f46d"
        }

        .fa-clock:before {
            content: "\f017"
        }

        .fa-clone:before {
            content: "\f24d"
        }

        .fa-closed-captioning:before {
            content: "\f20a"
        }

        .fa-cloud:before {
            content: "\f0c2"
        }

        .fa-cloud-download-alt:before {
            content: "\f381"
        }

        .fa-cloud-meatball:before {
            content: "\f73b"
        }

        .fa-cloud-moon:before {
            content: "\f6c3"
        }

        .fa-cloud-moon-rain:before {
            content: "\f73c"
        }

        .fa-cloud-rain:before {
            content: "\f73d"
        }

        .fa-cloud-showers-heavy:before {
            content: "\f740"
        }

        .fa-cloud-sun:before {
            content: "\f6c4"
        }

        .fa-cloud-sun-rain:before {
            content: "\f743"
        }

        .fa-cloud-upload-alt:before {
            content: "\f382"
        }

        .fa-cloudscale:before {
            content: "\f383"
        }

        .fa-cloudsmith:before {
            content: "\f384"
        }

        .fa-cloudversify:before {
            content: "\f385"
        }

        .fa-cocktail:before {
            content: "\f561"
        }

        .fa-code:before {
            content: "\f121"
        }

        .fa-code-branch:before {
            content: "\f126"
        }

        .fa-codepen:before {
            content: "\f1cb"
        }

        .fa-codiepie:before {
            content: "\f284"
        }

        .fa-coffee:before {
            content: "\f0f4"
        }

        .fa-cog:before {
            content: "\f013"
        }

        .fa-cogs:before {
            content: "\f085"
        }

        .fa-coins:before {
            content: "\f51e"
        }

        .fa-columns:before {
            content: "\f0db"
        }

        .fa-comment:before {
            content: "\f075"
        }

        .fa-comment-alt:before {
            content: "\f27a"
        }

        .fa-comment-dollar:before {
            content: "\f651"
        }

        .fa-comment-dots:before {
            content: "\f4ad"
        }

        .fa-comment-medical:before {
            content: "\f7f5"
        }

        .fa-comment-slash:before {
            content: "\f4b3"
        }

        .fa-comments:before {
            content: "\f086"
        }

        .fa-comments-dollar:before {
            content: "\f653"
        }

        .fa-compact-disc:before {
            content: "\f51f"
        }

        .fa-compass:before {
            content: "\f14e"
        }

        .fa-compress:before {
            content: "\f066"
        }

        .fa-compress-arrows-alt:before {
            content: "\f78c"
        }

        .fa-concierge-bell:before {
            content: "\f562"
        }

        .fa-confluence:before {
            content: "\f78d"
        }

        .fa-connectdevelop:before {
            content: "\f20e"
        }

        .fa-contao:before {
            content: "\f26d"
        }

        .fa-cookie:before {
            content: "\f563"
        }

        .fa-cookie-bite:before {
            content: "\f564"
        }

        .fa-copy:before {
            content: "\f0c5"
        }

        .fa-copyright:before {
            content: "\f1f9"
        }

        .fa-couch:before {
            content: "\f4b8"
        }

        .fa-cpanel:before {
            content: "\f388"
        }

        .fa-creative-commons:before {
            content: "\f25e"
        }

        .fa-creative-commons-by:before {
            content: "\f4e7"
        }

        .fa-creative-commons-nc:before {
            content: "\f4e8"
        }

        .fa-creative-commons-nc-eu:before {
            content: "\f4e9"
        }

        .fa-creative-commons-nc-jp:before {
            content: "\f4ea"
        }

        .fa-creative-commons-nd:before {
            content: "\f4eb"
        }

        .fa-creative-commons-pd:before {
            content: "\f4ec"
        }

        .fa-creative-commons-pd-alt:before {
            content: "\f4ed"
        }

        .fa-creative-commons-remix:before {
            content: "\f4ee"
        }

        .fa-creative-commons-sa:before {
            content: "\f4ef"
        }

        .fa-creative-commons-sampling:before {
            content: "\f4f0"
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\f4f1"
        }

        .fa-creative-commons-share:before {
            content: "\f4f2"
        }

        .fa-creative-commons-zero:before {
            content: "\f4f3"
        }

        .fa-credit-card:before {
            content: "\f09d"
        }

        .fa-critical-role:before {
            content: "\f6c9"
        }

        .fa-crop:before {
            content: "\f125"
        }

        .fa-crop-alt:before {
            content: "\f565"
        }

        .fa-cross:before {
            content: "\f654"
        }

        .fa-crosshairs:before {
            content: "\f05b"
        }

        .fa-crow:before {
            content: "\f520"
        }

        .fa-crown:before {
            content: "\f521"
        }

        .fa-crutch:before {
            content: "\f7f7"
        }

        .fa-css3:before {
            content: "\f13c"
        }

        .fa-css3-alt:before {
            content: "\f38b"
        }

        .fa-cube:before {
            content: "\f1b2"
        }

        .fa-cubes:before {
            content: "\f1b3"
        }

        .fa-cut:before {
            content: "\f0c4"
        }

        .fa-cuttlefish:before {
            content: "\f38c"
        }

        .fa-d-and-d:before {
            content: "\f38d"
        }

        .fa-d-and-d-beyond:before {
            content: "\f6ca"
        }

        .fa-dashcube:before {
            content: "\f210"
        }

        .fa-database:before {
            content: "\f1c0"
        }

        .fa-deaf:before {
            content: "\f2a4"
        }

        .fa-delicious:before {
            content: "\f1a5"
        }

        .fa-democrat:before {
            content: "\f747"
        }

        .fa-deploydog:before {
            content: "\f38e"
        }

        .fa-deskpro:before {
            content: "\f38f"
        }

        .fa-desktop:before {
            content: "\f108"
        }

        .fa-dev:before {
            content: "\f6cc"
        }

        .fa-deviantart:before {
            content: "\f1bd"
        }

        .fa-dharmachakra:before {
            content: "\f655"
        }

        .fa-dhl:before {
            content: "\f790"
        }

        .fa-diagnoses:before {
            content: "\f470"
        }

        .fa-diaspora:before {
            content: "\f791"
        }

        .fa-dice:before {
            content: "\f522"
        }

        .fa-dice-d20:before {
            content: "\f6cf"
        }

        .fa-dice-d6:before {
            content: "\f6d1"
        }

        .fa-dice-five:before {
            content: "\f523"
        }

        .fa-dice-four:before {
            content: "\f524"
        }

        .fa-dice-one:before {
            content: "\f525"
        }

        .fa-dice-six:before {
            content: "\f526"
        }

        .fa-dice-three:before {
            content: "\f527"
        }

        .fa-dice-two:before {
            content: "\f528"
        }

        .fa-digg:before {
            content: "\f1a6"
        }

        .fa-digital-ocean:before {
            content: "\f391"
        }

        .fa-digital-tachograph:before {
            content: "\f566"
        }

        .fa-directions:before {
            content: "\f5eb"
        }

        .fa-discord:before {
            content: "\f392"
        }

        .fa-discourse:before {
            content: "\f393"
        }

        .fa-divide:before {
            content: "\f529"
        }

        .fa-dizzy:before {
            content: "\f567"
        }

        .fa-dna:before {
            content: "\f471"
        }

        .fa-dochub:before {
            content: "\f394"
        }

        .fa-docker:before {
            content: "\f395"
        }

        .fa-dog:before {
            content: "\f6d3"
        }

        .fa-dollar-sign:before {
            content: "\f155"
        }

        .fa-dolly:before {
            content: "\f472"
        }

        .fa-dolly-flatbed:before {
            content: "\f474"
        }

        .fa-donate:before {
            content: "\f4b9"
        }

        .fa-door-closed:before {
            content: "\f52a"
        }

        .fa-door-open:before {
            content: "\f52b"
        }

        .fa-dot-circle:before {
            content: "\f192"
        }

        .fa-dove:before {
            content: "\f4ba"
        }

        .fa-download:before {
            content: "\f019"
        }

        .fa-draft2digital:before {
            content: "\f396"
        }

        .fa-drafting-compass:before {
            content: "\f568"
        }

        .fa-dragon:before {
            content: "\f6d5"
        }

        .fa-draw-polygon:before {
            content: "\f5ee"
        }

        .fa-dribbble:before {
            content: "\f17d"
        }

        .fa-dribbble-square:before {
            content: "\f397"
        }

        .fa-dropbox:before {
            content: "\f16b"
        }

        .fa-drum:before {
            content: "\f569"
        }

        .fa-drum-steelpan:before {
            content: "\f56a"
        }

        .fa-drumstick-bite:before {
            content: "\f6d7"
        }

        .fa-drupal:before {
            content: "\f1a9"
        }

        .fa-dumbbell:before {
            content: "\f44b"
        }

        .fa-dumpster:before {
            content: "\f793"
        }

        .fa-dumpster-fire:before {
            content: "\f794"
        }

        .fa-dungeon:before {
            content: "\f6d9"
        }

        .fa-dyalog:before {
            content: "\f399"
        }

        .fa-earlybirds:before {
            content: "\f39a"
        }

        .fa-ebay:before {
            content: "\f4f4"
        }

        .fa-edge:before {
            content: "\f282"
        }

        .fa-edit:before {
            content: "\f044"
        }

        .fa-egg:before {
            content: "\f7fb"
        }

        .fa-eject:before {
            content: "\f052"
        }

        .fa-elementor:before {
            content: "\f430"
        }

        .fa-ellipsis-h:before {
            content: "\f141"
        }

        .fa-ellipsis-v:before {
            content: "\f142"
        }

        .fa-ello:before {
            content: "\f5f1"
        }

        .fa-ember:before {
            content: "\f423"
        }

        .fa-empire:before {
            content: "\f1d1"
        }

        .fa-envelope:before {
            content: "\f0e0"
        }

        .fa-envelope-open:before {
            content: "\f2b6"
        }

        .fa-envelope-open-text:before {
            content: "\f658"
        }

        .fa-envelope-square:before {
            content: "\f199"
        }

        .fa-envira:before {
            content: "\f299"
        }

        .fa-equals:before {
            content: "\f52c"
        }

        .fa-eraser:before {
            content: "\f12d"
        }

        .fa-erlang:before {
            content: "\f39d"
        }

        .fa-ethereum:before {
            content: "\f42e"
        }

        .fa-ethernet:before {
            content: "\f796"
        }

        .fa-etsy:before {
            content: "\f2d7"
        }

        .fa-euro-sign:before {
            content: "\f153"
        }

        .fa-exchange-alt:before {
            content: "\f362"
        }

        .fa-exclamation:before {
            content: "\f12a"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-exclamation-triangle:before {
            content: "\f071"
        }

        .fa-expand:before {
            content: "\f065"
        }

        .fa-expand-arrows-alt:before {
            content: "\f31e"
        }

        .fa-expeditedssl:before {
            content: "\f23e"
        }

        .fa-external-link-alt:before {
            content: "\f35d"
        }

        .fa-external-link-square-alt:before {
            content: "\f360"
        }

        .fa-eye:before {
            content: "\f06e"
        }

        .fa-eye-dropper:before {
            content: "\f1fb"
        }

        .fa-eye-slash:before {
            content: "\f070"
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-facebook-f:before {
            content: "\f39e"
        }

        .fa-facebook-messenger:before {
            content: "\f39f"
        }

        .fa-facebook-square:before {
            content: "\f082"
        }

        .fa-fantasy-flight-games:before {
            content: "\f6dc"
        }

        .fa-fast-backward:before {
            content: "\f049"
        }

        .fa-fast-forward:before {
            content: "\f050"
        }

        .fa-fax:before {
            content: "\f1ac"
        }

        .fa-feather:before {
            content: "\f52d"
        }

        .fa-feather-alt:before {
            content: "\f56b"
        }

        .fa-fedex:before {
            content: "\f797"
        }

        .fa-fedora:before {
            content: "\f798"
        }

        .fa-female:before {
            content: "\f182"
        }

        .fa-fighter-jet:before {
            content: "\f0fb"
        }

        .fa-figma:before {
            content: "\f799"
        }

        .fa-file:before {
            content: "\f15b"
        }

        .fa-file-alt:before {
            content: "\f15c"
        }

        .fa-file-archive:before {
            content: "\f1c6"
        }

        .fa-file-audio:before {
            content: "\f1c7"
        }

        .fa-file-code:before {
            content: "\f1c9"
        }

        .fa-file-contract:before {
            content: "\f56c"
        }

        .fa-file-csv:before {
            content: "\f6dd"
        }

        .fa-file-download:before {
            content: "\f56d"
        }

        .fa-file-excel:before {
            content: "\f1c3"
        }

        .fa-file-export:before {
            content: "\f56e"
        }

        .fa-file-image:before {
            content: "\f1c5"
        }

        .fa-file-import:before {
            content: "\f56f"
        }

        .fa-file-invoice:before {
            content: "\f570"
        }

        .fa-file-invoice-dollar:before {
            content: "\f571"
        }

        .fa-file-medical:before {
            content: "\f477"
        }

        .fa-file-medical-alt:before {
            content: "\f478"
        }

        .fa-file-pdf:before {
            content: "\f1c1"
        }

        .fa-file-powerpoint:before {
            content: "\f1c4"
        }

        .fa-file-prescription:before {
            content: "\f572"
        }

        .fa-file-signature:before {
            content: "\f573"
        }

        .fa-file-upload:before {
            content: "\f574"
        }

        .fa-file-video:before {
            content: "\f1c8"
        }

        .fa-file-word:before {
            content: "\f1c2"
        }

        .fa-fill:before {
            content: "\f575"
        }

        .fa-fill-drip:before {
            content: "\f576"
        }

        .fa-film:before {
            content: "\f008"
        }

        .fa-filter:before {
            content: "\f0b0"
        }

        .fa-fingerprint:before {
            content: "\f577"
        }

        .fa-fire:before {
            content: "\f06d"
        }

        .fa-fire-alt:before {
            content: "\f7e4"
        }

        .fa-fire-extinguisher:before {
            content: "\f134"
        }

        .fa-firefox:before {
            content: "\f269"
        }

        .fa-first-aid:before {
            content: "\f479"
        }

        .fa-first-order:before {
            content: "\f2b0"
        }

        .fa-first-order-alt:before {
            content: "\f50a"
        }

        .fa-firstdraft:before {
            content: "\f3a1"
        }

        .fa-fish:before {
            content: "\f578"
        }

        .fa-fist-raised:before {
            content: "\f6de"
        }

        .fa-flag:before {
            content: "\f024"
        }

        .fa-flag-checkered:before {
            content: "\f11e"
        }

        .fa-flag-usa:before {
            content: "\f74d"
        }

        .fa-flask:before {
            content: "\f0c3"
        }

        .fa-flickr:before {
            content: "\f16e"
        }

        .fa-flipboard:before {
            content: "\f44d"
        }

        .fa-flushed:before {
            content: "\f579"
        }

        .fa-fly:before {
            content: "\f417"
        }

        .fa-folder:before {
            content: "\f07b"
        }

        .fa-folder-minus:before {
            content: "\f65d"
        }

        .fa-folder-open:before {
            content: "\f07c"
        }

        .fa-folder-plus:before {
            content: "\f65e"
        }

        .fa-font:before {
            content: "\f031"
        }

        .fa-font-awesome:before {
            content: "\f2b4"
        }

        .fa-font-awesome-alt:before {
            content: "\f35c"
        }

        .fa-font-awesome-flag:before {
            content: "\f425"
        }

        .fa-font-awesome-logo-full:before {
            content: "\f4e6"
        }

        .fa-fonticons:before {
            content: "\f280"
        }

        .fa-fonticons-fi:before {
            content: "\f3a2"
        }

        .fa-football-ball:before {
            content: "\f44e"
        }

        .fa-fort-awesome:before {
            content: "\f286"
        }

        .fa-fort-awesome-alt:before {
            content: "\f3a3"
        }

        .fa-forumbee:before {
            content: "\f211"
        }

        .fa-forward:before {
            content: "\f04e"
        }

        .fa-foursquare:before {
            content: "\f180"
        }

        .fa-free-code-camp:before {
            content: "\f2c5"
        }

        .fa-freebsd:before {
            content: "\f3a4"
        }

        .fa-frog:before {
            content: "\f52e"
        }

        .fa-frown:before {
            content: "\f119"
        }

        .fa-frown-open:before {
            content: "\f57a"
        }

        .fa-fulcrum:before {
            content: "\f50b"
        }

        .fa-funnel-dollar:before {
            content: "\f662"
        }

        .fa-futbol:before {
            content: "\f1e3"
        }

        .fa-galactic-republic:before {
            content: "\f50c"
        }

        .fa-galactic-senate:before {
            content: "\f50d"
        }

        .fa-gamepad:before {
            content: "\f11b"
        }

        .fa-gas-pump:before {
            content: "\f52f"
        }

        .fa-gavel:before {
            content: "\f0e3"
        }

        .fa-gem:before {
            content: "\f3a5"
        }

        .fa-genderless:before {
            content: "\f22d"
        }

        .fa-get-pocket:before {
            content: "\f265"
        }

        .fa-gg:before {
            content: "\f260"
        }

        .fa-gg-circle:before {
            content: "\f261"
        }

        .fa-ghost:before {
            content: "\f6e2"
        }

        .fa-gift:before {
            content: "\f06b"
        }

        .fa-gifts:before {
            content: "\f79c"
        }

        .fa-git:before {
            content: "\f1d3"
        }

        .fa-git-square:before {
            content: "\f1d2"
        }

        .fa-github:before {
            content: "\f09b"
        }

        .fa-github-alt:before {
            content: "\f113"
        }

        .fa-github-square:before {
            content: "\f092"
        }

        .fa-gitkraken:before {
            content: "\f3a6"
        }

        .fa-gitlab:before {
            content: "\f296"
        }

        .fa-gitter:before {
            content: "\f426"
        }

        .fa-glass-cheers:before {
            content: "\f79f"
        }

        .fa-glass-martini:before {
            content: "\f000"
        }

        .fa-glass-martini-alt:before {
            content: "\f57b"
        }

        .fa-glass-whiskey:before {
            content: "\f7a0"
        }

        .fa-glasses:before {
            content: "\f530"
        }

        .fa-glide:before {
            content: "\f2a5"
        }

        .fa-glide-g:before {
            content: "\f2a6"
        }

        .fa-globe:before {
            content: "\f0ac"
        }

        .fa-globe-africa:before {
            content: "\f57c"
        }

        .fa-globe-americas:before {
            content: "\f57d"
        }

        .fa-globe-asia:before {
            content: "\f57e"
        }

        .fa-globe-europe:before {
            content: "\f7a2"
        }

        .fa-gofore:before {
            content: "\f3a7"
        }

        .fa-golf-ball:before {
            content: "\f450"
        }

        .fa-goodreads:before {
            content: "\f3a8"
        }

        .fa-goodreads-g:before {
            content: "\f3a9"
        }

        .fa-google:before {
            content: "\f1a0"
        }

        .fa-google-drive:before {
            content: "\f3aa"
        }

        .fa-google-play:before {
            content: "\f3ab"
        }

        .fa-google-plus:before {
            content: "\f2b3"
        }

        .fa-google-plus-g:before {
            content: "\f0d5"
        }

        .fa-google-plus-square:before {
            content: "\f0d4"
        }

        .fa-google-wallet:before {
            content: "\f1ee"
        }

        .fa-gopuram:before {
            content: "\f664"
        }

        .fa-graduation-cap:before {
            content: "\f19d"
        }

        .fa-gratipay:before {
            content: "\f184"
        }

        .fa-grav:before {
            content: "\f2d6"
        }

        .fa-greater-than:before {
            content: "\f531"
        }

        .fa-greater-than-equal:before {
            content: "\f532"
        }

        .fa-grimace:before {
            content: "\f57f"
        }

        .fa-grin:before {
            content: "\f580"
        }

        .fa-grin-alt:before {
            content: "\f581"
        }

        .fa-grin-beam:before {
            content: "\f582"
        }

        .fa-grin-beam-sweat:before {
            content: "\f583"
        }

        .fa-grin-hearts:before {
            content: "\f584"
        }

        .fa-grin-squint:before {
            content: "\f585"
        }

        .fa-grin-squint-tears:before {
            content: "\f586"
        }

        .fa-grin-stars:before {
            content: "\f587"
        }

        .fa-grin-tears:before {
            content: "\f588"
        }

        .fa-grin-tongue:before {
            content: "\f589"
        }

        .fa-grin-tongue-squint:before {
            content: "\f58a"
        }

        .fa-grin-tongue-wink:before {
            content: "\f58b"
        }

        .fa-grin-wink:before {
            content: "\f58c"
        }

        .fa-grip-horizontal:before {
            content: "\f58d"
        }

        .fa-grip-lines:before {
            content: "\f7a4"
        }

        .fa-grip-lines-vertical:before {
            content: "\f7a5"
        }

        .fa-grip-vertical:before {
            content: "\f58e"
        }

        .fa-gripfire:before {
            content: "\f3ac"
        }

        .fa-grunt:before {
            content: "\f3ad"
        }

        .fa-guitar:before {
            content: "\f7a6"
        }

        .fa-gulp:before {
            content: "\f3ae"
        }

        .fa-h-square:before {
            content: "\f0fd"
        }

        .fa-hacker-news:before {
            content: "\f1d4"
        }

        .fa-hacker-news-square:before {
            content: "\f3af"
        }

        .fa-hackerrank:before {
            content: "\f5f7"
        }

        .fa-hamburger:before {
            content: "\f805"
        }

        .fa-hammer:before {
            content: "\f6e3"
        }

        .fa-hamsa:before {
            content: "\f665"
        }

        .fa-hand-holding:before {
            content: "\f4bd"
        }

        .fa-hand-holding-heart:before {
            content: "\f4be"
        }

        .fa-hand-holding-usd:before {
            content: "\f4c0"
        }

        .fa-hand-lizard:before {
            content: "\f258"
        }

        .fa-hand-middle-finger:before {
            content: "\f806"
        }

        .fa-hand-paper:before {
            content: "\f256"
        }

        .fa-hand-peace:before {
            content: "\f25b"
        }

        .fa-hand-point-down:before {
            content: "\f0a7"
        }

        .fa-hand-point-left:before {
            content: "\f0a5"
        }

        .fa-hand-point-right:before {
            content: "\f0a4"
        }

        .fa-hand-point-up:before {
            content: "\f0a6"
        }

        .fa-hand-pointer:before {
            content: "\f25a"
        }

        .fa-hand-rock:before {
            content: "\f255"
        }

        .fa-hand-scissors:before {
            content: "\f257"
        }

        .fa-hand-spock:before {
            content: "\f259"
        }

        .fa-hands:before {
            content: "\f4c2"
        }

        .fa-hands-helping:before {
            content: "\f4c4"
        }

        .fa-handshake:before {
            content: "\f2b5"
        }

        .fa-hanukiah:before {
            content: "\f6e6"
        }

        .fa-hard-hat:before {
            content: "\f807"
        }

        .fa-hashtag:before {
            content: "\f292"
        }

        .fa-hat-wizard:before {
            content: "\f6e8"
        }

        .fa-haykal:before {
            content: "\f666"
        }

        .fa-hdd:before {
            content: "\f0a0"
        }

        .fa-heading:before {
            content: "\f1dc"
        }

        .fa-headphones:before {
            content: "\f025"
        }

        .fa-headphones-alt:before {
            content: "\f58f"
        }

        .fa-headset:before {
            content: "\f590"
        }

        .fa-heart:before {
            content: "\f004"
        }

        .fa-heart-broken:before {
            content: "\f7a9"
        }

        .fa-heartbeat:before {
            content: "\f21e"
        }

        .fa-helicopter:before {
            content: "\f533"
        }

        .fa-highlighter:before {
            content: "\f591"
        }

        .fa-hiking:before {
            content: "\f6ec"
        }

        .fa-hippo:before {
            content: "\f6ed"
        }

        .fa-hips:before {
            content: "\f452"
        }

        .fa-hire-a-helper:before {
            content: "\f3b0"
        }

        .fa-history:before {
            content: "\f1da"
        }

        .fa-hockey-puck:before {
            content: "\f453"
        }

        .fa-holly-berry:before {
            content: "\f7aa"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-hooli:before {
            content: "\f427"
        }

        .fa-hornbill:before {
            content: "\f592"
        }

        .fa-horse:before {
            content: "\f6f0"
        }

        .fa-horse-head:before {
            content: "\f7ab"
        }

        .fa-hospital:before {
            content: "\f0f8"
        }

        .fa-hospital-alt:before {
            content: "\f47d"
        }

        .fa-hospital-symbol:before {
            content: "\f47e"
        }

        .fa-hot-tub:before {
            content: "\f593"
        }

        .fa-hotdog:before {
            content: "\f80f"
        }

        .fa-hotel:before {
            content: "\f594"
        }

        .fa-hotjar:before {
            content: "\f3b1"
        }

        .fa-hourglass:before {
            content: "\f254"
        }

        .fa-hourglass-end:before {
            content: "\f253"
        }

        .fa-hourglass-half:before {
            content: "\f252"
        }

        .fa-hourglass-start:before {
            content: "\f251"
        }

        .fa-house-damage:before {
            content: "\f6f1"
        }

        .fa-houzz:before {
            content: "\f27c"
        }

        .fa-hryvnia:before {
            content: "\f6f2"
        }

        .fa-html5:before {
            content: "\f13b"
        }

        .fa-hubspot:before {
            content: "\f3b2"
        }

        .fa-i-cursor:before {
            content: "\f246"
        }

        .fa-ice-cream:before {
            content: "\f810"
        }

        .fa-icicles:before {
            content: "\f7ad"
        }

        .fa-id-badge:before {
            content: "\f2c1"
        }

        .fa-id-card:before {
            content: "\f2c2"
        }

        .fa-id-card-alt:before {
            content: "\f47f"
        }

        .fa-igloo:before {
            content: "\f7ae"
        }

        .fa-image:before {
            content: "\f03e"
        }

        .fa-images:before {
            content: "\f302"
        }

        .fa-imdb:before {
            content: "\f2d8"
        }

        .fa-inbox:before {
            content: "\f01c"
        }

        .fa-indent:before {
            content: "\f03c"
        }

        .fa-industry:before {
            content: "\f275"
        }

        .fa-infinity:before {
            content: "\f534"
        }

        .fa-info:before {
            content: "\f129"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-intercom:before {
            content: "\f7af"
        }

        .fa-internet-explorer:before {
            content: "\f26b"
        }

        .fa-invision:before {
            content: "\f7b0"
        }

        .fa-ioxhost:before {
            content: "\f208"
        }

        .fa-italic:before {
            content: "\f033"
        }

        .fa-itunes:before {
            content: "\f3b4"
        }

        .fa-itunes-note:before {
            content: "\f3b5"
        }

        .fa-java:before {
            content: "\f4e4"
        }

        .fa-jedi:before {
            content: "\f669"
        }

        .fa-jedi-order:before {
            content: "\f50e"
        }

        .fa-jenkins:before {
            content: "\f3b6"
        }

        .fa-jira:before {
            content: "\f7b1"
        }

        .fa-joget:before {
            content: "\f3b7"
        }

        .fa-joint:before {
            content: "\f595"
        }

        .fa-joomla:before {
            content: "\f1aa"
        }

        .fa-journal-whills:before {
            content: "\f66a"
        }

        .fa-js:before {
            content: "\f3b8"
        }

        .fa-js-square:before {
            content: "\f3b9"
        }

        .fa-jsfiddle:before {
            content: "\f1cc"
        }

        .fa-kaaba:before {
            content: "\f66b"
        }

        .fa-kaggle:before {
            content: "\f5fa"
        }

        .fa-key:before {
            content: "\f084"
        }

        .fa-keybase:before {
            content: "\f4f5"
        }

        .fa-keyboard:before {
            content: "\f11c"
        }

        .fa-keycdn:before {
            content: "\f3ba"
        }

        .fa-khanda:before {
            content: "\f66d"
        }

        .fa-kickstarter:before {
            content: "\f3bb"
        }

        .fa-kickstarter-k:before {
            content: "\f3bc"
        }

        .fa-kiss:before {
            content: "\f596"
        }

        .fa-kiss-beam:before {
            content: "\f597"
        }

        .fa-kiss-wink-heart:before {
            content: "\f598"
        }

        .fa-kiwi-bird:before {
            content: "\f535"
        }

        .fa-korvue:before {
            content: "\f42f"
        }

        .fa-landmark:before {
            content: "\f66f"
        }

        .fa-language:before {
            content: "\f1ab"
        }

        .fa-laptop:before {
            content: "\f109"
        }

        .fa-laptop-code:before {
            content: "\f5fc"
        }

        .fa-laptop-medical:before {
            content: "\f812"
        }

        .fa-laravel:before {
            content: "\f3bd"
        }

        .fa-lastfm:before {
            content: "\f202"
        }

        .fa-lastfm-square:before {
            content: "\f203"
        }

        .fa-laugh:before {
            content: "\f599"
        }

        .fa-laugh-beam:before {
            content: "\f59a"
        }

        .fa-laugh-squint:before {
            content: "\f59b"
        }

        .fa-laugh-wink:before {
            content: "\f59c"
        }

        .fa-layer-group:before {
            content: "\f5fd"
        }

        .fa-leaf:before {
            content: "\f06c"
        }

        .fa-leanpub:before {
            content: "\f212"
        }

        .fa-lemon:before {
            content: "\f094"
        }

        .fa-less:before {
            content: "\f41d"
        }

        .fa-less-than:before {
            content: "\f536"
        }

        .fa-less-than-equal:before {
            content: "\f537"
        }

        .fa-level-down-alt:before {
            content: "\f3be"
        }

        .fa-level-up-alt:before {
            content: "\f3bf"
        }

        .fa-life-ring:before {
            content: "\f1cd"
        }

        .fa-lightbulb:before {
            content: "\f0eb"
        }

        .fa-line:before {
            content: "\f3c0"
        }

        .fa-link:before {
            content: "\f0c1"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-linkedin-in:before {
            content: "\f0e1"
        }

        .fa-linode:before {
            content: "\f2b8"
        }

        .fa-linux:before {
            content: "\f17c"
        }

        .fa-lira-sign:before {
            content: "\f195"
        }

        .fa-list:before {
            content: "\f03a"
        }

        .fa-list-alt:before {
            content: "\f022"
        }

        .fa-list-ol:before {
            content: "\f0cb"
        }

        .fa-list-ul:before {
            content: "\f0ca"
        }

        .fa-location-arrow:before {
            content: "\f124"
        }

        .fa-lock:before {
            content: "\f023"
        }

        .fa-lock-open:before {
            content: "\f3c1"
        }

        .fa-long-arrow-alt-down:before {
            content: "\f309"
        }

        .fa-long-arrow-alt-left:before {
            content: "\f30a"
        }

        .fa-long-arrow-alt-right:before {
            content: "\f30b"
        }

        .fa-long-arrow-alt-up:before {
            content: "\f30c"
        }

        .fa-low-vision:before {
            content: "\f2a8"
        }

        .fa-luggage-cart:before {
            content: "\f59d"
        }

        .fa-lyft:before {
            content: "\f3c3"
        }

        .fa-magento:before {
            content: "\f3c4"
        }

        .fa-magic:before {
            content: "\f0d0"
        }

        .fa-magnet:before {
            content: "\f076"
        }

        .fa-mail-bulk:before {
            content: "\f674"
        }

        .fa-mailchimp:before {
            content: "\f59e"
        }

        .fa-male:before {
            content: "\f183"
        }

        .fa-mandalorian:before {
            content: "\f50f"
        }

        .fa-map:before {
            content: "\f279"
        }

        .fa-map-marked:before {
            content: "\f59f"
        }

        .fa-map-marked-alt:before {
            content: "\f5a0"
        }

        .fa-map-marker:before {
            content: "\f041"
        }

        .fa-map-marker-alt:before {
            content: "\f3c5"
        }

        .fa-map-pin:before {
            content: "\f276"
        }

        .fa-map-signs:before {
            content: "\f277"
        }

        .fa-markdown:before {
            content: "\f60f"
        }

        .fa-marker:before {
            content: "\f5a1"
        }

        .fa-mars:before {
            content: "\f222"
        }

        .fa-mars-double:before {
            content: "\f227"
        }

        .fa-mars-stroke:before {
            content: "\f229"
        }

        .fa-mars-stroke-h:before {
            content: "\f22b"
        }

        .fa-mars-stroke-v:before {
            content: "\f22a"
        }

        .fa-mask:before {
            content: "\f6fa"
        }

        .fa-mastodon:before {
            content: "\f4f6"
        }

        .fa-maxcdn:before {
            content: "\f136"
        }

        .fa-medal:before {
            content: "\f5a2"
        }

        .fa-medapps:before {
            content: "\f3c6"
        }

        .fa-medium:before {
            content: "\f23a"
        }

        .fa-medium-m:before {
            content: "\f3c7"
        }

        .fa-medkit:before {
            content: "\f0fa"
        }

        .fa-medrt:before {
            content: "\f3c8"
        }

        .fa-meetup:before {
            content: "\f2e0"
        }

        .fa-megaport:before {
            content: "\f5a3"
        }

        .fa-meh:before {
            content: "\f11a"
        }

        .fa-meh-blank:before {
            content: "\f5a4"
        }

        .fa-meh-rolling-eyes:before {
            content: "\f5a5"
        }

        .fa-memory:before {
            content: "\f538"
        }

        .fa-mendeley:before {
            content: "\f7b3"
        }

        .fa-menorah:before {
            content: "\f676"
        }

        .fa-mercury:before {
            content: "\f223"
        }

        .fa-meteor:before {
            content: "\f753"
        }

        .fa-microchip:before {
            content: "\f2db"
        }

        .fa-microphone:before {
            content: "\f130"
        }

        .fa-microphone-alt:before {
            content: "\f3c9"
        }

        .fa-microphone-alt-slash:before {
            content: "\f539"
        }

        .fa-microphone-slash:before {
            content: "\f131"
        }

        .fa-microscope:before {
            content: "\f610"
        }

        .fa-microsoft:before {
            content: "\f3ca"
        }

        .fa-minus:before {
            content: "\f068"
        }

        .fa-minus-circle:before {
            content: "\f056"
        }

        .fa-minus-square:before {
            content: "\f146"
        }

        .fa-mitten:before {
            content: "\f7b5"
        }

        .fa-mix:before {
            content: "\f3cb"
        }

        .fa-mixcloud:before {
            content: "\f289"
        }

        .fa-mizuni:before {
            content: "\f3cc"
        }

        .fa-mobile:before {
            content: "\f10b"
        }

        .fa-mobile-alt:before {
            content: "\f3cd"
        }

        .fa-modx:before {
            content: "\f285"
        }

        .fa-monero:before {
            content: "\f3d0"
        }

        .fa-money-bill:before {
            content: "\f0d6"
        }

        .fa-money-bill-alt:before {
            content: "\f3d1"
        }

        .fa-money-bill-wave:before {
            content: "\f53a"
        }

        .fa-money-bill-wave-alt:before {
            content: "\f53b"
        }

        .fa-money-check:before {
            content: "\f53c"
        }

        .fa-money-check-alt:before {
            content: "\f53d"
        }

        .fa-monument:before {
            content: "\f5a6"
        }

        .fa-moon:before {
            content: "\f186"
        }

        .fa-mortar-pestle:before {
            content: "\f5a7"
        }

        .fa-mosque:before {
            content: "\f678"
        }

        .fa-motorcycle:before {
            content: "\f21c"
        }

        .fa-mountain:before {
            content: "\f6fc"
        }

        .fa-mouse-pointer:before {
            content: "\f245"
        }

        .fa-mug-hot:before {
            content: "\f7b6"
        }

        .fa-music:before {
            content: "\f001"
        }

        .fa-napster:before {
            content: "\f3d2"
        }

        .fa-neos:before {
            content: "\f612"
        }

        .fa-network-wired:before {
            content: "\f6ff"
        }

        .fa-neuter:before {
            content: "\f22c"
        }

        .fa-newspaper:before {
            content: "\f1ea"
        }

        .fa-nimblr:before {
            content: "\f5a8"
        }

        .fa-nintendo-switch:before {
            content: "\f418"
        }

        .fa-node:before {
            content: "\f419"
        }

        .fa-node-js:before {
            content: "\f3d3"
        }

        .fa-not-equal:before {
            content: "\f53e"
        }

        .fa-notes-medical:before {
            content: "\f481"
        }

        .fa-npm:before {
            content: "\f3d4"
        }

        .fa-ns8:before {
            content: "\f3d5"
        }

        .fa-nutritionix:before {
            content: "\f3d6"
        }

        .fa-object-group:before {
            content: "\f247"
        }

        .fa-object-ungroup:before {
            content: "\f248"
        }

        .fa-odnoklassniki:before {
            content: "\f263"
        }

        .fa-odnoklassniki-square:before {
            content: "\f264"
        }

        .fa-oil-can:before {
            content: "\f613"
        }

        .fa-old-republic:before {
            content: "\f510"
        }

        .fa-om:before {
            content: "\f679"
        }

        .fa-opencart:before {
            content: "\f23d"
        }

        .fa-openid:before {
            content: "\f19b"
        }

        .fa-opera:before {
            content: "\f26a"
        }

        .fa-optin-monster:before {
            content: "\f23c"
        }

        .fa-osi:before {
            content: "\f41a"
        }

        .fa-otter:before {
            content: "\f700"
        }

        .fa-outdent:before {
            content: "\f03b"
        }

        .fa-page4:before {
            content: "\f3d7"
        }

        .fa-pagelines:before {
            content: "\f18c"
        }

        .fa-pager:before {
            content: "\f815"
        }

        .fa-paint-brush:before {
            content: "\f1fc"
        }

        .fa-paint-roller:before {
            content: "\f5aa"
        }

        .fa-palette:before {
            content: "\f53f"
        }

        .fa-palfed:before {
            content: "\f3d8"
        }

        .fa-pallet:before {
            content: "\f482"
        }

        .fa-paper-plane:before {
            content: "\f1d8"
        }

        .fa-paperclip:before {
            content: "\f0c6"
        }

        .fa-parachute-box:before {
            content: "\f4cd"
        }

        .fa-paragraph:before {
            content: "\f1dd"
        }

        .fa-parking:before {
            content: "\f540"
        }

        .fa-passport:before {
            content: "\f5ab"
        }

        .fa-pastafarianism:before {
            content: "\f67b"
        }

        .fa-paste:before {
            content: "\f0ea"
        }

        .fa-patreon:before {
            content: "\f3d9"
        }

        .fa-pause:before {
            content: "\f04c"
        }

        .fa-pause-circle:before {
            content: "\f28b"
        }

        .fa-paw:before {
            content: "\f1b0"
        }

        .fa-paypal:before {
            content: "\f1ed"
        }

        .fa-peace:before {
            content: "\f67c"
        }

        .fa-pen:before {
            content: "\f304"
        }

        .fa-pen-alt:before {
            content: "\f305"
        }

        .fa-pen-fancy:before {
            content: "\f5ac"
        }

        .fa-pen-nib:before {
            content: "\f5ad"
        }

        .fa-pen-square:before {
            content: "\f14b"
        }

        .fa-pencil-alt:before {
            content: "\f303"
        }

        .fa-pencil-ruler:before {
            content: "\f5ae"
        }

        .fa-penny-arcade:before {
            content: "\f704"
        }

        .fa-people-carry:before {
            content: "\f4ce"
        }

        .fa-pepper-hot:before {
            content: "\f816"
        }

        .fa-percent:before {
            content: "\f295"
        }

        .fa-percentage:before {
            content: "\f541"
        }

        .fa-periscope:before {
            content: "\f3da"
        }

        .fa-person-booth:before {
            content: "\f756"
        }

        .fa-phabricator:before {
            content: "\f3db"
        }

        .fa-phoenix-framework:before {
            content: "\f3dc"
        }

        .fa-phoenix-squadron:before {
            content: "\f511"
        }

        .fa-phone:before {
            content: "\f095"
        }

        .fa-phone-slash:before {
            content: "\f3dd"
        }

        .fa-phone-square:before {
            content: "\f098"
        }

        .fa-phone-volume:before {
            content: "\f2a0"
        }

        .fa-php:before {
            content: "\f457"
        }

        .fa-pied-piper:before {
            content: "\f2ae"
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8"
        }

        .fa-pied-piper-hat:before {
            content: "\f4e5"
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7"
        }

        .fa-piggy-bank:before {
            content: "\f4d3"
        }

        .fa-pills:before {
            content: "\f484"
        }

        .fa-pinterest:before {
            content: "\f0d2"
        }

        .fa-pinterest-p:before {
            content: "\f231"
        }

        .fa-pinterest-square:before {
            content: "\f0d3"
        }

        .fa-pizza-slice:before {
            content: "\f818"
        }

        .fa-place-of-worship:before {
            content: "\f67f"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-plane-arrival:before {
            content: "\f5af"
        }

        .fa-plane-departure:before {
            content: "\f5b0"
        }

        .fa-play:before {
            content: "\f04b"
        }

        .fa-play-circle:before {
            content: "\f144"
        }

        .fa-playstation:before {
            content: "\f3df"
        }

        .fa-plug:before {
            content: "\f1e6"
        }

        .fa-plus:before {
            content: "\f067"
        }

        .fa-plus-circle:before {
            content: "\f055"
        }

        .fa-plus-square:before {
            content: "\f0fe"
        }

        .fa-podcast:before {
            content: "\f2ce"
        }

        .fa-poll:before {
            content: "\f681"
        }

        .fa-poll-h:before {
            content: "\f682"
        }

        .fa-poo:before {
            content: "\f2fe"
        }

        .fa-poo-storm:before {
            content: "\f75a"
        }

        .fa-poop:before {
            content: "\f619"
        }

        .fa-portrait:before {
            content: "\f3e0"
        }

        .fa-pound-sign:before {
            content: "\f154"
        }

        .fa-power-off:before {
            content: "\f011"
        }

        .fa-pray:before {
            content: "\f683"
        }

        .fa-praying-hands:before {
            content: "\f684"
        }

        .fa-prescription:before {
            content: "\f5b1"
        }

        .fa-prescription-bottle:before {
            content: "\f485"
        }

        .fa-prescription-bottle-alt:before {
            content: "\f486"
        }

        .fa-print:before {
            content: "\f02f"
        }

        .fa-procedures:before {
            content: "\f487"
        }

        .fa-product-hunt:before {
            content: "\f288"
        }

        .fa-project-diagram:before {
            content: "\f542"
        }

        .fa-pushed:before {
            content: "\f3e1"
        }

        .fa-puzzle-piece:before {
            content: "\f12e"
        }

        .fa-python:before {
            content: "\f3e2"
        }

        .fa-qq:before {
            content: "\f1d6"
        }

        .fa-qrcode:before {
            content: "\f029"
        }

        .fa-question:before {
            content: "\f128"
        }

        .fa-question-circle:before {
            content: "\f059"
        }

        .fa-quidditch:before {
            content: "\f458"
        }

        .fa-quinscape:before {
            content: "\f459"
        }

        .fa-quora:before {
            content: "\f2c4"
        }

        .fa-quote-left:before {
            content: "\f10d"
        }

        .fa-quote-right:before {
            content: "\f10e"
        }

        .fa-quran:before {
            content: "\f687"
        }

        .fa-r-project:before {
            content: "\f4f7"
        }

        .fa-radiation:before {
            content: "\f7b9"
        }

        .fa-radiation-alt:before {
            content: "\f7ba"
        }

        .fa-rainbow:before {
            content: "\f75b"
        }

        .fa-random:before {
            content: "\f074"
        }

        .fa-raspberry-pi:before {
            content: "\f7bb"
        }

        .fa-ravelry:before {
            content: "\f2d9"
        }

        .fa-react:before {
            content: "\f41b"
        }

        .fa-reacteurope:before {
            content: "\f75d"
        }

        .fa-readme:before {
            content: "\f4d5"
        }

        .fa-rebel:before {
            content: "\f1d0"
        }

        .fa-receipt:before {
            content: "\f543"
        }

        .fa-recycle:before {
            content: "\f1b8"
        }

        .fa-red-river:before {
            content: "\f3e3"
        }

        .fa-reddit:before {
            content: "\f1a1"
        }

        .fa-reddit-alien:before {
            content: "\f281"
        }

        .fa-reddit-square:before {
            content: "\f1a2"
        }

        .fa-redhat:before {
            content: "\f7bc"
        }

        .fa-redo:before {
            content: "\f01e"
        }

        .fa-redo-alt:before {
            content: "\f2f9"
        }

        .fa-registered:before {
            content: "\f25d"
        }

        .fa-renren:before {
            content: "\f18b"
        }

        .fa-reply:before {
            content: "\f3e5"
        }

        .fa-reply-all:before {
            content: "\f122"
        }

        .fa-replyd:before {
            content: "\f3e6"
        }

        .fa-republican:before {
            content: "\f75e"
        }

        .fa-researchgate:before {
            content: "\f4f8"
        }

        .fa-resolving:before {
            content: "\f3e7"
        }

        .fa-restroom:before {
            content: "\f7bd"
        }

        .fa-retweet:before {
            content: "\f079"
        }

        .fa-rev:before {
            content: "\f5b2"
        }

        .fa-ribbon:before {
            content: "\f4d6"
        }

        .fa-ring:before {
            content: "\f70b"
        }

        .fa-road:before {
            content: "\f018"
        }

        .fa-robot:before {
            content: "\f544"
        }

        .fa-rocket:before {
            content: "\f135"
        }

        .fa-rocketchat:before {
            content: "\f3e8"
        }

        .fa-rockrms:before {
            content: "\f3e9"
        }

        .fa-route:before {
            content: "\f4d7"
        }

        .fa-rss:before {
            content: "\f09e"
        }

        .fa-rss-square:before {
            content: "\f143"
        }

        .fa-ruble-sign:before {
            content: "\f158"
        }

        .fa-ruler:before {
            content: "\f545"
        }

        .fa-ruler-combined:before {
            content: "\f546"
        }

        .fa-ruler-horizontal:before {
            content: "\f547"
        }

        .fa-ruler-vertical:before {
            content: "\f548"
        }

        .fa-running:before {
            content: "\f70c"
        }

        .fa-rupee-sign:before {
            content: "\f156"
        }

        .fa-sad-cry:before {
            content: "\f5b3"
        }

        .fa-sad-tear:before {
            content: "\f5b4"
        }

        .fa-safari:before {
            content: "\f267"
        }

        .fa-sass:before {
            content: "\f41e"
        }

        .fa-satellite:before {
            content: "\f7bf"
        }

        .fa-satellite-dish:before {
            content: "\f7c0"
        }

        .fa-save:before {
            content: "\f0c7"
        }

        .fa-schlix:before {
            content: "\f3ea"
        }

        .fa-school:before {
            content: "\f549"
        }

        .fa-screwdriver:before {
            content: "\f54a"
        }

        .fa-scribd:before {
            content: "\f28a"
        }

        .fa-scroll:before {
            content: "\f70e"
        }

        .fa-sd-card:before {
            content: "\f7c2"
        }

        .fa-search:before {
            content: "\f002"
        }

        .fa-search-dollar:before {
            content: "\f688"
        }

        .fa-search-location:before {
            content: "\f689"
        }

        .fa-search-minus:before {
            content: "\f010"
        }

        .fa-search-plus:before {
            content: "\f00e"
        }

        .fa-searchengin:before {
            content: "\f3eb"
        }

        .fa-seedling:before {
            content: "\f4d8"
        }

        .fa-sellcast:before {
            content: "\f2da"
        }

        .fa-sellsy:before {
            content: "\f213"
        }

        .fa-server:before {
            content: "\f233"
        }

        .fa-servicestack:before {
            content: "\f3ec"
        }

        .fa-shapes:before {
            content: "\f61f"
        }

        .fa-share:before {
            content: "\f064"
        }

        .fa-share-alt:before {
            content: "\f1e0"
        }

        .fa-share-alt-square:before {
            content: "\f1e1"
        }

        .fa-share-square:before {
            content: "\f14d"
        }

        .fa-shekel-sign:before {
            content: "\f20b"
        }

        .fa-shield-alt:before {
            content: "\f3ed"
        }

        .fa-ship:before {
            content: "\f21a"
        }

        .fa-shipping-fast:before {
            content: "\f48b"
        }

        .fa-shirtsinbulk:before {
            content: "\f214"
        }

        .fa-shoe-prints:before {
            content: "\f54b"
        }

        .fa-shopping-bag:before {
            content: "\f290"
        }

        .fa-shopping-basket:before {
            content: "\f291"
        }

        .fa-shopping-cart:before {
            content: "\f07a"
        }

        .fa-shopware:before {
            content: "\f5b5"
        }

        .fa-shower:before {
            content: "\f2cc"
        }

        .fa-shuttle-van:before {
            content: "\f5b6"
        }

        .fa-sign:before {
            content: "\f4d9"
        }

        .fa-sign-in-alt:before {
            content: "\f2f6"
        }

        .fa-sign-language:before {
            content: "\f2a7"
        }

        .fa-sign-out-alt:before {
            content: "\f2f5"
        }

        .fa-signal:before {
            content: "\f012"
        }

        .fa-signature:before {
            content: "\f5b7"
        }

        .fa-sim-card:before {
            content: "\f7c4"
        }

        .fa-simplybuilt:before {
            content: "\f215"
        }

        .fa-sistrix:before {
            content: "\f3ee"
        }

        .fa-sitemap:before {
            content: "\f0e8"
        }

        .fa-sith:before {
            content: "\f512"
        }

        .fa-skating:before {
            content: "\f7c5"
        }

        .fa-sketch:before {
            content: "\f7c6"
        }

        .fa-skiing:before {
            content: "\f7c9"
        }

        .fa-skiing-nordic:before {
            content: "\f7ca"
        }

        .fa-skull:before {
            content: "\f54c"
        }

        .fa-skull-crossbones:before {
            content: "\f714"
        }

        .fa-skyatlas:before {
            content: "\f216"
        }

        .fa-skype:before {
            content: "\f17e"
        }

        .fa-slack:before {
            content: "\f198"
        }

        .fa-slack-hash:before {
            content: "\f3ef"
        }

        .fa-slash:before {
            content: "\f715"
        }

        .fa-sleigh:before {
            content: "\f7cc"
        }

        .fa-sliders-h:before {
            content: "\f1de"
        }

        .fa-slideshare:before {
            content: "\f1e7"
        }

        .fa-smile:before {
            content: "\f118"
        }

        .fa-smile-beam:before {
            content: "\f5b8"
        }

        .fa-smile-wink:before {
            content: "\f4da"
        }

        .fa-smog:before {
            content: "\f75f"
        }

        .fa-smoking:before {
            content: "\f48d"
        }

        .fa-smoking-ban:before {
            content: "\f54d"
        }

        .fa-sms:before {
            content: "\f7cd"
        }

        .fa-snapchat:before {
            content: "\f2ab"
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac"
        }

        .fa-snapchat-square:before {
            content: "\f2ad"
        }

        .fa-snowboarding:before {
            content: "\f7ce"
        }

        .fa-snowflake:before {
            content: "\f2dc"
        }

        .fa-snowman:before {
            content: "\f7d0"
        }

        .fa-snowplow:before {
            content: "\f7d2"
        }

        .fa-socks:before {
            content: "\f696"
        }

        .fa-solar-panel:before {
            content: "\f5ba"
        }

        .fa-sort:before {
            content: "\f0dc"
        }

        .fa-sort-alpha-down:before {
            content: "\f15d"
        }

        .fa-sort-alpha-up:before {
            content: "\f15e"
        }

        .fa-sort-amount-down:before {
            content: "\f160"
        }

        .fa-sort-amount-up:before {
            content: "\f161"
        }

        .fa-sort-down:before {
            content: "\f0dd"
        }

        .fa-sort-numeric-down:before {
            content: "\f162"
        }

        .fa-sort-numeric-up:before {
            content: "\f163"
        }

        .fa-sort-up:before {
            content: "\f0de"
        }

        .fa-soundcloud:before {
            content: "\f1be"
        }

        .fa-sourcetree:before {
            content: "\f7d3"
        }

        .fa-spa:before {
            content: "\f5bb"
        }

        .fa-space-shuttle:before {
            content: "\f197"
        }

        .fa-speakap:before {
            content: "\f3f3"
        }

        .fa-spider:before {
            content: "\f717"
        }

        .fa-spinner:before {
            content: "\f110"
        }

        .fa-splotch:before {
            content: "\f5bc"
        }

        .fa-spotify:before {
            content: "\f1bc"
        }

        .fa-spray-can:before {
            content: "\f5bd"
        }

        .fa-square:before {
            content: "\f0c8"
        }

        .fa-square-full:before {
            content: "\f45c"
        }

        .fa-square-root-alt:before {
            content: "\f698"
        }

        .fa-squarespace:before {
            content: "\f5be"
        }

        .fa-stack-exchange:before {
            content: "\f18d"
        }

        .fa-stack-overflow:before {
            content: "\f16c"
        }

        .fa-stamp:before {
            content: "\f5bf"
        }

        .fa-star:before {
            content: "\f005"
        }

        .fa-star-and-crescent:before {
            content: "\f699"
        }

        .fa-star-half:before {
            content: "\f089"
        }

        .fa-star-half-alt:before {
            content: "\f5c0"
        }

        .fa-star-of-david:before {
            content: "\f69a"
        }

        .fa-star-of-life:before {
            content: "\f621"
        }

        .fa-staylinked:before {
            content: "\f3f5"
        }

        .fa-steam:before {
            content: "\f1b6"
        }

        .fa-steam-square:before {
            content: "\f1b7"
        }

        .fa-steam-symbol:before {
            content: "\f3f6"
        }

        .fa-step-backward:before {
            content: "\f048"
        }

        .fa-step-forward:before {
            content: "\f051"
        }

        .fa-stethoscope:before {
            content: "\f0f1"
        }

        .fa-sticker-mule:before {
            content: "\f3f7"
        }

        .fa-sticky-note:before {
            content: "\f249"
        }

        .fa-stop:before {
            content: "\f04d"
        }

        .fa-stop-circle:before {
            content: "\f28d"
        }

        .fa-stopwatch:before {
            content: "\f2f2"
        }

        .fa-store:before {
            content: "\f54e"
        }

        .fa-store-alt:before {
            content: "\f54f"
        }

        .fa-strava:before {
            content: "\f428"
        }

        .fa-stream:before {
            content: "\f550"
        }

        .fa-street-view:before {
            content: "\f21d"
        }

        .fa-strikethrough:before {
            content: "\f0cc"
        }

        .fa-stripe:before {
            content: "\f429"
        }

        .fa-stripe-s:before {
            content: "\f42a"
        }

        .fa-stroopwafel:before {
            content: "\f551"
        }

        .fa-studiovinari:before {
            content: "\f3f8"
        }

        .fa-stumbleupon:before {
            content: "\f1a4"
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3"
        }

        .fa-subscript:before {
            content: "\f12c"
        }

        .fa-subway:before {
            content: "\f239"
        }

        .fa-suitcase:before {
            content: "\f0f2"
        }

        .fa-suitcase-rolling:before {
            content: "\f5c1"
        }

        .fa-sun:before {
            content: "\f185"
        }

        .fa-superpowers:before {
            content: "\f2dd"
        }

        .fa-superscript:before {
            content: "\f12b"
        }

        .fa-supple:before {
            content: "\f3f9"
        }

        .fa-surprise:before {
            content: "\f5c2"
        }

        .fa-suse:before {
            content: "\f7d6"
        }

        .fa-swatchbook:before {
            content: "\f5c3"
        }

        .fa-swimmer:before {
            content: "\f5c4"
        }

        .fa-swimming-pool:before {
            content: "\f5c5"
        }

        .fa-synagogue:before {
            content: "\f69b"
        }

        .fa-sync:before {
            content: "\f021"
        }

        .fa-sync-alt:before {
            content: "\f2f1"
        }

        .fa-syringe:before {
            content: "\f48e"
        }

        .fa-table:before {
            content: "\f0ce"
        }

        .fa-table-tennis:before {
            content: "\f45d"
        }

        .fa-tablet:before {
            content: "\f10a"
        }

        .fa-tablet-alt:before {
            content: "\f3fa"
        }

        .fa-tablets:before {
            content: "\f490"
        }

        .fa-tachometer-alt:before {
            content: "\f3fd"
        }

        .fa-tag:before {
            content: "\f02b"
        }

        .fa-tags:before {
            content: "\f02c"
        }

        .fa-tape:before {
            content: "\f4db"
        }

        .fa-tasks:before {
            content: "\f0ae"
        }

        .fa-taxi:before {
            content: "\f1ba"
        }

        .fa-teamspeak:before {
            content: "\f4f9"
        }

        .fa-teeth:before {
            content: "\f62e"
        }

        .fa-teeth-open:before {
            content: "\f62f"
        }

        .fa-telegram:before {
            content: "\f2c6"
        }

        .fa-telegram-plane:before {
            content: "\f3fe"
        }

        .fa-temperature-high:before {
            content: "\f769"
        }

        .fa-temperature-low:before {
            content: "\f76b"
        }

        .fa-tencent-weibo:before {
            content: "\f1d5"
        }

        .fa-tenge:before {
            content: "\f7d7"
        }

        .fa-terminal:before {
            content: "\f120"
        }

        .fa-text-height:before {
            content: "\f034"
        }

        .fa-text-width:before {
            content: "\f035"
        }

        .fa-th:before {
            content: "\f00a"
        }

        .fa-th-large:before {
            content: "\f009"
        }

        .fa-th-list:before {
            content: "\f00b"
        }

        .fa-the-red-yeti:before {
            content: "\f69d"
        }

        .fa-theater-masks:before {
            content: "\f630"
        }

        .fa-themeco:before {
            content: "\f5c6"
        }

        .fa-themeisle:before {
            content: "\f2b2"
        }

        .fa-thermometer:before {
            content: "\f491"
        }

        .fa-thermometer-empty:before {
            content: "\f2cb"
        }

        .fa-thermometer-full:before {
            content: "\f2c7"
        }

        .fa-thermometer-half:before {
            content: "\f2c9"
        }

        .fa-thermometer-quarter:before {
            content: "\f2ca"
        }

        .fa-thermometer-three-quarters:before {
            content: "\f2c8"
        }

        .fa-think-peaks:before {
            content: "\f731"
        }

        .fa-thumbs-down:before {
            content: "\f165"
        }

        .fa-thumbs-up:before {
            content: "\f164"
        }

        .fa-thumbtack:before {
            content: "\f08d"
        }

        .fa-ticket-alt:before {
            content: "\f3ff"
        }

        .fa-times:before {
            content: "\f00d"
        }

        .fa-times-circle:before {
            content: "\f057"
        }

        .fa-tint:before {
            content: "\f043"
        }

        .fa-tint-slash:before {
            content: "\f5c7"
        }

        .fa-tired:before {
            content: "\f5c8"
        }

        .fa-toggle-off:before {
            content: "\f204"
        }

        .fa-toggle-on:before {
            content: "\f205"
        }

        .fa-toilet:before {
            content: "\f7d8"
        }

        .fa-toilet-paper:before {
            content: "\f71e"
        }

        .fa-toolbox:before {
            content: "\f552"
        }

        .fa-tools:before {
            content: "\f7d9"
        }

        .fa-tooth:before {
            content: "\f5c9"
        }

        .fa-torah:before {
            content: "\f6a0"
        }

        .fa-torii-gate:before {
            content: "\f6a1"
        }

        .fa-tractor:before {
            content: "\f722"
        }

        .fa-trade-federation:before {
            content: "\f513"
        }

        .fa-trademark:before {
            content: "\f25c"
        }

        .fa-traffic-light:before {
            content: "\f637"
        }

        .fa-train:before {
            content: "\f238"
        }

        .fa-tram:before {
            content: "\f7da"
        }

        .fa-transgender:before {
            content: "\f224"
        }

        .fa-transgender-alt:before {
            content: "\f225"
        }

        .fa-trash:before {
            content: "\f1f8"
        }

        .fa-trash-alt:before {
            content: "\f2ed"
        }

        .fa-trash-restore:before {
            content: "\f829"
        }

        .fa-trash-restore-alt:before {
            content: "\f82a"
        }

        .fa-tree:before {
            content: "\f1bb"
        }

        .fa-trello:before {
            content: "\f181"
        }

        .fa-tripadvisor:before {
            content: "\f262"
        }

        .fa-trophy:before {
            content: "\f091"
        }

        .fa-truck:before {
            content: "\f0d1"
        }

        .fa-truck-loading:before {
            content: "\f4de"
        }

        .fa-truck-monster:before {
            content: "\f63b"
        }

        .fa-truck-moving:before {
            content: "\f4df"
        }

        .fa-truck-pickup:before {
            content: "\f63c"
        }

        .fa-tshirt:before {
            content: "\f553"
        }

        .fa-tty:before {
            content: "\f1e4"
        }

        .fa-tumblr:before {
            content: "\f173"
        }

        .fa-tumblr-square:before {
            content: "\f174"
        }

        .fa-tv:before {
            content: "\f26c"
        }

        .fa-twitch:before {
            content: "\f1e8"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-twitter-square:before {
            content: "\f081"
        }

        .fa-typo3:before {
            content: "\f42b"
        }

        .fa-uber:before {
            content: "\f402"
        }

        .fa-ubuntu:before {
            content: "\f7df"
        }

        .fa-uikit:before {
            content: "\f403"
        }

        .fa-umbrella:before {
            content: "\f0e9"
        }

        .fa-umbrella-beach:before {
            content: "\f5ca"
        }

        .fa-underline:before {
            content: "\f0cd"
        }

        .fa-undo:before {
            content: "\f0e2"
        }

        .fa-undo-alt:before {
            content: "\f2ea"
        }

        .fa-uniregistry:before {
            content: "\f404"
        }

        .fa-universal-access:before {
            content: "\f29a"
        }

        .fa-university:before {
            content: "\f19c"
        }

        .fa-unlink:before {
            content: "\f127"
        }

        .fa-unlock:before {
            content: "\f09c"
        }

        .fa-unlock-alt:before {
            content: "\f13e"
        }

        .fa-untappd:before {
            content: "\f405"
        }

        .fa-upload:before {
            content: "\f093"
        }

        .fa-ups:before {
            content: "\f7e0"
        }

        .fa-usb:before {
            content: "\f287"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-user-alt:before {
            content: "\f406"
        }

        .fa-user-alt-slash:before {
            content: "\f4fa"
        }

        .fa-user-astronaut:before {
            content: "\f4fb"
        }

        .fa-user-check:before {
            content: "\f4fc"
        }

        .fa-user-circle:before {
            content: "\f2bd"
        }

        .fa-user-clock:before {
            content: "\f4fd"
        }

        .fa-user-cog:before {
            content: "\f4fe"
        }

        .fa-user-edit:before {
            content: "\f4ff"
        }

        .fa-user-friends:before {
            content: "\f500"
        }

        .fa-user-graduate:before {
            content: "\f501"
        }

        .fa-user-injured:before {
            content: "\f728"
        }

        .fa-user-lock:before {
            content: "\f502"
        }

        .fa-user-md:before {
            content: "\f0f0"
        }

        .fa-user-minus:before {
            content: "\f503"
        }

        .fa-user-ninja:before {
            content: "\f504"
        }

        .fa-user-nurse:before {
            content: "\f82f"
        }

        .fa-user-plus:before {
            content: "\f234"
        }

        .fa-user-secret:before {
            content: "\f21b"
        }

        .fa-user-shield:before {
            content: "\f505"
        }

        .fa-user-slash:before {
            content: "\f506"
        }

        .fa-user-tag:before {
            content: "\f507"
        }

        .fa-user-tie:before {
            content: "\f508"
        }

        .fa-user-times:before {
            content: "\f235"
        }

        .fa-users:before {
            content: "\f0c0"
        }

        .fa-users-cog:before {
            content: "\f509"
        }

        .fa-usps:before {
            content: "\f7e1"
        }

        .fa-ussunnah:before {
            content: "\f407"
        }

        .fa-utensil-spoon:before {
            content: "\f2e5"
        }

        .fa-utensils:before {
            content: "\f2e7"
        }

        .fa-vaadin:before {
            content: "\f408"
        }

        .fa-vector-square:before {
            content: "\f5cb"
        }

        .fa-venus:before {
            content: "\f221"
        }

        .fa-venus-double:before {
            content: "\f226"
        }

        .fa-venus-mars:before {
            content: "\f228"
        }

        .fa-viacoin:before {
            content: "\f237"
        }

        .fa-viadeo:before {
            content: "\f2a9"
        }

        .fa-viadeo-square:before {
            content: "\f2aa"
        }

        .fa-vial:before {
            content: "\f492"
        }

        .fa-vials:before {
            content: "\f493"
        }

        .fa-viber:before {
            content: "\f409"
        }

        .fa-video:before {
            content: "\f03d"
        }

        .fa-video-slash:before {
            content: "\f4e2"
        }

        .fa-vihara:before {
            content: "\f6a7"
        }

        .fa-vimeo:before {
            content: "\f40a"
        }

        .fa-vimeo-square:before {
            content: "\f194"
        }

        .fa-vimeo-v:before {
            content: "\f27d"
        }

        .fa-vine:before {
            content: "\f1ca"
        }

        .fa-vk:before {
            content: "\f189"
        }

        .fa-vnv:before {
            content: "\f40b"
        }

        .fa-volleyball-ball:before {
            content: "\f45f"
        }

        .fa-volume-down:before {
            content: "\f027"
        }

        .fa-volume-mute:before {
            content: "\f6a9"
        }

        .fa-volume-off:before {
            content: "\f026"
        }

        .fa-volume-up:before {
            content: "\f028"
        }

        .fa-vote-yea:before {
            content: "\f772"
        }

        .fa-vr-cardboard:before {
            content: "\f729"
        }

        .fa-vuejs:before {
            content: "\f41f"
        }

        .fa-walking:before {
            content: "\f554"
        }

        .fa-wallet:before {
            content: "\f555"
        }

        .fa-warehouse:before {
            content: "\f494"
        }

        .fa-water:before {
            content: "\f773"
        }

        .fa-weebly:before {
            content: "\f5cc"
        }

        .fa-weibo:before {
            content: "\f18a"
        }

        .fa-weight:before {
            content: "\f496"
        }

        .fa-weight-hanging:before {
            content: "\f5cd"
        }

        .fa-weixin:before {
            content: "\f1d7"
        }

        .fa-whatsapp:before {
            content: "\f232"
        }

        .fa-whatsapp-square:before {
            content: "\f40c"
        }

        .fa-wheelchair:before {
            content: "\f193"
        }

        .fa-whmcs:before {
            content: "\f40d"
        }

        .fa-wifi:before {
            content: "\f1eb"
        }

        .fa-wikipedia-w:before {
            content: "\f266"
        }

        .fa-wind:before {
            content: "\f72e"
        }

        .fa-window-close:before {
            content: "\f410"
        }

        .fa-window-maximize:before {
            content: "\f2d0"
        }

        .fa-window-minimize:before {
            content: "\f2d1"
        }

        .fa-window-restore:before {
            content: "\f2d2"
        }

        .fa-windows:before {
            content: "\f17a"
        }

        .fa-wine-bottle:before {
            content: "\f72f"
        }

        .fa-wine-glass:before {
            content: "\f4e3"
        }

        .fa-wine-glass-alt:before {
            content: "\f5ce"
        }

        .fa-wix:before {
            content: "\f5cf"
        }

        .fa-wizards-of-the-coast:before {
            content: "\f730"
        }

        .fa-wolf-pack-battalion:before {
            content: "\f514"
        }

        .fa-won-sign:before {
            content: "\f159"
        }

        .fa-wordpress:before {
            content: "\f19a"
        }

        .fa-wordpress-simple:before {
            content: "\f411"
        }

        .fa-wpbeginner:before {
            content: "\f297"
        }

        .fa-wpexplorer:before {
            content: "\f2de"
        }

        .fa-wpforms:before {
            content: "\f298"
        }

        .fa-wpressr:before {
            content: "\f3e4"
        }

        .fa-wrench:before {
            content: "\f0ad"
        }

        .fa-x-ray:before {
            content: "\f497"
        }

        .fa-xbox:before {
            content: "\f412"
        }

        .fa-xing:before {
            content: "\f168"
        }

        .fa-xing-square:before {
            content: "\f169"
        }

        .fa-y-combinator:before {
            content: "\f23b"
        }

        .fa-yahoo:before {
            content: "\f19e"
        }

        .fa-yandex:before {
            content: "\f413"
        }

        .fa-yandex-international:before {
            content: "\f414"
        }

        .fa-yarn:before {
            content: "\f7e3"
        }

        .fa-yelp:before {
            content: "\f1e9"
        }

        .fa-yen-sign:before {
            content: "\f157"
        }

        .fa-yin-yang:before {
            content: "\f6ad"
        }

        .fa-yoast:before {
            content: "\f2b1"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa-youtube-square:before {
            content: "\f431"
        }

        .fa-zhihu:before {
            content: "\f63f"
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: normal;
            font-display: auto;
            src: url(../webfonts/fa-brands-400.eot);
            src: url(../webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.woff) format("woff"), url(../webfonts/fa-brands-400.ttf) format("truetype"), url(../webfonts/fa-brands-400.svg#fontawesome) format("svg")
        }

        .fab {
            font-family: "Font Awesome 5 Brands"
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: auto;
            src: url(../webfonts/fa-regular-400.eot);
            src: url(../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.woff) format("woff"), url(../webfonts/fa-regular-400.ttf) format("truetype"), url(../webfonts/fa-regular-400.svg#fontawesome) format("svg")
        }

        .far {
            font-weight: 400
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: auto;
            src: url(../webfonts/fa-solid-900.eot);
            src: url(../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.woff) format("woff"), url(../webfonts/fa-solid-900.ttf) format("truetype"), url(../webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free"
        }

        .fa,
        .fas {
            font-weight: 900
        }
    </style> -->
</head>

<!-- <body id="page-top">
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="main-content" id="panel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10 text-center">
                                        <h5 class="text-dark">Formulir Pendaftaran Peserta Didik Baru</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 text-center">
                                        <h5 class="text-dark">SMK PGRI 4 Pasuruan</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 mb-3 text-center">
                                        <h5 class="text-dark">Tahun Pelajaran 2022/2023</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <img src="<?= base_url('assets/'); ?>/img/logo.png" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        Nama :
                                    </div>
                                    <div class="col-9">
                                        <?= $user['nama']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h4>Silahkan Klik Link Download Formulir untuk mencetak Formulir Pendaftaran <a href="" class="badge badge-info"><i class="fas fa-print"></i> Download </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> -->

<body>
    <h4 class="text-center"> Form Pendaftaran </h4>
</body>

</html>