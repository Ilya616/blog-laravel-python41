<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DataDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data-delete {table : Write table data delete} {count_delete : Write count data delete}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('table');
        $count_delete = $this->argument('count_delete');

        DB::table($table)->orderBy('id', "desc")->limit($count_delete)->delete();

        $this->info('Данные успешно удалены в количестве '.$count_delete.' штук');
    }
}
