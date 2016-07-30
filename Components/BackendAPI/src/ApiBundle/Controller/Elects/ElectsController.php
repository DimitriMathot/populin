<?php

namespace ApiBundle\Controller\Elects;

use ApiBundle\Entity\Elect;
use ApiBundle\Form\Type\ElectType;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

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
     *         200 = "Return elect",
     *         404 = "Elect not found"
     *     }
     * )
     *
     * @ParamConverter("elect", options={"mapping": {"slug": "slug"}})
     */
    public function getElectAction(Elect $elect)
    {
        return $elect;
    }


    /**
     * @Route(
     *     methods={"POST"},
     *     name="post_elect",
     *     path="elects/{slug}"
     * )
     *
     * @ApiDoc(
     *     resource = true,
     *     section="Elects",
     *     statusCodes = {
     *         201 = "Returned when created"
     *     }
     * )
     */
    public function createElectAction(Request $request)
    {
        $form = $this->get('form.factory')->create(ElectType::class);

        if ($form->handleRequest($request)->isValid()) {
            /** @var Elect $elect */
            $elect = $form->getData();
        }
    }
}
