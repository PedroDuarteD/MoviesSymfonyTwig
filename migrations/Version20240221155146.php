<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221155146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actor_entity (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie_entity (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, views INT NOT NULL, locations VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie_entity_actor_entity (movie_entity_id INT NOT NULL, actor_entity_id INT NOT NULL, INDEX IDX_D756FC2F12F0745B (movie_entity_id), INDEX IDX_D756FC2F755C8D71 (actor_entity_id), PRIMARY KEY(movie_entity_id, actor_entity_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_entity_actor_entity ADD CONSTRAINT FK_D756FC2F12F0745B FOREIGN KEY (movie_entity_id) REFERENCES movie_entity (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_entity_actor_entity ADD CONSTRAINT FK_D756FC2F755C8D71 FOREIGN KEY (actor_entity_id) REFERENCES actor_entity (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie_entity_actor_entity DROP FOREIGN KEY FK_D756FC2F12F0745B');
        $this->addSql('ALTER TABLE movie_entity_actor_entity DROP FOREIGN KEY FK_D756FC2F755C8D71');
        $this->addSql('DROP TABLE actor_entity');
        $this->addSql('DROP TABLE movie_entity');
        $this->addSql('DROP TABLE movie_entity_actor_entity');
    }
}
