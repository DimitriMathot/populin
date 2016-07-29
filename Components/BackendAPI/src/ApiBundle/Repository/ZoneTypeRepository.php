<?php

namespace ApiBundle\Repository;

use ApiBundle\Entity\Country;
use ApiBundle\Entity\ZoneType;
use Doctrine\ORM\EntityRepository;

/**
 * Class ZoneTypeRepository.
 */
class ZoneTypeRepository extends EntityRepository
{
    /**
     * @param Country $country
     *
     * @return ZoneType[]
     */
    public function getZonesTypesByCountry(Country $country):array
    {
        return $this->findBy(['country' => $country]);
    }
}
