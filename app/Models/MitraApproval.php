<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MitraApproval extends Model
{
    use HasFactory;

    protected $table = 'mitra_approvals';

    protected $fillable = [
        'nama_pemilik',
        'nib',
        'siup',
        'link_gmaps',
        'deskripsi_mitra',
        'status',
        'mitra_id',
        'is_notified',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function mitra()
    {
        return $this->belongsTo(User::class, 'mitra_id')->whereHas('roles', function ($query) {
            $query->where('name', 'mitra');
        });
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}
