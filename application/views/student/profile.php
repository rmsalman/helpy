<h2 class="text-center"><?php echo $this->session->flashdata('user_loggedin') . $this->session->flashdata('login_failed') . $this->session->flashdata('user_loggedout'); ?></h2>
<?php
// echo '<pre>';
// print_r();
// echo '</pre>';

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

<style>
    table>thead>tr>th, .table>thead>tr>th, table>tbody>tr>th, .table>tbody>tr>th, table>tfoot>tr>th, .table>tfoot>tr>th, table>thead>tr>td, .table>thead>tr>td, table>tbody>tr>td, .table>tbody>tr>td, table>tfoot>tr>td, .table>tfoot>tr>td {
        border: 2px solid #ecf0f1 !important;
    }
</style>

<div class="container">

    <h2 class="text-center">Profile</h2>





<!-- <a href="" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a> -->

<?php

if($pager_id['id'] !== $this->session->userdata('user_id')){
    if($profile->id_roles == 2){
?>


<div class="row">
<div class="pull-right col-sm-4">
         <form action="" method="POST">
                 <div class="row">
                        <div class="col-sm-9">
                        <input type="number" min="0" required="" placeholder="Rating 0-5" class="form-control" max="5" name="rating_value" value="" >
                        </div>
                        <div class="col-sm-3">
                        <button name="rate" class="btn pull-right btn-primary">Submit</button>
                        </div>
                </div>
            </form>
</div>
</div>
 <br>

<?php
    }
}

    ?>

<table class="table table-borderd table-hover" >
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Email</th>
        <th>Gen Des.</th>
        <th>Edu Des.</th>
        <th>Work Des.</th>
        <th>user_zipcode</th>
        <th>Address</th>
      <?php if($profile->id_roles == 2) {?>  <th>Reviews</th> <th>Rating</th><?php }?>
        <th>Action</th>
    </thead>
    <tbody>
        <td><?= $profile->id ?></td>
        <td><?= $profile->first_name . ' ' . $profile->last_name ?></td>
        <td><?= $profile->email ?></td>
        <td><?= $profile->notes ?></td>
        <td><?= $profile->education ?></td>
        <td><?= $profile->work ?></td>
        <td><?= $profile->zip_code ?></td>
        <td><?= $profile->address?></td>
        <?php if($profile->id_roles == 2) {?><td><center> <?= $rating_num; ?> </center></td><td> <center>  <?= round($rating->avg_rating) ?> </center></td><?php }?>
        <td>
        <a href="<?= base_url()?>student/update/<?= $profile->id?>">Update Profile</a> | <a href="http://www.facebook.com/sharer.php?u=<?= base_url() ?>/student/profile/<?= $profile->id  ?>">Share</a></td>
    </tbody>
</table>
<?php 
if($profile -> id_roles == '3' ) {
    ?>
    <br><br>
    <h2 class="text-center">Appointments</h2>
    <table class="table dattable table-borderd table-hover" >
        <thead>
        <th>Book DateTime</th>
        <th>Start DateTime</th>
        <th>End DateTime</th>   
        <th>Provider ID</th>
        <th>Provider Status</th>
        <th>Provider Name</th>
        <th>Action</th>
        </thead>
        <tbody>
    <?php

    if(isset($appointments) && !empty($appointments)) {
    foreach ($appointments as $appointment) {
        ?>
        <tr>
            <td> <?= date('d-M-Y h:i:s:a', strtotime($appointment->book_datetime)) ?></td>
            <td><?= date('d-M-Y h:i:s:a', strtotime($appointment->start_datetime)) ?></td>
            <td><?= date('d-M-Y h:i:s:a', strtotime($appointment->end_datetime)) ?></td>
            <td><?= $appointment->id_users_provider ?></td>
            <td><?= ($appointment->noter == '') ? 'pending' :  $appointment->noter ?></td>
            <td><?= $appointment->first_name . ' ' . $appointment->last_name ?></td>
            <td><a href="<?= base_url()?>messages/send/<?= $appointment->id_users_provider  ?>">Message</a></td>
        </tr>
        <?php
    }
}else {
    ?>
    <tr><td colspan="8"><center>No data Found</center></td></tr>
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
        $('.dattable').DataTable( {
            "order": [[ 0, "desc" ]]
        });
    } );
</script>
