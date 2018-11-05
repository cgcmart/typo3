<?php
namespace TYPO3\CMS\Fluid\ViewHelpers\Format;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * Formats a given float to a currency representation.
 *
 * Examples
 * --------
 *
 * Defaults::
 *
 *    <f:format.currency>123.456</f:format.currency>
 *
 * ``123,46``
 *
 * All parameters::
 *
 *    <f:format.currency currencySign="$" decimalSeparator="." thousandsSeparator="," prependCurrency="true" separateCurrency="false" decimals="2">54321</f:format.currency>
 *
 * ``$54,321.00``
 *
 * Inline notation::
 *
 *    {someNumber -> f:format.currency(thousandsSeparator: ',', currencySign: '€')}
 *
 * ``54,321,00 €``
 * (depending on the value of {someNumber})
 *
 * use dash for decimals without value::
 *
 *    <f:format.currency useDash="true">123.00</f:format.currency>
 *
 * ``123,-``
 */
class CurrencyViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * Output is escaped already. We must not escape children, to avoid double encoding.
     *
     * @var bool
     */
    protected $escapeChildren = false;

    /**
     * Initialize arguments.
     *
     * @throws \TYPO3Fluid\Fluid\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        $this->registerArgument('currencySign', 'string', 'The currency sign, eg $ or €.', false, '');
        $this->registerArgument('decimalSeparator', 'string', 'The separator for the decimal point.', false, ',');
        $this->registerArgument('thousandsSeparator', 'string', 'The thousands separator.', false, '.');
        $this->registerArgument('prependCurrency', 'bool', 'Select if the currency sign should be prepended', false, false);
        $this->registerArgument('separateCurrency', 'bool', 'Separate the currency sign from the number by a single space, defaults to true due to backwards compatibility', false, true);
        $this->registerArgument('decimals', 'int', 'Set decimals places.', false, 2);
        $this->registerArgument('useDash', 'bool', 'Use the dash instead of decimal 00', false, false);
    }

    /**
     * Formats a float to currency formatting
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return string the formatted amount
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $currencySign = $arguments['currencySign'];
        $decimalSeparator = $arguments['decimalSeparator'];
        $thousandsSeparator = $arguments['thousandsSeparator'];
        $prependCurrency = $arguments['prependCurrency'];
        $separateCurrency = $arguments['separateCurrency'];
        $decimals = $arguments['decimals'];
        $useDash = $arguments['useDash'];

        $floatToFormat = $renderChildrenClosure();
        if (empty($floatToFormat)) {
            $floatToFormat = 0.0;
        } else {
            $floatToFormat = (float)$floatToFormat;
        }
        $output = number_format($floatToFormat, $decimals, $decimalSeparator, $thousandsSeparator);

        if ($useDash && $floatToFormat === floor($floatToFormat)) {
            $output = explode($decimalSeparator, $output)[0] . $decimalSeparator . '—';
        }

        if ($currencySign !== '') {
            $currencySeparator = $separateCurrency ? ' ' : '';
            if ($prependCurrency === true) {
                $output = $currencySign . $currencySeparator . $output;
            } else {
                $output = $output . $currencySeparator . $currencySign;
            }
        }
        return $output;
    }
}
