<?php
namespace Letoke\CocktailLtk\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas Deasington <t.deasington@gmail.com>
 * @author Kevin Danhiez <kevin-danhiez@outlook.fr>
 * @author Léo Le Follezou Bar <leolfbar@gmail.com>
 */
class IngredientTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Letoke\CocktailLtk\Domain\Model\Ingredient
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Letoke\CocktailLtk\Domain\Model\Ingredient();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholisedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholised()
        );
    }

    /**
     * @test
     */
    public function setAlcoholisedForBoolSetsAlcoholised()
    {
        $this->subject->setAlcoholised(true);

        self::assertAttributeEquals(
            true,
            'alcoholised',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAllergenFreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAllergenFree()
        );
    }

    /**
     * @test
     */
    public function setAllergenFreeForStringSetsAllergenFree()
    {
        $this->subject->setAllergenFree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'allergenFree',
            $this->subject
        );
    }
}
