<?php
$user = $this->session->userdata('login_user_info_all');

$cart_count = 0;

if ($user) {
    $cart_count = $this->db->select_sum('quantity')
        ->where('user_id', $user->id)
        ->get('cart_items')
        ->row()
        ->quantity;
}

?>




<div class="container">


    <div class="mobile-bar">
        <button class="hamburger" onclick="toggleMenu()">
            <i class="fa-solid fa-bars" id="menuIcon"></i>
        </button>
    </div>

    <nav id="navbar">


        <ul>
            <li><a href="<?php echo base_url(); ?>" class="active">হোম</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">আমাদের সম্পর্কে <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="<?php echo base_url('org_history'); ?>">সংগঠনের ইতিহাস</a></li>
                    <li><a href="<?php echo base_url('org_mission'); ?>">লক্ষ্য ও উদ্দেশ্য</a></li>
                    <li><a href="<?php echo base_url('exi_committee'); ?>">ব্যবস্থাপনা কমিটি</a></li>
                    <li><a href="<?php echo base_url('org_structure'); ?>">সাংগঠনিক কাঠামো</a></li>
                    <li><a href="<?php echo base_url('ex_presidents'); ?>">সাবেক সভাপতিগণ</a></li>
                    <li><a href="<?php echo base_url('ex_secretaries'); ?>">সাবেক সম্পাদকগণ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">কার্যক্রম ও প্রকল্প <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="<?php echo base_url('crnt_projects'); ?>">চলমান প্রকল্প</a></li>
                    <li><a href="<?php echo base_url('dev_works'); ?>">উন্নয়নমূলক কার্যক্রম</a></li>
                    <li><a href="<?php echo base_url('omen_dev_works'); ?>">নারী সমবায় কার্যক্রম</a></li>
                    <li><a href="#">যুব সমবায় উদ্যোগ</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">আইন ও বিধিমালা <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="#">সমবায় আইন ও সংশোধনী</a></li>
                    <li><a href="#">ফরমসমূহ ডাউনলোড</a></li>
                    <li><a href="#">বার্ষিক প্রতিবেদন</a></li>
                    <li><a href="#">সিটিজেন চার্টার</a></li>
                    <li><a href="#">তথ্য অধিকার (RTI)</a></li>
                </ul>
            </li>
            <!-- <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">ডিজিটাল সেবা <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="#">অনলাইন নিবন্ধন</a></li>
                    <li><a href="#">সদস্য যাচাইকরণ</a></li>
                    <li><a href="#">ই-লাইব্রেরি</a></li>
                    <li><a href="#">অভিযোগ প্রতিকার (GRS)</a></li>
                </ul>
            </li> -->
            <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">আন্তর্জাতিক <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">

                    <li><a href="#">ICA কার্যক্রম</a></li>
                    <li><a href="#">বৈদেশিক সম্মেলন</a></li>
                    <li><a href="#">আন্তর্জাতিক অংশীদার</a></li>
                </ul>
            </li>

            <!-- <li class="dropdown">
                <a href="javascript:void(0)" onclick="toggleDropdown(this)">মিডিয়া <i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="#">সর্বশেষ সংবাদ</a></li>
                    <li><a href="#">মাসিক সমবায় বার্তা</a></li>
                    <li><a href="#">ফটো ও ভিডিও গ্যালারি</a></li>
                    <li><a href="#">প্রেস রিলিজ</a></li>
                </ul>
            </li> -->

            <li><a href="<?php echo base_url('all_products'); ?>" class="">পণ্যদ্রব্য</a></li>
            <li><a href="ica_member">ICA সদস্য</a></li>
            <li><a href="members">সদস্য তথ্য</a></li>
            <li><a href="<?php echo base_url('member_registration'); ?>" class="btn-contact">নতুন সদস্য
                    আবেদন</a>
            </li>

      
            <?php $user = $this->session->userdata('login_user_info_all'); ?>
            <?php if ($user): ?>

                <li class="dropdown">
                    <a href="javascript:void(0)" onclick="toggleDropdown(this)"><?= $user->username ?? 'Account'; ?> <i
                            class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">

                        <li>
                            <a href="<?= base_url('my_orders') ?>" class="">
                                অর্ডার তালিকা
                            </a>
                        </li>

                        <li> <a href="<?= base_url('logout') ?>" class="">
                                Logout
                            </a></li>
                    </ul>
                </li>





                <li style="position: relative;">
                    <a href="<?= base_url('my_carts') ?>">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <?php if ($cart_count): ?>
                        <span style="
            position:absolute;
            top:-4px;
            right:-10px;
            background:red;
            color:white;
            border-radius:50%;
            padding:2px 6px;
            font-size:12px;
        ">
                            <?= $cart_count ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!$cart_count): ?>
                        <span style="
            position:absolute;
            top:-4px;
            right:-10px;
            background:red;
            color:white;
            border-radius:50%;
            padding:2px 6px;
            font-size:12px;
        ">
                            0
                        </span>
                    <?php endif; ?>
                </li>
            <?php else: ?>



                <a href="<?= base_url('admin') ?>" class="">
                    LOGIN
                </a>


            <?php endif; ?>


         




    </nav>
</div>

<style>
    .mobile-bar {
        display: none;
        padding: 10px;
        position: relative;
        z-index: 1001;
        background: transparent;

    }

    #navbar {
        position: relative;
        z-index: 1000;
    }

    .hamburger {
        font-size: 24px;
        background: none;
        border: none;
        cursor: pointer;
        position: relative;
        z-index: 1002;
    }



    .submenu {
        display: none;
        background-color: #41ABB6;
    }

    .dropdown.open>.submenu {
        display: block;
    }
   

    @media (max-width: 768px) {

        .submenu {
            display: none !important;
            padding-left: 15px;
        }

        .dropdown.open>.submenu {
            display: block !important;
        }
    }

    @media (max-width: 768px) {
        .container {
           
            align-items: end !important;
            
        }

        .mobile-bar {
            display: block;
        }

        @media (max-width: 768px) {

            #navbar {
                display: none;
                width: 100%;
                position: relative;
                z-index: 999;
                background: #41ABB6;
            }

            #navbar.active {
                display: block;
            }
        }

        #navbar ul {
            display: flex;
            flex-direction: column;
            padding: 0;
        }

        #navbar ul li {
            width: 100%;
            padding: 10px;
            /* border-bottom: 1px solid #eee; */
        }

        #navbar ul li a {
            display: block;
        }
        #navbar ul li  {
           background-color: #41ABB6;
        }
    }
</style>

<script>
    function toggleMenu() {
        const navbar = document.getElementById("navbar");
        const icon = document.getElementById("menuIcon");

        navbar.classList.toggle("active");

        if (navbar.classList.contains("active")) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-xmark");
        } else {
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars");
        }
    }

    function toggleDropdown(el) {
        const parent = el.parentElement;

        if (window.innerWidth <= 768) {
            parent.classList.toggle("open");
        }
    }
</script>