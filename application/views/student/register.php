<?php echo validation_errors(); ?>

<?php echo form_open('student/register'); ?>
<div class="">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Name" value="<?= set_value('first_name');?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Name" value="<?= set_value('last_name');?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email');?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Number" value="<?= set_value('phone_number');?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" value="<?= set_value('address');?>">
        </div>
        <div class="form-group">
            <label>Zipcode</label>
            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" value="<?= set_value('zipcode');?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="notes" placeholder="Describe Yourself" value="<?= set_value('notes');?>">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password2" placeholder="confirm Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</div>
<?php echo form_close(); ?>
