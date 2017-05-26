<?php

//echo '<pre>';
//print_r($profile);
//echo '</pre>';
//
//
//
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
//
//
//echo  $this->session->userdata('user_id');
?>
<div class="container">





    <table class="table table-default table-bordered ">
    <thead>
        <tr>
            <th>To ID</th>
            <th>To Name</th>
            <th>Reciever</th>
            <th>Sending From</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $profile->id?></td>
            <td><?= $profile->first_name .' '. $profile->last_name?></td>
            <td><?= $profile->email?></td>
            <td><?= $this->session->userdata('first_name') . ' ' . $this->session->userdata('last_name') ?></td>
        </tr>
    </tbody>
</table>


<div class="row">
    <form action="" method="POST">

        <div class="form-group">
            <label class="col-sm-4" for="message">Type Money</label>
            <div class="col-sm-8">
                <input type="number" value="20" min="20" required="required" name="message" id="message" class="form-control" placeholder="Type Currency" >
            </div>
        </div>

        <div class="clearfix"></div>

        <br>
        <div class="form-group">
            <label class="col-sm-4" for="message"></label>
            <div class="col-sm-8">
                <button class="btn btn-success" type="submit">Send Now</button>
            </div>
        </div>
    </form>
</div>
</div>



