<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\User;
 /**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_MANAGER")
  */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="indexadmin")
     */
    public function index()
    {
        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('ROLE_USER');

        // returns your User object, or null if the user is not authenticated
        // use inline documentation to tell your editor your exact User class

        $user = $this->get('security.token_storage')->getToken()->getUser();

        // Call whatever methods you've added to your User class
        // For example, if you added a getFirstName() method, you can use that.
        return new Response('Well hi there '.$user->getUsername());
    }


     /**
      * Require ROLE_ADMIN for only this controller method.
     *
      * @IsGranted("ROLE_MANAGER")
      */
    public function admin_dashboard()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $this->denyAccessUnlessGranted('ROLE_MANAGER', null, 'User tried to access a page without having ROLE_ADMIN');
        return new Response('Welcome to dashboard '.$user->getUsername());
    }
}
