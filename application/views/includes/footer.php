

<script
    type="text/javascript"
    src="<?php echo $base_url; ?>/assets/js/backend.js"></script>
<script
    type="text/javascript"
    src="<?php echo $base_url; ?>/assets/js/general_functions.js"></script>
<!-- 

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
           dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
       }
       return dumped_text;
   }


   var data = '{"id":14233,"firstName":"Chloe","lastName":"Doe","email":"chloe@newadfs.com","mobile":"012345679-0","phone":"0123456789-1","address":"Some Str. 123","city":"Some City","state":"Some State","zip":"12345","notes":"Test provider notes.","services":[13],"settings":{"username":"newUser2","notifications":true,"googleSync":true,"googleCalendar":"calendar-id","googleToken":"23897dfasdf7a98gas98d9","syncFutureDays":10,"syncPastDays":10,"calendarView":"default","password":"salman123","workingPlan":{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":null,"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":null,"sunday":null}}}';

   $.ajax({
       url: "http://localhost/helpy/index.php/api/v1/providers",
       type: "POST",
       data: data,
       dataType: 'json',
       cache: false,

       success: function(html){
           $('pre.html').text(dump(html));
       }
   }).done(function(html) {
       $('pre.html').text(dump(html));
       console.log("success");
   }).fail(function(html) {
       $('pre.html').text(dump(html.responseJSON));
       console.log("faild");
   });
</script>	
 -->


</body>


</html>
