<?php

namespace App\Controller\Task;

/**
 * Update Task Controller.
 */
class UpdateTask extends BaseTaskController
{
    /**
     * Update a task.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return array
     */
    public function updateTask($request, $response, $args)
    {
        try {
            $this->setParams($request, $response, $args);
            $input = $this->request->getParsedBody();
            $result = $this->getTaskService()->updateTask($input, $this->args['id']);

            return $this->jsonResponse('success', $result, 200);
        } catch (\Exception $ex) {
            return $this->jsonResponse('error', $ex->getMessage(), $ex->getCode());
        }
    }
}
