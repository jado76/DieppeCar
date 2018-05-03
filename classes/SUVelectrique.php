<?php

class SUVelectrique extends Voiture
{
    use consommer;

    public function afficherCharge()
    {
        return $this->charge;
    }
}