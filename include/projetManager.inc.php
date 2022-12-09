<?php

class ProjetManager
{
    private $_db;
    protected $table = 'PROJET';

    public function __construct($db)
    {
        $this->setDb($db);
    }

    // ADD
    public function add(Projet $user)
    {
        $q = $this->_db->prepare("INSERT INTO $this->table (IdProjet, TitleProjet, TypeProjet, DifficulteProjet, UrlProjet, EtatProjet, DescriptionProjet, ImageNomProjet, ImageUrlProjet) VALUES(:mIdProjet, :mTitleProjet, :mTypeProjet, :mDifficulteProjet, :mUrlProjet, :mEtatProjet, :mDescriptionProjet, :mImageNomProjet, :mImageUrlProjet)");

        $q->bindValue(':mIdProjet', $user->getIdProjet());
        $q->bindValue(':mTitleProjet', $user->getTitleProjet());
        $q->bindValue(':mTypeProjet', $user->getTypeProjet());
        $q->bindValue(':mDifficulteProjet', $user->getDifficulteProjet());
        $q->bindValue(':mUrlProjet', $user->getUrlProjet());
        $q->bindValue(':mEtatProjet', $user->getEtatProjet());
        $q->bindValue(':mDescriptionProjet', $user->getDescriptionProjet());
        $q->bindValue(':mImageNomProjet', $user->getImageNomProjet());
        $q->bindValue(':mImageUrlProjet', $user->getImageUrlProjet());

        $q->execute();
    }

    // DELETE
    public function delete(Projet $user)
    {
        $this->_db->exec("DELETE FROM $this->table WHERE IdProjet = " . $user->getIdProjet());
    }

    // UPDATE
    public function update(Projet $user)
    {
        $q = $this->_db->prepare("UPDATE $this->table SET TitleProjet = :mTitleProjet, TypeProjet = :mTypeProjet, DifficulteProjet = :mDifficulteProjet, UrlProjet = :mUrlProjet, EtatProjet = :mEtatProjet, DescriptionProjet = :mDescriptionProjet, ImageNomProjet = :mImageNomProjet, ImageUrlProjet = :mImageUrlProjet WHERE IdProjet = :id");

        $q->bindValue(':mTitleProjet', $user->getTitleProjet());
        $q->bindValue(':mTypeProjet', $user->getTypeProjet());
        $q->bindValue(':mDifficulteProjet', $user->getDifficulteProjet());
        $q->bindValue(':mUrlProjet', $user->getUrlProjet());
        $q->bindValue(':mEtatProjet', $user->getEtatProjet());
        $q->bindValue(':mDescriptionProjet', $user->getDescriptionProjet());
        $q->bindValue(':mImageNomProjet', $user->getImageNomProjet());
        $q->bindValue(':mImageUrlProjet', $user->getImageUrlProjet());

        $q->execute();
    }

    public function getList()
    {
        $users = [];

        $q = $this->_db->query('SELECT IdProjet, TitleProjet, TypeProjet, DifficulteProjet, UrlProjet, EtatProjet, DescriptionProjet, ImageNomProjet, ImageUrlProjet FROM PROJET ORDER BY IdProjet ASC;');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new Projet($donnees);
        }

        return $users;
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}

$db = new PDO('mysql:host=localhost;dbname=veille_informatique', 'root', '');
$projetManager = new ProjetManager($db);
