<?php

interface NewsLetter
{
    public function subscribe($email);
}

class CampaignMonitor implements NewsLetter
{
    public function subscribe($email)
    {
        echo 'Subscribing to Campaign Monitor.';
    }
}

class Drip implements NewsLetter
{
    public function subscribe($email)
    {
        echo 'Subscribing with drip';
    }
}

class NewsletterSubscriptonController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'test@email.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptonController();

$controller->store(new Drip());
$controller->store(new CampaignMonitor());