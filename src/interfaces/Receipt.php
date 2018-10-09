<?php namespace professionalweb\taxes\interfaces;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Interface for receipt
 * @package professionalweb\taxes\interfaces
 */
interface Receipt extends Arrayable
{
    /**
     * общая СН
     */
    public const TAX_SYSTEM_COMMON = 1;

    /**
     * упрощенная СН (доходы)
     */
    public const TAX_SYSTEM_SIMPLE_INCOME = 2;

    /**
     * упрощенная СН (доходы минус расходы)
     */
    public const TAX_SYSTEM_SIMPLE_NO_OUTCOME = 3;

    /**
     * единый налог на вмененный доход
     */
    public const TAX_SYSTEM_SIMPLE_UNIFIED = 4;

    /**
     * единый сельскохозяйственный налог
     */
    public const TAX_SYSTEM_SIMPLE_AGRO = 5;

    /**
     * патентная СН
     */
    public const TAX_SYSTEM_SIMPLE_PATENT = 5;

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact(): string;

    /**
     * Get tax system
     *
     * @return int
     */
    public function getTaxSystem(): int;

    /**
     * Get all items in receipt
     *
     * @return ReceiptItem[]
     */
    public function getItems(): array;
}