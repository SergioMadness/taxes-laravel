<?php namespace professionalweb\taxes\interfaces;

interface TaxService
{
    /**
     * Send receipt
     *
     * @param Receipt $receipt
     *
     * @return mixed
     */
    public function sendReceipt(Receipt $receipt);
}