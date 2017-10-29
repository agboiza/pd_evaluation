<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MatchController extends Controller
{

    /**
     * Show fixtures and match
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $datos = array(
            "fixtures_entries" =>
                array( "teams" =>
                    array(array( "name" => "Black Mesa", "result" => "3"),array("name" => "Aperture Science", "result" => "1"))
                ,"id"=>"1", "id_match"=>"1", "location" => "Borealis", "kickoff" => date_create(date('Y-m-d H:i:s'))),
        );
        return $this->render( ':areafootball:indexMatch.html.twig', $datos);
    }

    /**
     *
     */
    public function readAction($id_match){
        $datos = array(
            "fixtures_entries" =>
                array( "teams" =>
                    array(array( "name" => "Black Mesa", "result" => "2"),array("name" => "Aperture Science", "result" => "1"))
                ,"id"=>"1", "id_match"=>"1", "location" => "Borealis", "kickoff" => date_create(date('Y-m-d H:i:s'))),
            "match_entries" =>
                array(
                    "id_match" => 1,
                    "players" => array(
                        array("team"=> "Black Mesa" , "players" => array("Gordon Freeman","G-Man","Eli Vance")),
                        array("team"=> "Aperture Science" , "players" => array("GLaDOS","Cubo de compañia","Chell")),
                        ),
                    "goals" => array(
                        array("player" => "GLaDOS", "time" => date_create(date('Y-m-d H:i:s'))),
                        array("player" => "Gordon Freeman", "time" => date_create(date('Y-m-d H:i:s'))),
                        array("player" => "G-Man", "time" => date_create(date('Y-m-d H:i:s')))),
                    "yellowcards" => array(
                        array("player" => "G-Man", "time" => date_create(date('Y-m-d H:i:s')))))
        );
        return $this->render( ':areafootball:indexMatch.html.twig', $datos);
    }
}
