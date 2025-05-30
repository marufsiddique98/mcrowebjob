<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $headerMenu  = getHeaderMenu();
        $siteInfo    = getSiteInfo();
        $siteLogo    = $siteInfo['site_dark_logo'];
        $userInfo    = getUserRole();
        return view('components.header', compact('headerMenu', 'siteLogo', 'userInfo'));
    }
}
