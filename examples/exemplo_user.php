<?php
// Exemplo de uso isolado das rotas de usuário
$app = require __DIR__ . '/snippets/app_base.php';
$userRouter = require __DIR__ . '/snippets/user_routes.php';
$app->use($userRouter);
use Express\SRC\Services\RequestValidationMiddleware;
$app->use(new RequestValidationMiddleware());
$app->run();
