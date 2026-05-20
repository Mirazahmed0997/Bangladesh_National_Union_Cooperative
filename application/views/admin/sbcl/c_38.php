<div id="printableArea">
	<style>
        .truncated {
            /* display: inline-block; */
            max-width: 50px; /* Adjust as needed */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer; /* Indicate that text can be interacted with */
        }

        .full-text {
            display: none;
        }

        .truncated:hover .full-text,
        .truncated.clicked .full-text {
            display: inline;
        }
        abbr[title] {
            text-decoration: unset;
        }
    </style>
<link rel="stylesheet" href="http://localhost/sbcl_online/assets/backend/css/page_print.css">
<div class="content-wrapper" style="min-height: 321.4px;">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
				<div class="row">
		<div class="col-sm-12">
			<div class="card" style="background: #001f3f">
				<div class="card-header">
					<center><h3 class="text-center bg-navy">
							শিক্ষিত বেকার সঞ্চয় ও ঋণদান সমবায় সমিতি লি.						</h3></center>


												<center><h4 class="text-center bg-navy">কর্মসংস্থান ও দারিদ্র্য বিমোচন প্রকল্প</h4>
							</center>
							

											<center><h6 class="text-center bg-navy">
							নিবন্ধন নম্বর: ০১/চাঁদ/১২, তারিখ: ০১.০৭.২০১২, ঠিকানা: চান্দ্রা বাজার, ফরিদগঞ্জ, চাঁদপুর।</h6></center>
					
				</div>
			</div>
		</div>
	</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card card-primary">
						<div class="card-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="card-title">পণ্য বিক্রি ও বিনিয়োগ বিতরণ প্রতিবেদন </h3>
								</div>
							</div>
						</div>


						<div class="card-body">
							<div class="row" id="card_title_hide" style="display: none;">
								<div class="col-sm-12">
								<p class="text-right font_size_12">কোড নং -৩৮</p>
								    <link rel="stylesheet" type="text/css" href="http://localhost/sbcl_online/assets/backend/css/page_print.css">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<div class="text-center font_size_14">
							শিক্ষিত বেকার সঞ্চয় ও ঋণদান সমবায় সমিতি লি.						</div></div>
		<div class="col-sm-2 text-right">
		<div class="text-right font_size_14">কোড নং -৩৮</div></div>

		<div class="col-sm-12 font_size_14">
			
							<center><div class="text-center font_size_14 ">কর্মসংস্থান ও দারিদ্র্য বিমোচন প্রকল্প</div>
					</center>
							
		</div>
		<div class="col-sm-12">

                            <center><div class="text-center font_size_12">
                    নিবন্ধন নম্বর: ০১/চাঁদ/১২, তারিখ: ০১.০৭.২০১২, ঠিকানা: চান্দ্রা বাজার, ফরিদগঞ্জ, চাঁদপুর।</div></center>
            

		</div>
	</div>
									<h3 class="text-center font_size_12">পণ্য বিক্রি ও বিনিয়োগ বিতরণ প্রতিবেদন</h3>
								</div>

							</div>
							<div class="row">
								<div class="col-sm-10">

								</div>
								<div class="col-sm-2 text-right">
									<button id="print_button" class="btn btn-primary" onclick="printDiv('printableArea')"><i class="fas fa-print">
											Print</i></button>

								</div>
							</div>
							<form action="http://localhost/sbcl_online/project/invest/Invest/c_38" method="post" class="has-validation-callback">
								<div class="row" id="submit_button">
									<div class="col-sm-4">
										<strong>Start Date</strong>
										<input type="datetime-local" name="date_1" class="form-control">
									</div>
									<div class="col-sm-4">
										<strong>End Date</strong>
										<input type="datetime-local" name="date_2" class="form-control">
									</div>
									<div class="col-sm-3">
										<strong>বিনিয়োগের ধরণ</strong>
										<select name="la_type" class="form-control">
											<option value="">--- Select ---</option>
											<option value="1">কিস্তিতে</option>
											<option value="2">বিসুবি</option>
										</select>
									</div>
									<div class="col-sm-1">
										<br>
										<button type="submit" class="btn bg-info">Search</button>
									</div>
								</div>
							</form>
							<br>							<div class="row justify-content-center font_size_11">
								<div class="col-sm-6">
									মাসের নাম:
									2026-05-01 00:00:00 To
									2026-05-18 16:46:29
								</div>
								<div class="col-sm-6 text-right">
									প্রিন্ট এর তারিখ: 2026-05-18 16:46:31								</div>
								<div class="col-sm-12">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped table-hover table-striped print-table" id="dataTable">
											<thead>
												
											<tr class="">
												<th class="text-center text-bold " rowspan="2">ক্র নং
												</th>
												<th class="text-center text-bold " rowspan="2">গ্রহিতার নাম
												</th>

												<th class="text-center text-bold " rowspan="2">হিসাব নং</th>
												<th class="text-center text-bold " rowspan="2">গ্রহণের তারিখ</th>
												<th class="text-center text-bold " rowspan="2">সদস্য ভর্তির তারিখ
												</th>
												<th class="text-center text-bold " rowspan="2" style="width: 50px !important;">ঠিকানা</th>
												<th class="text-center text-bold " rowspan="2"> ধরণ</th>
												<th class="text-center text-bold " rowspan="2">বিনিয়োগের উদ্দেশ্য</th>
												<th class="text-center text-bold " rowspan="2">
													ক্রয় মূল্য (কিস্তিতে)
												</th>
												<th class="text-center text-bold " rowspan="2">
													ক্রয় মূল্য
													(বিসুবি)
												</th>
												<th class="text-center text-bold " rowspan="2">লাভ</th>
												<th class="text-center text-bold " rowspan="2">বিক্রয় মূল্য</th>

												<th class="text-center text-bold " colspan="2">পুনরায় গ্রহণের ক্ষেত্রে</th>
												<th class="text-center text-bold " rowspan="2">মেয়াদ
												</th>
												<th class="text-center text-bold " rowspan="2">সর্বশেষ সঞ্চয়
													জমা
												</th>
												<th class="text-center text-bold " rowspan="2"> মোবাইল নং
												</th>
											</tr>
											<tr class="">
												
												<th class="text-center text-bold ">পূর্বের হিসাব
												নং
												</th>
												<th class="text-center text-bold ">পরিশোধ তারিখ</th>
											</tr>
											<tr class="font_size_5">
																									<td class="text-center text-bold font_size_5">1</td>
																									<td class="text-center text-bold font_size_5">2</td>
																									<td class="text-center text-bold font_size_5">3</td>
																									<td class="text-center text-bold font_size_5">4</td>
																									<td class="text-center text-bold font_size_5">5</td>
																									<td class="text-center text-bold font_size_5">6</td>
																									<td class="text-center text-bold font_size_5">7</td>
																									<td class="text-center text-bold font_size_5">8</td>
																									<td class="text-center text-bold font_size_5">9</td>
																									<td class="text-center text-bold font_size_5">10</td>
																									<td class="text-center text-bold font_size_5">11</td>
																									<td class="text-center text-bold font_size_5">12</td>
																									<td class="text-center text-bold font_size_5">13</td>
																									<td class="text-center text-bold font_size_5">14</td>
																									<td class="text-center text-bold font_size_5">15</td>
																									<td class="text-center text-bold font_size_5">16</td>
																									<td class="text-center text-bold font_size_5">17</td>
																							</tr>
											
											</thead>
											<tbody>
																						<tr class="">
												<td class="text-center align-middle ">
													1</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মোঃ ইমাম হোসেন">মোঃ ইমাম হোসেন</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002253</td>
												<td class="text-right align-middle ">2026-05-03</td>
												<td class="text-right align-middle ">2024-04-27</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="বিহারীপুর,নোয়া বাড়ি,চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।">বিহারীপুর,নোয়া বাড়ি,চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													30000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													3600												</td>
												<td class="text-right align-middle ">
													33600												</td>

												<td class=" align-middle ">
													PI013001587<br>												</td>
												<td class="align-middle ">
													2025-06-16<br>												</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01830520622</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													2</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="পারভীন বেগম (সাবেক-2658)">পারভীন বেগম (সাবেক-2658)</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002254</td>
												<td class="text-right align-middle ">2026-05-03</td>
												<td class="text-right align-middle ">2017-09-13</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="পঃ সকদী,খান বাড়ি,সাহেববাজার,ফরিদগঞ্জ,চাঁদপুর।">পঃ সকদী,খান বাড়ি,সাহেববাজার,ফরিদগঞ্জ,চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													300000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													36000												</td>
												<td class="text-right align-middle ">
													336000												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01712066412</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													3</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="জোহরা বেগম (সাবেক-৬৮৯৩)">জোহরা বেগম (সাবেক-৬৮৯৩)</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002255</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2021-05-18</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="সকদীরামপুর, পাঠান বাড়ি, চান্দ্রা-৩৬৫১, ফরিদগঞ্জ, চাঁদপুর।">সকদীরামপুর, পাঠান বাড়ি, চান্দ্রা-৩৬৫১, ফরিদগঞ্জ, চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													26000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													3120												</td>
												<td class="text-right align-middle ">
													29120												</td>

												<td class=" align-middle ">
													PI013000509<br>PI013000827<br>												</td>
												<td class="align-middle ">
													2024-05-08<br>2026-05-04<br>												</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01825759031</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													4</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মাহমুদা খানম ">মাহমুদা খানম </abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002256</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2025-04-12</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=" সরখাল,খান বাড়ী, ডাকঘর: মূলপাড়া - ৩৬৫৫,  ফরিদগঞ্জ,  চাঁদপুর "> সরখাল,খান বাড়ী, ডাকঘর: মূলপাড়া - ৩৬৫৫,  ফরিদগঞ্জ,  চাঁদপুর </abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">প্রবাসী												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="ব্যবহারযোগ্য সম্পদ(দালান নির্মান) এর মালামাল ক্রয় বাবদ">ব্যবহারযোগ্য সম্পদ(দালান নির্মান) এর মালামাল ক্রয় বাবদ</abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle ">200000.00</td>
												<td class="text-right align-middle ">
																									</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													30000												</td>
												<td class="text-right align-middle ">
													230000												</td>

												<td class=" align-middle ">
													PI013001558<br>												</td>
												<td class="align-middle ">
													2026-04-25<br>												</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													July-2026												</td>
												<td class="text-right align-middle ">01850307073</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													5</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="নাছিমা">নাছিমা</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002257</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2026-04-13</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="ফাজিলউদ্দিন বেপার বাড়ী, গ্রাম: কৃষ্ণপুর, ৭৮নংকৃষ্ণপুর, ডাকঘর: ইসলামপুর ৩৬৫৫, ফরিদগঞ্জ, চাঁদপুর।">ফাজিলউদ্দিন বেপার বাড়ী, গ্রাম: কৃষ্ণপুর, ৭৮নংকৃষ্ণপুর, ডাকঘর: ইসলামপুর ৩৬৫৫, ফরিদগঞ্জ, চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">প্রবাসী												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="ব্যবহারযোগ্য সম্পদ(দালান নির্মান) এর মালামাল ক্রয়">ব্যবহারযোগ্য সম্পদ(দালান নির্মান) এর মালামাল ক্রয়</abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle ">500000.00</td>
												<td class="text-right align-middle ">
																									</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													150000												</td>
												<td class="text-right align-middle ">
													650000												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">24</td>
												<td class="text-center align-middle ">
													September-2026												</td>
												<td class="text-right align-middle ">01626931090</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													6</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মুন্নি আক্তার (সাবেক-৭২১৫)">মুন্নি আক্তার (সাবেক-৭২১৫)</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002258</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2021-10-31</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="লোহাগড়,মিজি বাড়ি,চা,ন্দ্রা-৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।">লোহাগড়,মিজি বাড়ি,চা,ন্দ্রা-৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													578000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													69360												</td>
												<td class="text-right align-middle ">
													647360												</td>

												<td class=" align-middle ">
													PI013000411<br>PI013001205<br>PI013001399<br>PI013001973<br>												</td>
												<td class="align-middle ">
													2024-06-20<br>2025-01-01<br>2025-06-10<br>2026-04-29<br>												</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01728146660</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													7</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মোঃ আব্দুর রহমান">মোঃ আব্দুর রহমান</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002259</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2025-10-30</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মানিক রাজ(মুন্সী বাড়ি), পূর্ব গাজীপুর -৩৬৫১, ফরিদগঞ্জ, চাঁদপুর।
">মানিক রাজ(মুন্সী বাড়ি), পূর্ব গাজীপুর -৩৬৫১, ফরিদগঞ্জ, চাঁদপুর।
</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													72000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													8640												</td>
												<td class="text-right align-middle ">
													80640												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01818842457</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													8</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মোসাঃ শাহাজাদি">মোসাঃ শাহাজাদি</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002260</td>
												<td class="text-right align-middle ">2026-05-05</td>
												<td class="text-right align-middle ">2025-04-27</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="দেইচর(বরকন্দাজ বাড়ী),চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।">দেইচর(বরকন্দাজ বাড়ী),চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													10000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													1200												</td>
												<td class="text-right align-middle ">
													11200												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01619511168</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													9</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="কুলছুমা আক্তার (সাবেক-৫৪০৫)">কুলছুমা আক্তার (সাবেক-৫৪০৫)</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002261</td>
												<td class="text-right align-middle ">2026-05-06</td>
												<td class="text-right align-middle ">2023-01-01</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="বাগাদী, রাজা বাড়ি,বাঘড়া বাজার - ৩৬০০, চাঁদপুর সদর, চাঁদপুর। ">বাগাদী, রাজা বাড়ি,বাঘড়া বাজার - ৩৬০০, চাঁদপুর সদর, চাঁদপুর। </abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													169000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													20280												</td>
												<td class="text-right align-middle ">
													189280												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01837174770</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													10</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মোসাঃ শাহানাজ বেগম (সাবেক-৭৭৯৪)">মোসাঃ শাহানাজ বেগম (সাবেক-৭৭৯৪)</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002262</td>
												<td class="text-right align-middle ">2026-05-07</td>
												<td class="text-right align-middle ">2023-07-15</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="পশ্চিম সকদী,সাহেব বাজার-৩৬০০,চাঁদপুর সদর,চাঁদপুর।">পশ্চিম সকদী,সাহেব বাজার-৩৬০০,চাঁদপুর সদর,চাঁদপুর।</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													195000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													23400												</td>
												<td class="text-right align-middle ">
													218400												</td>

												<td class=" align-middle ">
													PI013000135<br>PI013001214<br>PI013001871<br>												</td>
												<td class="align-middle ">
													2024-04-20<br>2025-10-18<br>2025-12-09<br>												</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													May-2026												</td>
												<td class="text-right align-middle ">01736950798</td>
											</tr>

																						<tr class="">
												<td class="text-center align-middle ">
													11</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="মোসাঃশিল্পী আক্তার">মোসাঃশিল্পী আক্তার</abbr></span>
                                                    
                                                </td>
												<td class=" align-middle ">PI013002263</td>
												<td class="text-right align-middle ">2026-05-07</td>
												<td class="text-right align-middle ">2023-08-16</td>
                                                <td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title="সকদিরামপুর,(বেপাড়ী বাড়ী)চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,ফরিদগঞ্জ">সকদিরামপুর,(বেপাড়ী বাড়ী)চান্দ্রা -৩৬৫১,ফরিদগঞ্জ,ফরিদগঞ্জ</abbr></span>
                                                    
                                                </td>
												<td class="text-center align-middle ">												</td>
													
												<td class=" align-middle truncated">
                                                    <span class="truncated-text"><abbr title=""></abbr></span>
                                                    
                                                </td>
												<td class="text-right align-middle "></td>
												<td class="text-right align-middle ">
													10000.00												</td>
												<!--												<td class="text-center align-middle ">-->
												<!--													-->												<!--												</td>-->
												<td class="text-right align-middle ">
													1200												</td>
												<td class="text-right align-middle ">
													11200												</td>

												<td class=" align-middle ">
																									</td>
												<td class="align-middle ">
																									</td>
												<td class="text-center align-middle ">12</td>
												<td class="text-center align-middle ">
													December-2026												</td>
												<td class="text-right align-middle ">01764593501</td>
											</tr>

																						<tr>
												<th colspan="7"></th>
												<th class="text-right align-middle ">মোট =</th>
												<th class="text-right align-middle ">700000												</th>
												<th class="text-right align-middle ">1390000												</th>
												<th class="text-right align-middle ">346800												</th>
												<th class="text-right align-middle ">2436800												</th>
												<th colspan="5"></th>

											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<center>                                                               
									</center><br>
									<hr>
									<p class="text-bold text-center align-middle">
									সম্পাদক /ব্যবস্থাপক
									</p>
								</div>
								<div class="col-sm-4">
									<center>                                                               
									</center><br>
									<hr>
									<p class="text-bold text-center align-middle">
									প্রতিবেদন প্রস্তুতকারী <br> পরিদর্শনকারীর নাম ও স্বাক্ষর
									</p>
								</div>
								<div class="col-sm-4">
									<center>                                                               
									</center><br>
									<hr>
									<p class="text-bold text-center align-middle">
									ক্যাশিয়ার
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section></div>
</div>