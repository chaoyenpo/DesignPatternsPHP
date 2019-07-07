<?php

namespace DesignPatterns\Proxy;

interface BankAccount
{
    public function deposit(int $amount);

    public function getBalance(): int;
}
