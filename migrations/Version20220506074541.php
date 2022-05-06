<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506074541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome ADD univ_id INT NOT NULL');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4E52B4B886 FOREIGN KEY (univ_id) REFERENCES univ (id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4E52B4B886 ON diplome (univ_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4E52B4B886');
        $this->addSql('DROP INDEX IDX_EB4C4D4E52B4B886 ON diplome');
        $this->addSql('ALTER TABLE diplome DROP univ_id');
    }
}
