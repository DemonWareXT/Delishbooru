<?php
namespace MyImouto;

/**
 * Place your custom configuration here, instead
 * of modifying the default_config.php file.
 *
 * Values placed here will overwrite the values in the parent class.
 * List the properties you want to overwrite.
 */
class LocalConfig extends DefaultConfig
{
    public $app_name      = 'Delishbooru';

    public $server_host   = 'delishbooru.com';

    public $url_base      = 'http://delishbooru.com';

    public $admin_contact = 'admin@myimouto';
    
    public $download_filename_prefix = "delish";
    
    public $starting_level = 20;
    
    public $member_post_limit = 20;
}
