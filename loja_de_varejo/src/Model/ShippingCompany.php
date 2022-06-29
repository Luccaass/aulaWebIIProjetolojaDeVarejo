<?php

namespace APP\Model;


class ShippingCompany
{
    private string $cnpj;

    private string $name;
    /**
     * Essa função calcula o frete
     *
     * @param float $distance
     * @return float
     */
    public function shipPrice( float $distance):float
    {
        return $distance * 0.5;
    }
}