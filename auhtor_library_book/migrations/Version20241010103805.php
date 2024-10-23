<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241010103805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author ADD library_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE author ADD CONSTRAINT FK_BDAFD8C8FE2541D7 FOREIGN KEY (library_id) REFERENCES library (id)');
        $this->addSql('CREATE INDEX IDX_BDAFD8C8FE2541D7 ON author (library_id)');
        $this->addSql('ALTER TABLE library ADD id INT AUTO_INCREMENT NOT NULL, DROP ref, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author DROP FOREIGN KEY FK_BDAFD8C8FE2541D7');
        $this->addSql('DROP INDEX IDX_BDAFD8C8FE2541D7 ON author');
        $this->addSql('ALTER TABLE author DROP library_id');
        $this->addSql('ALTER TABLE library MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON library');
        $this->addSql('ALTER TABLE library ADD ref VARCHAR(255) NOT NULL, DROP id');
        $this->addSql('ALTER TABLE library ADD PRIMARY KEY (ref)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
