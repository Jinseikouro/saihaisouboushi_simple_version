<?php

namespace App\Http\Controllers\Groupe;

use App\Http\Controllers\Controller;
use App\Models\Groupe;

class GroupeShowListController extends Controller
{
    public function showList()
    {
        //グループをidの古い順に5個づつ表示しています
        $groupes = Groupe::orderBy('id')->paginate(5);
        return view('groupe.groupe-show-list', compact('groupes'));
    }
}
