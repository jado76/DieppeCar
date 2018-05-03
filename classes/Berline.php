<?php


class Berline extends Voiture implements Consomation
{
    public $couleur;

    public function peindre($color)
    {
        $this->couleur = $color;
    }

    public function distanceFreinage()
    {
        return "Je freine, c'est génial !";
    }

    public function polluer()
    {
        // TODO: Implement polluer() method.
    }

}