<?php

class City extends \Phalcon\Mvc\Model {

    /**
     *
     * @var integer
     */
    public $id_city;

    /**
     *
     * @var integer
     */
    public $id_region;

    /**
     *
     * @var string
     */
    public $id_country;

    /**
     *
     * @var string
     */
    public $name;

    /**
     * Initialize method for model.
     */
    public function initialize() {
        $this->setSchema("project_x");
        $this->setSource("city");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return City[]|City|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return City|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null) {
        return parent::findFirst($parameters);
    }

    public static function findByName($name) {

        return self::findFirst(
                        [
                            'conditions' => 'id_region = :id_region: and name = :name:',
                            'bind' => [
                                'id_region' => 43,
                                'name' => $name
                            ]
                        ]
        );
    }

}
