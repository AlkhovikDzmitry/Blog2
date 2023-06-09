<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504084631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category CHANGE title title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE video CHANGE title title VARCHAR(255) NOT NULL, CHANGE category_id category_id INT NOT NULL, CHANGE youtoube_id youtoube_id VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category CHANGE title title VARCHAR(255) NOT NULL COMMENT \'PHP\'');
        $this->addSql('ALTER TABLE video CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE youtoube_id youtoube_id VARCHAR(255) DEFAULT NULL');
    }
}
