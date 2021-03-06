<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Servers_Types', 'doctrine');

/**
 * BaseServers_Types
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $type_id
 * @property string $type
 * @property Doctrine_Collection $Servers
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseServers_Types extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('servers_types');
        $this->hasColumn('type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('type', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Servers', array(
             'local' => 'type_id',
             'foreign' => 'type_id'));
    }
}