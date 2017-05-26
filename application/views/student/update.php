<?php echo validation_errors(); ?>

<?php echo form_open('student/update'); ?>
<div class="">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Name" value="<?= $profile->first_name;?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Name" value="<?= $profile->last_name;?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $profile->email;?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Number" value="<?= $profile->phone_number;?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" value="<?= $profile->address;?>">
        </div>
        <div class="form-group">
            <label>Zipcode</label>
            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" value="<?= $profile->zip_code;?>">
        </div>
        <div class="form-group">
            <label>Work</label>
            <input type="text" class="form-control" name="work" placeholder="Describe Your Work Profile" value="<?= $profile->work;?>">
        </div>
        <div class="form-group">
            <label>Education</label>
            <textarea class="form-control" name="education" placeholder="Describe Education Profile"><?= $profile->education;?></textarea>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="notes" placeholder="Describe Yourself"><?= $profile->notes;?></textarea>
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
