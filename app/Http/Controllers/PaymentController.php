<?php

namespace App\Http\Controllers;

use Exception;
use PayPal\Api\{Amount, Details, Item, ItemList, Payer, Payment, RedirectUrls, Transaction};
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    protected $apiContext;

    protected $membership_types = [
        'basic' => 5,
        'gold' => 10
    ];

    protected $gold = 10;

    public function __construct()
    {
        $this->apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('paypal.client_id'),     // ClientID
                config('paypal.secret')      // ClientSecret
            )
        );
    }

    /**
     * @param string $value
     * @return mixed
     * @throws Exception
     */
    public function getMembershipType(string $value)
    {
        if(array_key_exists($value, $this->membership_types)){
            return $this->membership_types[$value];
        }
        throw new Exception('Membership type is not supported');
    }


    public function subscribe(Request $request)
    {
        try {
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal($this->getMembershipType($request->membership_type));
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        /*$redirectUrls->setReturnUrl("https://example.com/your_redirect_url.html")
            ->setCancelUrl("https://example.com/your_cancel_url.html");*/
        $redirectUrls->setReturnUrl(route('payment_success'))
            ->setCancelUrl("https://example.com/your_cancel_url.html");

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

            $payment->create($this->apiContext);

            echo $payment;

            echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
        }
        catch (\PayPal\Exception\PayPalConnectionException | Exception $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            echo '___EXCEPTION___ '.$ex->getData();
        }

        $amount = $request->amount;
        return view('admin.payment_success');
    }

    public function payment_success()
    {
        return view('admin.payment_success');
    }
}
