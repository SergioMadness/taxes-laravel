<?php namespace professionalweb\taxes\interfaces;

/**
 * Interface for tax service option
 * @package professionalweb\payment\contracts
 */
interface TaxServiceOption
{
    public const TYPE_STRING = 'string';

    public const TYPE_TEXT = 'text';

    public const TYPE_FILE = 'file';

    /**
     * Option alias
     *
     * @return string
     */
    public function getAlias(): string;

    /**
     * Readable label
     *
     * @return string
     */
    public function getLabel(): string;

    /**
     * Get field type
     *
     * @return string
     */
    public function getType(): string;
}