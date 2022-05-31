<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NodeStoreRequest;
use App\Http\Requests\NodeUpdateRequest;
use App\Services\NodeService;

class NodeController extends Controller
{
    public function __construct(NodeService $service)
    {
        $this->nodeService = $service;
    }


    public function index()
    {
        $nodes = $this->nodeService->allNode();

        return response()->json($nodes, 200);
    }

    public function create(NodeStoreRequest $request)
    {

        $node = $this->nodeService->createNode($request->validated());

        if (!$node) {
            return $this->helper()->responder("Node Could not be created", 500);
        }
        return $this->helper()->responder($node, 201);
    }
    public function show($node)
    {

        $node = $this->nodeService->showNode($node);

        if ($node == null) {

            return $this->helper()->responder("Node to found", 404);
        }
        return $this->helper()->responder($node, 200);
    }
    public function update(NodeUpdateRequest $request, $node_id)
    {

        $node = $this->nodeService->updateNode($request->all(), $node_id);
        if ($node == null)
            return $this->helper()->responder("Node not found", 404);
        else {
            return $node;
        }
    }
    public function delete($node)
    {
        $node = $this->nodeService->deleteNode($node);
        if ($node == true) {
            return $this->helper()->responder("Node deleted successfully", 200);
        } else {
            return $this->helper()->responder("Node Could not be deleted", 500);
        }
    }
}
