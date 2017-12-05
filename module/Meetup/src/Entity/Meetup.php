<?php
declare(strict_types=1);

namespace Meetup\Entity;
use Ramsey\Uuid\Uuid;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Meetup
 *
 *
 * @package Meetup\Entity
 * @ORM\Entity(repositoryClass="\Meetup\Repository\MeetupRepository")
 * @ORM\Table(name="meetup")
 */
class Meetup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id = null;
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=2000, nullable=false)
     */
    private $description = '';

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $date_debut;


    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $date_fin;


    public function __construct(string $title, string $description = '', string $date_debut, string $date_fin)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->title = $title;
        $this->description = $description;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDateDebut() : string
    {
        return $this->date_debut;
    }

    public function setDateDebut(string $date_debut) : void
    {
        $this->date_debut = $date_debut;
    }

    public function getDateFin() : string
    {
        return $this->date_fin;
    }

    public function setDateFin(string $date_fin) : void
    {
        $this->date_fin = $date_fin;
    }


    public function getTitle() : string
    {
        return $this->title;
    }

    public function setTitle(string $title) :void
    {
        $this->title = $title;
    }

    public function getDescription() : string
    {
        return $this->description;
    }
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
}