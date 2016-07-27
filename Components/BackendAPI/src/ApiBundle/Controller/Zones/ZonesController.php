<?php

namespace ApiBundle\Controller\Zones;

use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class ZonesController
 * @package ApiBundle\Controller
 */
class ZonesController extends Controller
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
    public function getZoneAction($typeId)
    {
        return [];
    }
}
