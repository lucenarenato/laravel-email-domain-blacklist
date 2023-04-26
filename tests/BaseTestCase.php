<?php

namespace Tests;

use Lucenarenato\EmailDomainBlacklist\EmailDomainBlacklistServiceProvider;

abstract class BaseTestCase
{
    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return Lucenarenato\EmailDomainBlacklist\EmailDomainBlacklistServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [EmailDomainBlacklistServiceProvider::class];
    }
}
