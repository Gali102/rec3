<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Request extends Model
{
    use HasFactory, CrudTrait;

//    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'phone',
        'telegram',
        'whatsapp',
        'site',
        'created_at',
        'updated_at',
        'user_id',
        'type_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($company) {
            $userId = Auth::id();

            // Если поле user_id не установлено, устанавливаем его в текущего аутентифицированного пользователя
            //dd($userId);
            $company->user_id = $company->user_id ?: auth()->id();
        });
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(\App\Models\TypeCompany::class);
    }
}
