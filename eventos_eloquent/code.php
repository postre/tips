<?php 

protected static function boot()
{
    parent::boot();
    static::updated(function (User $model) {
        if($model->disabled!='S' && $model->status_register=='A'){
            $model->status=1;
        }else{
            $model->status=0; 
        }
        $model->saveQuietly();
    });
    static::created(function ($model) {
        if($model->disabled!='S' && $model->status_register=='A'){
            $model->status=1;
        }else{
            $model->status=0; 
        }
        $model->saveQuietly();
    });
}