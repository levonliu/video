<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //不允许批量填充的字段
    protected $guarded = [];

    /**
     * 与视频模型关联（一对多）
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos(  )
    {
        return $this->hasMany(Video::class);
    }
}
