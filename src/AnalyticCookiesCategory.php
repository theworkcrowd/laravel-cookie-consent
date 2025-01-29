<?php

namespace Whitecube\LaravelCookieConsent;

class AnalyticCookiesCategory extends CookiesCategory
{
    const GOOGLE_ANALYTICS = 'ga';

    /**
     * Define Google Analytics cookies all at once.
     */
    public function google(string $id): static
    {
        $this->group(function (CookiesGroup $group) use ($id) {
            $key = str_starts_with($id, 'G-') ? substr($id, 2) : $id;

            $group->name(static::GOOGLE_ANALYTICS)
                ->cookie(fn(Cookie $cookie) => $cookie->name('_ga')
                    ->duration(2 * 365 * 24 * 60)
                    ->description(__('cookieConsent::cookies.defaults._ga'))
                )
                ->cookie(fn(Cookie $cookie) => $cookie->name('_ga_' . strtoupper($key))
                    ->duration(2 * 365 * 24 * 60)
                    ->description(__('cookieConsent::cookies.defaults._ga_ID'))
                )
                ->cookie(fn(Cookie $cookie) => $cookie->name('_gid')
                    ->duration(24 * 60)
                    ->description(__('cookieConsent::cookies.defaults._gid'))
                )
                ->cookie(fn(Cookie $cookie) => $cookie->name('_gat')
                    ->duration(1)
                    ->description(__('cookieConsent::cookies.defaults._gat'))
                );
        });

        return $this;
    }
}
