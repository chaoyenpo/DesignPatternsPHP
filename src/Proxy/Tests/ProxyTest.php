<?php

namespace DesignPatterns\Proxy\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Proxy\BankAccountProxy;

class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());

        $bankAccount->deposit(50);

        $this->assertSame(30, $bankAccount->getBalance());
    }
}
