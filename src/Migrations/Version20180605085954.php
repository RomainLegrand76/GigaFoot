<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180605085954 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE choose (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, user_id INT NOT NULL, cho_date DATETIME NOT NULL, cho_point INT DEFAULT NULL, INDEX IDX_8FE43471F92F3E70 (country_id), INDEX IDX_8FE43471A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE countries (id INT AUTO_INCREMENT NOT NULL, cou_name VARCHAR(255) NOT NULL, cou_flag VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_of (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, rencontre_id INT NOT NULL, cof_score VARCHAR(5) DEFAULT NULL, INDEX IDX_E1480F38F92F3E70 (country_id), INDEX IDX_E1480F386CFC0818 (rencontre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rencontre (id INT AUTO_INCREMENT NOT NULL, ren_date DATETIME NOT NULL, ren_place VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stats (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, sta_goal INT NOT NULL, sta_possession INT NOT NULL, sta_framedshoot INT NOT NULL, sta_stop INT NOT NULL, sta_offside INT NOT NULL, sta_fault INT NOT NULL, sta_yellowcardboard INT NOT NULL, sta_redcardboard INT NOT NULL, sta_pastfail INT NOT NULL, sta_pastsuccess INT NOT NULL, sta_assist INT NOT NULL, sta_notframedshoot INT NOT NULL, sta_date DATETIME NOT NULL, INDEX IDX_574767AAF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, use_pseudo VARCHAR(255) NOT NULL, use_firstname VARCHAR(255) NOT NULL, use_lastname VARCHAR(255) NOT NULL, use_password VARCHAR(255) NOT NULL, use_mail VARCHAR(255) NOT NULL, use_token VARCHAR(255) NOT NULL, use_role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE choose ADD CONSTRAINT FK_8FE43471F92F3E70 FOREIGN KEY (country_id) REFERENCES countries (id)');
        $this->addSql('ALTER TABLE choose ADD CONSTRAINT FK_8FE43471A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE course_of ADD CONSTRAINT FK_E1480F38F92F3E70 FOREIGN KEY (country_id) REFERENCES countries (id)');
        $this->addSql('ALTER TABLE course_of ADD CONSTRAINT FK_E1480F386CFC0818 FOREIGN KEY (rencontre_id) REFERENCES rencontre (id)');
        $this->addSql('ALTER TABLE stats ADD CONSTRAINT FK_574767AAF92F3E70 FOREIGN KEY (country_id) REFERENCES countries (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE choose DROP FOREIGN KEY FK_8FE43471F92F3E70');
        $this->addSql('ALTER TABLE course_of DROP FOREIGN KEY FK_E1480F38F92F3E70');
        $this->addSql('ALTER TABLE stats DROP FOREIGN KEY FK_574767AAF92F3E70');
        $this->addSql('ALTER TABLE course_of DROP FOREIGN KEY FK_E1480F386CFC0818');
        $this->addSql('ALTER TABLE choose DROP FOREIGN KEY FK_8FE43471A76ED395');
        $this->addSql('DROP TABLE choose');
        $this->addSql('DROP TABLE countries');
        $this->addSql('DROP TABLE course_of');
        $this->addSql('DROP TABLE rencontre');
        $this->addSql('DROP TABLE stats');
        $this->addSql('DROP TABLE users');
    }
}
