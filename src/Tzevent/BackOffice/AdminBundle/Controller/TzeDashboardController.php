<?php

namespace App\Tzevent\BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Tzevent\Service\MetierManagerBundle\Utils\ServiceName;

/**
 * Class TzeDashboardController
 */
class TzeDashboardController extends Controller
{
    /**
     * Afficher le tableau de bord
     * @return Render page
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:TzeDashboard:index.html.twig');
    }
}
