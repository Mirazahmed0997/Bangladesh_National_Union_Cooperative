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
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-center">সদস্য তালিকা</h5>
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
                                    <th rowspan="2">ক্রমিক</th>
                                    <th rowspan="2">সদস্য নম্বর</th>
                                    <th rowspan="2">সমিতির নাম</th>
                                    <th rowspan="2">কার্যালয়ের ঠিকানা</th>
                                    <th rowspan="2">মোবাইল</th>
                                    <th rowspan="2">ই-মেইল</th>
                                    <th rowspan="2">নিবন্ধন নম্বর</th>
                                    <th rowspan="2">সমিতির পক্ষে প্রতিনিধির নাম</th>
                                    <th rowspan="2">সমিতির পক্ষে প্রতিনিধির নাম</th>
                                    <th rowspan="2">আবেদনের তারিখ</th>
                                    <th rowspan="2">অবস্থান</th>

                                    <th colspan="5"></th>
                                </tr>

                                <!-- <tr>
                                    <th>স্বাক্ষর </th>
                                    <th>পদবী </th>
                                    <th>তারিখ</th>
                                </tr> -->
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($members as $row): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row->member_no; ?></td>
                                        <td><?= $row->association_name; ?></td>
                                        <td><?= $row->a_address; ?></td>
                                        <td><?= $row->a_contact; ?></td>
                                        <td><?= $row->a_email; ?></td>
                                        <td><?= $row->registration_no; ?></td>
                                        <td><?= $row->issuer; ?></td>
                                        <td><?= $row->i_designation; ?></td>
                                        <td><?= $row->created_at; ?></td>






                                        <td>
                                            <?php if ($row->active_status == 1): ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Inactive</span>
                                            <?php endif; ?>
                                        </td>


                                       

                                       <td>
                                            <?php if ($row->member_status == 'approved'): ?>
                                                <span class="badge bg-success">Approved</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Pending</span>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                        
                                       

                                        <a href="<?= base_url('Admin/form_view/' . $row->id); ?>"
                                            class="btn btn-warning btn-sm">ফরম</a>


                                        <a href="<?= base_url('Admin/delete_member/' . $row->id); ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>