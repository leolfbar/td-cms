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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * recipeRepository
     *
     * @var \Letoke\CocktailLtk\Domain\Repository\RecipeRepository
     * @inject
     */
    protected $recipeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
    }

    /**
     * action show
     *
     * @param \Letoke\CocktailLtk\Domain\Model\Recipe $recipe
     * @return void
     */
    public function showAction(\Letoke\CocktailLtk\Domain\Model\Recipe $recipe)
    {
        $this->view->assign('recipe', $recipe);
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

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
