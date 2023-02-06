<?php

class category {

  public String $species;

  function __construct(String $_species) {
      $this->setSpecies($_species);
  }

  public function getSpecies() {
      return $this->species;
  }

  public function setSpecies($_species) {
      $this->species = $_species;
      return $this;
  }
}

?>