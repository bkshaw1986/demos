<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('get_title_tags')){
   function get_title_tags($uri_string){
		$PageTitle = 'YatraCafe: Simplifying Money Transfer, AEPS, & Bill Payments';
		$PageKeywords = 'Money Transfer, AEPS, BBPS, Recharges, Bank Account, Loans, Credit Cards, Insurance, Flights, Trains, Hotels, Cabs, Bus, Visa, Forex, Holidays, Fixed Departure Flights, PAN Verification, PAN & Aadhaar Linking';
		$PageDescription = 'YatraCafe: Start Your Own Secure Money Transfer Franchise, Earn up to Rs.1 Lakh/month. Explore Bill Payment, AEPS & More Services for Business Success';
		$OgImage = 'og-image.webp';

		if($uri_string=="" || $uri_string=="home"){
			$PageTitle = 'YatraCafe: Simplifying Money Transfer, AEPS, & Bill Payments';
			$PageDescription = 'YatraCafe: Start Your Own Secure Money Transfer Franchise, Earn up to Rs.1 Lakh/month. Explore Bill Payment, AEPS & More Services for Business Success';
		}
		if($uri_string=="html-to-pdf"){
			$PageTitle = 'About Yatra Cafe Financial Services | Secure & Reliable';
			$PageDescription = 'Start Your Own Secure Money Transfer Franchise | Earn up to Rs.1 Lakh/month with YatraCafe. Explore Bill Payment, AEPS & More Services.: About';
		}
		
		$title_tags = array(
			'PageTitle' => $PageTitle, 
			'PageKeywords' => $PageKeywords,
			'PageDescription' => $PageDescription, 
			'OgImage' => $OgImage
		);
		return $title_tags;
   }
}
?>