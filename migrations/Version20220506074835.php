<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506074835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome ADD intitule_id INT NOT NULL');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4E6729EDCE FOREIGN KEY (intitule_id) REFERENCES intitule (id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4E6729EDCE ON diplome (intitule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4E6729EDCE');
        $this->addSql('DROP INDEX IDX_EB4C4D4E6729EDCE ON diplome');
        $this->addSql('ALTER TABLE diplome DROP intitule_id');
    }
}
