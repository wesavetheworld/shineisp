<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Dns_Zones_Types', 'doctrine');

/**
 * BaseDns_Zones_Types
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $type_id
 * @property string $zone
 * @property Doctrine_Collection $Dns_Zones
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDns_Zones_Types extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dns_zones_types');
        $this->hasColumn('type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('zone', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Dns_Zones', array(
             'local' => 'type_id',
             'foreign' => 'type_id'));
    }
}