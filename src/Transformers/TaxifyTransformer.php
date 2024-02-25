<?php

namespace Omaralalwi\LaravelTaxify\Transformers;

use Omaralalwi\LaravelTaxify\Enums\TaxTransformKeys;
use Illuminate\Support\Facades\Log;

class TaxifyTransformer
{
    public static function transform($totalAmount, $taxAmount, $taxRate = null, $asArray = false): object|array
    {
        $values = self::transformValues($totalAmount, $taxAmount, $taxRate);
        return $asArray ? $values : (object) $values;
    }

    public static function transformValues(float $totalAmount, float $taxAmount, ?float $taxRate = null): array
    {
        $taxRate = $taxRate ?: getTaxRate();

        return [
            TaxTransformKeys::AMOUNT_WITH_TAX => (float) $totalAmount,
            TaxTransformKeys::TAX_AMOUNT => (float) $taxAmount,
            TaxTransformKeys::TAX_RATE => (float) $taxRate,
        ];
    }

}
