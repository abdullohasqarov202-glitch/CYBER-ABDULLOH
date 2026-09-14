<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Faqat POST so'rovlarini qabul qilamiz
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Faqat POST usuli qo\'llab-quvvatlanadi']);
    exit;
}

// Railway (yoki boshqa hosting) Variables bo'limida sozlanadigan maxfiy qiymatlar
$botToken = getenv('BOT_TOKEN');
$chatId   = getenv('TELEGRAM_CHAT_ID');

if (!$botToken || !$chatId) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Server sozlanmagan: BOT_TOKEN yoki TELEGRAM_CHAT_ID yo\'q']);
    exit;
}

// JSON tanasini o'qiymiz
$input = json_decode(file_get_contents('php://input'), true);

$name    = trim($input['name'] ?? '');
$contact = trim($input['contact'] ?? '');
$message = trim($input['message'] ?? '');

if ($name === '' || $contact === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Barcha maydonlarni to\'ldiring']);
    exit;
}

// Oddiy uzunlik cheklovi (spam/abuse'dan himoya)
$name    = mb_substr($name, 0, 100);
$contact = mb_substr($contact, 0, 150);
$message = mb_substr($message, 0, 1500);

$text = "📩 Yangi xabar — portfolio saytidan\n\n"
      . "👤 Ism: {$name}\n"
      . "📞 Aloqa: {$contact}\n\n"
      . "💬 Xabar:\n{$message}";

$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

$ch = curl_init($telegramUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'chat_id' => $chatId,
    'text'    => $text,
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(502);
    echo json_encode(['ok' => false, 'error' => 'Telegramga yuborishda xatolik', 'details' => $response]);
}
