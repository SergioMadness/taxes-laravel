<?php namespace professionalweb\taxes\interfaces;

/**
 * Interface for taxes facade
 * @package professionalweb\taxes\interfaces
 */
interface TaxFacade extends TaxService
{
    /**
     * Set current driver
     *
     * @param string $name
     *
     * @return $this
     */
    public function setCurrentDriver(string $name): TaxFacade;

    /**
     * Get current driver name
     *
     * @return TaxFacade
     */
    public function getCurrentDriver(): ?TaxFacade;

    /**
     * Get name of current driver
     *
     * @return string
     */
    public function getDriverName(): string;

    /**
     * Register driver
     *
     * @param string $alias
     * @param string $className
     *
     * @return TaxFacade
     */
    public function registerDriver(string $alias, string $className): TaxFacade;

    /**
     * Get available drivers
     *
     * @return array
     */
    public function drivers(): array;

    /**
     * Build driver by name
     *
     * @param string $driver
     *
     * @return null|TaxFacade
     */
    public function driverInstance(string $driver): ?TaxFacade;
}