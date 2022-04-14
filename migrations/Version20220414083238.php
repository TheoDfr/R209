<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414083238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet ADD etat_projet_id INT NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA9F053C49E FOREIGN KEY (etat_projet_id) REFERENCES etat_projet (id)');
        $this->addSql('CREATE INDEX IDX_50159CA9F053C49E ON projet (etat_projet_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9F053C49E');
        $this->addSql('DROP INDEX IDX_50159CA9F053C49E ON projet');
        $this->addSql('ALTER TABLE projet DROP etat_projet_id, DROP created_at');
    }
}
