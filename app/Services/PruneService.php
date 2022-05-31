<?php

namespace App\Services;

use DateTime;
use App\Models\Node;

class PruneService
{

    public function prune()
    {
        $date = new DateTime;
        $date->modify('-60 minutes');
        $formatted = $date->format('Y-m-d H:i:s');
        $deleted = Node::where('updated_at', '<=', $formatted)->delete();
        return $deleted;
    }
}
