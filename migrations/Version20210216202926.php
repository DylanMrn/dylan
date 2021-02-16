<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216202926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, title_exp VARCHAR(255) NOT NULL, date_exp DATETIME NOT NULL, job VARCHAR(255) NOT NULL, contract VARCHAR(255) NOT NULL, description_exp VARCHAR(255) NOT NULL, duration_exp NUMERIC(5, 0) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE studie (id INT AUTO_INCREMENT NOT NULL, title_stud VARCHAR(255) NOT NULL, date_stud DATETIME NOT NULL, duration_stud NUMERIC(5, 0) NOT NULL, description_stud VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE studie');
    }
}
