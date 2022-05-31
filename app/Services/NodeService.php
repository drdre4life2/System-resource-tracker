<?php

namespace App\Services;
use App\Models\Node;

class NodeService{


    public function allNode(){
        $nodes = Node::paginate(5);
        return $nodes;
     }
    public function createNode($data){
        $nodes = Node::create($data);
        return $nodes;
     }
     public function showNode($nodeId){
        $node  = Node::where('id',$nodeId)->first();
        return $node;
     }

     public function updateNode($data,$node_id){
        $node = Node::find($node_id);
        if($node == null)
        return null;
        $node->update($data);
        return $node;
     }

     public function deleteNode($node){
        $nodes = Node::find($node)->delete();
        return $nodes;
     }

}
