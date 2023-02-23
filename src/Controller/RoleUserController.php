<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Role;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class RoleUserController extends AbstractController
{
    #[Route('/role/user', name: 'app_role_user')]
    public function index(): Response
    {
        return $this->render('role_user/index.html.twig', [
            'controller_name' => 'RoleUserController',
        ]);
    }

    #[Route('/listr', name: 'list_role')]
    public function afficher(ManagerRegistry $doctrine): Response
    {$repository= $doctrine->getRepository(Role::class);
    $Role=$repository->findall();
        return $this->render('role/listr.html.twig', ['role'=> $Role,]);}
    
    #[Route('/suppr/{id}', name: 'ss')]
    public function supprimer($id,request $request,EntityManagerInterface $em ,ManagerRegistry $doctrine): Response
    {$repository= $doctrine->getRepository(Role::class); 
        $Role=$repository->find($id);
            
            $em->remove($Role);
            $em->flush();
                return $this->redirectToRoute('list_role');
            }

    #[Route('/addr', name: 'ajouter')]
    public function ajouter(Request $request,EntityManagerInterface $em ):Response {
        $Role= new Role();
        $form=$this->createForm(RoleType::class,$Role);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
        $em->persist($Role);
        $em->flush();
            return $this->redirectToRoute('list_role');
        }
            return $this->render('role/Addr.html.twig',[
                'form2'=>$form->createView()]);
        }

    #[Route('/upp/{id}', name: 'reloadrole')]
    public function update(Request $request ,$id ,EntityManagerInterface $em,ManagerRegistry $doctrine ){
        $repository= $doctrine->getRepository(Role::class); 
        $Role=$repository->find($id);
        $form=$this->createForm(RoleType::class,$Role);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid()){
            $em=$this->getdoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('list_role');
        }
            return $this->render('role/updater.html.twig', [
                'form2'=>$form->createView() ]);}
}
