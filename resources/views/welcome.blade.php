<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Web9 Agency</title>

    <link href="{{ asset('assets/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" media="all">

    <style id="" media="all">
        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiAyp8kv8JHgFVrJJLmE0tDMPKzSQ.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiAyp8kv8JHgFVrJJLmE0tMMPKzSQ.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiAyp8kv8JHgFVrJJLmE0tCMPI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmv1pVFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmv1pVGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmv1pVF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm21lVFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm21lVGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm21lVF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrJJLucXtAKPY.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrJJLufntAKPY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrJJLucHtA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmg1hVFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmg1hVGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmg1hVF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmr19VFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmr19VGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmr19VF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmy15VFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmy15VGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmy15VF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm111VFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm111VGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm111VF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm81xVFteOcEg.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm81xVGdeOcEg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm81xVF9eO.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrLPTucXtAKPY.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrLPTufntAKPY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 100;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrLPTucHtA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLFj_Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLFj_Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLFj_Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDD4Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDD4Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLBT5Z11lFc-K.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLBT5Z1JlFc-K.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            src: url(/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLBT5Z1xlFQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" media="all">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading">
                    <div class="card-body">
                        <h2 class="title" style="color:black">Pack sizes Available</h2>

                        @foreach($packs as $pack)
                        <div class="row">
                            <div class="col-6">

                                <div class="card">
                                    <img class="card-img-top" src="https://5.imimg.com/data5/LG/AM/OW/SELLER-31619481/plain-t-shirt-500x500.jpeg" alt="shirt image cap" width="100" height="100">
                                    <span>
                                        {{ $pack->pack_size }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    {{ $packs->links() }}
                </div>
                <div class="card-body">
                    <h2 class="title">Order Shirts</h2>
                    <!-- @if($errors->any())
                    {!! implode('', $errors->all('<p style="color:red">:message</p>')) !!}
                    @endif -->
                    <form action="{{ route('getpacksize') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="No. of t-Shirts" name="number_of_tshirts" autocomplete="off" required>

                        </div>
                        @error('number_of_tshirts')
                        <p class="error" style="color:red">{{ $message }}</p>
                        @enderror

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    @if(session()->has('message'))
                    <div style="color:green" class="p-t-10">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/global.js') }}"></script>

</body>

</html>