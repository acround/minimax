<?php

namespace acround\Minimax\exceptions;


/**
 * Выбрасывается при ошибках вызовов API:
 * 4xx/5xx ответы, невалидный JSON, ошибки соединения.
 */
class MinimaxApiException extends \RuntimeException {}
