<?php

namespace ApiBundle\GeoJson;

use CrEOF\Spatial\PHP\Types\AbstractGeometry;
use GeoJson\GeoJson;
use GeoJson\Geometry\Geometry;

class GeoJsonFormatter
{
    /**
     * @param AbstractGeometry|null $geojson
     * @return Geometry|null
     */
    public static function format(AbstractGeometry $geojson = null)
    {
        return null === $geojson ? null :
            GeoJson::jsonUnserialize(
                json_decode($geojson->toJson(), true)
            )
        ;
    }
}