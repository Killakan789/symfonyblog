<?php

namespace App\Controller;


use App\Entity\Blog;
use App\Entity\BlogCategory;
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
        $this->denyAccessUnlessGranted('ROLE_MANAGER');

        // returns your User object, or null if the user is not authenticated
        // use inline documentation to tell your editor your exact User class

        $user = $this->get('security.token_storage')->getToken()->getUser();
		$articles = $this->getDoctrine()
			->getRepository(Blog::class)
			->findAll();
	    $categories = $this->getDoctrine()
		    ->getRepository(BlogCategory::class)
		    ->findAll();
	    $users = $this->getDoctrine()
		    ->getRepository(User::class)
		    ->findAll();

	    return $this->render('admin/index.html.twig', [
		    'user' => $user,
		    'articles' => $articles,
		    'categories' => $categories,
		    'users' => $users,
	    ]);
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
