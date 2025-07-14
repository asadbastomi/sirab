<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockBadBots
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $badUserAgents = [
            // Known Bad Bots
            'MJ12bot',
            'AhrefsBot',
            'SemrushBot',
            'DotBot',
            'python-requests',
            'curl',

            // Fake Googlebot
            'Googlebot', // optional: use with DNS reverse check

            // Based on your logs
            'Mozlila', // typo of Mozilla
            'Moblie Safari', // typo of Mobile Safari
            'Bulid/NRD90M', // typo of Build
            'Team Anon Force', // hacktivist group
            'Android 16', // suspicious Android version
        ];

        $userAgent = $request->userAgent();
        foreach ($badUserAgents as $badBot) {
            if (stripos($userAgent, $badBot) !== false) {
                abort(403, 'Forbidden');
            }
        }

        if (str_contains($userAgent, 'Googlebot')) {
            if (!str_contains($request->ip(), '66.249.')) {
                abort(403, 'Fake Googlebot blocked');
            }
        }

        return $next($request);
    }
}
