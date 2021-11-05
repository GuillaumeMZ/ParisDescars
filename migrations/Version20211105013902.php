<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211105013902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE bill_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE corporation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE renter_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE vehicle_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE bill (id INT NOT NULL, id_client_id INT NOT NULL, id_renter_id INT NOT NULL, id_vehicle_id INT NOT NULL, begin_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, end_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, price DOUBLE PRECISION NOT NULL, payment_status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7A2119E399DED506 ON bill (id_client_id)');
        $this->addSql('CREATE INDEX IDX_7A2119E362BC1962 ON bill (id_renter_id)');
        $this->addSql('CREATE INDEX IDX_7A2119E3F1D99706 ON bill (id_vehicle_id)');
        $this->addSql('CREATE TABLE client (id INT NOT NULL, id_corp_id INT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C7440455712092E8 ON client (id_corp_id)');
        $this->addSql('CREATE TABLE corporation (id INT NOT NULL, corp_name VARCHAR(255) NOT NULL, corp_address VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE renter (id INT NOT NULL, id_corp_id INT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_887A3A1A712092E8 ON renter (id_corp_id)');
        $this->addSql('CREATE TABLE vehicle (id INT NOT NULL, type VARCHAR(255) NOT NULL, amount INT NOT NULL, details VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, location_state VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E399DED506 FOREIGN KEY (id_client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E362BC1962 FOREIGN KEY (id_renter_id) REFERENCES renter (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3F1D99706 FOREIGN KEY (id_vehicle_id) REFERENCES vehicle (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455712092E8 FOREIGN KEY (id_corp_id) REFERENCES corporation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE renter ADD CONSTRAINT FK_887A3A1A712092E8 FOREIGN KEY (id_corp_id) REFERENCES corporation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE bill DROP CONSTRAINT FK_7A2119E399DED506');
        $this->addSql('ALTER TABLE client DROP CONSTRAINT FK_C7440455712092E8');
        $this->addSql('ALTER TABLE renter DROP CONSTRAINT FK_887A3A1A712092E8');
        $this->addSql('ALTER TABLE bill DROP CONSTRAINT FK_7A2119E362BC1962');
        $this->addSql('ALTER TABLE bill DROP CONSTRAINT FK_7A2119E3F1D99706');
        $this->addSql('DROP SEQUENCE bill_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE client_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE corporation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE renter_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE vehicle_id_seq CASCADE');
        $this->addSql('DROP TABLE bill');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE corporation');
        $this->addSql('DROP TABLE renter');
        $this->addSql('DROP TABLE vehicle');
    }
}
