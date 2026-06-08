<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>দৈনিক জমা খরচ হিসাব</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="http://localhost/sbcl_online/assets/backend/css/page_print.css">

    <style>
        body {
            font-family: "SolaimanLipi", "Noto Sans Bengali", sans-serif;
            background: #fff;
            font-size: 13px;
        }

        .container-fluid {
            width: 83% !important;
        }

        .header {
            background-color: #3BAAB7;
            padding: 10px;
            font-weight: bold;
            border-radius: 10px;
        }

        .card-header {
            background-color: #3BAAB7;
            min-width: 250px;
            width: fit-content;
            border-radius: 10px !important;
            border: 1px solid #000;
        }

        .report-info {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            font-size: 12px;
        }

        .table-report {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .table-report th,
        .table-report td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
            vertical-align: middle;
        }

        .table-report thead th {
            background-color: #212529;
            color: #fff;
            font-weight: bold;
        }

        .table-report tbody td {
            height: 24px;
        }

        .sl-col {
            width: 50px;
        }

        .number-col {
            width: 100px;
        }

        .footer-note {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
        }

        .signature-section {
            margin-top: 70px;
        }

        .signature-line {
            border-top: 1px solid #000;
            width: 170px;
            margin: 0 auto 8px;
        }

        .signature-title {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }


        @media print {

            @page {
                size: A4 portrait;
                margin: 10mm;
            }

            body {
                margin: 0 !important;
                padding: 0 !important;
            }

           
            .container-fluid {
                width: 100% !important;
                padding: 0 !important;
            }

            .btn,
            form {
                display: none !important;
            }

            .header,
            .card-header,
            .table-report thead th {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .table-report {
                width: 100%;
                border-collapse: collapse;
            }

            .table-report thead {
                display: table-header-group;
            }

            .table-report tr {
                page-break-inside: avoid;
            }

            .footer-note,
            .signature-section {
                page-break-inside: avoid;
                break-inside: avoid;
            }   
        }
    </style>
</head>

<body>

    <div class="container-fluid p-3 content-wrapper">

        <div class="header">
            <div class="row">

                <div class="col-12">
                    <h3 class="text-center">
                        বাংলাদেশ জাতীয় সমবায় ইউনিয়ন
                    </h3>

                    <div class="text-center">
                        নিবন্ধন নম্বর: ৩৪, তারিখ ১৬.৬.১৯৬১ খ্রি:
                    </div>

                    <div class="text-center">
                        ঠিকানা: সমবায় ব্যাংক ভবন (৮ম তলা), ৯/ডি, মতিঝিল বা/এ, ঢাকা-১০০০।
                    </div>

                    <div class="text-center">
                        ই-মেইলঃ bjsu61@gmail.com, মোবাইলঃ ০১৭০৯৬৫৩৫৯৯
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-3">
            <div class="card-header mx-auto p-2">
                <h5 class="mb-0">দৈনিক জমা খরচ হিসাব</h5>
            </div>
        </div>

        <div class="report-info">
            <div>
                সময়কাল: ২০২৫-০১-০১ থেকে ২০২৫-০১-৩১
            </div>

            <div>
                 <button onclick="window.print()" class="btn btn-success btn-sm ">
                    <i class="fas fa-print"></i> Print
                </button>
                প্রিন্ট সময়: ১১:০৫:২৩
            </div>
        </div>

        <table class="table-report">

            <thead>
                <tr>
                    <th class="sl-col">ক্র নং</th>
                    <th class="sl-col">তারিখ</th>
                    <th>বিবরণ</th>
                    <th class="sl-col">ভাউচার<br>নম্বর</th>
                    <th class="sl-col">জমা</th>
                    <th class="sl-col">খরচ</th>
                    <th class="sl-col">স্থিতি</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>01/04/26</td>
                    <td class="text-start">সদস্য জমা</td>
                    <td>1250</td>
                    <td>1320</td>
                    <td>0</td>
                    <td>1320</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td >02/04/26</td>
                    <td class="text-start">অফিস ব্যয়</td>
                    <td>1251</td>
                    <td>0</td>
                    <td>350</td>
                    <td>970</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>03/04/26</td>
                    <td class="text-start">সঞ্চয় জমা</td>
                    <td>1252</td>
                    <td>980</td>
                    <td>0</td>
                    <td>1950</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>04/04/26</td>
                    <td class="text-start">বিদ্যুৎ বিল</td>
                    <td>1253</td>
                    <td>0</td>
                    <td>500</td>
                    <td>1450</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>05/04/26</td>
                    <td class="text-start">ঋণ আদায়</td>
                    <td>1254</td>
                    <td>2200</td>
                    <td>0</td>
                    <td>3650</td>
                </tr>

            </tbody>

        </table>


        <div class="row signature-section text-center">

            <div class="col-4">
                <div class="signature-line"></div>
                <p class="signature-title m-0">অভ্ভন্তরীন হিসাব নিরীক্ষক</p>
                <div class="signature-title m-0">ব্যবস্থাপনা কমিটি</div>
            </div>

            <div class="col-4">
                <div class="signature-line"></div>
                <div class="signature-title">কোষাধক্ষ</div>
                <div class="signature-title m-0">ব্যবস্থাপনা কমিটি</div>
            </div>

            <div class="col-4">
                <div class="signature-line"></div>
                <div class="signature-title">ব্যবস্থাপক</div>
            </div>

        </div>

    </div>

</body>

</html>