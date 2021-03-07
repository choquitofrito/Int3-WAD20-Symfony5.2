<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210305165909 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supervision_mma ADD supervise_id INT DEFAULT NULL, CHANGE role evaluation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE supervision_mma ADD CONSTRAINT FK_D334C8D1227586CB FOREIGN KEY (supervise_id) REFERENCES personne_mma (id)');
        $this->addSql('CREATE INDEX IDX_D334C8D1227586CB ON supervision_mma (supervise_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supervision_mma DROP FOREIGN KEY FK_D334C8D1227586CB');
        $this->addSql('DROP INDEX IDX_D334C8D1227586CB ON supervision_mma');
        $this->addSql('ALTER TABLE supervision_mma DROP supervise_id, CHANGE evaluation role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
