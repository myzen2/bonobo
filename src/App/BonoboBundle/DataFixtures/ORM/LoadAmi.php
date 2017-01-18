<?php


namespace App\BonoboBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\BonoboBundle\Entity\Ami;


class LoadAmi implements FixtureInterface

{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms des amis à ajouter
    $noms = array(
      'John',
      'Paul',
      'George',
      'Ringo',
      'Pete',
      'Stuart'
    );

    foreach ($noms as $nom) {

      // On crée un ami
      $ami = new Ami();
      $ami->setNom($nom);

      // On persiste les données
      $manager->persist($ami);
    }

    // On déclenche l'enregistrement de tous les amis
    $manager->flush();
  }
}
