<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class SocialController extends AppController
{

    public $page_title = 'Social partials';
    
    public function index()
    {

    }

    public function sociable()
    {
        $this->page_title = 'Social Links partial';
    }
}
