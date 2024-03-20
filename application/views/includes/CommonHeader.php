<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
  $TitleTagsArray = get_title_tags($this->uri->uri_string());
  $PageTitle = $TitleTagsArray['PageTitle'];
  $PageKeywords = $TitleTagsArray['PageKeywords'];
  $PageDescription = $TitleTagsArray['PageDescription'];
  $OgImage = $TitleTagsArray['OgImage'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $PageTitle;?></title>
    <meta name="keywords" content="<?php echo $PageKeywords;?>">
    <meta name="description" content="<?php echo $PageDescription;?>">
    <meta property="og:title" content="<?php echo $PageTitle;?>">
    <meta property="og:description" content="<?php echo $PageDescription;?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo base_url().$this->uri->uri_string();?>">
    <meta property="og:image" content="<?php echo base_url().'assets/images/og-banner/'.$OgImage;?>">
    <meta property="og:image:secure_url" content="<?php echo base_url().'assets/images/og-banner/'.$OgImage;?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?php echo base_url();?>">
    <link href="<?php echo base_url().$this->uri->uri_string();?>" rel="canonical">    
  </head>
  <body>