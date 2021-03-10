<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308125143 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_mm (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_mm_exemplaire_mm (client_mm_id INT NOT NULL, exemplaire_mm_id INT NOT NULL, INDEX IDX_7D51D8F754A1EBAA (client_mm_id), INDEX IDX_7D51D8F76C7B44BC (exemplaire_mm_id), PRIMARY KEY(client_mm_id, exemplaire_mm_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exemplaire_mm (id INT AUTO_INCREMENT NOT NULL, etat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client_mm_exemplaire_mm ADD CONSTRAINT FK_7D51D8F754A1EBAA FOREIGN KEY (client_mm_id) REFERENCES client_mm (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client_mm_exemplaire_mm ADD CONSTRAINT FK_7D51D8F76C7B44BC FOREIGN KEY (exemplaire_mm_id) REFERENCES exemplaire_mm (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_mm_exemplaire_mm DROP FOREIGN KEY FK_7D51D8F754A1EBAA');
        $this->addSql('ALTER TABLE client_mm_exemplaire_mm DROP FOREIGN KEY FK_7D51D8F76C7B44BC');
        $this->addSql('DROP TABLE client_mm');
        $this->addSql('DROP TABLE client_mm_exemplaire_mm');
        $this->addSql('DROP TABLE exemplaire_mm');
    }
}
