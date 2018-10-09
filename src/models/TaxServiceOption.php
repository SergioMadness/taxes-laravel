<?php namespace professionalweb\taxes\models;

use professionalweb\taxes\interfaces\TaxServiceOption as ITaxServiceOption;

class TaxServiceOption implements ITaxServiceOption
{
    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $type;

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return TaxServiceOption
     */
    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Option alias
     *
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * Set readable label
     *
     * @param string $label
     *
     * @return TaxServiceOption
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Readable label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set field type
     *
     * @param string $type
     *
     * @return TaxServiceOption
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get field type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}