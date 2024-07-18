<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->header('Accept-Language');
        $locale = substr($locale, 0, 2); // 最初の2文字を取得 (例: "ja", "en")
        
        if (!in_array($locale, ['en', 'ja'])) {
            $locale = 'en'; // デフォルト言語を英語に設定
        }
        
        app()->setLocale($locale);
        
        return $next($request);
    }
}
