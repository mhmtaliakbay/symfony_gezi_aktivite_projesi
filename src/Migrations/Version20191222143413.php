<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191222143413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(50) DEFAULT NULL, surname VARCHAR(20) DEFAULT NULL, image VARCHAR(50) DEFAULT NULL, status VARCHAR(10) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category CHANGE parentid parentid INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(100) DEFAULT NULL, CHANGE status status VARCHAR(10) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE travel_id travel_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT NULL, CHANGE image image VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE setting CHANGE title title VARCHAR(50) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE company company VARCHAR(50) DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(25) DEFAULT NULL, CHANGE fax fax VARCHAR(25) DEFAULT NULL, CHANGE email email VARCHAR(25) DEFAULT NULL, CHANGE smtpserver smtpserver VARCHAR(50) DEFAULT NULL, CHANGE smtpemail smtpemail VARCHAR(50) DEFAULT NULL, CHANGE smtppassword smtppassword VARCHAR(50) DEFAULT NULL, CHANGE smtpport smtpport VARCHAR(50) DEFAULT NULL, CHANGE facebook facebook VARCHAR(50) DEFAULT NULL, CHANGE instagram instagram VARCHAR(50) DEFAULT NULL, CHANGE twitter twitter VARCHAR(50) DEFAULT NULL, CHANGE status status VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE travel CHANGE category_id category_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(100) DEFAULT NULL, CHANGE status status VARCHAR(50) DEFAULT NULL, CHANGE star star VARCHAR(100) DEFAULT NULL, CHANGE address address VARCHAR(100) DEFAULT NULL, CHANGE phone phone VARCHAR(30) DEFAULT NULL, CHANGE fax fax VARCHAR(30) DEFAULT NULL, CHANGE email email VARCHAR(30) DEFAULT NULL, CHANGE city city VARCHAR(30) DEFAULT NULL, CHANGE country country VARCHAR(30) DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE category CHANGE parentid parentid INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE status status VARCHAR(10) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE image CHANGE travel_id travel_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE setting CHANGE title title VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE company company VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(25) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fax fax VARCHAR(25) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(25) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE smtpserver smtpserver VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE smtpemail smtpemail VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE smtppassword smtppassword VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE smtpport smtpport VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE facebook facebook VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE instagram instagram VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE twitter twitter VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE status status VARCHAR(25) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE travel CHANGE category_id category_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE status status VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE star star VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE address address VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone phone VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fax fax VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE city city VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE country country VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE location location VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
