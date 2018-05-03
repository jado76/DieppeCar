<?php

trait consommer
{
    protected $charge;
    protected $nbrCharges;

    public function calculerResteBatterie()
    {
        return $this->charge;
    }

    public function nombreChargesBatterie()
    {
        return $this->nbrCharges;
    }
}