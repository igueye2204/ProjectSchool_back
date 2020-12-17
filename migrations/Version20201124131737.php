<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201124131737 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brief (id INT AUTO_INCREMENT NOT NULL, langue VARCHAR(255) NOT NULL, nom_brief VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, contexte VARCHAR(255) NOT NULL, modalite_pedagogique VARCHAR(255) NOT NULL, critere_evaluation VARCHAR(255) NOT NULL, image_promo LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chat (id INT AUTO_INCREMENT NOT NULL, message VARCHAR(255) NOT NULL, piece_jointe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_partiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, delai_at DATETIME NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, archive TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E6D6B297A4D60759 (libelle), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_sortie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4DC05AA0A4D60759 (libelle), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, email TINYTEXT NOT NULL, avatar_type VARCHAR(255) DEFAULT NULL, avatar LONGBLOB DEFAULT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apprenant_profil_sortie (apprenant_id INT NOT NULL, profil_sortie_id INT NOT NULL, INDEX IDX_D17081B4C5697D6D (apprenant_id), INDEX IDX_D17081B46409EF73 (profil_sortie_id), PRIMARY KEY(apprenant_id, profil_sortie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE apprenant_profil_sortie ADD CONSTRAINT FK_D17081B4C5697D6D FOREIGN KEY (apprenant_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE apprenant_profil_sortie ADD CONSTRAINT FK_D17081B46409EF73 FOREIGN KEY (profil_sortie_id) REFERENCES profil_sortie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('ALTER TABLE apprenant_profil_sortie DROP FOREIGN KEY FK_D17081B46409EF73');
        $this->addSql('ALTER TABLE apprenant_profil_sortie DROP FOREIGN KEY FK_D17081B4C5697D6D');
        $this->addSql('DROP TABLE brief');
        $this->addSql('DROP TABLE chat');
        $this->addSql('DROP TABLE livrable_partiel');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE profil_sortie');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE apprenant_profil_sortie');
    }
}
