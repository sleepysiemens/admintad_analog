<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Content;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->string('title_en')->nullable();
            $table->string('name');
        });

        $datas=
            [
              [
                  'title'=>'Правила офферов',
                  'title_en'=>'Offer rules',
                  'name'=>'offer_rules',
                  'text'=>
                  '
                  Перед запуском оффера просим внимательно проверить промо материалы. В случае выявления несоответствий, оплата произведена не будет - ответственность полностью на вебмастере.

Запрещается:
1. Использование ссылок на существующие НИИ, Министерства, СМИ.
2. Использование Имени или Фото личностей только по согласованию с менеджером.
3. Запрещено использовать информацию, что клиент может отказаться от лекарственных средств, назначенных лечащим врачом.
4. Запрещено таргетироваться на слишком молодую аудиторию, рекомендуемый таргет по возрасту от 30 лет.

Проверяйте промо и селебрити, даже если нашли его в спайтуле.
Перед запуском трафика на объемах, обязательно уточняйте наличие свободных капов у вашего менеджера.
                  '
              ],
                [
                    'title'=>'Источники трафика',
                    'title_en'=>'Traffic sources',
                    'name'=>'traffic_sources',
                    'text'=>
                    'Web-сайты

Дорвеи
Контекстная реклама
Тизерная реклама
Баннерная реклама
Таргетированная реклама
Instagram
Push - уведомления
Facebook
Нативная реклама
SEO'
                ]
            ];
        foreach ($datas as $data) {
            Content::create($data);

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
