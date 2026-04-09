<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $tittle ?></title>
	<!--	datatable start-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!--	<link rel="stylesheet" href="--><?php //echo base_url('') 
	?>
	<!--assets/backend/css/ionicons.min.css">-->
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!--	datatable end-->


	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/summernote/summernote-bs4.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/select2/css/select2.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">
	<!--custom css-->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/css/custom.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet"
		href="<?php echo base_url('') ?>assets/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link href="<?php echo base_url('') ?>assets/backend/css/family.css" rel="stylesheet">





<div class="top-header">
    <div class="container">
        <div class="header">
           <div class="header-flex">
             <div class="logo">
                <a href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/uploads/project/members/logo/91a0505bc70a4089f271d1f87c828ad0.png'); ?>"
                        alt="BJSU Logo">
                </a>
            </div>

            <div class="company_info">
                <h2>বাংলাদেশ জাতীয় সমবায় ইউনিয়ন</h2>
                <h6>৯/ডি, মতিঝিল বাণিজ্যিক এলাকা, ঢাকা-১০০০, বাংলাদেশ।</h6>
            </div>
           </div>

            <div class="coop ">
                <a href="<?= base_url(); ?>">
                    <img width="200px" src="assets/uploads/coop-removebg-preview.png"
                        alt="BJSU Logo"/>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
   .header {
    display: flex;
    justify-content: space-between;
    align-items: start; 
    flex: 1;
	padding-top: 5px;
}

    .coop{
        right:0;
    }

    .logo {
        background-color: white;
        border-radius: 50%;
        border: none !important;
    }
   

    .top-header {
        border-bottom: 1px solid white;
        padding: 5px 10px;
        background: linear-gradient(90deg, #32aaba, #feb47b);
    }

    .header-flex {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .header-flex .logo img {
        max-height: 100px;
        width: auto;
    }

    .header-flex .company_info h3 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
        padding-bottom: 2px;
    }

    .header-flex .company_info {
        font-size: 18px;
        font-weight: 900;
        margin: 0;
        color: white;
       
    }/* Responsive adjustments */
@media (max-width: 992px) {
    .coop img {
        max-width: 150px;
    }
}

@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .header-flex {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .logo img {
        max-height: 60px;
    }

    .company_info h2 {
        font-size: 18px;
    }

    .company_info h6 {
        font-size: 14px;
    }

    .coop img {
        max-width: 120px;
        margin-top: 10px;
    }
}

@media (max-width: 480px) {
    .logo img {
        max-height: 50px;
    }

    .company_info h2 {
        font-size: 16px;
    }

    .company_info h6 {
        font-size: 12px;
    }

    .coop img {
        max-width: 100px;
    }
    }
</style>
		<!-- Header ============================================= -->



		<!-- <header id="header recruit_header" class="sticky-style-2 text-center">
			<nav class="navbar navbar-expand-lg navbar-background">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler-icon fas fa-bars"></i>

				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav" style="margin: auto;">
						<li class="nav-item active">
							<a class="nav-link link" href="<?php echo base_url(); ?>Recruitment/index">Home <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link link" href="<?php echo base_url(); ?>">SBCL Website</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link" href="<?php echo base_url('Recruitment/job_openings'); ?>">Job
								Openings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link"
								href="<?php echo base_url('Recruitment/registration'); ?>">Applicant Registration</a>
						</li>
						<?php $login_user_info_all = $this->session->userdata('login_user_info_all');
						if (empty($login_user_info_all)) {
							?>
							<li class="nav-item">
								<a class="nav-link link" href="<?php echo base_url('applicant_login'); ?>">Applicant
									Login</a>
							</li>
						<?php } else { ?>
							<li class="nav-item">
								<a class="nav-link link" href="<?php echo base_url('applicant_dashboard'); ?>">Go To
									Dashboard</a>
							<?php } ?>
						<li class="nav-item">
							<a class="nav-link link" href="<?php echo base_url('Recruitment/how_to_apply'); ?>">How To
								Apply</a>
						</li>
						<li class="nav-item">
							<a class="nav-link link" href="<?php echo base_url('Recruitment/faq'); ?>">FAQ</a>
						</li>
					</ul>
				</div>
			</nav>
		</header> -->