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
                    <h2>বাংলাদেশ জাতীয় সমবায় ইউনিয়ন</h2>
                    <h6>৯/ডি, মতিঝিল বাণিজ্যিক এলাকা, ঢাকা-১০০০, বাংলাদেশ।</h6>
                </div>
            </div>

            <div class="coop">
                <a href="<?= base_url(); ?>">
                    <img width="200px" src="assets/uploads/coop-removebg-preview.png" alt="BJSU Logo" />
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .header {
        padding-top: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center; 
        flex: 1;
        width: 100%;
    }

    .logo {
        background-color: white;
        border-radius: 50%;
        border: none !important;
        display: inline-block;
    }

    .top-header {
        border-bottom: 1px solid white;
        padding: 10px 0;
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
        display: block;
    }

    .header-flex .company_info {
        color: white;
        text-align: center;
    }

    .header-flex .company_info h2 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
        padding-bottom: 2px;
    }

    .header-flex .company_info h6 {
        font-size: 14px;
        font-weight: 400;
        margin: 0;
    }

    /* Media Queries */
    @media (max-width: 992px) {
        .coop img {
            max-width: 150px;
        }
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            justify-content: center !important;
            gap: 15px;
            width: 100%;
        }

        .header-flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            width: 100%;
        }

        .company_info {
            text-align: center !important;
            width: 100%;
        }
        
        .company_info h6 {
            text-align: center !important;
        }

        .logo {
            margin: 0 auto;
        }

        .logo img {
            max-height: 70px;
        }

        .header-flex .company_info h2 {
            font-size: 20px !important;
        }

        .header-flex .company_info h6 {
            font-size: 13px !important;
        }

        .coop {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100%;
            margin: 0 auto;
        }

        .coop img {
            max-width: 130px;
            margin: 5px auto 0 auto;
            display: inline-block;
        }
    }

    @media (max-width: 480px) {
        .logo img {
            max-height: 60px;
        }

        .header-flex .company_info h2 {
            font-size: 18px !important;
        }

        .header-flex .company_info h6 {
            font-size: 11px !important;
        }

        .coop img {
            max-width: 110px;
        }
    }
</style>