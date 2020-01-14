<?php
namespace Letoke\CocktailLtk\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas Deasington <t.deasington@gmail.com>
 * @author Kevin Danhiez <kevin-danhiez@outlook.fr>
 * @author Léo Le Follezou Bar <leolfbar@gmail.com>
 */
class UstensileTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Letoke\CocktailLtk\Domain\Model\Ustensile
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Letoke\CocktailLtk\Domain\Model\Ustensile();
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
