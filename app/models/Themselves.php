<?php

class Themselves extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $about;

    /**
     *
     * @var string
     */
    public $tel;

    /**
     *
     * @var string
     */
    public $fio;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var integer
     */
    public $id_photo;

    /**
     *
     * @var string
     */
    public $file_photo;

    /**
     *
     * @var string
     */
    public $adress;

    /**
     *
     * @var string
     */
    public $data;

    /**
     *
     * @var integer
     */
    public $show;

    /**
     *
     * @var integer
     */
    public $read;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("project_x");
        $this->setSource("themselves");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Themselves[]|Themselves|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Themselves|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
