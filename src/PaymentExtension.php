<?php

namespace Bolt\Extension\PandaMadness\Payment;

use Bolt\Extension\PandaMadness\Payment\Providers\KkbProvider;
use Bolt\Extension\PandaMadness\ShoppingCart\Config\Config;
use Bolt\Extension\SimpleExtension;
use Silex\Application;

/**
 * Payment handling extension
 *
 * @author Margulan Baimbet <thecigaroman@gmail.com>
 */
class PaymentExtension extends SimpleExtension
{
    protected function getDefaultConfig()
    {
        return [];
    }

    protected function registerServices(Application $app)
    {
        $app['payment.config'] = $app->share(
            function ($app) {
                return new Config($this->getConfig());
            }
        );

        $app['payment.provider'] = $app->share(
            function($app) {
                $provider = $app['payment.config']->getProvider();

                switch($provider) {
                    case 'kkb-epay':
                        return new KkbProvider($app['payment.config']);
                        break;
                    case 'paypal':
//                        return new PaypalProvider();
                        break;
                    case 'stripe':
//                        return new StripeProvider();
                        break;
                    default:
                        break;
                }
            }
        );
    }

    protected function registerFrontendControllers()
    {
        return [
            '/payment' => new Controllers\PaymentController()
        ];
    }

    protected function registerTwigFunctions()
    {
        return [
            'render_payment_form' => [$this, 'renderPaymentForm']
        ];
    }

    public function renderPaymentForm()
    {

    }
}
