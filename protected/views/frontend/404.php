<?php 
$settings=$db->get_row('settings');
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $setting['name'];?></title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL.'/assets/frontend/css/styles.css';?>" />


<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>


 
    </head> 
<body >
	<div class="uk-container-expand back-image uk-background-cover  ">

<div class=" uk-grid "  >
           
                <div class="uk-width-1-1@m back uk-animation-fade " uk-height-viewport="expand: true" ><div class="uk-panel">
              
                <h1 class="uk-heading-`line uk-text-center  text-white uk-margin-xlarge-top">Looks like you are lost</h1>
                <a  href="<?php echo $link->link('home',frontend);?>"><h1 class="uk-heading-line uk-text-center  text-white uk-margin-xlarge-top">Go Back to home</h1></a>

</div>

</div>
<!-- 
<div class="uk-margin uk-light uk-margin-xlarge-top uk-align-center">
<h1 class="uk-heading-hero">Welcome.Back</h1>
</div> -->
</div>
               
           
</div>
</body>
</html>