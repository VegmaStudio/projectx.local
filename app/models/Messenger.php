<?php

class Messenger extends \Phalcon\Mvc\Model
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
    public $mess;

    /**
     *
     * @var integer
     */
    public $id_dlg;

    /**
     *
     * @var integer
     */
    public $id_user1;

    /**
     *
     * @var integer
     */
    public $id_user2;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("project_x");
        $this->setSource("messenger");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messenger[]|Messenger|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messenger|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
