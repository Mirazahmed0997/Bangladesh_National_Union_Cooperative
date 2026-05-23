<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বাংলাদেশ জাতীয় সমবায় ইউনিয়ন | অফিসিয়াল ওয়েবসাইট</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        body {
            background: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .sticky-header-container {
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 999;
            background: #fff;
        }

        header {
            width: 100%;
            padding: 0 !important;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: auto;
            padding: 0 15px;
        }

        .alert {
            width: 95%;
            max-width: 600px;
            margin: 10px auto;
            padding: 12px 15px;
            border-radius: 5px;
            font-size: 15px;
            text-align: center;
        }

        @media (max-width: 992px) {

            body {
                font-size: 15px;
            }

            .container {
                padding: 0 12px;
            }
        }

        @media (max-width: 768px) {

            body {
                font-size: 14px;
            }

            .sticky-header-container {
                position: relative;
            }

            .alert {
                font-size: 14px;
                padding: 10px;
            }

            header {
                width: 100%;
            }
        }

        @media (max-width: 480px) {

            body {
                font-size: 13px;
            }

            .container {
                padding: 0 10px;
            }

            .alert {
                width: 98%;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <?php if ($this->session->flashdata('login_success')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('login_success'); ?>
        </div>
    <?php endif; ?>

    <!-- Header -->
    <?php $this->load->view('site/pages/home_page_header'); ?>

    <!-- Sticky Navbar -->
    <div class="sticky-header-container">
        <header>
            <?php $this->load->view('site/pages/navbar'); ?>
        </header>
    </div>

    <!-- News -->
    <?php $this->load->view('site/pages/news_headline'); ?>

</body>

</html>