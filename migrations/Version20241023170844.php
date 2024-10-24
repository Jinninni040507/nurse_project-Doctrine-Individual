<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241023170844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enfermero (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, telefono INT NOT NULL, rol VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paciente (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, fecha_nacimiento DATE NOT NULL, sexo VARCHAR(255) NOT NULL, alergias VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE registro_medico (id INT AUTO_INCREMENT NOT NULL, paciente_id INT NOT NULL, enfermero_id INT NOT NULL, fecha_registro DATETIME NOT NULL, peso NUMERIC(6, 3) NOT NULL, altura NUMERIC(6, 3) NOT NULL, dieta VARCHAR(255) NOT NULL, oxigeno INT DEFAULT NULL, indice_norton INT DEFAULT NULL, temperatura NUMERIC(6, 3) NOT NULL, presion_arterial_sistolica INT DEFAULT NULL, presion_arterial_diastolica INT DEFAULT NULL, frequencia_respiratoria INT DEFAULT NULL, frequencia_cardiaca INT DEFAULT NULL, balance_hidrico NUMERIC(6, 3) DEFAULT NULL, otros VARCHAR(255) DEFAULT NULL, INDEX IDX_A84AE2E47310DAD4 (paciente_id), INDEX IDX_A84AE2E426F1BD6C (enfermero_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE registro_medico ADD CONSTRAINT FK_A84AE2E47310DAD4 FOREIGN KEY (paciente_id) REFERENCES paciente (id)');
        $this->addSql('ALTER TABLE registro_medico ADD CONSTRAINT FK_A84AE2E426F1BD6C FOREIGN KEY (enfermero_id) REFERENCES enfermero (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE registro_medico DROP FOREIGN KEY FK_A84AE2E47310DAD4');
        $this->addSql('ALTER TABLE registro_medico DROP FOREIGN KEY FK_A84AE2E426F1BD6C');
        $this->addSql('DROP TABLE enfermero');
        $this->addSql('DROP TABLE paciente');
        $this->addSql('DROP TABLE registro_medico');
    }
}
