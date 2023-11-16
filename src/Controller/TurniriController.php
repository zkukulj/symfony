<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class TurniriController extends AbstractController
{
    #[Route('/turniri')]
    public function index(Connection $connection): Response
    {

        $sudionici=[];
        $turniri = $connection->fetchAllAssociative('select turniri.ID,turniri.NAZIV,turniri.DAT__OD,
        turnir_galerija.SLIKE FROM turniri 
        LEFT OUTER JOIN turnir_galerija ON turniri.ID=turnir_galerija.TURNIRID WHERE turnir_galerija.SLIKE!="" ORDER BY turniri.DAT__OD desc');
        foreach( $turniri as $tour => $key ){
            $array = json_decode($key["SLIKE"], true);
            $turniri[$tour]["SLIKE"] = $array[0]['name'];
            // retrieve participants for each tour ID
            $participants = $connection->fetchAllAssociative('select TURNIRID,IGRAC from turnir_sudionici where godkjen=0 and TURNIRID='.$key["ID"]);
            array_push($sudionici,$participants);
            $turniri[$tour]["igraci"] = $participants;
        };
        unset($array);

            return $this->render('turniri/index.html.twig', [
                'turniri' => $turniri,
            ]);
    }


    #[Route('/turniri/{slug}', methods: ['GET'], name: 'turniri_post')]
    public function postShow(Connection $connection,string $slug): Response
    {
        $turniri = $connection->fetchAllAssociative('select turniri.ID,turniri.NAZIV,turniri.LOKACIJA,turniri.DAT__OD,turniri.tour_content,turnir_galerija.SLIKE FROM turniri LEFT OUTER JOIN turnir_galerija ON turniri.ID=turnir_galerija.TURNIRID WHERE turnir_galerija.SLIKE!="" and turniri.ID='.$slug);

        return $this->render('turniri/turniri_show.html.twig', [
            'turniri' => $turniri
        ]);
    }

    #[Route('/turniri/search', methods: ['GET'], name: 'turniri_search')]
    public function search(Request $request): Response
    {
        $query = $request->query->get('q', '');
        $limit = $request->query->get('l', 10);

        if (!$request->isXmlHttpRequest()) {
            return $this->render('turniri/search.html.twig', ['query' => $query]);
        }

    }


    #[Route('/rankings', methods: ['GET'], name: 'turniri_rankings')]
    public function turniri_rankings(Connection $connection): Response
    {
        $rankings = $connection->fetchAllAssociative('select * from rankings');

        return $this->render('turniri/rankings.html.twig', [
            'rankings' => $rankings
        ]);

    }
}