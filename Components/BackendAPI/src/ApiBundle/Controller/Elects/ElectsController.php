<?php

namespace ApiBundle\Controller\Elects;

use ApiBundle\Entity\Country;
use ApiBundle\Entity\Elect;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Class ElectsController.
 */
class ElectsController extends Controller
{
    /**
     * @Route(
     *     methods={"GET"},
     *     name="get_elect",
     *     path="elects/{slug}"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Elects",
     *     statusCodes = {
     *         200 = "Returned when successful"
     *     }
     * )
     *
     * @ParamConverter("elect", options={"mapping": {"slug": "slug"}})
     */
    public function getElectsFromZoneAction(Elect $elect)
    {
        return $elect;
    }
}
