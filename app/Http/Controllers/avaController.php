<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;



class avaController extends Controller
{
    public $windows = null;
    public $linux = null;
    public $android = null;
    public $mobile = null;
    public $tablet = null;
    public $desktop = null;
    public $phone = null;
    public $mac = null;
    public $platform = null;
    public function __construct()
    {
        $agent = new Agent();
        $this->windows = $agent->is('Windows');
        $this->linux = $agent->is('Linux');
        $this->android = $agent->is('AndroidOS');
        $this->platform = $agent->device();
        $this->mobile = $agent->isMobile();
        $this->tablet = $agent->isTablet();
        $this->desktop = $agent->isDesktop();
        $this->phone = $agent->isPhone();
    }
    public function index()
    {
        dd($this->phone);
        return view('welcome');
    }
}
