<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class AboutUs extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'aboutuses';

    protected $appends = [
        'about_us_photo',
        'manager_photo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'about_us_1',
        'about_us_2',
        'about_us_3',
        'description',
        'client_text',
        'success_text',
        'task_text',
        'email_1',
        'phone_1',
        'phone_2',
        'address',
        'time',
        'facebook',
        'twitter',
        'instegram',
        'youtube',
        'linkedin',
        'contact_text',
        'latitude',
        'longitude',
        'manager_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getAboutUsPhotoAttribute()
    {
        $file = $this->getMedia('about_us_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getManagerPhotoAttribute()
    {
        $file = $this->getMedia('manager_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
