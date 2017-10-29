<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FixturesController extends Controller
{

    /**
     * Show only fixtures
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $datos = array(
            "fixtures_entries" => array(
                array( "teams" =>
                    array(array( "name" => "Black Mesa", "result" => "3"),array("name" => "Aperture Science", "result" => "1"))
                        ,"id"=>"1", "id_match"=>"1", "location" => "Borealis", "kickoff" => date_create(date('Y-m-d H:i:s'))),
                array( "teams" =>
                    array(array( "name" => "Zerg", "result" => ""),array( "name" => "Terran", "result" => ""))
                    ,"id"=>"2","id_match"=>"2", "location" => "Marte", "kickoff" => date_create(date('Y-m-d H:i:s')))
            )
        );
        return $this->render( ':areafootball:indexFixtures.html.twig', $datos);
    }
}
