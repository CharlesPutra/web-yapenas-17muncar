<?php

namespace App\Http\Controllers;

use App\Models\StructureOrganization as ModelsStructureOrganization;
use Illuminate\Http\Request;

class StructureOrganization extends Controller
{
    public function index()
    {
        $structureOrganizations = ModelsStructureOrganization::orderByRaw("
        FIELD(posisi,
            'Ketua Yayasan',
            'Kepala Sekolah',
            'Wakil Kepala Sekolah',
            'Guru',
            'Staff',
            'Keuangan'
        )
    ")->get();

        return view('strukturorganisasi', compact('structureOrganizations'));
    }
}
