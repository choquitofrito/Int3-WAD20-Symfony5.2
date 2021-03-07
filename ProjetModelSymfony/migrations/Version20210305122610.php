<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210305122610 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, rue VARCHAR(255) NOT NULL, numero VARCHAR(10) DEFAULT NULL, code_postal VARCHAR(10) NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emprunt (id INT AUTO_INCREMENT NOT NULL, client_emprunteur_id INT NOT NULL, exemplaire_emprunte_id INT DEFAULT NULL, date_emprunt DATETIME DEFAULT NULL, date_retour DATETIME DEFAULT NULL, commentaires LONGTEXT DEFAULT NULL, INDEX IDX_364071D787323A03 (client_emprunteur_id), INDEX IDX_364071D720EDBCFB (exemplaire_emprunte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D787323A03 FOREIGN KEY (client_emprunteur_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D720EDBCFB FOREIGN KEY (exemplaire_emprunte_id) REFERENCES exemplaire (id)');
        $this->addSql('ALTER TABLE client ADD adresse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404554DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('CREATE INDEX IDX_C74404554DE7DC5C ON client (adresse_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404554DE7DC5C');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE emprunt');
        $this->addSql('DROP INDEX IDX_C74404554DE7DC5C ON client');
        $this->addSql('ALTER TABLE client DROP adresse_id');
    }
}
