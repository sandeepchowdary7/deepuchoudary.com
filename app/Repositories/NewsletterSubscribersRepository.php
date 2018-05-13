<?php

namespace App\Repositories;

use Spatie\Newsletter\Newsletter;
use App\Contracts\Repositories\NewsletterSubscribersRepositoryContract;

class NewsletterSubscribersRepository implements NewsletterSubscribersRepositoryContract
{
    private $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = clone $newsletter;
    }

    public function create(string $email): bool
    {
        return $this->newsletter->subscribePending($email) !== false;
    }
}
