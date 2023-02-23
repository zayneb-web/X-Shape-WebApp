<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormView;


class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    #[Route('/front ', name: 'front')]
    public function home (ManagerRegistry $doctrine): Response
    {
        $repository= $doctrine->getRepository(User::class); 

        $User=$repository->findall();
        return $this->render('Front/HomeFront.html.twig', [
            'User' => $User,
        ]);}
    #[Route('/about ', name: 'about')]
        public function about (ManagerRegistry $doctrine): Response
        {
            $repository= $doctrine->getRepository(User::class); 
    
            $User=$repository->findall();
            return $this->render('Front/about.html.twig', [
                'User' => $User,
            ]);}
   #[Route('/AddSuccess', name: 'AddSuccess')]
            public function ajouteSuccess()
        {
            return $this->render('Front/AddSuccess.html.twig', [
                'User' => 'L\'Votre registrement est effectué avec succès !',
            ]);
        }
        

    #[Route('/list', name: 'list_user')]
    public function afficher(ManagerRegistry $doctrine): Response
    {$repository= $doctrine->getRepository(User::class);
        $User=$repository->findall();
        return $this->render('user/list.html.twig', ['User'=> $User,]);}
    
    #[Route('/supp/{id}', name: 's')]
    public function supprimer($id,request $request,EntityManagerInterface $em ,ManagerRegistry $doctrine  ): Response 
        {$repository= $doctrine->getRepository(User::class);
            $User=$repository->find($id);
            $em->remove($User);
            $em->flush();
                return $this->redirectToRoute('list_user');
            }

    #[Route('/add', name: 'a')]
    public function ajouter(Request $request,EntityManagerInterface $em ): Response {
        $User= new User();
        $form=$this->createForm(UserType::class,$User);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
        $em->persist($User);
        $em->flush();
            return $this->redirectToRoute('list_user');
        }
            return $this->render('user/Add.html.twig',['f'=>$form->createView()]);
           
        }

    #[Route('/up/{id}', name: 'u')]
public function update(Request $request ,$id ,EntityManagerInterface $em,ManagerRegistry $doctrine){
    $repository= $doctrine->getRepository(User::class); 
    $User=$repository->find($id);
    $form=$this->createForm(UserType::class,$User);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
        $em->persist($User);
        $em->flush();
            return $this->redirectToRoute('list_user');
        }
            return $this->render('user/update.html.twig', 
            [
                'f'=>$form->createView() 
            ]);}
}
