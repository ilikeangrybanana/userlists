<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserCard extends Component
{
    public $userEmail;
    public $userName;
    public $userEmoj;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userEmail = '', $userName = '', $userEmoj = '')
    {
        $this->userEmail = $userEmail;
        $this->userName = $userName;
        $this->userEmoj = $userEmoj;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-card');
    }
}
