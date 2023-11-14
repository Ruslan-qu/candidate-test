<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114150755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_coupons ADD type_coupon VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_coupons DROP fixed_amount');
        $this->addSql('ALTER TABLE type_coupons DROP percentage_of_the_amount');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE type_coupons ADD percentage_of_the_amount VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_coupons RENAME COLUMN type_coupon TO fixed_amount');
    }
}
