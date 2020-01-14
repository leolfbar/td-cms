<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Letoke.CocktailLtk',
            'Pi1',
            [
                'Recipe' => 'list, show, search, highlight, random',
                'Review' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Recipe' => 'search, random, highlight',
                'Review' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Letoke.CocktailLtk',
            'Pi2',
            [
                'Cocktail' => 'show, list, search, random, highlight'
            ],
            // non-cacheable actions
            [
                'Cocktail' => 'search, random'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = cocktail_ltk-plugin-pi1
                        title = LLL:EXT:cocktail_ltk/Resources/Private/Language/locallang_db.xlf:tx_cocktail_ltk_pi1.name
                        description = LLL:EXT:cocktail_ltk/Resources/Private/Language/locallang_db.xlf:tx_cocktail_ltk_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailltk_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = cocktail_ltk-plugin-pi2
                        title = LLL:EXT:cocktail_ltk/Resources/Private/Language/locallang_db.xlf:tx_cocktail_ltk_pi2.name
                        description = LLL:EXT:cocktail_ltk/Resources/Private/Language/locallang_db.xlf:tx_cocktail_ltk_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailltk_pi2
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cocktail_ltk-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_ltk/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
			$iconRegistry->registerIcon(
				'cocktail_ltk-plugin-pi2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_ltk/Resources/Public/Icons/user_plugin_pi2.svg']
			);
		
    }
);
