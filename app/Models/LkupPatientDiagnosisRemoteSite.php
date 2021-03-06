<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LkupPatientDiagnosisRemoteSite extends Model
{
    use HasFactory;

    protected $primaryKey = 'remote_site_id';

    protected $fillable = [
        'remote_site_label'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
