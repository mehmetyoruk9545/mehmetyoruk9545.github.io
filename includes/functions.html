<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

function fyark_ensure_directory(string $path): void
{
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

function fyark_clean_text(?string $value): string
{
    return trim(strip_tags((string)$value));
}

function fyark_clean_message(?string $value): string
{
    $value = trim((string)$value);
    $value = str_replace("\0", '', $value);
    return mb_substr($value, 0, FYARK_MAX_MESSAGE_LENGTH);
}

function fyark_generate_csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function fyark_validate_csrf_token(?string $token): bool
{
    return isset($_SESSION['csrf_token'], $token)
        && hash_equals($_SESSION['csrf_token'], $token);
}

function fyark_generate_form_token(): void
{
    $_SESSION['form_started_at'] = time();
}

function fyark_validate_form_time(): bool
{
    $startedAt = $_SESSION['form_started_at'] ?? null;

    if (!$startedAt || !is_numeric($startedAt)) {
        return false;
    }

    return (time() - (int)$startedAt) >= FYARK_MIN_FORM_SECONDS;
}

function fyark_client_ip(): string
{
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

function fyark_rate_limit_key(): string
{
    return hash('sha256', fyark_client_ip());
}

function fyark_get_rate_attempts(): array
{
    fyark_ensure_directory(FYARK_RATE_LIMIT_STORAGE);

    $file = FYARK_RATE_LIMIT_STORAGE . '/' . fyark_rate_limit_key() . '.json';
    $now = time();
    $attempts = [];

    if (is_file($file)) {
        $json = file_get_contents($file);
        $attempts = json_decode((string)$json, true);
        if (!is_array($attempts)) {
            $attempts = [];
        }
    }

    return array_values(array_filter($attempts, function ($timestamp) use ($now) {
        return is_numeric($timestamp) && ((int)$timestamp > ($now - FYARK_RATE_LIMIT_WINDOW));
    }));
}

function fyark_is_rate_limited(): bool
{
    return count(fyark_get_rate_attempts()) >= FYARK_RATE_LIMIT_MAX_ATTEMPTS;
}

function fyark_register_attempt(): void
{
    fyark_ensure_directory(FYARK_RATE_LIMIT_STORAGE);

    $file = FYARK_RATE_LIMIT_STORAGE . '/' . fyark_rate_limit_key() . '.json';
    $attempts = fyark_get_rate_attempts();
    $attempts[] = time();

    file_put_contents(
        $file,
        json_encode($attempts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );
}

function fyark_in_array_strict(string $value, array $allowed): bool
{
    return in_array($value, $allowed, true);
}

function fyark_create_reference_id(): string
{
    return 'FY-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
}

function fyark_save_contact(array $record): bool
{
    fyark_ensure_directory(FYARK_CONTACT_STORAGE);

    $filename = FYARK_CONTACT_STORAGE . '/iletisim-' . date('Ymd-His') . '-' . bin2hex(random_bytes(4)) . '.json';

    return file_put_contents(
        $filename,
        json_encode($record, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    ) !== false;
}

function fyark_old(string $key, string $default = ''): string
{
    return htmlspecialchars($_POST[$key] ?? $default, ENT_QUOTES, 'UTF-8');
}

function fyark_selected(string $key, string $value): string
{
    return (($_POST[$key] ?? '') === $value) ? 'selected' : '';
}

function fyark_checked(string $key, string $value = '1'): string
{
    return isset($_POST[$key]) && (($_POST[$key] === $value) || ($_POST[$key] === 'on'))
        ? 'checked'
        : '';
}