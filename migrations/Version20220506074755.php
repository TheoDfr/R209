<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506074755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome ADD but_id INT NOT NULL');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4EB8914BA4 FOREIGN KEY (but_id) REFERENCES but (id)');
        $this->addSql('CREATE INDEX IDX_EB4C4D4EB8914BA4 ON diplome (but_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4EB8914BA4');
        $this->addSql('DROP INDEX IDX_EB4C4D4EB8914BA4 ON diplome');
        $this->addSql('ALTER TABLE diplome DROP but_id');
    }
}
