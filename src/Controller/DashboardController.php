<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/account")
 */
abstract class DashboardController extends Controller
{
    protected $userRoles;

    public function __construct() {
        $this->userRoles = $this->getUser()->getRoles();
    }

}