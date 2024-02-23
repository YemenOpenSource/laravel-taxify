<?php

use Omaralalwi\LaravelTaxify\Enums\TaxDefaults;
use Omaralalwi\LaravelTaxify\Enums\TaxConfigKeys;
use Omaralalwi\LaravelTaxify\Enums\TaxTransformKeys;
use Omaralalwi\LaravelTaxify\Enums\TaxTypes;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Tax Profile
    |--------------------------------------------------------------------------
    |
    | This profile will be used as the default tax configuration.
    |
    */

    'default' => env('DEFAULT_TAXIFY_PROFILE', TaxDefaults::PROFILE),

    /*
    |--------------------------------------------------------------------------
    | Default Tax Rate
    |--------------------------------------------------------------------------
    |
    | This rate will be used as the default tax rate for the 'default' profile.
    | The value should be a decimal number representing the tax rate.
    |
    */

    TaxConfigKeys::RATE => env('TAXIFY_DEFAULT_RATE', TaxDefaults::RATE),

    /*
    |--------------------------------------------------------------------------
    | Default Tax Type
    |--------------------------------------------------------------------------
    |
    | This type will be used as the default tax type for the 'default' profile.
    | The value should be either 'percentage' or 'fixed'.
    |
    */

    TaxConfigKeys::TYPE => env('TAXIFY_DEFAULT_TYPE', TaxDefaults::TYPE),

    /*
    |--------------------------------------------------------------------------
    | Tax Profiles
    |--------------------------------------------------------------------------
    |
    | Define multiple tax profiles here. Each profile should have a unique key,
    | and you can set the tax_rate and tax_type for each.
    |
    */

    'profiles' => [

        TaxDefaults::PROFILE => [
            TaxConfigKeys::RATE => env('TAXIFY_DEFAULT_RATE', TaxDefaults::RATE),
            TaxConfigKeys::TYPE => env('TAXIFY_DEFAULT_TYPE', TaxDefaults::TYPE),
        ],

    /*
         * another profile settings EX:

        'sales' => [
            TaxConfigKeys::RATE => env('TAXIFY_SALES_RATE', env('TAXIFY_DEFAULT_RATE', TaxDefaults::RATE)),
            TaxConfigKeys::TYPE => env('TAXIFY_SALES_TYPE', env('TAXIFY_DEFAULT_TYPE', TaxDefaults::TYPE)),
        ],

        *
    */

        // Add more configurations as needed...
    ],

    /*
    |--------------------------------------------------------------------------
    | Tax Transformation Keys
    |--------------------------------------------------------------------------
    |
    | Define keys used for tax transformation array.
    |
    */

    'transform_keys' => [
        TaxTransformKeys::TAX_RATE,
        TaxTransformKeys::TAX_AMOUNT,
        TaxTransformKeys::AMOUNT_WITH_TAX,
    ],

    /*
    |--------------------------------------------------------------------------
    | Tax Types
    |--------------------------------------------------------------------------
    |
    | Define possible tax types.
    |
    */

    'types' => [
        TaxTypes::PERCENTAGE,
        TaxTypes::FIXED,
    ],

];
