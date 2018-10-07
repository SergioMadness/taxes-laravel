<?php namespace professionalweb\taxes\services;

use professionalweb\taxes\interfaces\Receipt;
use professionalweb\taxes\interfaces\TaxFacade as ITaxFacade;

/**
 * Facade to work with multiple services
 * @package professionalweb\taxes\services
 */
class TaxFacade implements ITaxFacade
{
    /**
     * Available drivers
     *
     * @var array
     */
    private $drivers = [];

    /**
     * Current driver
     *
     * @var ITaxFacade
     */
    private $currentDriver;

    /**
     * Name of current driver
     *
     * @var string
     */
    private $currentDriverName;


    /**
     * Set current driver
     *
     * @param string $name
     *
     * @return ITaxFacade
     */
    public function setCurrentDriver(string $name): ITaxFacade
    {
        $this->currentDriverName = $name;

        $this->makeCurrentDriver($name);

        return $this;
    }

    /**
     * Build driver
     *
     * @param string $name
     *
     * @return $this
     */
    protected function makeCurrentDriver(string $name): ITaxFacade
    {
        $this->currentDriver = app($this->getDriver($name), [
            'config' => config('taxes.' . $name),
        ]);

        return $this;
    }

    /**
     * Get driver by name
     *
     * @param string $name
     *
     * @return null|string
     */
    public function getDriver($name): ?string
    {
        return $this->getDrivers()[$name];
    }

    /**
     * Get drivers
     *
     * @return array
     */
    public function getDrivers(): array
    {
        return $this->drivers;
    }

    /**
     * Get current driver name
     *
     * @return ITaxFacade
     */
    public function getCurrentDriver(): ?ITaxFacade
    {
        return $this->currentDriver;
    }

    /**
     * Get name of current driver
     *
     * @return string
     */
    public function getDriverName(): string
    {
        return $this->currentDriverName;
    }

    /**
     * Register driver
     *
     * @param string $alias
     * @param string $className
     *
     * @return ITaxFacade
     */
    public function registerDriver(string $alias, string $className): ITaxFacade
    {
        $this->drivers[$alias] = $className;

        return $this;
    }

    /**
     * Get available drivers
     *
     * @return array
     */
    public function drivers(): array
    {
        return array_keys($this->drivers);
    }

    /**
     * Build driver by name
     *
     * @param string $driver
     *
     * @return null|ITaxFacade
     */
    public function driverInstance(string $driver): ?ITaxFacade
    {
        if (($driverClass = $this->getDriver($driver)) !== null) {
            return app($driverClass, [
                'config' => config('taxes.' . $driverClass),
            ]);
        }

        return null;
    }

    /**
     * Send receipt
     *
     * @param Receipt $receipt
     *
     * @return mixed
     */
    public function sendReceipt(Receipt $receipt)
    {
        $driver = $this->getCurrentDriver();

        return $driver !== null ? $driver->sendReceipt($receipt) : null;
    }
}