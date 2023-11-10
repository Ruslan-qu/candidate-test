<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231110091855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupons DROP CONSTRAINT fk_f5641118ef65690d');
        $this->addSql('DROP SEQUENCE type_coupons_id_seq CASCADE');
        $this->addSql('DROP TABLE type_coupons');
        $this->addSql('DROP INDEX idx_f5641118ef65690d');
        $this->addSql('ALTER TABLE coupons ADD type_coupon VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE coupons DROP id_type_coupon_id');
        $this->addSql('ALTER TABLE products ALTER id TYPE INT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE type_coupons_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE type_coupons (id INT NOT NULL, type_coupon VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE coupons ADD id_type_coupon_id INT NOT NULL');
        $this->addSql('ALTER TABLE coupons DROP type_coupon');
        $this->addSql('ALTER TABLE coupons ADD CONSTRAINT fk_f5641118ef65690d FOREIGN KEY (id_type_coupon_id) REFERENCES type_coupons (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_f5641118ef65690d ON coupons (id_type_coupon_id)');
        $this->addSql('ALTER TABLE products ALTER id TYPE BIGINT');
    }
}
