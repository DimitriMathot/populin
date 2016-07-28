<?php

namespace ApiBundle\Repository;

use ApiBundle\Entity\Country;
use ApiBundle\Entity\ZoneType;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityRepository;

/**
 * Class ZoneTypeRepository
 * @package ApiBundle\Repository
 */
class ZoneTypeRepository extends EntityRepository
{
    /**
     * @param Country $country
     * @return ZoneType[]
     */
    public function getZonesTypesByCountry(Country $country):array
    {
        return $this->findBy(['country' => $country]);
    }
}
