<?php

include_once __DIR__ . '/products.php';

class boxes extends products {

    public String $where;
    public String $size;
    public Array $materials;

    function __construct(String $_title, String $_image, Float $_price, category $_category, String $_where, String $_size, Array $_materials) {
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setWhere($_where);
        $this->setSize($_size);
        $this->setMaterials($_materials);
    }


    public function getWhere()
    {
        return $this->where;
    }

    public function setWhere($where)
    {
        $this->where = $where;
        return $this;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function setMaterials($materials)
    {
        $this->materials = $materials;
        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}

?>