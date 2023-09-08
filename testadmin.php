<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  <style type="text/css" src="style.css">
      *{
        font-family: Century Gothic,sans-serif;
      }
        .clg-logo img{
                width:15vw;
                margin-left: 43%;
                margin-right: 43%;
                    }
        .navbar{
            justify-content: space-between;
            border-bottom: solid 4px yellowgreen;
            box-shadow: 2px 2px 35px 2px rgb(3, 61, 3);
            background-color:rgb(209, 251, 73),rgb(129, 255, 3);
            padding: 12px 28px;
            align-items: center;
        }
        .navbar .menu-li li{
            display: inline-block;
            font-size: 1vw;
        }
        .navbar ul{
            list-style: none;
            display: grid;
            gap:1%;
            text-align: center;
            padding: 2% 1%;
            margin-left:5%;
            margin-right:2%;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
        .navbar .menu-li a{

            text-decoration: none;
            color:white;
            width: 100%;
            padding:4%;
            border:5px solid rgba(0, 0, 0, 0.1);
            text-align: center;
            -webkit-transition: 0.6s ease; 

        }
        .navbar .menu-li li a:hover{
            border: 5px solid greenyellow;
            width: 100%;
            padding: 4%;
            transition: 0.6s ease;
            background: rgb(23, 110, 4);
            color: aliceblue;
        }
        table{
            width: 100%;
        }
        
          @media (prefers-reduced-motion: no-preference) {
            :root {
              scroll-behavior: smooth;
            }
          }

          body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
          }

          hr {
            margin: 1rem 0;
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: 0.25;
          }

          hr:not([size]) {
            height: 1px;
          }

          h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
          }

          h1, .h1 {
            font-size: calc(1.375rem + 1.5vw);
          }
          @media (min-width: 1200px) {
            h1, .h1 {
              font-size: 2.5rem;
            }
          }

          h2, .h2 {
            font-size: calc(1.325rem + 0.9vw);
          }
          @media (min-width: 1200px) {
            h2, .h2 {
              font-size: 2rem;
            }
          }

          h3, .h3 {
            font-size: calc(1.3rem + 0.6vw);
          }
          @media (min-width: 1200px) {
            h3, .h3 {
              font-size: 1.75rem;
            }
          }

          h4, .h4 {
            font-size: calc(1.275rem + 0.3vw);
          }
          @media (min-width: 1200px) {
            h4, .h4 {
              font-size: 1.5rem;
            }
          }

          h5, .h5 {
            font-size: 1.25rem;
          }

          h6, .h6 {
            font-size: 1rem;
          }

          p {
            margin-top: 0;
            margin-bottom: 1rem;
          }

          abbr[title],
          abbr[data-bs-original-title] {
            -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
                    text-decoration-skip-ink: none;
          }

          address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
          }

          ol,
          ul {
            padding-left: 2rem;
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
            margin-bottom: 0.5rem;
            margin-left: 0;
          }

          blockquote {
            margin: 0 0 1rem;
          }

          b,
          strong {
            font-weight: bolder;
          }

          small, .small {
            font-size: 0.875em;
          }

          mark, .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
          }

          sub,
          sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
          }

          sub {
            bottom: -0.25em;
          }

          sup {
            top: -0.5em;
          }

          a {
            color: #0d6efd;
            text-decoration: underline;
          }
          a:hover {
            color: #0a58ca;
          }

          a:not([href]):not([class]), a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
          }

          pre,
          code,
          kbd,
          samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em;
            direction: ltr /* rtl:ignore */;
            unicode-bidi: bidi-override;
          }

          pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
          }
          pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
          }

          code {
            font-size: 0.875em;
            color: #d63384;
            word-wrap: break-word;
          }
          a > code {
            color: inherit;
          }

          kbd {
            padding: 0.2rem 0.4rem;
            font-size: 0.875em;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem;
          }
          kbd kbd {
            padding: 0;
            font-size: 1em;
            font-weight: 700;
          }

          figure {
            margin: 0 0 1rem;
          }

          img,
          svg {
            vertical-align: middle;
          }

          table {
            caption-side: bottom;
            border-collapse: collapse;
          }

          caption {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            color: #6c757d;
            text-align: left;
          }

          th {
            text-align: inherit;
            text-align: -webkit-match-parent;
          }

          thead,
          tbody,
          tfoot,
          tr,
          td,
          th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
          }
          .card-body{
            background-color: #fff;
          }
          .card-body .dataTable-table tr{
            background-color: #fff;
          }
          .update_batch{
            margin: 5%;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 5%;
            border-radius: 30px;
            text-align: center;
            align-content: center;
          }
          .update_batch select{
            margin-left: 2vw;
            outline-color:transparent;
            border-radius: 30px;
            width: 15vw;
            display: inline-block;
          }
          .update_batch input[type=submit]{
            height: 5vh;
            width: 10vw;
            font-size: 1vw;
            background-color: darkslategrey;
            color: #fff;
            border: none;
            margin-top: 2%;
          }
          label {
            display: inline-block;
          }

          button {
            border-radius: 0;
          }

          button:focus:not(:focus-visible) {
            outline: 0;
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
          select {
            text-transform: none;
          }

          [role=button] {
            cursor: pointer;
          }

          select {
            word-wrap: normal;
          }
          select:disabled {
            opacity: 1;
          }

          [list]::-webkit-calendar-picker-indicator {
            display: none;
          }

          button,
          [type=button],
          [type=reset],
          [type=submit] {
            -webkit-appearance: button;
          }
          button:not(:disabled),
          [type=button]:not(:disabled),
          [type=reset]:not(:disabled),
          [type=submit]:not(:disabled) {
            cursor: pointer;
          }
          .green_button{
            height: 5vh;
            width: 5vw;
            font-size: 1vw;
            background-color: greenyellow;
            color: #fff;
            border: none;
          }
          .red_button{
            height: 5vh;
            width: 5vw;
            font-size: 1vw;
            background-color: orangered;
            color: #fff;
            border: none;
          }
          input[value="Submit"]{
            height: 5vh;
            width: 5vw;
            font-size: 1vw;
            background-color: darkslategrey;
            color: #fff;
            border: none;
          }
          .grey_button{
            height: 5vh;
            width: 10vw;
            font-size: 1vw;
            background-color: darkslategrey;
            color: #fff;
            border: none;
          }

          ::-moz-focus-inner {
            padding: 0;
            border-style: none;
          }

          textarea {
            resize: vertical;
          }

          fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
          }

          legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
          }
          @media (min-width: 1200px) {
            legend {
              font-size: 1.5rem;
            }
          }
          legend + * {
            clear: left;
          }

          ::-webkit-datetime-edit-fields-wrapper,
          ::-webkit-datetime-edit-text,
          ::-webkit-datetime-edit-minute,
          ::-webkit-datetime-edit-hour-field,
          ::-webkit-datetime-edit-day-field,
          ::-webkit-datetime-edit-month-field,
          ::-webkit-datetime-edit-year-field {
            padding: 0;
          }

          ::-webkit-inner-spin-button {
            height: auto;
          }

          [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
          }

          /* rtl:raw:
          [type="tel"],
          [type="url"],
          [type="email"],
          [type="number"] {
            direction: ltr;
          }
          */
          ::-webkit-search-decoration {
            -webkit-appearance: none;
          }

          ::-webkit-color-swatch-wrapper {
            padding: 0;
          }

          ::-webkit-file-upload-button {
            font: inherit;
          }

          ::file-selector-button {
            font: inherit;
          }

          ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
          }

          output {
            display: inline-block;
          }

          iframe {
            border: 0;
          }

          summary {
            display: list-item;
            cursor: pointer;
          }

          progress {
            vertical-align: baseline;
          }

          [hidden] {
            display: none !important;
          }

          .lead {
            font-size: 1.25rem;
            font-weight: 300;
          }

          .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-1 {
              font-size: 5rem;
            }
          }

          .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-2 {
              font-size: 4.5rem;
            }
          }

          .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-3 {
              font-size: 4rem;
            }
          }

          .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-4 {
              font-size: 3.5rem;
            }
          }

          .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-5 {
              font-size: 3rem;
            }
          }

          .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2;
          }
          @media (min-width: 1200px) {
            .display-6 {
              font-size: 2.5rem;
            }
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
            font-size: 0.875em;
            text-transform: uppercase;
          }

          .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
          }
          .blockquote > :last-child {
            margin-bottom: 0;
          }

          .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 0.875em;
            color: #6c757d;
          }
          .blockquote-footer::before {
            content: "— ";
          }

          .img-fluid {
            max-width: 100%;
            height: auto;
          }

          .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
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
            font-size: 0.875em;
            color: #6c757d;
          }

          .container,
          .container-fluid,
          .container-xxl,
          .container-xl,
          .container-lg,
          .container-md,
          .container-sm {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
          }

          @media (min-width: 576px) {
            .container-sm, .container {
              max-width: 540px;
            }
          }
          @media (min-width: 768px) {
            .container-md, .container-sm, .container {
              max-width: 720px;
            }
          }
          @media (min-width: 992px) {
            .container-lg, .container-md, .container-sm, .container {
              max-width: 960px;
            }
          }
          @media (min-width: 1200px) {
            .container-xl, .container-lg, .container-md, .container-sm, .container {
              max-width: 1140px;
            }
          }
          @media (min-width: 1400px) {
            .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
              max-width: 1320px;
            }
          }
          .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
          }
          .row > * {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
          }

          .col {
            flex: 1 0 0%;
          }

          .row-cols-auto > * {
            flex: 0 0 auto;
            width: auto;
          }

          .row-cols-1 > * {
            flex: 0 0 auto;
            width: 100%;
          }

          .row-cols-2 > * {
            flex: 0 0 auto;
            width: 50%;
          }

          .row-cols-3 > * {
            flex: 0 0 auto;
            width: 33.3333333333%;
          }

          .row-cols-4 > * {
            flex: 0 0 auto;
            width: 25%;
          }

          .row-cols-5 > * {
            flex: 0 0 auto;
            width: 20%;
          }

          .row-cols-6 > * {
            flex: 0 0 auto;
            width: 16.6666666667%;
          }

          .col-auto {
            flex: 0 0 auto;
            width: auto;
          }

          .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%;
          }

          .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%;
          }

          .col-3 {
            flex: 0 0 auto;
            width: 25%;
          }

          .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
          }

          .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%;
          }

          .col-6 {
            flex: 0 0 auto;
            width: 50%;
          }

          .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%;
          }

          .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%;
          }

          .col-9 {
            flex: 0 0 auto;
            width: 75%;
          }

          .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%;
          }

          .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%;
          }

          .col-12 {
            flex: 0 0 auto;
            width: 100%;
          }

          .offset-1 {
            margin-left: 8.33333333%;
          }

          .offset-2 {
            margin-left: 16.66666667%;
          }

          .offset-3 {
            margin-left: 25%;
          }

          .offset-4 {
            margin-left: 33.33333333%;
          }

          .offset-5 {
            margin-left: 41.66666667%;
          }

          .offset-6 {
            margin-left: 50%;
          }

          .offset-7 {
            margin-left: 58.33333333%;
          }

          .offset-8 {
            margin-left: 66.66666667%;
          }

          .offset-9 {
            margin-left: 75%;
          }

          .offset-10 {
            margin-left: 83.33333333%;
          }

          .offset-11 {
            margin-left: 91.66666667%;
          }

          .g-0,
          .gx-0 {
            --bs-gutter-x: 0;
          }

          .g-0,
          .gy-0 {
            --bs-gutter-y: 0;
          }

          .g-1,
          .gx-1 {
            --bs-gutter-x: 0.25rem;
          }

          .g-1,
          .gy-1 {
            --bs-gutter-y: 0.25rem;
          }

          .g-2,
          .gx-2 {
            --bs-gutter-x: 0.5rem;
          }

          .g-2,
          .gy-2 {
            --bs-gutter-y: 0.5rem;
          }

          .g-3,
          .gx-3 {
            --bs-gutter-x: 1rem;
          }

          .g-3,
          .gy-3 {
            --bs-gutter-y: 1rem;
          }

          .g-4,
          .gx-4 {
            --bs-gutter-x: 1.5rem;
          }

          .g-4,
          .gy-4 {
            --bs-gutter-y: 1.5rem;
          }

          .g-5,
          .gx-5 {
            --bs-gutter-x: 3rem;
          }

          .g-5,
          .gy-5 {
            --bs-gutter-y: 3rem;
          }

          @media (min-width: 576px) {
            .col-sm {
              flex: 1 0 0%;
            }

            .row-cols-sm-auto > * {
              flex: 0 0 auto;
              width: auto;
            }

            .row-cols-sm-1 > * {
              flex: 0 0 auto;
              width: 100%;
            }

            .row-cols-sm-2 > * {
              flex: 0 0 auto;
              width: 50%;
            }

            .row-cols-sm-3 > * {
              flex: 0 0 auto;
              width: 33.3333333333%;
            }

            .row-cols-sm-4 > * {
              flex: 0 0 auto;
              width: 25%;
            }

            .row-cols-sm-5 > * {
              flex: 0 0 auto;
              width: 20%;
            }

            .row-cols-sm-6 > * {
              flex: 0 0 auto;
              width: 16.6666666667%;
            }

            .col-sm-auto {
              flex: 0 0 auto;
              width: auto;
            }

            .col-sm-1 {
              flex: 0 0 auto;
              width: 8.33333333%;
            }

            .col-sm-2 {
              flex: 0 0 auto;
              width: 16.66666667%;
            }

            .col-sm-3 {
              flex: 0 0 auto;
              width: 25%;
            }

            .col-sm-4 {
              flex: 0 0 auto;
              width: 33.33333333%;
            }

            .col-sm-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }

            .col-sm-6 {
              flex: 0 0 auto;
              width: 50%;
            }

            .col-sm-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }

            .col-sm-8 {
              flex: 0 0 auto;
              width: 66.66666667%;
            }

            .col-sm-9 {
              flex: 0 0 auto;
              width: 75%;
            }

            .col-sm-10 {
              flex: 0 0 auto;
              width: 83.33333333%;
            }

            .col-sm-11 {
              flex: 0 0 auto;
              width: 91.66666667%;
            }

            .col-sm-12 {
              flex: 0 0 auto;
              width: 100%;
            }

            .offset-sm-0 {
              margin-left: 0;
            }

            .offset-sm-1 {
              margin-left: 8.33333333%;
            }

            .offset-sm-2 {
              margin-left: 16.66666667%;
            }

            .offset-sm-3 {
              margin-left: 25%;
            }

            .offset-sm-4 {
              margin-left: 33.33333333%;
            }

            .offset-sm-5 {
              margin-left: 41.66666667%;
            }

            .offset-sm-6 {
              margin-left: 50%;
            }

            .offset-sm-7 {
              margin-left: 58.33333333%;
            }

            .offset-sm-8 {
              margin-left: 66.66666667%;
            }

            .offset-sm-9 {
              margin-left: 75%;
            }

            .offset-sm-10 {
              margin-left: 83.33333333%;
            }

            .offset-sm-11 {
              margin-left: 91.66666667%;
            }

            .g-sm-0,
          .gx-sm-0 {
              --bs-gutter-x: 0;
            }

            .g-sm-0,
          .gy-sm-0 {
              --bs-gutter-y: 0;
            }

            .g-sm-1,
          .gx-sm-1 {
              --bs-gutter-x: 0.25rem;
            }

            .g-sm-1,
          .gy-sm-1 {
              --bs-gutter-y: 0.25rem;
            }

            .g-sm-2,
          .gx-sm-2 {
              --bs-gutter-x: 0.5rem;
            }

            .g-sm-2,
          .gy-sm-2 {
              --bs-gutter-y: 0.5rem;
            }

            .g-sm-3,
          .gx-sm-3 {
              --bs-gutter-x: 1rem;
            }

            .g-sm-3,
          .gy-sm-3 {
              --bs-gutter-y: 1rem;
            }

            .g-sm-4,
          .gx-sm-4 {
              --bs-gutter-x: 1.5rem;
            }

            .g-sm-4,
          .gy-sm-4 {
              --bs-gutter-y: 1.5rem;
            }

            .g-sm-5,
          .gx-sm-5 {
              --bs-gutter-x: 3rem;
            }

            .g-sm-5,
          .gy-sm-5 {
              --bs-gutter-y: 3rem;
            }
          }
          @media (min-width: 768px) {
            .col-md {
              flex: 1 0 0%;
            }

            .row-cols-md-auto > * {
              flex: 0 0 auto;
              width: auto;
            }

            .row-cols-md-1 > * {
              flex: 0 0 auto;
              width: 100%;
            }

            .row-cols-md-2 > * {
              flex: 0 0 auto;
              width: 50%;
            }

            .row-cols-md-3 > * {
              flex: 0 0 auto;
              width: 33.3333333333%;
            }

            .row-cols-md-4 > * {
              flex: 0 0 auto;
              width: 25%;
            }

            .row-cols-md-5 > * {
              flex: 0 0 auto;
              width: 20%;
            }

            .row-cols-md-6 > * {
              flex: 0 0 auto;
              width: 16.6666666667%;
            }

            .col-md-auto {
              flex: 0 0 auto;
              width: auto;
            }

            .col-md-1 {
              flex: 0 0 auto;
              width: 8.33333333%;
            }

            .col-md-2 {
              flex: 0 0 auto;
              width: 16.66666667%;
            }

            .col-md-3 {
              flex: 0 0 auto;
              width: 25%;
            }

            .col-md-4 {
              flex: 0 0 auto;
              width: 33.33333333%;
            }

            .col-md-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }

            .col-md-6 {
              flex: 0 0 auto;
              width: 50%;
            }

            .col-md-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }

            .col-md-8 {
              flex: 0 0 auto;
              width: 66.66666667%;
            }

            .col-md-9 {
              flex: 0 0 auto;
              width: 75%;
            }

            .col-md-10 {
              flex: 0 0 auto;
              width: 83.33333333%;
            }

            .col-md-11 {
              flex: 0 0 auto;
              width: 91.66666667%;
            }

            .col-md-12 {
              flex: 0 0 auto;
              width: 100%;
            }

            .offset-md-0 {
              margin-left: 0;
            }

            .offset-md-1 {
              margin-left: 8.33333333%;
            }

            .offset-md-2 {
              margin-left: 16.66666667%;
            }

            .offset-md-3 {
              margin-left: 25%;
            }

            .offset-md-4 {
              margin-left: 33.33333333%;
            }

            .offset-md-5 {
              margin-left: 41.66666667%;
            }

            .offset-md-6 {
              margin-left: 50%;
            }

            .offset-md-7 {
              margin-left: 58.33333333%;
            }

            .offset-md-8 {
              margin-left: 66.66666667%;
            }

            .offset-md-9 {
              margin-left: 75%;
            }

            .offset-md-10 {
              margin-left: 83.33333333%;
            }

            .offset-md-11 {
              margin-left: 91.66666667%;
            }

            .g-md-0,
          .gx-md-0 {
              --bs-gutter-x: 0;
            }

            .g-md-0,
          .gy-md-0 {
              --bs-gutter-y: 0;
            }

            .g-md-1,
          .gx-md-1 {
              --bs-gutter-x: 0.25rem;
            }

            .g-md-1,
          .gy-md-1 {
              --bs-gutter-y: 0.25rem;
            }

            .g-md-2,
          .gx-md-2 {
              --bs-gutter-x: 0.5rem;
            }

            .g-md-2,
          .gy-md-2 {
              --bs-gutter-y: 0.5rem;
            }

            .g-md-3,
          .gx-md-3 {
              --bs-gutter-x: 1rem;
            }

            .g-md-3,
          .gy-md-3 {
              --bs-gutter-y: 1rem;
            }

            .g-md-4,
          .gx-md-4 {
              --bs-gutter-x: 1.5rem;
            }

            .g-md-4,
          .gy-md-4 {
              --bs-gutter-y: 1.5rem;
            }

            .g-md-5,
          .gx-md-5 {
              --bs-gutter-x: 3rem;
            }

            .g-md-5,
          .gy-md-5 {
              --bs-gutter-y: 3rem;
            }
          }
          @media (min-width: 992px) {
            .col-lg {
              flex: 1 0 0%;
            }

            .row-cols-lg-auto > * {
              flex: 0 0 auto;
              width: auto;
            }

            .row-cols-lg-1 > * {
              flex: 0 0 auto;
              width: 100%;
            }

            .row-cols-lg-2 > * {
              flex: 0 0 auto;
              width: 50%;
            }

            .row-cols-lg-3 > * {
              flex: 0 0 auto;
              width: 33.3333333333%;
            }

            .row-cols-lg-4 > * {
              flex: 0 0 auto;
              width: 25%;
            }

            .row-cols-lg-5 > * {
              flex: 0 0 auto;
              width: 20%;
            }

            .row-cols-lg-6 > * {
              flex: 0 0 auto;
              width: 16.6666666667%;
            }

            .col-lg-auto {
              flex: 0 0 auto;
              width: auto;
            }

            .col-lg-1 {
              flex: 0 0 auto;
              width: 8.33333333%;
            }

            .col-lg-2 {
              flex: 0 0 auto;
              width: 16.66666667%;
            }

            .col-lg-3 {
              flex: 0 0 auto;
              width: 25%;
            }

            .col-lg-4 {
              flex: 0 0 auto;
              width: 33.33333333%;
            }

            .col-lg-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }

            .col-lg-6 {
              flex: 0 0 auto;
              width: 50%;
            }

            .col-lg-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }

            .col-lg-8 {
              flex: 0 0 auto;
              width: 66.66666667%;
            }

            .col-lg-9 {
              flex: 0 0 auto;
              width: 75%;
            }

            .col-lg-10 {
              flex: 0 0 auto;
              width: 83.33333333%;
            }

            .col-lg-11 {
              flex: 0 0 auto;
              width: 91.66666667%;
            }

            .col-lg-12 {
              flex: 0 0 auto;
              width: 100%;
            }

            .offset-lg-0 {
              margin-left: 0;
            }

            .offset-lg-1 {
              margin-left: 8.33333333%;
            }

            .offset-lg-2 {
              margin-left: 16.66666667%;
            }

            .offset-lg-3 {
              margin-left: 25%;
            }

            .offset-lg-4 {
              margin-left: 33.33333333%;
            }

            .offset-lg-5 {
              margin-left: 41.66666667%;
            }

            .offset-lg-6 {
              margin-left: 50%;
            }

            .offset-lg-7 {
              margin-left: 58.33333333%;
            }

            .offset-lg-8 {
              margin-left: 66.66666667%;
            }

            .offset-lg-9 {
              margin-left: 75%;
            }

            .offset-lg-10 {
              margin-left: 83.33333333%;
            }

            .offset-lg-11 {
              margin-left: 91.66666667%;
            }

            .g-lg-0,
          .gx-lg-0 {
              --bs-gutter-x: 0;
            }

            .g-lg-0,
          .gy-lg-0 {
              --bs-gutter-y: 0;
            }

            .g-lg-1,
          .gx-lg-1 {
              --bs-gutter-x: 0.25rem;
            }

            .g-lg-1,
          .gy-lg-1 {
              --bs-gutter-y: 0.25rem;
            }

            .g-lg-2,
          .gx-lg-2 {
              --bs-gutter-x: 0.5rem;
            }

            .g-lg-2,
          .gy-lg-2 {
              --bs-gutter-y: 0.5rem;
            }

            .g-lg-3,
          .gx-lg-3 {
              --bs-gutter-x: 1rem;
            }

            .g-lg-3,
          .gy-lg-3 {
              --bs-gutter-y: 1rem;
            }

            .g-lg-4,
          .gx-lg-4 {
              --bs-gutter-x: 1.5rem;
            }

            .g-lg-4,
          .gy-lg-4 {
              --bs-gutter-y: 1.5rem;
            }

            .g-lg-5,
          .gx-lg-5 {
              --bs-gutter-x: 3rem;
            }

            .g-lg-5,
          .gy-lg-5 {
              --bs-gutter-y: 3rem;
            }
          }
          @media (min-width: 1200px) {
            .col-xl {
              flex: 1 0 0%;
            }

            .row-cols-xl-auto > * {
              flex: 0 0 auto;
              width: auto;
            }

            .row-cols-xl-1 > * {
              flex: 0 0 auto;
              width: 100%;
            }

            .row-cols-xl-2 > * {
              flex: 0 0 auto;
              width: 50%;
            }

            .row-cols-xl-3 > * {
              flex: 0 0 auto;
              width: 33.3333333333%;
            }

            .row-cols-xl-4 > * {
              flex: 0 0 auto;
              width: 25%;
            }

            .row-cols-xl-5 > * {
              flex: 0 0 auto;
              width: 20%;
            }

            .row-cols-xl-6 > * {
              flex: 0 0 auto;
              width: 16.6666666667%;
            }

            .col-xl-auto {
              flex: 0 0 auto;
              width: auto;
            }

            .col-xl-1 {
              flex: 0 0 auto;
              width: 8.33333333%;
            }

            .col-xl-2 {
              flex: 0 0 auto;
              width: 16.66666667%;
            }

            .col-xl-3 {
              flex: 0 0 auto;
              width: 25%;
            }

            .col-xl-4 {
              flex: 0 0 auto;
              width: 33.33333333%;
            }

            .col-xl-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }

            .col-xl-6 {
              flex: 0 0 auto;
              width: 50%;
            }

            .col-xl-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }

            .col-xl-8 {
              flex: 0 0 auto;
              width: 66.66666667%;
            }

            .col-xl-9 {
              flex: 0 0 auto;
              width: 75%;
            }

            .col-xl-10 {
              flex: 0 0 auto;
              width: 83.33333333%;
            }

            .col-xl-11 {
              flex: 0 0 auto;
              width: 91.66666667%;
            }

            .col-xl-12 {
              flex: 0 0 auto;
              width: 100%;
            }

            .offset-xl-0 {
              margin-left: 0;
            }

            .offset-xl-1 {
              margin-left: 8.33333333%;
            }

            .offset-xl-2 {
              margin-left: 16.66666667%;
            }

            .offset-xl-3 {
              margin-left: 25%;
            }

            .offset-xl-4 {
              margin-left: 33.33333333%;
            }

            .offset-xl-5 {
              margin-left: 41.66666667%;
            }

            .offset-xl-6 {
              margin-left: 50%;
            }

            .offset-xl-7 {
              margin-left: 58.33333333%;
            }

            .offset-xl-8 {
              margin-left: 66.66666667%;
            }

            .offset-xl-9 {
              margin-left: 75%;
            }

            .offset-xl-10 {
              margin-left: 83.33333333%;
            }

            .offset-xl-11 {
              margin-left: 91.66666667%;
            }

            .g-xl-0,
          .gx-xl-0 {
              --bs-gutter-x: 0;
            }

            .g-xl-0,
          .gy-xl-0 {
              --bs-gutter-y: 0;
            }

            .g-xl-1,
          .gx-xl-1 {
              --bs-gutter-x: 0.25rem;
            }

            .g-xl-1,
          .gy-xl-1 {
              --bs-gutter-y: 0.25rem;
            }

            .g-xl-2,
          .gx-xl-2 {
              --bs-gutter-x: 0.5rem;
            }

            .g-xl-2,
          .gy-xl-2 {
              --bs-gutter-y: 0.5rem;
            }

            .g-xl-3,
          .gx-xl-3 {
              --bs-gutter-x: 1rem;
            }

            .g-xl-3,
          .gy-xl-3 {
              --bs-gutter-y: 1rem;
            }

            .g-xl-4,
          .gx-xl-4 {
              --bs-gutter-x: 1.5rem;
            }

            .g-xl-4,
          .gy-xl-4 {
              --bs-gutter-y: 1.5rem;
            }

            .g-xl-5,
          .gx-xl-5 {
              --bs-gutter-x: 3rem;
            }

            .g-xl-5,
          .gy-xl-5 {
              --bs-gutter-y: 3rem;
            }
          }
          @media (min-width: 1400px) {
            .col-xxl {
              flex: 1 0 0%;
            }

            .row-cols-xxl-auto > * {
              flex: 0 0 auto;
              width: auto;
            }

            .row-cols-xxl-1 > * {
              flex: 0 0 auto;
              width: 100%;
            }

            .row-cols-xxl-2 > * {
              flex: 0 0 auto;
              width: 50%;
            }

            .row-cols-xxl-3 > * {
              flex: 0 0 auto;
              width: 33.3333333333%;
            }

            .row-cols-xxl-4 > * {
              flex: 0 0 auto;
              width: 25%;
            }

            .row-cols-xxl-5 > * {
              flex: 0 0 auto;
              width: 20%;
            }

            .row-cols-xxl-6 > * {
              flex: 0 0 auto;
              width: 16.6666666667%;
            }

            .col-xxl-auto {
              flex: 0 0 auto;
              width: auto;
            }

            .col-xxl-1 {
              flex: 0 0 auto;
              width: 8.33333333%;
            }

            .col-xxl-2 {
              flex: 0 0 auto;
              width: 16.66666667%;
            }

            .col-xxl-3 {
              flex: 0 0 auto;
              width: 25%;
            }

            .col-xxl-4 {
              flex: 0 0 auto;
              width: 33.33333333%;
            }

            .col-xxl-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }

            .col-xxl-6 {
              flex: 0 0 auto;
              width: 50%;
            }

            .col-xxl-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }

            .col-xxl-8 {
              flex: 0 0 auto;
              width: 66.66666667%;
            }

            .col-xxl-9 {
              flex: 0 0 auto;
              width: 75%;
            }

            .col-xxl-10 {
              flex: 0 0 auto;
              width: 83.33333333%;
            }

            .col-xxl-11 {
              flex: 0 0 auto;
              width: 91.66666667%;
            }

            .col-xxl-12 {
              flex: 0 0 auto;
              width: 100%;
            }

            .offset-xxl-0 {
              margin-left: 0;
            }

            .offset-xxl-1 {
              margin-left: 8.33333333%;
            }

            .offset-xxl-2 {
              margin-left: 16.66666667%;
            }

            .offset-xxl-3 {
              margin-left: 25%;
            }

            .offset-xxl-4 {
              margin-left: 33.33333333%;
            }

            .offset-xxl-5 {
              margin-left: 41.66666667%;
            }

            .offset-xxl-6 {
              margin-left: 50%;
            }

            .offset-xxl-7 {
              margin-left: 58.33333333%;
            }

            .offset-xxl-8 {
              margin-left: 66.66666667%;
            }

            .offset-xxl-9 {
              margin-left: 75%;
            }

            .offset-xxl-10 {
              margin-left: 83.33333333%;
            }

            .offset-xxl-11 {
              margin-left: 91.66666667%;
            }

            .g-xxl-0,
          .gx-xxl-0 {
              --bs-gutter-x: 0;
            }

            .g-xxl-0,
          .gy-xxl-0 {
              --bs-gutter-y: 0;
            }

            .g-xxl-1,
          .gx-xxl-1 {
              --bs-gutter-x: 0.25rem;
            }

            .g-xxl-1,
          .gy-xxl-1 {
              --bs-gutter-y: 0.25rem;
            }

            .g-xxl-2,
          .gx-xxl-2 {
              --bs-gutter-x: 0.5rem;
            }

            .g-xxl-2,
          .gy-xxl-2 {
              --bs-gutter-y: 0.5rem;
            }

            .g-xxl-3,
          .gx-xxl-3 {
              --bs-gutter-x: 1rem;
            }

            .g-xxl-3,
          .gy-xxl-3 {
              --bs-gutter-y: 1rem;
            }

            .g-xxl-4,
          .gx-xxl-4 {
              --bs-gutter-x: 1.5rem;
            }

            .g-xxl-4,
          .gy-xxl-4 {
              --bs-gutter-y: 1.5rem;
            }

            .g-xxl-5,
          .gx-xxl-5 {
              --bs-gutter-x: 3rem;
            }

            .g-xxl-5,
          .gy-xxl-5 {
              --bs-gutter-y: 3rem;
            }
          }
          .table, .dataTable-table {
            --bs-table-bg: transparent;
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: #212529;
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: #212529;
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: #212529;
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
          }
          .table > :not(caption) > * > *, .dataTable-table > :not(caption) > * > * {
            padding: 0.5rem 0.5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
          }
          .table > tbody, .dataTable-table > tbody {
            vertical-align: inherit;
          }
          .table > thead, .dataTable-table > thead {
            vertical-align: bottom;
          }
          .table > :not(:first-child), .dataTable-table > :not(:first-child) {
            border-top: 2px solid currentColor;
          }

          .caption-top {
            caption-side: top;
          }

          .table-sm > :not(caption) > * > * {
            padding: 0.25rem 0.25rem;
          }

          .table-bordered > :not(caption) > *, .dataTable-table > :not(caption) > * {
            border-width: 1px 0;
          }
          .table-bordered > :not(caption) > * > *, .dataTable-table > :not(caption) > * > * {
            border-width: 0 1px;
          }

          .table-borderless > :not(caption) > * > * {
            border-bottom-width: 0;
          }
          .table-borderless > :not(:first-child) {
            border-top-width: 0;
          }

          .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
          }

          .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color);
          }

          .table-hover > tbody > tr:hover > *, .dataTable-table > tbody > tr:hover > * {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color);
          }

          .table-primary {
            --bs-table-bg: #cfe2ff;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bacbe6;
          }

          .table-secondary {
            --bs-table-bg: #e2e3e5;
            --bs-table-striped-bg: #d7d8da;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbccce;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d1d2d4;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #cbccce;
          }

          .table-success {
            --bs-table-bg: #d1e7dd;
            --bs-table-striped-bg: #c7dbd2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bcd0c7;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c1d6cc;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bcd0c7;
          }

          .table-info {
            --bs-table-bg: #cff4fc;
            --bs-table-striped-bg: #c5e8ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #badce3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfe2e9;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #badce3;
          }

          .table-warning {
            --bs-table-bg: #fff3cd;
            --bs-table-striped-bg: #f2e7c3;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e6dbb9;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ece1be;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e6dbb9;
          }

          .table-danger {
            --bs-table-bg: #f8d7da;
            --bs-table-striped-bg: #eccccf;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfc2c4;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5c7ca;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #dfc2c4;
          }

          .table-light {
            --bs-table-bg: #f8f9fa;
            --bs-table-striped-bg: #ecedee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfe0e1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5e6e7;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #dfe0e1;
          }

          .table-dark {
            --bs-table-bg: #212529;
            --bs-table-striped-bg: #2c3034;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373b3e;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            color: #fff;
            border-color: #373b3e;
          }

          .table-responsive, .dataTable-wrapper .dataTable-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
          }

          @media (max-width: 575.98px) {
            .table-responsive-sm {
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
            }
          }
          @media (max-width: 767.98px) {
            .table-responsive-md {
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
            }
          }
          @media (max-width: 991.98px) {
            .table-responsive-lg {
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
            }
          }
          @media (max-width: 1199.98px) {
            .table-responsive-xl {
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
            }
          }
          @media (max-width: 1399.98px) {
            .table-responsive-xxl {
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
            }
          }
          .form-label {
            margin-bottom: 0.5rem;
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
          }

          .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.875rem;
          }

          .form-text {
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #6c757d;
          }

          .form-control, .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
               -moz-appearance: none;
                    appearance: none;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-control, .dataTable-input {
              transition: none;
            }
          }
          .form-control[type=file], [type=file].dataTable-input {
            overflow: hidden;
          }
          .form-control[type=file]:not(:disabled):not([readonly]), [type=file].dataTable-input:not(:disabled):not([readonly]) {
            cursor: pointer;
          }
          .form-control:focus, .dataTable-input:focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }
          .form-control::-webkit-date-and-time-value, .dataTable-input::-webkit-date-and-time-value {
            height: 1.5em;
          }
          .form-control::-moz-placeholder, .dataTable-input::-moz-placeholder {
            color: #6c757d;
            opacity: 1;
          }
          .form-control:-ms-input-placeholder, .dataTable-input:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
          }
          .form-control::placeholder, .dataTable-input::placeholder {
            color: #6c757d;
            opacity: 1;
          }
          .form-control:disabled, .dataTable-input:disabled, .form-control[readonly], [readonly].dataTable-input {
            background-color: #e9ecef;
            opacity: 1;
          }
          .form-control::-webkit-file-upload-button, .dataTable-input::-webkit-file-upload-button {
            padding: 0.375rem 0.75rem;
            margin: -0.375rem -0.75rem;
            -webkit-margin-end: 0.75rem;
                    margin-inline-end: 0.75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
          .form-control::file-selector-button, .dataTable-input::file-selector-button {
            padding: 0.375rem 0.75rem;
            margin: -0.375rem -0.75rem;
            -webkit-margin-end: 0.75rem;
                    margin-inline-end: 0.75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button, .dataTable-input::-webkit-file-upload-button {
              -webkit-transition: none;
              transition: none;
            }
            .form-control::file-selector-button, .dataTable-input::file-selector-button {
              transition: none;
            }
          }
          .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .dataTable-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3;
          }
          .form-control:hover:not(:disabled):not([readonly])::file-selector-button, .dataTable-input:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dde0e3;
          }
          .form-control::-webkit-file-upload-button, .dataTable-input::-webkit-file-upload-button {
            padding: 0.375rem 0.75rem;
            margin: -0.375rem -0.75rem;
            -webkit-margin-end: 0.75rem;
                    margin-inline-end: 0.75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button, .dataTable-input::-webkit-file-upload-button {
              -webkit-transition: none;
              transition: none;
            }
          }
          .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .dataTable-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3;
          }

          .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.375rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
          }
          .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
          }

          .form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.2rem;
          }
          .form-control-sm::-webkit-file-upload-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
                    margin-inline-end: 0.5rem;
          }
          .form-control-sm::file-selector-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
                    margin-inline-end: 0.5rem;
          }
          .form-control-sm::-webkit-file-upload-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
                    margin-inline-end: 0.5rem;
          }

          .form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            border-radius: 0.3rem;
          }
          .form-control-lg::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
                    margin-inline-end: 1rem;
          }
          .form-control-lg::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
                    margin-inline-end: 1rem;
          }
          .form-control-lg::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
                    margin-inline-end: 1rem;
          }

          textarea.form-control, textarea.dataTable-input {
            min-height: calc(1.5em + 0.75rem + 2px);
          }
          textarea.form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
          }
          textarea.form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
          }

          .form-control-color {
            width: 3rem;
            height: auto;
            padding: 0.375rem;
          }
          .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
          }
          .form-control-color::-moz-color-swatch {
            height: 1.5em;
            border-radius: 0.25rem;
          }
          .form-control-color::-webkit-color-swatch {
            height: 1.5em;
            border-radius: 0.25rem;
          }

          .form-select, .dataTable-selector {
            display: block;
            width: 100%;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
               -moz-appearance: none;
                    appearance: none;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-select, .dataTable-selector {
              transition: none;
            }
          }
          .form-select:focus, .dataTable-selector:focus {
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }
          .form-select[multiple], [multiple].dataTable-selector, .form-select[size]:not([size="1"]), [size].dataTable-selector:not([size="1"]) {
            padding-right: 0.75rem;
            background-image: none;
          }
          .form-select:disabled, .dataTable-selector:disabled {
            background-color: #e9ecef;
          }
          .form-select:-moz-focusring, .dataTable-selector:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #212529;
          }

          .form-select-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.2rem;
          }

          .form-select-lg {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
            border-radius: 0.3rem;
          }

          .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: 0.125rem;
          }
          .form-check .form-check-input {
            float: left;
            margin-left: -1.5em;
          }

          .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, 0.25);
            -webkit-appearance: none;
               -moz-appearance: none;
                    appearance: none;
            -webkit-print-color-adjust: exact;
                    color-adjust: exact;
          }
          .form-check-input[type=checkbox] {
            border-radius: 0.25em;
          }
          .form-check-input[type=radio] {
            border-radius: 50%;
          }
          .form-check-input:active {
            filter: brightness(90%);
          }
          .form-check-input:focus {
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }
          .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
          }
          .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
          }
          .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
          }
          .form-check-input[type=checkbox]:indeterminate {
            background-color: #0d6efd;
            border-color: #0d6efd;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
          }
          .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: 0.5;
          }
          .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
            opacity: 0.5;
          }

          .form-switch {
            padding-left: 2.5em;
          }
          .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            transition: background-position 0.15s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
              transition: none;
            }
          }
          .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
          }
          .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
          }

          .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
          }

          .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
          }
          .btn-check[disabled] + .btn, .btn-check:disabled + .btn {
            pointer-events: none;
            filter: none;
            opacity: 0.65;
          }

          .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
               -moz-appearance: none;
                    appearance: none;
          }
          .form-range:focus {
            outline: 0;
          }
          .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }
          .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }
          .form-range::-moz-focus-outer {
            border: 0;
          }
          .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #0d6efd;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
                    appearance: none;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
              -webkit-transition: none;
              transition: none;
            }
          }
          .form-range::-webkit-slider-thumb:active {
            background-color: #b6d4fe;
          }
          .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
          }
          .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #0d6efd;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
                 appearance: none;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
              -moz-transition: none;
              transition: none;
            }
          }
          .form-range::-moz-range-thumb:active {
            background-color: #b6d4fe;
          }
          .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
          }
          .form-range:disabled {
            pointer-events: none;
          }
          .form-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd;
          }
          .form-range:disabled::-moz-range-thumb {
            background-color: #adb5bd;
          }

          .form-floating {
            position: relative;
          }
          .form-floating > .form-control, .form-floating > .dataTable-input,
          .form-floating > .form-select,
          .form-floating > .dataTable-selector {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
          }
          .form-floating > label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .form-floating > label {
              transition: none;
            }
          }
          .form-floating > .form-control, .form-floating > .dataTable-input {
            padding: 1rem 0.75rem;
          }
          .form-floating > .form-control::-moz-placeholder, .form-floating > .dataTable-input::-moz-placeholder {
            color: transparent;
          }
          .form-floating > .form-control:-ms-input-placeholder, .form-floating > .dataTable-input:-ms-input-placeholder {
            color: transparent;
          }
          .form-floating > .form-control::placeholder, .form-floating > .dataTable-input::placeholder {
            color: transparent;
          }
          .form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .dataTable-input:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
          }
          .form-floating > .form-control:not(:-ms-input-placeholder), .form-floating > .dataTable-input:not(:-ms-input-placeholder) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
          }
          .form-floating > .form-control:focus, .form-floating > .dataTable-input:focus, .form-floating > .form-control:not(:placeholder-shown), .form-floating > .dataTable-input:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
          }
          .form-floating > .form-control:-webkit-autofill, .form-floating > .dataTable-input:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
          }
          .form-floating > .form-select, .form-floating > .dataTable-selector {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
          }
          .form-floating > .form-control:not(:-moz-placeholder-shown) ~ label, .form-floating > .dataTable-input:not(:-moz-placeholder-shown) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          }
          .form-floating > .form-control:not(:-ms-input-placeholder) ~ label, .form-floating > .dataTable-input:not(:-ms-input-placeholder) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          }
          .form-floating > .form-control:focus ~ label, .form-floating > .dataTable-input:focus ~ label,
          .form-floating > .form-control:not(:placeholder-shown) ~ label,
          .form-floating > .dataTable-input:not(:placeholder-shown) ~ label,
          .form-floating > .form-select ~ label,
          .form-floating > .dataTable-selector ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          }
          .form-floating > .form-control:-webkit-autofill ~ label, .form-floating > .dataTable-input:-webkit-autofill ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          }

          .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
          }
          .input-group > .form-control, .input-group > .dataTable-input,
          .input-group > .form-select,
          .input-group > .dataTable-selector {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
          }
          .input-group > .form-control:focus, .input-group > .dataTable-input:focus,
          .input-group > .form-select:focus,
          .input-group > .dataTable-selector:focus {
            z-index: 3;
          }
          .input-group .btn {
            position: relative;
            z-index: 2;
          }
          .input-group .btn:focus {
            z-index: 3;
          }

          .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
          }

          .input-group-lg > .form-control, .input-group-lg > .dataTable-input,
          .input-group-lg > .form-select,
          .input-group-lg > .dataTable-selector,
          .input-group-lg > .input-group-text,
          .input-group-lg > .btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            border-radius: 0.3rem;
          }

          .input-group-sm > .form-control, .input-group-sm > .dataTable-input,
          .input-group-sm > .form-select,
          .input-group-sm > .dataTable-selector,
          .input-group-sm > .input-group-text,
          .input-group-sm > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.2rem;
          }

          .input-group-lg > .form-select, .input-group-lg > .dataTable-selector,
          .input-group-sm > .form-select,
          .input-group-sm > .dataTable-selector {
            padding-right: 3rem;
          }

          .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
          .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
          }
          .input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
          .input-group.has-validation > .dropdown-toggle:nth-last-child(n+4) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
          }
          .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
          }

          .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #198754;
          }

          .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(25, 135, 84, 0.9);
            border-radius: 0.25rem;
          }

          .was-validated :valid ~ .valid-feedback,
          .was-validated :valid ~ .valid-tooltip,
          .is-valid ~ .valid-feedback,
          .is-valid ~ .valid-tooltip {
            display: block;
          }

          .was-validated .form-control:valid, .was-validated .dataTable-input:valid, .form-control.is-valid, .is-valid.dataTable-input {
            border-color: #198754;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          }
          .was-validated .form-control:valid:focus, .was-validated .dataTable-input:valid:focus, .form-control.is-valid:focus, .is-valid.dataTable-input:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
          }

          .was-validated textarea.form-control:valid, .was-validated textarea.dataTable-input:valid, textarea.form-control.is-valid, textarea.is-valid.dataTable-input {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
          }

          .was-validated .form-select:valid, .was-validated .dataTable-selector:valid, .form-select.is-valid, .is-valid.dataTable-selector {
            border-color: #198754;
          }
          .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .dataTable-selector:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .was-validated .dataTable-selector:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .is-valid.dataTable-selector:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"], .is-valid.dataTable-selector:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          }
          .was-validated .form-select:valid:focus, .was-validated .dataTable-selector:valid:focus, .form-select.is-valid:focus, .is-valid.dataTable-selector:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
          }

          .was-validated .form-check-input:valid, .form-check-input.is-valid {
            border-color: #198754;
          }
          .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
            background-color: #198754;
          }
          .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
          }
          .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #198754;
          }

          .form-check-inline .form-check-input ~ .valid-feedback {
            margin-left: 0.5em;
          }

          .was-validated .input-group .form-control:valid, .was-validated .input-group .dataTable-input:valid, .input-group .form-control.is-valid, .input-group .is-valid.dataTable-input,
          .was-validated .input-group .form-select:valid,
          .was-validated .input-group .dataTable-selector:valid,
          .input-group .form-select.is-valid,
          .input-group .is-valid.dataTable-selector {
            z-index: 1;
          }
          .was-validated .input-group .form-control:valid:focus, .was-validated .input-group .dataTable-input:valid:focus, .input-group .form-control.is-valid:focus, .input-group .is-valid.dataTable-input:focus,
          .was-validated .input-group .form-select:valid:focus,
          .was-validated .input-group .dataTable-selector:valid:focus,
          .input-group .form-select.is-valid:focus,
          .input-group .is-valid.dataTable-selector:focus {
            z-index: 3;
          }

          .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
          }

          .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(220, 53, 69, 0.9);
            border-radius: 0.25rem;
          }

          .was-validated :invalid ~ .invalid-feedback,
          .was-validated :invalid ~ .invalid-tooltip,
          .is-invalid ~ .invalid-feedback,
          .is-invalid ~ .invalid-tooltip {
            display: block;
          }

          .was-validated .form-control:invalid, .was-validated .dataTable-input:invalid, .form-control.is-invalid, .is-invalid.dataTable-input {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          }
          .was-validated .form-control:invalid:focus, .was-validated .dataTable-input:invalid:focus, .form-control.is-invalid:focus, .is-invalid.dataTable-input:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
          }

          .was-validated textarea.form-control:invalid, .was-validated textarea.dataTable-input:invalid, textarea.form-control.is-invalid, textarea.is-invalid.dataTable-input {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
          }

          .was-validated .form-select:invalid, .was-validated .dataTable-selector:invalid, .form-select.is-invalid, .is-invalid.dataTable-selector {
            border-color: #dc3545;
          }
          .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .dataTable-selector:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .was-validated .dataTable-selector:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .is-invalid.dataTable-selector:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"], .is-invalid.dataTable-selector:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          }
          .was-validated .form-select:invalid:focus, .was-validated .dataTable-selector:invalid:focus, .form-select.is-invalid:focus, .is-invalid.dataTable-selector:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
          }

          .was-validated .form-check-input:invalid, .form-check-input.is-invalid {
            border-color: #dc3545;
          }
          .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
            background-color: #dc3545;
          }
          .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
          }
          .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545;
          }

          .form-check-inline .form-check-input ~ .invalid-feedback {
            margin-left: 0.5em;
          }

          .was-validated .input-group .form-control:invalid, .was-validated .input-group .dataTable-input:invalid, .input-group .form-control.is-invalid, .input-group .is-invalid.dataTable-input,
          .was-validated .input-group .form-select:invalid,
          .was-validated .input-group .dataTable-selector:invalid,
          .input-group .form-select.is-invalid,
          .input-group .is-invalid.dataTable-selector {
            z-index: 2;
          }
          .was-validated .input-group .form-control:invalid:focus, .was-validated .input-group .dataTable-input:invalid:focus, .input-group .form-control.is-invalid:focus, .input-group .is-invalid.dataTable-input:focus,
          .was-validated .input-group .form-select:invalid:focus,
          .was-validated .input-group .dataTable-selector:invalid:focus,
          .input-group .form-select.is-invalid:focus,
          .input-group .is-invalid.dataTable-selector:focus {
            z-index: 3;
          }

          .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
               -moz-user-select: none;
                -ms-user-select: none;
                    user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }


          .pagination, .dataTable-pagination ul {
            display: flex;
            padding-left: 0;
            list-style: none;
          }

          .page-link, .dataTable-pagination a {
            position: relative;
            display: block;
            color: #0d6efd;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #dee2e6;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
          @media (prefers-reduced-motion: reduce) {
            .page-link, .dataTable-pagination a {
              transition: none;
            }
          }
          .page-link:hover, .dataTable-pagination a:hover {
            z-index: 2;
            color: #0a58ca;
            background-color: #e9ecef;
            border-color: #dee2e6;
          }
          .page-link:focus, .dataTable-pagination a:focus {
            z-index: 3;
            color: #0a58ca;
            background-color: #e9ecef;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
          }

          .page-item:not(:first-child) .page-link, .page-item:not(:first-child) .dataTable-pagination a, .dataTable-pagination .page-item:not(:first-child) a, .dataTable-pagination li:not(:first-child) .page-link, .dataTable-pagination li:not(:first-child) a {
            margin-left: -1px;
          }
          .page-item.active .page-link, .page-item.active .dataTable-pagination a, .dataTable-pagination .page-item.active a, .dataTable-pagination li.active .page-link, .dataTable-pagination li.active a {
            z-index: 3;
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
          }
          .page-item.disabled .page-link, .page-item.disabled .dataTable-pagination a, .dataTable-pagination .page-item.disabled a, .dataTable-pagination li.disabled .page-link, .dataTable-pagination li.disabled a {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
          }

          .page-link, .dataTable-pagination a {
            padding: 0.375rem 0.75rem;
          }

          .page-item:first-child .page-link, .page-item:first-child .dataTable-pagination a, .dataTable-pagination .page-item:first-child a, .dataTable-pagination li:first-child .page-link, .dataTable-pagination li:first-child a {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
          }
          .page-item:last-child .page-link, .page-item:last-child .dataTable-pagination a, .dataTable-pagination .page-item:last-child a, .dataTable-pagination li:last-child .page-link, .dataTable-pagination li:last-child a {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
          }

          .pagination-lg .page-link, .pagination-lg .dataTable-pagination a, .dataTable-pagination .pagination-lg a {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
          }
          .pagination-lg .page-item:first-child .page-link, .pagination-lg .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:first-child a, .pagination-lg .dataTable-pagination li:first-child .page-link, .pagination-lg .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-lg li:first-child .page-link, .dataTable-pagination .pagination-lg li:first-child a {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
          }
          .pagination-lg .page-item:last-child .page-link, .pagination-lg .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:last-child a, .pagination-lg .dataTable-pagination li:last-child .page-link, .pagination-lg .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-lg li:last-child .page-link, .dataTable-pagination .pagination-lg li:last-child a {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
          }

          .pagination-sm .page-link, .pagination-sm .dataTable-pagination a, .dataTable-pagination .pagination-sm a {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
          }
          .pagination-sm .page-item:first-child .page-link, .pagination-sm .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:first-child a, .pagination-sm .dataTable-pagination li:first-child .page-link, .pagination-sm .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-sm li:first-child .page-link, .dataTable-pagination .pagination-sm li:first-child a {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
          }
          .pagination-sm .page-item:last-child .page-link, .pagination-sm .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:last-child a, .pagination-sm .dataTable-pagination li:last-child .page-link, .pagination-sm .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-sm li:last-child .page-link, .dataTable-pagination .pagination-sm li:last-child a {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
          }

          .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
          }
          .badge:empty {
            display: none;
          }

          .btn .badge {
            position: relative;
            top: -1px;
          }

          .alert {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
          }

          .alert-heading {
            color: inherit;
          }

          .alert-link {
            font-weight: 700;
          }

          .alert-dismissible {
            padding-right: 3rem;
          }

          card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
          }
          .card > hr {
            margin-right: 0;
            margin-left: 0;
          }
          .card > .list-group {
            border-top: inherit;
            border-bottom: inherit;
          }
          .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
          }
          .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
          }
          .card > .card-header + .list-group,
          .card > .list-group + .card-footer {
            border-top: 0;
          }
          .card-header{
            background-color: rgba(0, 0, 0, 0.7);
            font-size: 1vw;
          }
          .card-header select{
            width: 10vw;
            border-radius: 30px;
            outline: none;
          }
          .card-header label{
            display: inline-block;
            height: 4vh;
            margin-left: 8%;
            margin-right: 8%;
            border: none;
          }
          .card-header input[type=text]{
            border-radius: 35px;
            border:rgba(0, 0, 0, 1.0);
          }
          .card-body {
            flex: 1 1 auto;
            padding: 1rem 1rem;
          }

          .card-title {
            margin-bottom: 0.5rem;
          }

          .card-subtitle {
            margin-top: -0.25rem;
            margin-bottom: 0;
          }

          .card-text:last-child {
            margin-bottom: 0;
          }

          .card-link + .card-link {
            margin-left: 1rem;
          }

          .card-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
          }
          .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
          }

          .card-footer {
            padding: 0.5rem 1rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 1px solid rgba(0, 0, 0, 0.125);
          }
          .card-footer:last-child {
            border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
          }

          .card-header-tabs {
            margin-right: -0.5rem;
            margin-bottom: -0.5rem;
            margin-left: -0.5rem;
            border-bottom: 0;
          }

          .card-header-pills {
            margin-right: -0.5rem;
            margin-left: -0.5rem;
          }


          .dataTable-wrapper .dataTable-container {
            font-size: 0.875rem;
          }

          .dataTable-wrapper.no-header .dataTable-container {
            border-top: none;
          }

          .dataTable-wrapper.no-footer .dataTable-container {
            border-bottom: none;
          }

          .dataTable-top {
            padding: 0 0 1rem;
          }

          .dataTable-bottom {
            padding: 0;
          }

          .dataTable-top > nav:first-child,
          .dataTable-top > div:first-child,
          .dataTable-bottom > nav:first-child,
          .dataTable-bottom > div:first-child {
            float: left;
          }

          .dataTable-top > nav:last-child,
          .dataTable-top > div:last-child,
          .dataTable-bottom > nav:last-child,
          .dataTable-bottom > div:last-child {
            float: right;
          }

          .dataTable-selector {
            width: auto;
            display: inline-block;
            padding-left: 1.125rem;
            padding-right: 2.125rem;
            margin-right: 0.25rem;
          }

          .dataTable-info {
            margin: 7px 0;
          }

          /* PAGER */
          .dataTable-pagination a:hover {
            background-color: #e9ecef;
          }

          .dataTable-pagination .active a,
          .dataTable-pagination .active a:focus,
          .dataTable-pagination .active a:hover {
            background-color: #0d6efd;
          }

          .dataTable-pagination .ellipsis a,
          .dataTable-pagination .disabled a,
          .dataTable-pagination .disabled a:focus,
          .dataTable-pagination .disabled a:hover {
            cursor: not-allowed;
          }

          .dataTable-pagination .disabled a,
          .dataTable-pagination .disabled a:focus,
          .dataTable-pagination .disabled a:hover {
            cursor: not-allowed;
            opacity: 0.4;
          }

          .dataTable-pagination .pager a {
            font-weight: bold;
          }

          /* TABLE */
          .dataTable-table {
            border-collapse: collapse;
          }

          .dataTable-table > tbody > tr > td,
          .dataTable-table > tbody > tr > th,
          .dataTable-table > tfoot > tr > td,
          .dataTable-table > tfoot > tr > th,
          .dataTable-table > thead > tr > td,
          .dataTable-table > thead > tr > th {
            vertical-align: top;
            padding: 0.5rem 0.5rem;
          }

          .dataTable-table > thead > tr > th {
            vertical-align: bottom;
            text-align: left;
            border-bottom: none;
          }

          .dataTable-table > tfoot > tr > th {
            vertical-align: bottom;
            text-align: left;
          }

          .dataTable-table th {
            vertical-align: bottom;
            text-align: left;
            background-color:#fff;
          }

          .dataTable-table th a {
            text-decoration: none;
            color: inherit;
          }

          .dataTable-sorter {
            display: inline-block;
            height: 100%;
            position: relative;
            width: 100%;
            padding-right: 1rem;
          }

          .dataTable-sorter::before,
          .dataTable-sorter::after {
            content: "";
            height: 0;
            width: 0;
            position: absolute;
            right: 4px;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            opacity: 0.2;
          }

          .dataTable-sorter::before {
            bottom: 4px;
          }

          .dataTable-sorter::after {
            top: 0px;
          }

          .asc .dataTable-sorter::after,
          .desc .dataTable-sorter::before {
            opacity: 0.6;
          }

          .dataTables-empty {
            text-align: center;
          }

          .dataTable-top::after,
          .dataTable-bottom::after {
            clear: both;
            content: " ";
            display: table;
          }

          .btn-datatable {
            height: 20px !important;
            width: 20px !important;
            font-size: 0.75rem;
            border-radius: 0.25rem !important;
          }
  </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
    <body class="sb-nav-fixed">
    <nav class="navbar">
       <div class="clg-logo">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Abel">
    <img src="poly.png" alt="altlogo">
</div>
        <ul class="menu-li">
            <li><a href="http://127.0.0.1:5501/Registration.html">STUDENT REGISTRATION</a></li>
            <li><a href="http://127.0.0.1:5501/index.html">DEPARTMENTS</a></li>
            <li><a href="http://127.0.0.1:5501/marks-reg.html">MARKS REGISTRATION</a></li>
            <li><a href="http://localhost/server/adminpage.php">ADMIN</a></li>
        </ul>
    </nav>
    <section>
        <h1>Admin</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis deleniti labore ipsam assumenda nemo ipsum repellendus similique ad iure ipsa aut iusto quisquam quibusdam ex, dolore, veniam harum. Magnam, modi.</p>
    </section>
                <main>
                  <form method="POST" action="http://localhost/server/update_batch.php">
                <div class="update_batch" id="toggle1">
                  <label>Department:
                                  <select class="dmen1" name="course">
                                      <option value="" selected disabled hidden>Choose here</option>
                                      <option value="CS">Computer Science & Engineering</option>
                                      <option value="Mech">Mechanical Engineering</option>
                                      <option value="CV">Civil Engineering</option>
                                      <option value="AT">AutoMobile Engineering</option>
                                      <option value="EC">Electronics & Communication Engineering</option>
                                      <option value="EE">Electrical & Electronics Engineering</option>
                                    </select>
                                  </label>
                    <label>Batch:
                                  <select name="batch_id">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                  </select>
                    </label>
                    <label>Update to:
                                  <select name="batch_update_id">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="first">I</option>
                                    <option value="seco">II</option>
                                    <option value="thir">III</option>
                                    <option value="fourt">IV</option>
                                    <option value="fift">V</option>
                                    <option value="sixt">VI</option>
                                    <option value="Legacy">Legacy</option>
                                  </select>Year:
                                  <select name="batch_update_yr">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="1st">I</option>
                                    <option value="2nd">II</option>
                                    <option value="3rd">III</option>
                                    <option value="Legacy">Legacy</option>
                                  </select>
                    </label><br/>
                    <input type="submit" name="Update Batch">
                    </form>
                </div>
                <form method="POST">
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                              <div class="input-label">
                                <label>Department:
                                  <select id="course1" class="dmen1" name="course">
                                      <option value="" selected disabled hidden>Choose here</option>
                                      <option value="CS">CS&Engg</option>
                                      <option value="ME">Mechanical</option>
                                      <option value="CV">Civil</option>
                                      <option value="AT">AutoMobile</option>
                                      <option value="EC">Electronics&Communication</option>
                                      <option value="EE">Electrical&Electronics</option>
                                    </select></label>
                                <label>SEM:
                                  <select  id="course2" name="sem" onchange="this.form.load()">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="first">I</option>
                                    <option value="second">II</option>
                                    <option value="third">III</option>
                                    <option value="fourth">IV</option>
                                    <option value="fifth">V</option>
                                    <option value="sixth">VI</option>
                                  </select></label>
                                  Registered Number:<input type="text" name="regi-num"/></label>
                                <input type="submit" value="Submit"/>
                              </div>
                            </div>
                            <div class="card-body">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                </div>
                                <div class="dataTable-container">
                                        <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                        <tr><th data-sortable="">Name</th>
                                            <th data-sortable="">Registered Number</th>
                                            <th data-sortable="">Course</th>
                                            <th data-sortable="">Sem</th>
                                            <th data-sortable="">Year</th>
                                            <th data-sortable="">Edit</th>
                                            <th data-sortable="">Delete</th>
                                            <th data-sortable="">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody id="people">
                                        <?php
                                            include 'dbConfig.php';
                                            include 'connect.php';
                                            error_reporting(0);
                                            $regno=$_POST['regi-num'];
                                            $cour=$_POST['course'];
                                            $sem=$_POST['sem'];
                                            $query="SELECT * FROM  auto1 WHERE course='$cour' AND sem='$sem'";
                                            $query_run=mysqli_query($conn,$query);
                                            $check=mysqli_num_rows($query_run);

                                        if($check>0){
                                            while($row=mysqli_fetch_array($query_run))
                                            {
                                                ?>    
                                        <tr id="myTr">
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['regno'];?></td>
                                            <td><?php echo $row['course'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><center><a href="edit_details1.php?id=<?php echo $row['regno'];?>&sem=<?php echo $row['sem']; ?>"><input type="button"  class="green_button" name="Edit" value="Edit"></a>
                                              <input type="hidden" name="ed-id" value="<?php echo $row['regno'];?>"></center></td>
                                            <td><center><a href="javascript:void(0)" class="delete_btn_ajax"><input type="button" class="red_button" name="Delete" value="Delete">
                                            <input type="hidden" class="delete_id_value" value="<?php echo $row['regno'];?>"></a></center></td>
                                            <td><center><input type="button" class="grey_button"name="Message" value="Message"></center></td>
                                            </tr>
                                            </tbody>
                                            <script type="text/javascript">
                                              var1=document.getElementByID(semsub).option.value;
                                            </script>
                                                 <?php
                                                     }
                                                 }

                                                 else{
                                                 ?>
                                                 <tr>
                                                  <td colspan="7">No Records</td>
                                                </tr>
                                                <?php 
                                              }
                                            
                                                 ?>
                                </table>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </main>
                
                <script type="text/javascript">
                  $(document).ready(function () {

                    $('.delete_btn_ajax').click(function (e) {
                    e.preventDefault();

                     var deleteid= $(this).closest("tr").find('.delete_id_value').val();
                     swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this Record!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                              type:"POST",
                              url:"delete_rec.php",
                              data:{
                                "delete_btn_set":1,
                                "delete_id":deleteid,
                              },
                              success: function (response) {
                                swal("Data deleted Successfully!",{
                                  icon: "success",
                                }).then((result) => {
                                  location.reload;
                                });
                              }

                            
                          });
                        } 
                      });
                  });

                  });
                </script>
                <script type="text/javascript">
                  let btn = document.getElementByID('toggle_btn1');
                  let div = document.getElementByID('toggle1');

                  btn.addEventListener('click', () =>{
                    if(div.style.display === 'none'){
                      div.style.display ='block';
                    }
                    else{
                      div.style.display ='none';
                    }
                  });
                </script>
            </div>
        </div>
</body>
</html>