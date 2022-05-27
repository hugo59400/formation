<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220525082431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD organisme_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF233FFBB9 FOREIGN KEY (organisme_formation_id) REFERENCES organisme_formation (id)');
        $this->addSql('CREATE INDEX IDX_404021BF233FFBB9 ON formation (organisme_formation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF233FFBB9');
        $this->addSql('DROP INDEX IDX_404021BF233FFBB9 ON formation');
        $this->addSql('ALTER TABLE formation DROP organisme_formation_id');
    }
}
