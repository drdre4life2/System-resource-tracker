<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PruneService;

class PruneController extends Controller
{
    public function __construct(PruneService $pruneService)
    {
       $this->pruneService = $pruneService;
    }

    public function prune(){
     $prune = $this->pruneService->prune();
     return $prune;
    }
}
