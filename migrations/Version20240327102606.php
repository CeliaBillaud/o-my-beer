<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327102606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_beer (user_id INT NOT NULL, beer_id INT NOT NULL, INDEX IDX_22772A64A76ED395 (user_id), INDEX IDX_22772A64D0989053 (beer_id), PRIMARY KEY(user_id, beer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_beer ADD CONSTRAINT FK_22772A64A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_beer ADD CONSTRAINT FK_22772A64D0989053 FOREIGN KEY (beer_id) REFERENCES beer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_beer DROP FOREIGN KEY FK_22772A64A76ED395');
        $this->addSql('ALTER TABLE user_beer DROP FOREIGN KEY FK_22772A64D0989053');
        $this->addSql('DROP TABLE user_beer');
    }
}
