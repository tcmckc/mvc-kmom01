<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardController extends AbstractController
{

    /**
    * @Route("/card", name="card")
    */
    public function home(): Response
    {
        $data = [
            'title' => 'Card game',
            'link_to_deck' => $this->generateUrl('card-deck'),
            'link_to_shuffle' => $this->generateUrl('card-deck-shuffle'),
            'link_to_draw' => $this->generateUrl('card-deck-draw'),
        ];
        return $this->render('card/home.html.twig', $data);
    }

    /**
    * @Route("/card/deck", name="card-deck")
    */
    public function deck(): Response
    {
        $deck = new \App\Card\Deck();
        $data = [
            'title' => 'Deck',
            'deck' => $deck->getDeck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    /**
    * @Route("/card/deck/shuffle", name="card-deck-shuffle")
    */
    public function shuffle(): Response
    {
        $deck = new \App\Card\Deck();
        $deckArr = $deck->getDeck();
        $data = [
            'title' => 'Shuffle',
            'deck' => $deck->getShuffle($deckArr),
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    /**
    * @Route("/card/deck/draw", name="card-deck-draw")
    */
    public function draw(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $count = $request->request->get("count") ?? 52;
        $draw = new \App\Card\Draw();
        $cardsLeft = $draw->counter($count);
        $data = [
            'title' => 'Draw',
            'draw' => $draw->getDraw(),
            'counter' => $cardsLeft,
        ];
        $session->set("count", $cardsLeft);
        return $this->render('card/deck-draw.html.twig', $data);
    }

    /**
    * @Route("/card/deck/draw", name="card-deck-draw")
    */
    public function draw(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $count = $request->request->get("count") ?? 52;
        $draw = new \App\Card\Draw();
        $cardsLeft = $draw->counter($count);
        $data = [
            'title' => 'Draw',
            'draw' => $draw->getDraw(),
            'counter' => $cardsLeft,
        ];
        $session->set("count", $cardsLeft);
        return $this->render('card/deck-draw.html.twig', $data);
    }
}
