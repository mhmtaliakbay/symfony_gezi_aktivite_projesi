<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191221113211 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE travel ADD detail LONGTEXT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(100) DEFAULT NULL, CHANGE status status VARCHAR(50) DEFAULT NULL, CHANGE star star VARCHAR(100) DEFAULT NULL, CHANGE address address VARCHAR(100) DEFAULT NULL, CHANGE phone phone VARCHAR(30) DEFAULT NULL, CHANGE fax fax VARCHAR(30) DEFAULT NULL, CHANGE email email VARCHAR(30) DEFAULT NULL, CHANGE city city VARCHAR(30) DEFAULT NULL, CHANGE country country VARCHAR(30) DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE category CHANGE parentid parentid INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(100) DEFAULT NULL, CHANGE status status VARCHAR(10) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category CHANGE parentid parentid INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE status status VARCHAR(10) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE travel DROP detail, CHANGE category_id category_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE status status VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE star star VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE address address VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fax fax VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE city city VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE country country VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE location location VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
