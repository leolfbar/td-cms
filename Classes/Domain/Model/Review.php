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
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $rate = 0;

    /**
     * commentaire
     *
     * @var string
     * @validate NotEmpty
     */
    protected $comment = '';

    /**
     * Returns the rate
     *
     * @return int $rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets the rate
     *
     * @param int $rate
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
