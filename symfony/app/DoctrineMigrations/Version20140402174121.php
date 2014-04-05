<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140402174121 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("ALTER TABLE vote ADD CONSTRAINT loser FOREIGN KEY (loser_id) REFERENCES tv_series (id) ON UPDATE NO ACTION ON DELETE NO ACTION");
        $this->addSql("ALTER TABLE vote ADD CONSTRAINT winner FOREIGN KEY (winner_id) REFERENCES tv_series (id) ON UPDATE NO ACTION ON DELETE NO ACTION");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("ALTER TABLE vote DROP FOREIGN KEY loser");
        $this->addSql("ALTER TABLE vote DROP FOREIGN KEY winner");
        $this->addSql("DROP INDEX winner ON vote");
        $this->addSql("DROP INDEX loser ON vote");
    }
}
