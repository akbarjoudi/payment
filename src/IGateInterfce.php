<?php
namespace aki\payment;

/**
 * 
 */
Interface IGateInterfce {

     /**
     * Set payment amount.
     *
     * @param $amount
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function amount($amount);

     /**
     * Create new purchase
     *
     * @return string
     */
    public function purchase();

    /**
     * 
     */
    public function verify();
}