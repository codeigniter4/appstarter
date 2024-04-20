<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class WebService extends Controller {

  protected $config; 
  public function __construct() {

    try {
      $this->config = config('Env');
    } catch (Exception $e) {
      log_message('error', 'Failed to load environment variables: ' . $e->getMessage());
      die('An error occurred while retrieving configuration.');
    }
  }

  public function get_social_media_info() {
    
    $facebookUrl = env('FACEBOOK_PAGE_URL', '');
    $twitterUrl = env('TWITTER_PAGE_URL', '');

    if (empty($facebookUrl) || empty($twitterUrl)) {
      die('Social media URLs are not configured.');
    }
  }
}
