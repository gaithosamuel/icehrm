<?php
namespace Classes\Migration;

class v20180417_210501_update_menu_names extends AbstractMigration{

    public function up(){

        $sql = <<<'SQL'
        Update Settings set value = '1' where name = 'System: Reset Module Names';
SQL;
        return $this->executeQuery($sql);
    }

    public function down(){

        return true;
    }

}
