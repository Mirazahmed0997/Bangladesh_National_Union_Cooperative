<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive 3 Section Layout</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html,
        body {
            width: 100%;
            overflow-x: hidden;
            background: #f2f2f2;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: auto;
            display: flex;
            gap: 20px;
            padding: 20px;
            align-items: stretch;
        }

        /* LEFT SECTION */
        .left {
            flex: 1;
            min-width: 260px;
            background: #fff;
            overflow: hidden;
            border-radius: 6px;
        }

        .left h3 {
            background: purple;
            color: #fff;
            padding: 12px;
            font-size: 16px;
        }

        .notice {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
        }

        .notice span {
            color: #007bff;
            font-size: 12px;
        }

        /* CENTER SECTION */
        .center {
            flex: 2;
            min-width: 300px;
            background: #fff;
            overflow: hidden;
            border-radius: 6px;
        }

        .center img,
        .center video,
        .center iframe {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* RIGHT SECTION */
        .right {
            flex: 1;
            min-width: 260px;
            background: #fff;
            text-align: center;
            border-radius: 6px;
            overflow: hidden;
        }

        .right h3 {
            background: purple;
            color: #fff;
            padding: 12px;
            font-size: 16px;
        }

        .profile {
            padding: 15px;
        }

        .profile img {
            width: 120px;
            height: 140px;
            object-fit: cover;
            margin: auto;
        }

        .profile h4 {
            margin: 10px 0;
            font-size: 15px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background: teal;
            color: #fff;
            text-decoration: none;
            margin-top: 10px;
            font-size: 14px;
        }

        /* LARGE TABLET */
        @media (max-width: 992px) {

            .container {
                flex-wrap: wrap;
                padding: 15px;
            }

            .left,
            .right {
                flex: 1 1 calc(50% - 10px);
            }

            .center {
                flex: 1 1 100%;
                order: -1;
            }
        }

        /* TABLET */
        @media (max-width: 768px) {

            .container {
                gap: 15px;
                padding: 12px;
            }

            .left,
            .center,
            .right {
                flex: 1 1 100%;
                min-width: 100%;
            }

            .notice {
                font-size: 13px;
            }

            .profile img {
                width: 100px;
                height: 120px;
            }
        }

        /* MOBILE */
        @media (max-width: 480px) {

            .container {
                padding: 10px;
                gap: 12px;
            }

            .left h3,
            .right h3 {
                font-size: 14px;
                padding: 10px;
            }

            .notice {
                font-size: 12px;
                padding: 10px;
                flex-direction: column;
                align-items: flex-start;
            }

            .notice span {
                font-size: 11px;
            }

            .profile {
                padding: 12px;
            }

            .profile h4 {
                font-size: 14px;
            }

            .btn {
                width: 100%;
                text-align: center;
                padding: 10px;
                font-size: 13px;
            }
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- LEFT -->
        <div class="left">
            <?php $this->load->view('site/pages/notice&current_projects/notice'); ?>
        </div>

        <!-- CENTER -->
        <div class="center">
            <?php $this->load->view('site/pages/slider'); ?>
        </div>

        <!-- RIGHT -->
        <div class="right">
            <?php $this->load->view('site/pages/notice&current_projects/current_projects'); ?>
        </div>

    </div>

</body>

</html>