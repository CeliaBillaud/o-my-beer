<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327101045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beer ADD brand_id INT NOT NULL, ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE beer ADD CONSTRAINT FK_58F666AD44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE beer ADD CONSTRAINT FK_58F666ADC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_58F666AD44F5D008 ON beer (brand_id)');
        $this->addSql('CREATE INDEX IDX_58F666ADC54C8C93 ON beer (type_id)');
        $this->addSql('ALTER TABLE review ADD beer_id INT NOT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6D0989053 FOREIGN KEY (beer_id) REFERENCES beer (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_794381C6D0989053 ON review (beer_id)');
        $this->addSql('CREATE INDEX IDX_794381C6A76ED395 ON review (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beer DROP FOREIGN KEY FK_58F666AD44F5D008');
        $this->addSql('ALTER TABLE beer DROP FOREIGN KEY FK_58F666ADC54C8C93');
        $this->addSql('DROP INDEX IDX_58F666AD44F5D008 ON beer');
        $this->addSql('DROP INDEX IDX_58F666ADC54C8C93 ON beer');
        $this->addSql('ALTER TABLE beer DROP brand_id, DROP type_id');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6D0989053');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6A76ED395');
        $this->addSql('DROP INDEX IDX_794381C6D0989053 ON review');
        $this->addSql('DROP INDEX IDX_794381C6A76ED395 ON review');
        $this->addSql('ALTER TABLE review DROP beer_id, DROP user_id');
    }
}
