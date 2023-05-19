<?php

class Subscription
{
    /**
     * Summary of gateway
     * @var Gateway
     */
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        // create the subscription
        // $this->gateway->create();
    }

    public function cancel()
    {
        // find the customer
        $this->gateway->findCustomer();
        // cancel the subscription
        // $this->gateway->cancel();
    }

    public function invoice()
    {
        // create an invoice
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();

}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        // find stripe customer
    }

    public function findSubscriptionByCustomer()
    {
        // find stripe subscription by customer
    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {
        // find stripe customer
    }

    public function findSubscriptionByCustomer()
    {
        // find stripe subscription by customer
    }
}

$stripeSubscription = new Subscription(new StripeGateway());
$braintreeSubscription = new Subscription(new BrainTreeGateway());