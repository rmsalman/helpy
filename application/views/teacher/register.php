<?php echo validation_errors(); ?>
<div class="pre text-center text-red"></div>
<?php // echo form_open('student/register'); ?>

<style>
    .text-red {
    color: red;
}
</style>
<div class="">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name" value="<?= set_value('first_name');?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Name" value="<?= set_value('last_name');?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email');?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Number" value="<?= set_value('phone_number');?>">
        </div>

        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Number" value="<?= set_value('phone_number');?>">
        </div>
 

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="" id="password" placeholder="Password">
        </div>

        <button type="button" onclick="add_teacher()" class="btn btn-primary btn-block">Submit</button>
    </div>
</div>
<?php // echo form_close(); ?>






<script
    type="text/javascript"
    src="<?php echo $base_url; ?>/assets/js/backend.js"></script>
<script
    type="text/javascript"
    src="<?php echo $base_url; ?>/assets/js/general_functions.js"></script>


<script>
  
function dump(arr,level) {
       var dumped_text = "";
       if(!level) level = 0;

       //The padding given at the beginning of the line.
       var level_padding = "";
       for(var j=0;j<level+1;j++) level_padding += "    ";

       if(typeof(arr) == 'object') { //Array/Hashes/Objects
           for(var item in arr) {
               var value = arr[item];

               if(typeof(value) == 'object') { //If it is an array,
                   dumped_text += level_padding + "'" + item + "' ...\n";
                   dumped_text += dump(value,level+1);
               } else {
                   dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
               }
           }
       } else { //Stings/Chars/Numbers etc.
           dumped_text = arr;
       }
       return dumped_text;
   }

function add_teacher (){

 

var first_name  = $('#first_name').val();
var last_name   = $('#last_name').val();
var email       = $('#email').val();
var phone_number = $('#phone_number').val();
var username    = $('#username').val(); 
var password    = $('#password').val(); 

if(first_name == "" || last_name == "" || email == "" || phone_number == "" || username == "" || password == "")
{
    alert('All Fields are empty!');
}
else 
{


   var data = '{"id":14233,"firstName": "'+first_name+'","lastName": "'+last_name+'","email": "'+email+'","mobile":"0123456793","phone": "'+phone_number+'","address":"Some Str. 123","city":"Some City","state":"Some State","zip":"12345","notes":"Test provider notes.","services":[13],"settings":{"username": "'+username+'","notifications":false,"googleSync":false,"googleCalendar":"","googleToken":"","syncFutureDays":5,"syncPastDays":5,"calendarView":"default","password": "'+password+'","workingPlan":{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":null,"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":null,"sunday":null}}}';

   $.ajax({
       url: "<?php echo base_url()?>/index.php/api/v1/providers",
       type: "POST",
       data: data,
       dataType: 'json',
       cache: false,

       success: function(html){
           $('.pre').text(dump(html));
       }
   }).done(function(html) {
       $('.pre').html('You can login with these credentials at <a href="<?= base_url()?>/">Here</a>');
       console.log("success");
   }).fail(function(html) {
       $('.pre').text(dump(html.responseJSON.message));
       console.log("faild");
   });

}

}


</script>   



</body>


</html>
