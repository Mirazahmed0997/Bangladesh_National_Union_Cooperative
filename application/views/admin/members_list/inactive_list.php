<title>সদস্য ভর্তি তালিকা</title>


 
<div class="content-wrapper">
    

    <div class="content-header">
        <div class="container-fluid">
            <!-- Search / Filter Form -->
            <form method="get" action="<?= base_url('Admin/members_list') ?>">
                <div class="row g-2 mb-3 align-items-center">
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-primary"><i class="fas fa-search"></i> সদস্য
                            খুঁজুন</button>
                    </div>
                    <div class="col-md">
                        <input type="text" name="member_no" value="<?= $this->input->get('member_no') ?>"
                            class="form-control" placeholder="সদস্য নম্বর">
                    </div>
                    <div class="col-md">
                        <input type="text" name="association_name" class="form-control"
                            placeholder="সমিতির নিবন্ধন নম্বর">
                    </div>
                    <div class="col-md">
                        <input type="text" name="a_contact" class="form-control" placeholder="মোবাইল নম্বর">
                    </div>
                    <div class="col-md">
                        <select name="association_name" class="form-select">
                            <!-- <option value="">সদস্য সমিতির নাম</option> -->
                            <option value=""> সকল সদস্য</option>
                            <?php foreach ($members as $member): ?>

                                <option value="<?= $member->association_name ?>"
                                    <?= $this->input->get('association_name') == $member->association_name ? 'selected' : '' ?>>
                                    <?= $member->association_name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
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
        </div>
    </div>

    <!-- Members Table -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow">
                
                </div>
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
                                                 <div class="card-header w-25 mt-2 mx-auto">
                                                         <h5 class="mb-0 text-center">সদস্য বন্ধ তালিকা</h5>
                                            </div>
                            </div>




                <div class="card-body p-2">
                    <div class="table-responsive" style="overflow:auto;">
                        <table id="membersTable" class="table table-bordered table-striped table-hover"
                            style="width:100%; white-space: nowrap;">

                            <button onclick="window.print()" class="btn btn-success ">
                                <i class="fas fa-print"></i> Print
                            </button>

                           <thead class="thead-dark">
                                <tr>
                                    <th rowspan="2">ক্র: নং</th>
                                    <th rowspan="2">সদস্য সমিতির <br> নাম</th>
                                    <th rowspan="2">সদস্য নম্বর</th>
                                    <th rowspan="2">কার্যালয়ের ঠিকানা</th>
                                    <th rowspan="2">নিবন্ধিত ঠিকানা</th>
                                    <th rowspan="2">সদস্য ভর্তির তারিখ</th>
                                    <th rowspan="2">মোবাইল <br> নম্বর</th>
                                    <th rowspan="2">ইমেইল</th>
                                    <th rowspan="2">প্রতিনিধির  <br>নাম</th>
                                    <th rowspan="2">প্রতিনিধির  <br>পদবি</th>
                                    <th rowspan="2">প্রতিনিধির <br>মোবাইল নম্বর <br>ও মেইল</th>
                                    <th rowspan="2">সদস্য ভর্তির ফী <br> ও চাঁদা জমা রশিদ <br> ও ভিউ</th>
                                    <th rowspan="2">সদস্য <br> সমিতির <br>জেলা</th>
                                    <th rowspan="2">সদস্য<br> সমিতির<br> বিভাগ</th> 
                                    <th rowspan="2">আবেদন <br>ফরম ভিউ</th>
                                    <th colspan="2">বকেয়া তথ্য</th>
                                </tr>
                                <tr>
                                    <th>বকেয়া বছর</th>
                                    <th>বকেয়ার পরিমাণ</th>
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
                                    <th>১১</th>
                                    <th>১২</th>
                                    <th>১৩</th>
                                    <th>১৪</th>
                                    <th>১৫</th>
                                    <th>১৬</th>
                                    <th>১৭</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                               
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="comment-cell"></td>
                                        <td></td>
                                        <td></td>


    
                                        <td class="comment-cell" title="">
                                        </td>
                                        
                                        <td>
                                            <a href=""
                                            class=""><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href=""
                                            class=""><i class="fas fa-eye"></i></a>
                                        </td>                                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>



<style>

      .comment-cell {
    max-width: 100px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

    .header{
        background-color: #3BAAB7;
        padding: 10px;
        /* color: white; */
        font-weight: bold;
        border-radius: 10px;
    }

    .card-header{
        background-color: #3BAAB7;
        width: 25%;
        /* color: white; */
        border-radius: 10px;
        
    }

    thead tr th{
        text-align: center;
        vertical-align: top !important;

    }

    td{
        text-align: center;
    }
    @media print {

        thead {
            display: table-header-group !important;
        }
        .headline{
            padding: 10px;
            
        }
                                            
        .card-header{
        border: 1px solid black;
        font-size: 16px !important;
        
    }



        table {
            width: 100%;
            border-collapse: collapse !important;
            white-space: normal !important;
            font-size: 9px;
            page-break-inside: auto;
        }

        thead th {
            color: #000 !important;
            background: #fff !important;

            border: 1px solid #000 !important;
            font-weight: bold;
            text-align: center;
        }

        table th,
        table td {
            border: 1px solid #000 !important;
            padding: 5px !important;
            font-size: 10px;
            text-align: center;
            vertical-align: middle;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .btn,
        .open-charge-modal,
        .active-button,
        a {
            display: none !important;
        }

        table th:last-child,
        table td:last-child {
            display: none !important;
        }

        .table-responsive {
            overflow: visible !important;
        }


    }
</style>
