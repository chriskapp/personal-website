<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240823181908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('app_blog');
        $table->addColumn('id', 'string', ['length' => 64]);
        $table->addColumn('title', 'string');
        $table->addColumn('title_slug', 'string');
        $table->addColumn('author_name', 'string', ['length' => 128]);
        $table->addColumn('author_uri', 'string');
        $table->addColumn('updated', 'datetime');
        $table->addColumn('summary', 'text');
        $table->addColumn('category', 'string');
        $table->addColumn('content', 'text');
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
    }

    public function isTransactional(): bool
    {
        return false;
    }
}
