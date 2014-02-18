<?php

abstract class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();


        // alleen admin toelaten in deze en alle childControllers
        $this->_checkIfUserHasRequiredAccessLevel(2);

        // andere stijl zetten
        $this->_template->setStyle('admin.min.css', true);
        $this->_template->setStyle('eigenstijl.css');
    }

}