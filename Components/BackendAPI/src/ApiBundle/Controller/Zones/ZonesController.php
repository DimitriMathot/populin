<?php

namespace ApiBundle\Controller\Zones;

use ApiBundle\Entity\Country;
use ApiBundle\Entity\Zone;
use ApiBundle\Entity\ZoneType;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Class TypesController.
 */
class ZonesController extends Controller
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
     * @ParamConverter("country", options={"mapping": {"country": "isoCode2Letters"}})
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
     * @ParamConverter("zoneType", options={"mapping": {"country": "country.isoCode2Letters", "slug": "slug"}})
     *
     * @param ZoneType $zoneType
     *
     * @return ZoneType
     */
    public function getZonesTypeAction(ZoneType $zoneType)
    {
        return $zoneType;
    }

    /**
     * @Route(
     *     methods={"GET"},
     *     name="get_zones_by_zone_type",
     *     path="zones-types/{slug}/zones"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Zones",
     *     statusCodes = {
     *         200 = "Return zones"
     *     }
     * )
     *
     * @ParamConverter("zoneType", options={"mapping": {"country": "country.isoCode2Letters", "slug": "slug"}})
     *
     * @param ZoneType $zoneType
     *
     * @return array
     */
    public function getZonesAction(ZoneType $zoneType)
    {
        return $this->get('api.repository.zone')->getZonesByZoneType($zoneType);
    }

    /**
     * @Route(
     *     methods={"GET"},
     *     name="get_zone",
     *     path="zones-types/{zone_type_slug}/zones/{zone_slug}"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Zones",
     *     statusCodes = {
     *         200 = "Return zone"
     *     }
     * )
     *
     * @ParamConverter("zone", options={"mapping": {"country": "type.country.isoCode2Letters", "zone_type_slug": "type.slug", "zone_slug": "slug"}})
     *
     * @param Zone $zone
     *
     * @return Zone
     */
    public function getZoneAction(Zone $zone)
    {
        return $zone;
    }
}
