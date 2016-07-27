<?php

namespace ApiBundle\Controller\Zones;

use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class TypesController
 * @package ApiBundle\Controller\Zones
 */
class ZonesTypesController extends Controller
{

    /**
     * @ApiDoc(
     *   resource = true,
     *     section="Zones",
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     */
    public function getTypesAction()
    {
        return [];
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *     section="Zones",
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     */
    public function getTypeAction($zoneId)
    {
        return [];
    }
}
