<?php

namespace acround\Minimax\exceptions;

/**
 * Выбрасывается при ошибках OAuth2-авторизации:
 * неверные credentials, недоступен endpoint, неожиданный ответ.
 */
class MinimaxAuthException extends \RuntimeException {}
