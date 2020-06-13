<?php

class Animals extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $id_species;

    /**
     *
     * @var integer
     */
    public $id_kind;

    /**
     *
     * @var string
     */
    public $date_burn;

    /**
     *
     * @var string
     */
    public $nickname;

    /**
     *
     * @var string
     */
    public $sex;

    /**
     *
     * @var string
     */
    public $id_color;

    /**
     *
     * @var string
     */
    public $about;

    /**
     *
     * @var integer
     */
    public $id_photo;

    /**
     *
     * @var string
     */
    public $photo_file;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var integer
     */
    public $id_org;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("project_x");
        $this->setSource("animals");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Animals[]|Animals|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Animals|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public static function getUnicCode() {
        
        return 'R56K'.$this->id_kind.'S'.$this->id_species.'Y'.date( 'Y', $this->date_burn ).'N'.$this->id;
        
    }

}
