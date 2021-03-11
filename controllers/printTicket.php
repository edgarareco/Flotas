<?php

class PrintTicket extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index('Sorry ...! You can not Accsess This Page');
    }

    /*
     * metodo Booker class.
     */

    function index($re) {
        $this->view->bookingTicket = $this->searchbookingTicket($re);
        $this->view->busTicket = $this->searchBusTicket($re);
        $this->view->render('printTicket/index');
    }

    /*
     * Metodo SystemUser
     */
    
    
    function searchbookingTicket($val) {
        return $this->model->searchbookingTicket($val);
    }

    function searchBusTicket($val) {
        return $this->model->searchBusTicket($val);
    }
    
    function searchBusTicketInfo() {
        $this->model->searchBusTicketInfo();
    }

    function printTicket() {
        $this->model->printTicket();
    }

}

?>
