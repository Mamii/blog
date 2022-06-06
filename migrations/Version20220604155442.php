<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220604155442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Make catgories, posts and tags sluggable';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3AF34668989D9B62 ON categories (slug)');
        $this->addSql('ALTER TABLE posts ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_885DBAFA989D9B62 ON posts (slug)');
        $this->addSql('ALTER TABLE tags ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6FBC9426989D9B62 ON tags (slug)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_3AF34668989D9B62 ON categories');
        $this->addSql('ALTER TABLE categories DROP slug');
        $this->addSql('DROP INDEX UNIQ_885DBAFA989D9B62 ON posts');
        $this->addSql('ALTER TABLE posts DROP slug');
        $this->addSql('DROP INDEX UNIQ_6FBC9426989D9B62 ON tags');
        $this->addSql('ALTER TABLE tags DROP slug');
    }
}
