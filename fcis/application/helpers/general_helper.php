<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function message_box($msg, $status = 'success')
{
	$response = '';
	if($msg !== '')
	{
		$response = '<div class="alert alert-'.$status.' no-margin" style="margin-bottom:15px!important;">'.$msg.'</div>';
	}
	return $response;
}

function merge_urls($all_urls = array(), $url)
{
	$url_slugs = array_keys($all_urls);
	if(!in_array($url, $url_slugs)){
		$external_url = array(
			$url => $url
		);

		$all_urls = array_merge($all_urls,$external_url);
	}

	return $all_urls;
}


function limit_url_slug($slug, $limit = 20)
{
	$end = '';
	if(mb_strlen($slug) > $limit){
		$end = '...';
	}
	return substr($slug, 0, $limit).$end;
}
