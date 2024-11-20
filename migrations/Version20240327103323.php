<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327103323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_beer_test (user_id INT NOT NULL, beer_id INT NOT NULL, INDEX IDX_D06BA835A76ED395 (user_id), INDEX IDX_D06BA835D0989053 (beer_id), PRIMARY KEY(user_id, beer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_beer_test ADD CONSTRAINT FK_D06BA835A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_beer_test ADD CONSTRAINT FK_D06BA835D0989053 FOREIGN KEY (beer_id) REFERENCES beer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_beer_test DROP FOREIGN KEY FK_D06BA835A76ED395');
        $this->addSql('ALTER TABLE user_beer_test DROP FOREIGN KEY FK_D06BA835D0989053');
        $this->addSql('DROP TABLE user_beer_test');
    }
}
