<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230521132026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog CHANGE category_id category_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C01551439777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_C01551439777D11E ON blog (category_id_id)');
        $this->addSql('ALTER TABLE course CHANGE category_id category_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB99777D11E FOREIGN KEY (category_id_id) REFERENCES course_category (id)');
        $this->addSql('CREATE INDEX IDX_169E6FB99777D11E ON course (category_id_id)');
        $this->addSql('ALTER TABLE course_video CHANGE course_category course_category_id INT NOT NULL');
        $this->addSql('ALTER TABLE course_video ADD CONSTRAINT FK_956CDDC46628AD36 FOREIGN KEY (course_category_id) REFERENCES course_category (id)');
        $this->addSql('CREATE INDEX IDX_956CDDC46628AD36 ON course_video (course_category_id)');
        $this->addSql('ALTER TABLE payments CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE payments ADD CONSTRAINT FK_65D29B329D86650F FOREIGN KEY (user_id_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_65D29B329D86650F ON payments (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C01551439777D11E');
        $this->addSql('DROP INDEX IDX_C01551439777D11E ON blog');
        $this->addSql('ALTER TABLE blog CHANGE category_id_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB99777D11E');
        $this->addSql('DROP INDEX IDX_169E6FB99777D11E ON course');
        $this->addSql('ALTER TABLE course CHANGE category_id_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE course_video DROP FOREIGN KEY FK_956CDDC46628AD36');
        $this->addSql('DROP INDEX IDX_956CDDC46628AD36 ON course_video');
        $this->addSql('ALTER TABLE course_video CHANGE course_category_id course_category INT NOT NULL');
        $this->addSql('ALTER TABLE payments DROP FOREIGN KEY FK_65D29B329D86650F');
        $this->addSql('DROP INDEX IDX_65D29B329D86650F ON payments');
        $this->addSql('ALTER TABLE payments CHANGE user_id_id user_id INT NOT NULL');
    }
}
