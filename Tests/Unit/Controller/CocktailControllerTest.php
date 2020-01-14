<?php
namespace Letoke\CocktailLtk\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Thomas Deasington <t.deasington@gmail.com>
 * @author Kevin Danhiez <kevin-danhiez@outlook.fr>
 * @author Léo Le Follezou Bar <leolfbar@gmail.com>
 */
class CocktailControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Letoke\CocktailLtk\Controller\CocktailController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Letoke\CocktailLtk\Controller\CocktailController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCocktailsFromRepositoryAndAssignsThemToView()
    {

        $allCocktails = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cocktailRepository = $this->getMockBuilder(\Letoke\CocktailLtk\Domain\Repository\CocktailRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cocktailRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCocktails));
        $this->inject($this->subject, 'cocktailRepository', $cocktailRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cocktails', $allCocktails);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCocktailToView()
    {
        $cocktail = new \Letoke\CocktailLtk\Domain\Model\Cocktail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cocktail', $cocktail);

        $this->subject->showAction($cocktail);
    }
}
