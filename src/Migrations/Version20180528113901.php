<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180528113901 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE choose (id INT AUTO_INCREMENT NOT NULL, cou_id_id INT NOT NULL, use_id_id INT NOT NULL, cho_date DATETIME NOT NULL, cho_points INT DEFAULT NULL, INDEX IDX_8FE4347170C2373C (cou_id_id), INDEX IDX_8FE43471E3D2B46D (use_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_of (id INT AUTO_INCREMENT NOT NULL, cou_id_id INT NOT NULL, mat_id_id INT NOT NULL, score VARCHAR(5) DEFAULT NULL, INDEX IDX_E1480F3870C2373C (cou_id_id), INDEX IDX_E1480F38BFDF528 (mat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stats (id INT AUTO_INCREMENT NOT NULL, cou_id_id INT NOT NULL, sta_goal INT NOT NULL, sta_possession INT NOT NULL, sta_framedshoot INT NOT NULL, sta_stop INT NOT NULL, sta_offside INT NOT NULL, sta_fault INT NOT NULL, sta_yallowcardboard INT NOT NULL, sta_redcarboard INT NOT NULL, sta_pastfail INT NOT NULL, sta_pastsuccess INT NOT NULL, sta_assist INT NOT NULL, sta_notframedshoot INT NOT NULL, sta_date DATETIME NOT NULL, INDEX IDX_574767AA70C2373C (cou_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, use_pseudo VARCHAR(45) NOT NULL, use_firstname VARCHAR(45) NOT NULL, use_lastname VARCHAR(45) NOT NULL, use_password VARCHAR(255) NOT NULL, use_mail VARCHAR(255) NOT NULL, use_token VARCHAR(255) NOT NULL, use_role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `match` (id INT AUTO_INCREMENT NOT NULL, mat_date DATETIME NOT NULL, mat_place VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE countries (id INT AUTO_INCREMENT NOT NULL, cou_name VARCHAR(20) NOT NULL, cou_flag VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE choose ADD CONSTRAINT FK_8FE4347170C2373C FOREIGN KEY (cou_id_id) REFERENCES countries (id)');
        $this->addSql('ALTER TABLE choose ADD CONSTRAINT FK_8FE43471E3D2B46D FOREIGN KEY (use_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE course_of ADD CONSTRAINT FK_E1480F3870C2373C FOREIGN KEY (cou_id_id) REFERENCES countries (id)');
        $this->addSql('ALTER TABLE course_of ADD CONSTRAINT FK_E1480F38BFDF528 FOREIGN KEY (mat_id_id) REFERENCES `match` (id)');
        $this->addSql('ALTER TABLE stats ADD CONSTRAINT FK_574767AA70C2373C FOREIGN KEY (cou_id_id) REFERENCES countries (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE choose DROP FOREIGN KEY FK_8FE43471E3D2B46D');
        $this->addSql('ALTER TABLE course_of DROP FOREIGN KEY FK_E1480F38BFDF528');
        $this->addSql('ALTER TABLE choose DROP FOREIGN KEY FK_8FE4347170C2373C');
        $this->addSql('ALTER TABLE course_of DROP FOREIGN KEY FK_E1480F3870C2373C');
        $this->addSql('ALTER TABLE stats DROP FOREIGN KEY FK_574767AA70C2373C');
        $this->addSql('DROP TABLE choose');
        $this->addSql('DROP TABLE course_of');
        $this->addSql('DROP TABLE stats');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE `match`');
        $this->addSql('DROP TABLE countries');
    }
}
