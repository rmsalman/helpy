<!DOCTYPE html>
<html lang="en">
<head>

<?php if(isset($profile) && !empty($profile) ) {?>
<title><?php echo $profile->first_name .' '. $profile->last_name ?> | <?php echo $company_name; ?> </title>
<?php }else{ ?>

    <title><?php echo $company_name; ?> | Easy!Appointments</title>
<?php } ?>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php if(isset($profile) && !empty($profile) ) {?>
  <meta property="og:url"           content="<?= base_url()?>/student/profile/<?= $profile->id ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?= $profile->first_name . ' ' . $profile->last_name ?>" />
  <meta property="og:description"   content="<?= $profile->notes ?>" />
  <meta property="og:image"         content="<?php echo $base_url; ?>/assets/img/logo.png" />
<?php } ?>

    <link rel="icon" type="image/x-icon"
          href="<?php echo $base_url; ?>/assets/img/favicon.ico">

    <?php
        // ------------------------------------------------------------
        // INCLUDE CSS FILES
        // ------------------------------------------------------------ ?>
 <!--    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/ext/bootstrap/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/bootswatch.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/ext/jquery-ui/jquery-ui.min.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/ext/jquery-qtip/jquery.qtip.min.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/ext/jquery-jscrollpane/jquery.jscrollpane.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/css/backend.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="<?php echo $base_url; ?>/assets/css/general.css">

    <?php
        // ------------------------------------------------------------
        // INCLUDE JAVASCRIPT FILES
        // ------------------------------------------------------------ ?>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/jquery/jquery.min.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/bootstrap/js/bootstrap.min.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/jquery-ui/jquery-ui.min.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/jquery-qtip/jquery.qtip.min.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/datejs/date.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/jquery-jscrollpane/jquery.jscrollpane.min.js"></script>
    <script
        type="text/javascript"
        src="<?php echo $base_url; ?>/assets/ext/jquery-mousewheel/jquery.mousewheel.js"></script>

   <!--  <script type="text/javascript">
    	// Global JavaScript Variables - Used in all backend pages.
    	var availableLanguages = <?php echo json_encode($this->config->item('available_languages')); ?>;
    	var EALang = <?php echo json_encode($this->lang->language); ?>;
    </script> -->


</head>

<body>
<nav id="header" class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div id="header-logo" class="navbar-brand">
                <img src="<?php echo $base_url; ?>/assets/img/logo.png">
                <span><?php echo $company_name; ?></span>
            </div>
            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" 
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        

        <div id="header-menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <?php if ($this->session->userdata('useremail')){?>
                <li class="active">
                    <a href="<?= $base_url; ?>student" class="menu-item">
                        Home
                    </a>
                </li>

                <li>
                    <a href="<?= $base_url?>wallet/check" class="menu-item">
                        Add Appoinments
                    </a>
                </li>

                   <li>
                       <a href="<?= $base_url?>messages" class="menu-item">
                           Messages
                       </a>
                   </li>

                   <li>
                       <a href="<?= $base_url?>wallet" class="menu-item">
                           Wallet
                       </a>
                   </li>
                <li>
                    <a href="<?= $base_url?>student/logout" class="menu-item">
                        Logout
                    </a>
                </li>
<?php }else {
                   ?>
                   <li>
                       <a href="<?= $base_url?>messages" class="menu-item">
                           Messages
                       </a>
                   </li>
<?php
if($this->session->userdata('role_slug') == 'admin') {
    ?>
    <li>
        <a href="<?= $base_url ?>messages/all" class="menu-item">
            Messages All
        </a>
    </li>
    <?php
}
?>

                   <li>
                       <a href="<?= $base_url?>wallet" class="menu-item">
                           Wallet
                       </a>
                   </li>


                   <?php
                   if($this->session->userdata('role_slug') == 'admin') {
                       ?>
                       <li>
                           <a href="<?= $base_url ?>wallet/all" class="menu-item">
                               Wallet All
                           </a>
                       </li>
                       <?php
                   }
                   ?>


                   <li>
                       <a href="<?= $base_url?>backend" class="menu-item">
                           Dashboard
                       </a>
                   </li>
                <?php
               }?>
            </ul>
        </div>
    </div>
</nav>

<div id="notification" style="display: none;"></div>


<div style="display: none;">
<img src="<?php echo $base_url; ?>/assets/img/logo.png" alt="<?php echo $company_name; ?>">
</div>
<div id="loading" style="display: none;">
    <img src="<?php echo $base_url; ?>/assets/img/loading.gif" />
</div>
