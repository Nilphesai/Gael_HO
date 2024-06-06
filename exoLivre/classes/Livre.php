<?php

class Livre{
    private String $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, int $nbPages, int $anneeParution,int $prix, Auteur $auteur){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->add_Livre($this);
    }

    public function get_Titre():string{
        return $this->_titre;
    }

    public function set_Titre(string $titre){
        $this->_titre = $titre;
    }

    public function get_NbPages():string{
        return $this->_nbPages;
    }

    public function set_NbPages(string $nbPages){
        $this->_nbPages = $nbPages;
    }

    public function get_AnneeParution():string{
        return $this->_anneeParution;
    }

    public function set_AnneeParution(string $anneeParution){
        $this->_anneeParution = $anneeParution;
    }

    public function get_Prix():string{
        return $this->_prix;
    }

    public function set_Prix(string $prix){
        $this->_prix = $prix;
    }

    public function get_Auteur():Auteur{
        return $this->_auteur;
    }

    public function set_Auteur(Auteur $auteur){
        $this->_auteur = $auteur;
    }

    public function __tostring():string{
        return $this->_titre." (".$this->_anneeParution.")";
    }
}