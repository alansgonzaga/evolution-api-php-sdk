<?php

// use Laravel\Cashier\Console\WebhookCommand;
// use Laravel\Cashier\Invoices\DompdfInvoiceRenderer;

return [

    'url' => env('EVOLUTION_URL'),

    /*
    |--------------------------------------------------------------------------
    | Evolution Keys
    |--------------------------------------------------------------------------
    */

    'apikey' => env('EVOLUTION_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Evolution Webhooks
    |--------------------------------------------------------------------------
    |
    | Your Evolution webhook secret is used to prevent unauthorized requests to
    | your Evolution webhook handling controllers. The tolerance setting will
    | check the drift between the current time and the signed request's.
    |
    */

    // 'webhook' => [
    //     'secret' => env('EVOLUTION_WEBHOOK_SECRET'),
    //     'tolerance' => env('EVOLUTION_WEBHOOK_TOLERANCE', 300),
    //     'events' => WebhookCommand::DEFAULT_EVENTS,
    // ],

    // /*
    // |--------------------------------------------------------------------------
    // | Currency
    // |--------------------------------------------------------------------------
    // |
    // | This is the default currency that will be used when generating charges
    // | from your application. Of course, you are welcome to use any of the
    // | various world currencies that are currently supported via Stripe.
    // |
    // */

    // 'currency' => env('CASHIER_CURRENCY', 'usd'),

    // /*
    // |--------------------------------------------------------------------------
    // | Currency Locale
    // |--------------------------------------------------------------------------
    // |
    // | This is the default locale in which your money values are formatted in
    // | for display. To utilize other locales besides the default en locale
    // | verify you have the "intl" PHP extension installed on the system.
    // |
    // */

    // 'currency_locale' => env('CASHIER_CURRENCY_LOCALE', 'en'),

    // /*
    // |--------------------------------------------------------------------------
    // | Payment Confirmation Notification
    // |--------------------------------------------------------------------------
    // |
    // | If this setting is enabled, Cashier will automatically notify customers
    // | whose payments require additional verification. You should listen to
    // | Stripe's webhooks in order for this feature to function correctly.
    // |
    // */

    // 'payment_notification' => env('CASHIER_PAYMENT_NOTIFICATION'),

    // /*
    // |--------------------------------------------------------------------------
    // | Invoice Settings
    // |--------------------------------------------------------------------------
    // |
    // | The following options determine how Cashier invoices are converted from
    // | HTML into PDFs. You're free to change the options based on the needs
    // | of your application or your preferences regarding invoice styling.
    // |
    // */

    // 'invoices' => [
    //     'renderer' => env('CASHIER_INVOICE_RENDERER', DompdfInvoiceRenderer::class),

    //     'options' => [
    //         // Supported: 'letter', 'legal', 'A4'
    //         'paper' => env('CASHIER_PAPER', 'letter'),
    //     ],
    // ],

    // /*
    // |--------------------------------------------------------------------------
    // | Stripe Logger
    // |--------------------------------------------------------------------------
    // |
    // | This setting defines which logging channel will be used by the Stripe
    // | library to write log messages. You are free to specify any of your
    // | logging channels listed inside the "logging" configuration file.
    // |
    // */

    // 'logger' => env('CASHIER_LOGGER'),

];
