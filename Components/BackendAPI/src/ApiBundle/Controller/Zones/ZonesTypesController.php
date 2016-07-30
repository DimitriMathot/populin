<?php

namespace ApiBundle\Controller\Zones;

use ApiBundle\Entity\Country;
use ApiBundle\Entity\ZoneType;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ZonesTypesController extends Controller
{

    /**
     * @Route(
     *     methods={"GET"},
     *     name="get_zones_types",
     *     path="zones-types"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Zones",
     *     statusCodes = {
     *         200 = "Returned when successful"
     *     }
     * )
     *
     * @ParamConverter("country", options={"mapping": {"_locale": "isoCode2Letters"}})
     *
     * @param Country $country
     *
     * @return ZoneType[]|array
     */
    public function getZonesTypesAction(Country $country)
    {
        return $this->get('api.repository.zone_type')->getZonesTypesByCountry($country);
    }

    /**
     * @Route(
     *     methods={"GET"},
     *     name="get_zone_type",
     *     path="zones-types/{slug}"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Zones",
     *     statusCodes = {
     *         200 = "Return zone type",
     *         404 = "Zone type not found"
     *     }
     * )
     *
     * @ParamConverter("zoneType", options={"mapping": {"_locale": "country.isoCode2Letters", "slug": "slug"}})
     *
     * @param ZoneType $zoneType
     *
     * @return ZoneType
     */
    public function getZonesTypeAction(ZoneType $zoneType)
    {
        return $zoneType;
    }
}
