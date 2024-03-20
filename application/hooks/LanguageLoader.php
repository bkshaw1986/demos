 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageLoader {
   function initialize() {
       $ci =& get_instance();
       $ci->load->helper('language');
       /*$siteLang = $ci->session->userdata('site_lang');
       if($siteLang) {
         $ci->lang->load('content',$siteLang);
       }*/
	   $sitelang = 'english';
	   if(isset($_SESSION['site_lang'])){$sitelang = $_SESSION['site_lang'];}
	   $ci->lang->load('content',$sitelang);
   }
}