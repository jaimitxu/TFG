<?php

namespace App\Controller;

use App\Entity\Entrada;
use App\Entity\Eventos;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class BuyController extends AbstractController
{


    #[Route('/buy',name:'app_buy')]
    public function index(Request $request, EntityManagerInterface $entityManager) :Response
    {
        // dd($request->get('inputnumerosniño'),$request->get('inputnumeros'),$request->getMethod());


        $eventos = $entityManager->getRepository(Eventos::class)->findAll();

        return $this->render('home/buy.html.twig', [
            'controller_name' => 'BuyController',
            'eventos' => $eventos,
        ]);
    }

 

    #[Route('/buy/{id}', name: 'app_buyEvento')]
    public function comprar(Request $request, Eventos $evento, EntityManagerInterface $entityManager, MailerInterface $mailer, SluggerInterface $slugger ): Response
    {
        
        

        // dd($this->getUser(),$this->getUser()->getEmail(), $request);

        if($request->getMethod()=="POST"){

            $usuario = $this->getUser();

            $email = new Email();

            $numeroEntradas = $request->get('inputNumEntrada');

            for ( $i=0 ; $i< $numeroEntradas; $i++ )
            {
                $entrada = new Entrada();
                $entrada->setUsuarioId($usuario);
                $entrada->setEventoId($evento);
                $entrada->setTipo($request->get('selectTipoEntrada'));
                $entrada->setFechaEntrada(new DateTime());

                $arrayEntradas[$i] = $entrada;
                

                $entityManager->persist($entrada);
            }
            
            $entityManager->flush();

            // dd($entrada);
            
            //tipo de entrada : selectTipoEntrada : $request->get('selectTipoEntrada')
            //numero de entradas : inputNumEntrada : $request->get('inputNumEntrada')
            //numero de

                $textoEntradas = '';

            for($e = 0; $e<$usuario->getEntradas()->count(); $e++){
                $textoEntradas = $textoEntradas.''.$evento->getEntradas()[$e]->getId().' ';
            }

            $email->from('victor.tm1904@gmail.com')->to($usuario->getEmail())->subject('SYMFONY TICKETs compra de entradas')
            ->text('¿Hola que tal? Has obtenido '.$request->get('inputNumEntrada').'entradas para (adultos/niños) '.'para el concierto de '.$evento->getNombre().
            '<br>'.'Tu numero de entradas es: '.$textoEntradas);

            $mailer->send($email);
        }


        return $this->render('home/buyEvento.html.twig', [
            'controller_name' => 'BuyController',
            'evento' => $evento,
            'entradas_restantes' => $this->entradasRestantes($evento),
        ]);
    }

    private function entradasRestantes(Eventos $evento): int
    {

        $numEntradasCompradas = $evento->getEntradas()->count();

        $numEntradasRestante = $evento->getCapacidad() - $numEntradasCompradas;

        return $numEntradasRestante;
    }

}
