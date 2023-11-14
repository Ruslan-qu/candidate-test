<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114143031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE type_coupons_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE coupons (id INT NOT NULL, number_coupon VARCHAR(255) NOT NULL, type_coupon VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE taxes (id INT NOT NULL, country_of_taxation VARCHAR(255) NOT NULL, tax_rate VARCHAR(255) NOT NULL, tax_number VARCHAR(255) NOT NULL, number_of_characters INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_coupons (id INT NOT NULL, fixed_amount VARCHAR(255) NOT NULL, percentage_of_the_amount VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE type_coupons_id_seq CASCADE');
        $this->addSql('DROP TABLE coupons');
        $this->addSql('DROP TABLE taxes');
        $this->addSql('DROP TABLE type_coupons');
    }
}
