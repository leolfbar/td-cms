<?php
namespace Letoke\CocktailLtk\Domain\Model;

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
 * Quantity
 */
class Quantity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Valeur
     *
     * @var float
     * @validate NotEmpty
     */
    protected $value = 0.0;

    /**
     * Unité
     *
     * @var string
     * @validate NotEmpty
     */
    protected $unit = '';

    /**
     * Ingredient
     *
     * @var \Letoke\CocktailLtk\Domain\Model\Ingredient
     */
    protected $ingredient = null;

    /**
     * Returns the value
     *
     * @return float $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param float $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the unit
     *
     * @return string $unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets the unit
     *
     * @param string $unit
     * @return void
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * Returns the ingredient
     *
     * @return \Letoke\CocktailLtk\Domain\Model\Ingredient $ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets the ingredient
     *
     * @param \Letoke\CocktailLtk\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function setIngredient(\Letoke\CocktailLtk\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
