<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210305172946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supervision_mma DROP FOREIGN KEY FK_D334C8D1227586CB');
        $this->addSql('DROP INDEX IDX_D334C8D1227586CB ON supervision_mma');
        $this->addSql('ALTER TABLE supervision_mma CHANGE supervise_id supervisee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE supervision_mma ADD CONSTRAINT FK_D334C8D19E97DBD8 FOREIGN KEY (supervisee_id) REFERENCES personne_mma (id)');
        $this->addSql('CREATE INDEX IDX_D334C8D19E97DBD8 ON supervision_mma (supervisee_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supervision_mma DROP FOREIGN KEY FK_D334C8D19E97DBD8');
        $this->addSql('DROP INDEX IDX_D334C8D19E97DBD8 ON supervision_mma');
        $this->addSql('ALTER TABLE supervision_mma CHANGE supervisee_id supervise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE supervision_mma ADD CONSTRAINT FK_D334C8D1227586CB FOREIGN KEY (supervise_id) REFERENCES personne_mma (id)');
        $this->addSql('CREATE INDEX IDX_D334C8D1227586CB ON supervision_mma (supervise_id)');
    }
}
