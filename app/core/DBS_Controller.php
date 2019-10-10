<?php
if(!defined('BASEPATH'))die('Access to this script was rebuked!');

/**
 * ***************************************************************
 * MY_Controller                                                *
 * ***************************************************************
 * This Class extends the functionalities of the parent Class    *
 * ***************************************************************
 * CI_Controller.                                                *
 * ***************************************************************
 * This sub class is in-turn extended by other sub-classes       *
 * ***************************************************************
 * 
 * @package user-defined
 * @author aknessy
 * @copyright 2018/2019
 * @link None
 * 
 */

class MY_Controller extends CI_Controller
{
    /**
    * @var string
    **/
    const pageTitle = 'MY | ';

    /**
     * Class Constructor
     * 
     * @param None
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

}