<?php

$member_application_count = 0;
$this->db->where('member_status', 'pending');
$member_application_count = $this->db->count_all_results('members_table');


$member_reject_count = 0;
$this->db->where('member_status', 'reject');
$member_reject_count = $this->db->count_all_results('members_table');

$member_review_count = 0;
$this->db->where('member_status', 'review');
$member_review_count = $this->db->count_all_results('members_table');


$inactive_member_count = 0;
$this->db->where('active_status', 0);
$inactive_member_count = $this->db->count_all_results('members_table');


?>




<style>
    [class*=sidebar-dark-] {
        background-image: linear-gradient(to bottom,
                #000080,
                #0000CD,
                #4169E1);
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">

        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <?php $login_user_info_all = $this->session->userdata('login_user_info_all'); ?>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/backend/dist/img/user.jpg'); ?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="<?php echo base_url('admin_dashboard') ?>"
                        class="nav-link <?= active_nav('dashboard', $main_nav); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= active_open('homepage', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('homepage', $main_nav); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            হোমপেজ ব্যবস্থাপনা
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('news_list') ?>"
                                class="nav-link <?= active_nav('news_list', $sub_nav); ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>সংবাদ</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('slider_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>সংবাদ ছবি</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('notice_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>নোটিশ</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('projects_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-industry nav-icon"></i>
                                <p>প্রজেক্টস</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('banner_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-image banner-icon" style="  margin-right: 12px; margin-left: 4px;"></i>
                                <p>ব্যানার</p>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('managment_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-users nav-icon"></i>
                                <p>ব্যবস্থাপক</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('achievements_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="fas fa-medal achievement-icon"
                                    style="  margin-right: 14px; margin-left: 4px;"></i>
                                <p>অর্জন</p>

                            </a>
                        </li>



                        <!-- sub menu for gallary -->

                        <li class="nav-item has-treeview <?= ($sub_nav == 'gallery') ? 'menu-open' : ''; ?>">

                            <a href="#" class="nav-link <?= ($sub_nav == 'gallery') ? 'active' : ''; ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>
                                    গ্যালারি
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('image_gallery_list') ?>"
                                        class="nav-link <?= active_nav('image_gallery_list', $sub_nav); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ইমেজ তালিকা</p>
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="<?= base_url('image_gallery_create') ?>"
                                        class="nav-link <?= active_nav('image_gallery_create', $sub_nav); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>নতুন গ্যালারি যোগ</p>
                                    </a>
                                </li> -->

                            </ul>

                        </li>







                        <li class="nav-item has-treeview <?= ($sub_nav == 'gallery') ? 'menu-open' : ''; ?>">

                            <a href="#" class="nav-link <?= ($sub_nav == 'gallery') ? 'active' : ''; ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>
                                    প্রোডাক্ট ব্যবস্থাপনা
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('category_list') ?>"
                                        class="nav-link <?= active_nav('image_gallery_list', $sub_nav); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ক্যাটাগরি</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('product_list') ?>"
                                        class="nav-link <?= active_nav('image_gallery_list', $sub_nav); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>প্রোডাক্ট</p>
                                    </a>
                                </li>


                            </ul>

                        </li>



                    </ul>
                </li>

                <li class="nav-item has-treeview <?= ($sub_nav == 'gallery') ? 'menu-open' : ''; ?>">

                    <a href="#" class="nav-link <?= ($sub_nav == 'gallery') ? 'active' : ''; ?>">
                        <i class="fas fa-newspaper nav-icon"></i>
                        <p>
                            অর্ডার ব্যবস্থাপনা
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('admin_orders_table') ?>"
                                class="nav-link <?= active_nav('image_gallery_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>অর্ডার তালিকা</p>
                            </a>
                        </li>
                    </ul>

                </li>


                <br>



                <a href="<?php echo base_url('Admin/registered_user_list') ?>"
                    class="nav-link <?= active_nav('user_list', $main_nav); ?>">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        কার্যক্রম বিষয় মেনু
                    </p>
                </a>

                </li>

                
                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            সদস্য ভর্তির আবেদন
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/application_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আবেদন তালিকা <span
                                        class="badge bg-danger"><?php if ($member_application_count > 0) { ?>
                                            <span class="badge bg-danger"><?= $member_application_count ?></span>
                                        <?php } ?></span></p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/members_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আবেদন মঞ্জুর তালিকা</p>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/reject_list') ?>"
                                class="nav-link <?= active_nav('Admin/reject_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আবেদন নামঞ্জুর তালিকা <span
                                        class="badge bg-danger"><?php if ($member_reject_count > 0) { ?>
                                            <span class="badge bg-danger"><?= $member_reject_count ?></span>
                                        <?php } ?></span>
                                </p>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/review_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>পরবর্তী সিদ্ধান্ত তালিকা/পেন্ডিং তালিকা <span
                                        class="badge bg-danger"><?php if ($member_application_count > 0) { ?>
                                            <span class="badge bg-danger"><?= $member_application_count ?></span>
                                        <?php } ?></span>
                                </p>

                            </a>
                        </li>


                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url('Admin/application_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আবেদন তালিকা <span class="badge bg-danger">
                                        <?php if ($member_application_count > 0) { ?>
                                            <span class="badge bg-danger"><?= $member_application_count ?></span>
                                        <?php } ?>
                                    </span>
                                </p>

                            </a>
                        </li> -->




                    </ul>

                </li>
                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            পেমেন্ট ভেরিফিকেশন
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('payment_check_list') ?>" class="nav-link <?= active_nav('payment_check_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>পেমেন্ট স্ট্যাটাস যাচাই</p>

                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="<?php echo base_url('payment_check_list') ?>" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            সদস্য তালিকা
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo base_url('members_admit_list') ?>"
                                class="nav-link <?= active_nav('members_admit_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য ভর্তি তালিকা</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('due_list') ?>" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য চাঁদা বকেয়া তালিকা</span></p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/inactive_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য বন্ধ তালিকা <span class="badge bg-danger"><?= $inactive_member_count ?></span>
                                </p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('current_member_list') ?>" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য চলমান তালিকা </span></p>

                            </a>
                        </li>




                    </ul>

                </li>
                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            হিসাব
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('submitted_reciept') ?>" class="nav-link <?= active_nav('account', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>জমা রশিদ</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('expanse_invoice') ?>" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>খরচ ভাউচার</p>

                            </a>
                        </li>

                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    লেন-দেন হিসাব

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="<?php echo base_url('deposite_costs') ?>" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    জমা-খরচ

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    রেওয়ামিল

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    পরিচালনা আয়- ব্যয় হিসাব
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    স্থিতি পত্র
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="<?php echo base_url('details_list') ?>" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ডিটেল লিস্ট
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                            <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ব্যাংক লেন-দেন
                                </p>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="fas fa-chart-line"></i>
                        <p>
                            স্টক
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>খাতাপত্র ক্রয়</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>খাতাপত্র বিক্রয়</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>স্টক হিসাব</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>মনিহারি স্টক</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আসবাবপত্র স্টক</p>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                            অডিট
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>১ম অংশ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>২য় অংশ</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>৩য় অংশ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>৪র্থ অংশ</p>
                            </a>
                        </li>


                    </ul>
                </li>



                <li class="nav-item has-treeview <?= active_open('applicant', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('applicant', $main_nav); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ইউজার ব্যবস্থাপনা
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/users_list/users_list') ?>"
                                class="nav-link <?= active_nav('applicant_pending_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ইউজার</p>

                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
            </li>


            </ul>
        </nav>
    </div>
</aside>