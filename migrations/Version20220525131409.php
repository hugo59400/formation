<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220525131409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE session_salle (session_id INT NOT NULL, salle_id INT NOT NULL, INDEX IDX_95EAC68A613FECDF (session_id), INDEX IDX_95EAC68ADC304035 (salle_id), PRIMARY KEY(session_id, salle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE session_salle ADD CONSTRAINT FK_95EAC68A613FECDF FOREIGN KEY (session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session_salle ADD CONSTRAINT FK_95EAC68ADC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation CHANGE organisme_formation_id organisme_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF233FFBB9 FOREIGN KEY (organisme_formation_id) REFERENCES organisme_formation (id)');
        $this->addSql('CREATE INDEX IDX_404021BF233FFBB9 ON formation (organisme_formation_id)');
        $this->addSql('ALTER TABLE promotion CHANGE formation_id formation_id INT NOT NULL, CHANGE formateur_id formateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD15200282E ON promotion (formation_id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1155D8F51 ON promotion (formateur_id)');
        $this->addSql('ALTER TABLE session DROP salle_id, CHANGE formateur_id formateur_id INT DEFAULT NULL, CHANGE promotion_id promotion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('CREATE INDEX IDX_D044D5D4155D8F51 ON session (formateur_id)');
        $this->addSql('CREATE INDEX IDX_D044D5D4139DF194 ON session (promotion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE session_salle');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF233FFBB9');
        $this->addSql('DROP INDEX IDX_404021BF233FFBB9 ON formation');
        $this->addSql('ALTER TABLE formation CHANGE organisme_formation_id organisme_formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD15200282E');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1155D8F51');
        $this->addSql('DROP INDEX IDX_C11D7DD15200282E ON promotion');
        $this->addSql('DROP INDEX IDX_C11D7DD1155D8F51 ON promotion');
        $this->addSql('ALTER TABLE promotion CHANGE formation_id formation_id VARCHAR(45) DEFAULT NULL, CHANGE formateur_id formateur_id VARCHAR(45) DEFAULT NULL');
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4155D8F51');
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4139DF194');
        $this->addSql('DROP INDEX IDX_D044D5D4155D8F51 ON session');
        $this->addSql('DROP INDEX IDX_D044D5D4139DF194 ON session');
        $this->addSql('ALTER TABLE session ADD salle_id VARCHAR(45) DEFAULT NULL, CHANGE formateur_id formateur_id VARCHAR(45) DEFAULT NULL, CHANGE promotion_id promotion_id VARCHAR(45) DEFAULT NULL');
    }
}
