<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 9-5-2017
 * Time: 22:05
 */

namespace maxdaniel98\iso4217;

/**
 * An ISO4217 Currency
 *
 * @package iso4217
 * @author Max van den Bosch
 *
 * @property string $ISO4217
 * @property int $currency_numeric
 * @property string $currency_name
 * @property string $symbol
 * @property string $subunit
 */
class Currency
{
    public $ISO4217;
    public $currency_numeric;
    public $currency_name;
    public $symbol;
    public $subunit;

    public function __construct($options=array())
    {
        $this->ISO4217=$options['currency'];
        $this->currency_numeric=$options['currency_numeric'];
        $this->currency_name=$options['currency_name'];
        $this->symbol=$options['symbol'];
        $this->subunit=$options['subunit'];
    }

    public function __toString()
    {
        return $this->ISO4217;
    }

}