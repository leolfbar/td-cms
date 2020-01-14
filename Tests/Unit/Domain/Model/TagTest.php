<?php
namespace Letoke\CocktailLtk\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas Deasington <t.deasington@gmail.com>
 * @author Kevin Danhiez <kevin-danhiez@outlook.fr>
 * @author Léo Le Follezou Bar <leolfbar@gmail.com>
 */
class TagTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Letoke\CocktailLtk\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Letoke\CocktailLtk\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }
}
