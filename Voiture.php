<?php
require_once 'Vehicule.php';
class Car extends Vehicule implements LightableInterface
{
    const ALLOWED_ENERGIES = ['fuel','electric', 'steam','hybrid'];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function switchOn()
    {
            return True;
    }

    public function switchOff()
    {
        return False;
    }

    public function start()
    {
        $sentence = "";
        if ($this->hasParkBrake) {
            $sentence = 'Le frein à main est enclenché!';
            throw new \Exception($sentence);
        }
    }

    private $hasParkBrake = true;


    public function setParkBrake()
    {
        if ($this->hasParkBrake == false) {
            $this->hasParkBrake = true;
        } else {
            $this->hasParkBrake = false;
        }
    }

}
