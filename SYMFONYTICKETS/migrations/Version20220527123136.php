<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527123136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entrada (id INT AUTO_INCREMENT NOT NULL, evento_id_id INT NOT NULL, usuario_id_id INT DEFAULT NULL, tipo VARCHAR(255) DEFAULT NULL, rango_edad VARCHAR(255) DEFAULT NULL, fecha_entrada DATE DEFAULT NULL, INDEX IDX_C949A2746F86A0CB (evento_id_id), INDEX IDX_C949A274629AF449 (usuario_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entrada ADD CONSTRAINT FK_C949A2746F86A0CB FOREIGN KEY (evento_id_id) REFERENCES eventos (id)');
        $this->addSql('ALTER TABLE entrada ADD CONSTRAINT FK_C949A274629AF449 FOREIGN KEY (usuario_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE entrada');
    }
}
