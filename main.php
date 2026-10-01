<?php

require_once __DIR__ . '/functions/server.php';
require_once __DIR__ . '/functions/render.php';
require_once __DIR__ . '/router/router.php';
require_once __DIR__ . '/middleware/middleware.php';
require_once __DIR__ . '/dispatcher/dispatcher.php';

// Controllers
require_once __DIR__ . '/controllers/produtos_controller.php';
require_once __DIR__ . '/controllers/marcas_controller.php';

// Services
require_once __DIR__ . '/services/produtos_services.php';
require_once __DIR__ . '/services/marcas_services.php';