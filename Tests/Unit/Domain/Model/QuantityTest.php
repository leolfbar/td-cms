<?php
namespace Letoke\CocktailLtk\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas Deasington <t.deasington@gmail.com>
 * @author Kevin Danhiez <kevin-danhiez@outlook.fr>
 * @author Léo Le Follezou Bar <leolfbar@gmail.com>
 */
class QuantityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Letoke\CocktailLtk\Domain\Model\Quantity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Letoke\CocktailLtk\Domain\Model\Quantity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getValue()
        );
    }

    /**
     * @test
     */
    public function setValueForFloatSetsValue()
    {
        $this->subject->setValue(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'value',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getUnitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUnit()
        );
    }

    /**
     * @test
     */
    public function setUnitForStringSetsUnit()
    {
        $this->subject->setUnit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'unit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIngredientReturnsInitialValueForIngredient()
    {
        self::assertEquals(
            null,
            $this->subject->getIngredient()
        );
    }

    /**
     * @test
     */
    public function setIngredientForIngredientSetsIngredient()
    {
        $ingredientFixture = new \Letoke\CocktailLtk\Domain\Model\Ingredient();
        $this->subject->setIngredient($ingredientFixture);

        self::assertAttributeEquals(
            $ingredientFixture,
            'ingredient',
            $this->subject
        );
    }
}
