<?php

require 'Application.php';

class Main
{
    private $application;

    public function __construct()
    {
        $this->application = new Application;
    }

    public function main()
    {
        $this->application->lancerApplication();
    }
}
