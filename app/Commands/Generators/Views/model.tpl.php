<@php

namespace {namespace};

use Illuminate\Database\Eloquent\Model;

class {class} extends Model
{
    protected $table         = '{table}';
    protected $primaryKey    = 'id';
    protected $incrementing  = false;
    // protected $keyType = 'string';
    protected $fillable      = [];

    // Dates
    protected $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}
