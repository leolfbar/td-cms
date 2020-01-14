<?php
namespace Letoke\CocktailLtk\Controller;

/***
 *
 * This file is part of the "cocktail ltk" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Thomas Deasington <t.deasington@gmail.com>, IUT
 *           Kevin Danhiez <kevin-danhiez@outlook.fr>, IUT
 *           Léo Le Follezou Bar <leolfbar@gmail.com>, IUT
 *
 ***/

/**
 * CocktailController
 */
class CocktailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cocktailRepository
     *
     * @var \Letoke\CocktailLtk\Domain\Repository\CocktailRepository
     * @inject
     */
    protected $cocktailRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cocktails = $this->cocktailRepository->findAll();
        $this->view->assign('cocktails', $cocktails);
    }

    /**
     * action show
     *
     * @param \Letoke\CocktailLtk\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function showAction(\Letoke\CocktailLtk\Domain\Model\Cocktail $cocktail)
    {
        $this->view->assign('cocktail', $cocktail);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action random
     *
     * @return void
     */
    public function randomAction()
    {

    }
}
