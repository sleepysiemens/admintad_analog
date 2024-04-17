<?php

namespace App\Services;

use App\Models\Content;

class SettingsService
{
    public function get_by_title($title)
    {
        return Content::query()->where('name','=',$title)->first();
    }

    public function update($title, $text):void
    {
        $content = Content::query()->where('name','=',$title)->first();
        $content->update(['text'=>$text]);
    }
}
