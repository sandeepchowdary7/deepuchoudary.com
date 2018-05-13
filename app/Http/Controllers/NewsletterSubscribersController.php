<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\ResponseCache\Middlewares\DoNotCacheResponse;
use App\Contracts\Repositories\NewsletterSubscribersRepositoryContract;

class NewsletterSubscribersController extends Controller
{
    public function __construct()
    {
        $this->middleware(DoNotCacheResponse::class);
    }

    public function create()
    {
        return view('newsletter-subscribers.create');
    }

    public function store(
        NewsletterSubscribersRepositoryContract $newslettersSubscribersRepository,
        Request $request
    ) {
        $newslettersSubscribersRepository->create((string) $request->input('email'));

        alert(
            'Please click on the link in this email to confirm your subscription.',
            'Thanks for subscribing to my newsletter!'
        );

        return redirect(route('newsletter-subscribers.create'));
    }
}
