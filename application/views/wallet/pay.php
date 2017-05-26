




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="frm1" style="padding: 0; margin: 0;">
<input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="business" value="zartash.tahir042@gmail.com" />
<input type="hidden" name="quantity" value="1" />
<input type="hidden" name="item_name" value="Membership" />
<input type="hidden" name="item_number" value="<?= $this->session->userdata('user_id'); ?>" />
<input type="number" min="20"  name="amount" value="" />
<input type="hidden" name="shipping" value="0" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="notify_url" value="<?php echo base_url() ?>wallet/seccess">
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="rm" value="2" >
<!-- <input type="hidden" name="email" value="<?php echo $email ?>" > -->
<input type="hidden" name="return" value="<?php echo base_url() ?>wallet/success">


<button type="submit" >Submit</button>

</form>
