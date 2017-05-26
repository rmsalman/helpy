<?php
//
//echo '<pre>';
//print_r($teachers);
//echo '</pre><br>';
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre><br>';

?>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<div class="container">


<h1 class="text-center "><?= $this->session->flashdata('error') ?></h1>

        <h2 class="text-center">Admins </h2>
        <table class="table dattable table-default table-bordered ">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

            if (!empty($admins)) {
                foreach ($admins as $teacher) {
                    ?>
                    <tr>
                        <td><?= $teacher->id ?></td>
                        <td><?= $teacher->first_name . '  ' . $teacher->last_name ?></td>
                        <td><?= $teacher->phone_number ?></td>
                        <td><?= $teacher->address . ' ' . $teacher->city . ' ' . $teacher->state . ' ' . $teacher->zip_code ?></td>
                        <td><a href="<?= base_url() ?>/messages/send/<?= $teacher->id ?>">Send Message</a> | <a
                                    href="<?= base_url() ?>/wallet/transfer/<?= $teacher->id ?>">Pay</a>
                            
                        </td>
                    </tr>
                    <?php
                }
            } else {

                ?>
                <tr>
                    <td colspan="5">
                        <center>Sorry No Teacher Found</center>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>


        <br><br><br>


    <?php
    if($this->session->userdata('role_slug') !== 'provider') {
        ?>

        <h1 class="text-center "><?= $this->session->flashdata('error') ?></h1>

        <h2 class="text-center">Teachers </h2>
        <table class="table dattable table-default table-bordered ">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Gen Des.</th>
                <th>Edu Des.</th>
                <th>Work Des.</th>
                <th>Address</th>
                <th>Reviews</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

            if (!empty($teachers)) {
                foreach ($teachers as $teacher) {
                    ?>
                    <tr>
                        <td><?= $teacher->id ?></td>
                        <td><?= $teacher->first_name . '  ' . $teacher->last_name ?></td>
                        <td><?= $teacher->phone_number ?></td>
                        <td><?= $teacher->notes ?></td>
                        <td><?= $teacher->education ?></td>
                        <td><?= $teacher->work ?></td>
                        <td><?= $teacher->address . ' ' . $teacher->city . ' ' . $teacher->state . ' ' . $teacher->zip_code ?></td>

                        <td><?= $teacher->rater ?></td>
                        <td><?= round($teacher->rating) ?></td>
                        <td><a href="<?= base_url() ?>/messages/send/<?= $teacher->id ?>">Send Message</a> | <a
                                    href="<?= base_url() ?>/wallet/transfer/<?= $teacher->id ?>">Pay</a>
                            <?php

                    if($this->session->userdata('role_slug') == 'admin'){
                            $status = $teacher->user_status;
                            if ($status == 1) {
                                $status_txt = "Block";
                                $status = 0;
                            } else {
                                $status_txt = "Unblock";
                                $status = 1;
                            }

                            ?>
                    |
                    <a href="<?= base_url()?>/student/profile/<?= $teacher -> id; ?>">Profile</a>
                            |
                            <a href="<?= base_url() ?>/profiles/status/<?= $teacher->id; ?>/<?= $status; ?>"><?= $status_txt; ?></a>
                    <?php } ?>




                        </td>
                    </tr>
                    <?php
                }
            } else {

                ?>
                <tr>
                    <td colspan="5">
                        <center>Sorry No Teacher Found</center>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>


        <br><br><br>

        <?php
    }    
    ?>


<?php
if($this->session->userdata('role_slug') !== 'student'){
?>
    <h2 class="text-center">Students </h2>
    <table class="table dattable table-default table-bordered ">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Full Name</th>
            <th>Phone </th>
            <th>Gen Des.</th>
            <th>Edu Des.</th>
            <th>Work Des.</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if(!empty($students)){
            foreach ($students as $teacher){
                ?>
                <tr>
                    <td><?= $teacher -> id?></td>
                    <td><?= $teacher -> first_name .'  '. $teacher -> last_name ?></td>
                    <td><?= $teacher -> phone_number?></td>
                    <td><?= $teacher -> notes ?></td>
                    <td><?= $teacher -> education ?></td>
                    <td><?= $teacher -> work ?></td>  
                    <td><?= $teacher -> address .' '. $teacher -> city .' '. $teacher -> state .' '. $teacher -> zip_code?></td>
                    <td><a href="<?= base_url()?>/messages/send/<?= $teacher -> id?>">Send Message</a> | <a
                            href="<?= base_url()?>/wallet/transfer/<?= $teacher -> id?>">Pay</a>
<?php

                if($this->session->userdata('role_slug') == 'admin'){
$status = $teacher -> user_status;

if($status == 1){
    $status_txt = "Block";
    $status = 0;
}else {
    $status_txt = "Unblock";
    $status = 1;
}

?>
                       | <a href="<?= base_url()?>/profiles/status/<?= $teacher -> id; ?>/<?= $status; ?>"><?= $status_txt; ?></a>
                    |
                    <a href="<?= base_url()?>/student/profile/<?= $teacher -> id; ?>">Profile</a>
                    |
                    <a href="<?= base_url()?>/messages/all/<?= $teacher -> id; ?>">Messages</a>
                    |
                    <a href="<?= base_url()?>/wallet/all/<?= $teacher -> id; ?>">Wallet</a>
                <?php } ?>
                    </td>
                </tr>
                <?php
            }
        }else {
            ?>
            <tr><td colspan="5"><center>Sorry No Student Found</center></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php


}

?>
</div>




<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        $('.dattable').DataTable();
    } );
</script>