<?php
class Projet
{

    private $_IdProjet;
    private $_TitleProjet;
    private $_TypeProjet;
    private $_DifficulteProjet;
    private $_UrlProjet;
    private $_EtatProjet;
    private $_DescriptionProjet;
    private $_ImageNomProjet;
    private $_ImageUrlProjet;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __toString()
    {
        return $this->_IdUser . $this->_EmailUser . $this->_MdpUser;
    }

    // ID
    public function getIdProjet()
    {
        return $this->_IdProjet;
    }

    // TITLE
    public function getTitleProjet()
    {
        return $this->_TitleProjet;
    }

    public function setTitleProjet($title)
    {
        $this->_TitleProjet = $title;
    }

    // TYPE
    public function getTypeProjet()
    {
        return $this->_TypeProjet;
    }

    public function setTypeProjet($type)
    {
        $this->_TypeProjet = $type;
    }

    // DIFFICULTE
    public function getDifficulteProjet()
    {
        return $this->_DifficulteProjet;
    }

    public function setDifficulteProjet($difficulte)
    {
        $this->_DifficulteProjet = $difficulte;
    }

    // URL
    public function getUrlProjet()
    {
        return $this->_UrlProjet;
    }

    public function setUrlProjet($urlprojet)
    {
        $this->_UrlProjet = $urlprojet;
    }

    // ETAT
    public function getEtatProjet()
    {
        return $this->_EtatProjet;
    }

    public function setEtatProjet($etat)
    {
        $this->_EtatProjet = $etat;
    }

    // DESCRIPTION
    public function getDescriptionProjet()
    {
        return $this->_DescriptionProjet;
    }

    public function setDescriptionProjet($description)
    {
        $this->_DescriptionProjet = $description;
    }

    // IMAGE NOM
    public function getImageNomProjet()
    {
        return $this->_ImageNomProjet;
    }

    public function setImageNomProjet($imagenom)
    {
        $this->_ImageNomProjet = $imagenom;
    }

    // IMAGE URL
    public function getImageUrlProjet()
    {
        return $this->_ImageUrlProjet;
    }

    public function setImageUrlProjet($urlprojet)
    {
        $this->_ImageUrlProjet = $urlprojet;
    }
}
