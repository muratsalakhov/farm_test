<?php

class Animal {
    protected string $regId;
    protected int $productCount;
    protected string $productName;

    function __construct() {
        $this->regId = uniqid();
        $this->productCount = 0;
    }

    function produceProduct(): int
    {
        return $this->productCount;
    }

    /**
     * @return string
     */
    public function getRegId(): string
    {
        return $this->regId;
    }

    /**
     * @param string $regId
     */
    public function setRegId(string $regId): void
    {
        $this->regId = $regId;
    }

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount(int $productCount): void
    {
        $this->productCount = $productCount;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }
}