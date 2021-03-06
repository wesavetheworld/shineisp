<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version115 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('admin_permissions', 'admin_permissions_resource_id_admin_resources_resource_id');
        $this->dropForeignKey('admin_permissions', 'admin_permissions_role_id_admin_roles_role_id');
        $this->createForeignKey('admin_permissions', 'admin_permissions_resource_id_admin_resources_resource_id_1', array(
             'name' => 'admin_permissions_resource_id_admin_resources_resource_id_1',
             'local' => 'resource_id',
             'foreign' => 'resource_id',
             'foreignTable' => 'admin_resources',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('admin_permissions', 'admin_permissions_role_id_admin_roles_role_id_1', array(
             'name' => 'admin_permissions_role_id_admin_roles_role_id_1',
             'local' => 'role_id',
             'foreign' => 'role_id',
             'foreignTable' => 'admin_roles',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('admin_permissions', 'admin_permissions_resource_id', array(
             'fields' => 
             array(
              0 => 'resource_id',
             ),
             ));
        $this->addIndex('admin_permissions', 'admin_permissions_role_id', array(
             'fields' => 
             array(
              0 => 'role_id',
             ),
             ));
    }

    public function down()
    {
        $this->createForeignKey('admin_permissions', 'admin_permissions_resource_id_admin_resources_resource_id', array(
             'name' => 'admin_permissions_resource_id_admin_resources_resource_id',
             'local' => 'resource_id',
             'foreign' => 'resource_id',
             'foreignTable' => 'admin_resources',
             ));
        $this->createForeignKey('admin_permissions', 'admin_permissions_role_id_admin_roles_role_id', array(
             'name' => 'admin_permissions_role_id_admin_roles_role_id',
             'local' => 'role_id',
             'foreign' => 'role_id',
             'foreignTable' => 'admin_roles',
             ));
        $this->dropForeignKey('admin_permissions', 'admin_permissions_resource_id_admin_resources_resource_id_1');
        $this->dropForeignKey('admin_permissions', 'admin_permissions_role_id_admin_roles_role_id_1');
        $this->removeIndex('admin_permissions', 'admin_permissions_resource_id', array(
             'fields' => 
             array(
              0 => 'resource_id',
             ),
             ));
        $this->removeIndex('admin_permissions', 'admin_permissions_role_id', array(
             'fields' => 
             array(
              0 => 'role_id',
             ),
             ));
    }
}