<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220525095203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation CHANGE organisme_formation_id organisme_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF233FFBB9 FOREIGN KEY (organisme_formation_id) REFERENCES organisme_formation (id)');
        $this->addSql('CREATE INDEX IDX_404021BF233FFBB9 ON formation (organisme_formation_id)');
        $this->addSql('ALTER TABLE promotion ADD formation_id INT NOT NULL, ADD formateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD15200282E ON promotion (formation_id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1155D8F51 ON promotion (formateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF233FFBB9');
        $this->addSql('DROP INDEX IDX_404021BF233FFBB9 ON formation');
        $this->addSql('ALTER TABLE formation CHANGE organisme_formation_id organisme_formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD15200282E');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1155D8F51');
        $this->addSql('DROP INDEX IDX_C11D7DD15200282E ON promotion');
        $this->addSql('DROP INDEX IDX_C11D7DD1155D8F51 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP formation_id, DROP formateur_id');
    }
}
