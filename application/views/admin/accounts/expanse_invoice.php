<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>খরচ ভাউচার</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family: "SolaimanLipi","Kalpurush","Noto Sans Bengali",sans-serif;
    background:#fff;
    color:#000;
}

.voucher-wrapper{
    width:85%;
    margin:20px auto;
    padding:20px 40px;
}

.header{
    text-align:center;
    line-height:1.7;
}

.header h3{
    font-size:32px;
    font-weight:700;
    margin-bottom:5px;
}

.header p{
    margin:0;
    font-size:18px;
}

.voucher-title{
    display:inline-block;
    border:1px solid #000;
    border-radius:8px;
    padding:8px 40px;
    margin-top:15px;
    font-weight:700;
    font-size:22px;
}

.info-section{
    margin-top:40px;
}

.info-title{
    font-size:20px;
    font-weight:700;
    text-decoration:underline;
    margin-bottom:20px;
}

.info-row{
    display:flex;
    margin-bottom:10px;
    font-size:18px;
}

.label{
    width:140px;
}

.colon{
    width:20px;
}

.right-date{
    text-align:right;
    font-size:18px;
}

.voucher-table{
    margin-top:25px;
    border:1px solid #000;
}

.voucher-table table{
    width:100%;
    border-collapse:collapse;
}

.voucher-table th,
.voucher-table td{
    border:1px solid #000;
    padding:8px;
}

.voucher-table th{
    text-align:center;
    font-weight:700;
}

.big-row{
    height:180px;
}

.bottom-row td{
    height:40px;
    font-weight:700;
}

.signature-section{
    margin-top:80px;
}

.signature-line{
    border-top:1px solid #000;
    width:170px;
    margin:0 auto 8px;
}

.signature-title{
    text-align:center;
    font-weight:700;
    font-size:18px;
}

@media print{
    body{
        margin:0;
    }

    .voucher-wrapper{
        width:100%;
    }
}
</style>
</head>
<body>

<div class="voucher-wrapper content-wrapper">

    <div class="header">
        <h3>বাংলাদেশ জাতীয় সমবায় ইউনিয়ন</h3>

        <p>নিবন্ধন নম্বর : ৩৪, তারিখ : ১৬.০৩.১৯৬১ খ্রি.</p>

        <p>
            ঠিকানা : সমবায় ব্যাংক ভবন (৮ম তলা), ৯/ডি, মতিঝিল বাণিজ্যিক এলাকা, ঢাকা-১০০০।
        </p>

        <p>
            ই-মেইল: bsu61@gmail.com,
            মোবাইল: 01709-653599
        </p>

        <div class="voucher-title">
            খরচ ভাউচার
        </div>
    </div>

    <div class="info-section">

        <div class="row">
            <div class="col-md-6">

                

                <div class="info-row">
                    <div class="label">রসিদ নম্বর</div>
                    <div class="colon">:</div>
                </div>

                <div class="info-row">
                    <div class="label">নাম</div>
                    <div class="colon">:</div>
                </div>

                <div class="info-row">
                    <div class="label">সদস্য নম্বর</div>
                    <div class="colon">:</div>
                </div>

                <div class="info-row">
                    <div class="label">ঠিকানা</div>
                    <div class="colon">:</div>
                </div>

                <div class="info-row">
                    <div class="label">খরচের মাধ্যম</div>
                    <div class="colon">:</div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="right-date">
                    <button onclick="window.print()" class="btn btn-success ">
                                <i class="fas fa-print"></i> Print
                            </button><br>
                    <strong>তারিখ</strong> : ১৬.০৩.১৯৬১
                </div>
            </div>
        </div>

    </div>

    <div class="voucher-table">

        <table>
            <thead>
                <tr>
                    <th style="width:8%">ক্র.নং</th>
                    <th style="width:42%">খরচের বিবরণ</th>
                    <th style="width:25%">পরিমাণ</th>
                    <th style="width:25%">টাকা</th>
                </tr>
            </thead>

            <tbody>
                <tr class="big-row">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="bottom-row">
                    <td colspan="2">কথায় =</td>
                    <td class="text-end">মোট =</td>
                    <td></td>
                </tr>
            </tbody>

        </table>

    </div>

    <div class="row signature-section text-center">

        <div class="col-4">
            <div class="signature-line"></div>
            <div class="signature-title">হিসাব রক্ষক</div>
        </div>

        <div class="col-4">
            <div class="signature-line"></div>
            <div class="signature-title">গ্রহণকারী</div>
        </div>

        <div class="col-4">
            <div class="signature-line"></div>
            <div class="signature-title">ব্যবস্থাপক</div>
        </div>

    </div>

</div>

</body>
</html>