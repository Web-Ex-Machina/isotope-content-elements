<?php

namespace WEM\IsotopeContentElementsBundle\ContaoManager;

use WEM\IsotopeContentElementsBundle\IsotopeContentElementsBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(IsotopeContentElementsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['isotope-content-elements']),
        ];
    }
}
