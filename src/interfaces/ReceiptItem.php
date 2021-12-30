<?php namespace professionalweb\taxes\interfaces;

/**
 * Interface for receipt item
 * @package professionalweb\taxes\interfaces
 */
interface ReceiptItem
{
    public const TAX_18 = 1;
    public const TAX_10 = 2;
    public const TAX_0 = 3;
    public const TAX_NO = 4;

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQty(): int;

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice(): float;

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Get tax
     *
     * @return int
     */
    public function getTax(): int;

    /**
     * Get item name
     *
     * @return string
     */
    public function getName(): string;
}