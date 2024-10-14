<?php

declare(strict_types=1);

namespace Tests;

use Quicksand\Icons\BladeQuicksandIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('solid.quicksand-logo')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11.2 10.743a.426.426 0 0 1-.305-.13.449.449 0 0 1-.127-.313V8.406c-.001-.33.117-.65.332-.895.216-.246.513-.4.833-.433a1.206 1.206 0 0 1 .91.346 1.267 1.267 0 0 1 .384.915v1.952a.448.448 0 0 1-.126.31.426.426 0 0 1-.3.129v.013H11.2Z"/>
                <path fill-rule="evenodd" d="M15.45 2.804a5.761 5.761 0 0 1 2.335 2.285 6.873 6.873 0 0 1 .82 3.415v4.661a6.223 6.223 0 0 1-1.337 4.018c-.098.125-.2.241-.307.353l-.027.03a6.05 6.05 0 0 1-3.256 1.715.143.143 0 0 0-.107.161v2.232a.375.375 0 0 1-.325.326h-2.464a.343.343 0 0 1-.245-.107.309.309 0 0 1-.08-.219v-2.232c0-.072-.045-.125-.134-.16a6.025 6.025 0 0 1-3.59-2.099 6.156 6.156 0 0 1-1.337-4.018v-4.66a6.873 6.873 0 0 1 .828-3.416 5.797 5.797 0 0 1 2.308-2.285 7.85 7.85 0 0 1 6.919 0Zm-2.125 2.29c.426.175.81.441 1.128.78.318.348.564.758.725 1.206.16.448.232.925.21 1.401v4.715a3.725 3.725 0 0 1-.935 2.656c-.26.277-.567.502-.906.664a.215.215 0 0 1-.286-.092.23.23 0 0 1-.03-.107V13.7a.449.449 0 0 0-.126-.313.426.426 0 0 0-.305-.13h-1.6a.426.426 0 0 0-.305.13.449.449 0 0 0-.127.313v2.634a.23.23 0 0 1-.103.185.217.217 0 0 1-.207.015 2.978 2.978 0 0 1-.91-.664 3.685 3.685 0 0 1-.728-1.232 3.753 3.753 0 0 1-.209-1.425V8.482c-.021-.476.05-.953.21-1.4.162-.449.408-.859.726-1.207a3.195 3.195 0 0 1 1.113-.776c.42-.175.872-.256 1.325-.238.458-.02.915.06 1.34.235Z" clip-rule="evenodd"/>
            </svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('solid.quicksand-logo', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11.2 10.743a.426.426 0 0 1-.305-.13.449.449 0 0 1-.127-.313V8.406c-.001-.33.117-.65.332-.895.216-.246.513-.4.833-.433a1.206 1.206 0 0 1 .91.346 1.267 1.267 0 0 1 .384.915v1.952a.448.448 0 0 1-.126.31.426.426 0 0 1-.3.129v.013H11.2Z"/>
                <path fill-rule="evenodd" d="M15.45 2.804a5.761 5.761 0 0 1 2.335 2.285 6.873 6.873 0 0 1 .82 3.415v4.661a6.223 6.223 0 0 1-1.337 4.018c-.098.125-.2.241-.307.353l-.027.03a6.05 6.05 0 0 1-3.256 1.715.143.143 0 0 0-.107.161v2.232a.375.375 0 0 1-.325.326h-2.464a.343.343 0 0 1-.245-.107.309.309 0 0 1-.08-.219v-2.232c0-.072-.045-.125-.134-.16a6.025 6.025 0 0 1-3.59-2.099 6.156 6.156 0 0 1-1.337-4.018v-4.66a6.873 6.873 0 0 1 .828-3.416 5.797 5.797 0 0 1 2.308-2.285 7.85 7.85 0 0 1 6.919 0Zm-2.125 2.29c.426.175.81.441 1.128.78.318.348.564.758.725 1.206.16.448.232.925.21 1.401v4.715a3.725 3.725 0 0 1-.935 2.656c-.26.277-.567.502-.906.664a.215.215 0 0 1-.286-.092.23.23 0 0 1-.03-.107V13.7a.449.449 0 0 0-.126-.313.426.426 0 0 0-.305-.13h-1.6a.426.426 0 0 0-.305.13.449.449 0 0 0-.127.313v2.634a.23.23 0 0 1-.103.185.217.217 0 0 1-.207.015 2.978 2.978 0 0 1-.91-.664 3.685 3.685 0 0 1-.728-1.232 3.753 3.753 0 0 1-.209-1.425V8.482c-.021-.476.05-.953.21-1.4.162-.449.408-.859.726-1.207a3.195 3.195 0 0 1 1.113-.776c.42-.175.872-.256 1.325-.238.458-.02.915.06 1.34.235Z" clip-rule="evenodd"/>
            </svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('solid.quicksand-logo', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
            <svg style="color: #555" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11.2 10.743a.426.426 0 0 1-.305-.13.449.449 0 0 1-.127-.313V8.406c-.001-.33.117-.65.332-.895.216-.246.513-.4.833-.433a1.206 1.206 0 0 1 .91.346 1.267 1.267 0 0 1 .384.915v1.952a.448.448 0 0 1-.126.31.426.426 0 0 1-.3.129v.013H11.2Z"/>
                <path fill-rule="evenodd" d="M15.45 2.804a5.761 5.761 0 0 1 2.335 2.285 6.873 6.873 0 0 1 .82 3.415v4.661a6.223 6.223 0 0 1-1.337 4.018c-.098.125-.2.241-.307.353l-.027.03a6.05 6.05 0 0 1-3.256 1.715.143.143 0 0 0-.107.161v2.232a.375.375 0 0 1-.325.326h-2.464a.343.343 0 0 1-.245-.107.309.309 0 0 1-.08-.219v-2.232c0-.072-.045-.125-.134-.16a6.025 6.025 0 0 1-3.59-2.099 6.156 6.156 0 0 1-1.337-4.018v-4.66a6.873 6.873 0 0 1 .828-3.416 5.797 5.797 0 0 1 2.308-2.285 7.85 7.85 0 0 1 6.919 0Zm-2.125 2.29c.426.175.81.441 1.128.78.318.348.564.758.725 1.206.16.448.232.925.21 1.401v4.715a3.725 3.725 0 0 1-.935 2.656c-.26.277-.567.502-.906.664a.215.215 0 0 1-.286-.092.23.23 0 0 1-.03-.107V13.7a.449.449 0 0 0-.126-.313.426.426 0 0 0-.305-.13h-1.6a.426.426 0 0 0-.305.13.449.449 0 0 0-.127.313v2.634a.23.23 0 0 1-.103.185.217.217 0 0 1-.207.015 2.978 2.978 0 0 1-.91-.664 3.685 3.685 0 0 1-.728-1.232 3.753 3.753 0 0 1-.209-1.425V8.482c-.021-.476.05-.953.21-1.4.162-.449.408-.859.726-1.207a3.195 3.195 0 0 1 1.113-.776c.42-.175.872-.256 1.325-.238.458-.02.915.06 1.34.235Z" clip-rule="evenodd"/>
            </svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeQuicksandIconsServiceProvider::class,
        ];
    }
}
