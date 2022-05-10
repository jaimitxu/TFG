<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Usuarios;

use App\Form\UsuarioType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UsuariosController extends AbstractController
{

    //metodo que muestra un formulario simple de usuarios
    #[Route('/usuarios', name: 'app_usuarios')]
    public function index(): Response
    {

        $usuario = new Usuarios();

        $form = $this->createForm(UsuarioType::class,$usuario,['action' => $this->generateUrl('app_usuarios_alta')]);

        return $this->renderForm('usuarios/index.html.twig', [
            'controller_name' => 'UsuariosController',
            'form' => $form,
        ]);
    }


    //Metodo que da de alta a los usuarios
    #[Route('/usuarios/alta', name:'app_usuarios_alta')]
    public function altaUsuario(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher): Response
    {

        $usuario = new Usuarios(); //Creamos un usuario nuevo (vacio)

        $form = $this->createForm(UsuarioType::class,$usuario); // creamos la plantilla de un formulario de tipo Usuario (vacio)

        $form->submit($request->request->all('usuario')); //recogemos de la request la informacion del formulario del twig de tipo usuario y lo introducimos dentro del formulario vacio.

        $usuario = $form->getData(); //cogemos los datos del formulario y los convertimos en un objeto "Usuario"

        $contra = $usuario->getContrasena();

        $hashedContra = $passwordHasher->hashPassword($usuario,$contra);

        $usuario->setContrasena($hashedContra);

        $entityManager = $doctrine->getManager(); //creamos el manager para gestionar la subida a la base de datos
        
        $entityManager->persist($usuario); //persistimos el usuario en la base de datos
        $entityManager->flush(); //guardamos los cambios en la base de datos



        return $this->redirectToRoute('app_usuarios');
    }

    #[Route ('usuarios/login', name:'app_usuarios_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // dd($authenticationUtils);
        // get the login error if there is one
         $error = $authenticationUtils->getLastAuthenticationError();

         // last username entered by the user
            //dd($authenticationUtils->getLastUsername());
        $lastUsername = $authenticationUtils->getLastUsername();
        

        return $this->render('usuarios/login.html.twig',[
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

}
