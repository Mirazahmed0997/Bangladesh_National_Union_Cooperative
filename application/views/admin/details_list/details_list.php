<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>স্টোরে এর পণ্যের ডিটেলস লিস্ট</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
            /* color: white; */
            font-weight: bold;
            border-radius: 10px;
        }

        .card-header {
            background-color: #3BAAB7;
            width: 25%;
            /* color: white; */
            border-radius: 10px !important;
            border: 1px solid black;

        }

        .report-header {
            text-align: center;
            margin-bottom: 10px;
            line-height: 1.4;
            background-color: #3BAAB7;
            padding: 20px;

        }

        .report-header h4,
        .report-header h5,
        .report-header p {
            margin: 0;
        }

        .report-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 12px;
        }

        .thead-dark td {
            background-color: #000;
            color: #fff;
        }

        .table-report {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .table-report th,
        .table-report td {
            border: 1px solid #000;
            padding: 2px 4px;
            text-align: center;
            vertical-align: middle;
        }

        .table-report thead th {
            font-weight: 700;
            background-color: #212529;
            color: white;
            border: 1px solid #383F45;
        }

        .table-report tbody td {
            height: 22px;
        }

        .sl-col {
            width: 45px;
        }

        .name-col {

            text-align: left !important;
        }

        .number-col {
            width: 90px;
        }

        .footer-note {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
        }

        @media print {
            body {
                margin: 0;
            }

            .container-fluid {
                width: 100%;
            }

            form {
                display: none;
            }

            .container-fluid {
                width: 100% !important;

            }

            .table-report thead th {
                color: black;
            }

            .table-report tbody td {
                color: black;
            }

            .btn {
                display: none;
            }

        }
    </style>
</head>

<body>

    <div class="container-fluid p-3 content-wrapper ">

        <form method="get" action="">
            <div class="row g-2 mb-3 align-items-center">
                <div class="col-md-auto">
                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i> পণ্য
                        খুঁজুন</button>
                </div>
                <div class="col-md">
                    <input type="text" name="" value="" class="form-control" placeholder="পণ্যের নাম">
                </div>
                <div class="col-md">
                    <input type="text" name="" class="form-control" placeholder="কোড নং">
                </div>


            </div>

            <div class="row g-2 align-items-center mb-3">
                <div class="col-md-auto">
                    <button type="button" class="btn btn-primary"><i class="fas fa-calendar-alt"></i> তারিখ
                        নির্বাচন</button>
                </div>
                <div class="col-md">
                    <input type="date" name="from_date" class="form-control">
                </div>
                <div class="col-md">
                    <input type="date" name="to_date" class="form-control">
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
                </div>
            </div>
        </form>

        <div class="header col-sm-12">
            <link rel="stylesheet" type="text/css"
                href="http://localhost/sbcl_online/assets/backend/css/page_print.css">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h3 class="text-center font_size_14">
                        বাংলাদেশ জাতীয় সমবায় ইউনিয়ন </h3>
                </div>


                <div class="col-sm-12">

                    <center>
                        <div class="text-center font_size_12">
                            নিবন্ধন নম্বর: ৩৪, তারিখ ১৬.৬.১৯৬১ খ্রি:</div>
                    </center>
                    <center>
                        <div class="text-center font_size_12">
                            ঠিকানা: সমবায় ব্যাংক ভবন (৮ম তলা), ৯/ডি, মতিঝিল বা/এ, ঢাকা-১০০০।</div>
                    </center>
                    <center>
                        <div class="text-center font_size_12">
                            ই-মেইলঃ bjsu61@gmail.com, মোবাইলঃ ০১৭০৯৬৫৩৫৯৯ ।</div>
                    </center>


                </div>


            </div>
        </div>

        <div class="text-center headline">
            <div class="card-header w-25 mt-2 mx-auto p-2">
                <h5 class="mb-0 text-center">স্টোরের পণ্যের ডিটেলস লিস্ট</h5>
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
                <p class="mt-1">প্রিন্ট সময়: ১১:০৫:২৩</p>
            </div>
        </div>

        <table class="table-report ">
            <thead class="thead-dark">
                <tr>
                    <th class="sl-col">ক্র নং</th>
                    <th class="number-col">পণ্যের নাম</th>
                    <th class="number-col">কোড নং</th>
                    <th class="number-col">ক্রয় পরিমান</th>
                    <th class="number-col">ক্রয় মূল্য</th>
                    <th class="number-col">বিক্রয় পরিমান</th>
                    <th class="number-col">বিক্রয় মূল্য</th>
                    <th class="number-col">অর্জিত লাভ</th>
                    <th class="number-col">মজুদ পণ্য</th>
                    <th class="number-col">মজুদ পণ্যের মূল্য</th>
                </tr>
                <tr>
                    <th>০১</th>
                    <th>০২</th>
                    <th>০৩</th>
                    <th>০৪</th>
                    <th>০৫</th>
                    <th>০৬</th>
                    <th>০৭</th>
                    <th>০৮</th>
                    <th>০৯</th>
                    <th>১০</th>
                </tr>
    </div>
    </thead>

    <tbody>
        <tr>
            <td class="sl-col">১</td>
            <td class="text-start">সদস্য ভর্তি রেজি:</td>
            <td class="">PRD001</td>
            <td class="">500</td>
            <td class="">32,500</td>
            <td class="">420</td>
            <td class="">33,600</td>
            <td class="">1,100</td>
            <td class="">80</td>
            <td class="">5,200</td>
        </tr>

        <tr>
            <td class="sl-col">২</td>
            <td class="text-start">খাত ভিত্তিক জমা</td>
            <td class="">PRD002</td>
            <td class="">300</td>
            <td class="">12,000</td>
            <td class="">250</td>
            <td class="">13,250</td>
            <td class="">1,250</td>
            <td class="">50</td>
            <td class="">2,000</td>
        </tr>

        <tr>
            <td class="sl-col">৩</td>
            <td class="text-start">দৈনিক ক্যাশ হিসাব</td>
            <td class="">PRD003</td>
            <td class="">200</td>
            <td class="">34,000</td>
            <td class="">175</td>
            <td class="">36,750</td>
            <td class="">2,750</td>
            <td class="">25</td>
            <td class="">4,250</td>
        </tr>

        <tr>
            <td class="sl-col">৪</td>
            <td class="text-start">সম্মিলিত জমা খরচ</td>
            <td class="">PRD004</td>
            <td class="">400</td>
            <td class="">24,000</td>
            <td class="">350</td>
            <td class="">26,250</td>
            <td class="">2,250</td>
            <td class="">50</td>
            <td class="">3,000</td>
        </tr>

        <tr>
            <td class="sl-col">৫</td>
            <td class="text-start">সদস্য খতিয়ান</td>
            <td class="">PRD005</td>
            <td class="">250</td>
            <td class="">22,500</td>
            <td class="">220</td>
            <td class="">24,200</td>
            <td class="">1,700</td>
            <td class="">30</td>
            <td class="">2,700</td>
        </tr>

        <tr>
            <td class="sl-col">৬</td>
            <td class="text-start"> সদস্য পাস বই</td>
            <td class="">PRD006</td>
            <td class="">600</td>
            <td class="">10,800</td>
            <td class="">540</td>
            <td class="">11,880</td>
            <td class="">1,080</td>
            <td class="">60</td>
            <td class="">1,080</td>
        </tr>

        <tr>
            <td class="sl-col">৭</td>
            <td class="text-start">জমা ভাউচার</td>
            <td class="">PRD007</td>
            <td class="">100</td>
            <td class="">45,000</td>
            <td class="">85</td>
            <td class="">48,450</td>
            <td class="">3,450</td>
            <td class="">15</td>
            <td class="">6,750</td>
        </tr>

        <tr>
            <td class="sl-col">৮</td>
            <td class="text-start">খরচ ভাউচার</td>
            <td class="">PRD008</td>
            <td class="">150</td>
            <td class="">18,000</td>
            <td class="">130</td>
            <td class="">20,150</td>
            <td class="">2,150</td>
            <td class="">20</td>
            <td class="">2,400</td>
        </tr>

        <tr>
            <td class="sl-col">৯</td>
            <td class="text-start">সঞ্চয় জমা রশিদ</td>
            <td class="">PRD009</td>
            <td class="">350</td>
            <td class="">14,000</td>
            <td class="">300</td>
            <td class="">15,600</td>
            <td class="">1,600</td>
            <td class="">50</td>
            <td class="">2,000</td>
        </tr>

        <tr>
            <td class="sl-col">১০</td>
            <td class="text-start">ত্রৈমাসিক স্থিতি</td>
            <td class="">PRD010</td>
            <td class="">500</td>
            <td class="">25,000</td>
            <td class="">450</td>
            <td class="">29,250</td>
            <td class="">4,250</td>
            <td class="">50</td>
            <td class="">2,500</td>
        </tr>
    </tbody>
    </table>

    <div class="footer-note">
        <div>
            মোট রেকর্ড: ৫৯
        </div>

        <div>
            রিপোর্ট প্রস্তুতকারী
        </div>
    </div>

    </div>

</body>

</html>