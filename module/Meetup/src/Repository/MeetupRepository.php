<?php
declare(strict_types=1);

namespace Meetup\Repository;
use Meetup\Entity\Meetup;
use Doctrine\ORM\EntityRepository;

final class MeetupRepository extends EntityRepository
{
    public function add($meetup) : void
    {
        $this->getEntityManager()->persist($meetup);
        $this->getEntityManager()->flush($meetup);
    }

    public function remove($meetup) : void
    {
        $this->getEntityManager()->remove($meetup);
        $this->getEntityManager()->flush();
    }

    public function update($meetup, $data) : void
    {
        $meetup->setTitle($data['title']);
        $meetup->setDescription($data['description']);
        $meetup->setDateDebut($data['date_debut']);
        $meetup->setDateFin($data['date_fin']);

        $this->getEntityManager()->flush();
    }

    public function createMeetupFromNameAndDescription(string $name, string $description, string $date_debut, string $date_fin)
    {
        return new Meetup($name, $description, $date_debut, $date_fin);
    }
}