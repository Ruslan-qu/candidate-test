<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109120914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE coupons_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE products_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE taxes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_coupons_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE coupons (id INT NOT NULL, id_type_coupon_id INT NOT NULL, number_coupon VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F5641118EF65690D ON coupons (id_type_coupon_id)');
        $this->addSql('CREATE TABLE products (id INT NOT NULL, name_product VARCHAR(255) NOT NULL, price_product INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE taxes (id INT NOT NULL, country_of_taxation VARCHAR(255) NOT NULL, tax_rate INT NOT NULL, tax_number VARCHAR(255) NOT NULL, number_of_characters INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_coupons (id INT NOT NULL, type_coupon VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE coupons ADD CONSTRAINT FK_F5641118EF65690D FOREIGN KEY (id_type_coupon_id) REFERENCES type_coupons (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE coupons_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE products_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE taxes_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_coupons_id_seq CASCADE');
        $this->addSql('ALTER TABLE coupons DROP CONSTRAINT FK_F5641118EF65690D');
        $this->addSql('DROP TABLE coupons');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE taxes');
        $this->addSql('DROP TABLE type_coupons');
    }
}
