<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version112 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('tickets', 'tickets_order_id_orders_order_id');
        $this->createForeignKey('tickets', 'tickets_order_id_orders_order_id_1', array(
             'name' => 'tickets_order_id_orders_order_id_1',
             'local' => 'order_id',
             'foreign' => 'order_id',
             'foreignTable' => 'orders',
             'onUpdate' => '',
             'onDelete' => 'Set Null',
             ));
        $this->addIndex('tickets', 'tickets_order_id', array(
             'fields' => 
             array(
              0 => 'order_id',
             ),
             ));
    }

    public function down()
    {
        $this->createForeignKey('tickets', 'tickets_order_id_orders_order_id', array(
             'name' => 'tickets_order_id_orders_order_id',
             'local' => 'order_id',
             'foreign' => 'order_id',
             'foreignTable' => 'orders',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->dropForeignKey('tickets', 'tickets_order_id_orders_order_id_1');
        $this->removeIndex('tickets', 'tickets_order_id', array(
             'fields' => 
             array(
              0 => 'order_id',
             ),
             ));
    }
}