<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114144320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupons ADD id_type_coupon_id INT NOT NULL');
        $this->addSql('ALTER TABLE coupons ADD CONSTRAINT FK_F5641118EF65690D FOREIGN KEY (id_type_coupon_id) REFERENCES type_coupons (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_F5641118EF65690D ON coupons (id_type_coupon_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE coupons DROP CONSTRAINT FK_F5641118EF65690D');
        $this->addSql('DROP INDEX IDX_F5641118EF65690D');
        $this->addSql('ALTER TABLE coupons DROP id_type_coupon_id');
    }
}
