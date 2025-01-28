<?php

namespace App\Actions\Database;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\DB;

class GetDatabaseSchema
{
    use AsAction;

    // List of tables to exclude
    protected array $excludedTables = [
        'cache',
        'cache_locks',
        'job_batches',
        'jobs',
        'failed_jobs',
        'password_reset_tokens',
        'personal_access_tokens',
        'sessions',
        'telescope_entries',
        'telescope_entries_tags',
        'telescope_monitoring',
        'migrations',
        'datafeeds',
    ];

    public function handle()
    {
        $tables = DB::select("SHOW TABLES");
        $schema = [];

        foreach ($tables as $table) {
            // Get the table name
            $tableName = array_values((array)$table)[0];

            // Skip excluded tables
            if (in_array($tableName, $this->excludedTables)) {
                continue;
            }

            // Fetch columns for the current table
            $columns = DB::select("SHOW COLUMNS FROM $tableName");

            $schema[$tableName] = [
                'columns' => array_map(function ($column) {
                    return [
                        'name' => $column->Field,
                        'type' => $column->Type,
                    ];
                }, $columns),
                'relationships' => $this->getRelationships($tableName), // Fetch relationships
            ];
        }

        return $schema;
    }

    /**
     * Get relationships for a given table by querying foreign key constraints.
     */
    protected function getRelationships($tableName)
    {
        $relationships = DB::select("
            SELECT
                TABLE_NAME AS table_name,
                COLUMN_NAME AS column_name,
                REFERENCED_TABLE_NAME AS referenced_table_name,
                REFERENCED_COLUMN_NAME AS referenced_column_name
            FROM
                INFORMATION_SCHEMA.KEY_COLUMN_USAGE
            WHERE
                TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = ?
                AND REFERENCED_TABLE_NAME IS NOT NULL
        ", [$tableName]);

        return array_map(function ($relation) {
            return [
                'column' => $relation->column_name,
                'referenced_table' => $relation->referenced_table_name,
                'referenced_column' => $relation->referenced_column_name,
            ];
        }, $relationships);
    }
}
