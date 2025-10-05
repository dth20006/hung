<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/DataBase/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (!empty($data)) {
        // Lấy dữ liệu từ JSON
        $linkContact = $data['linkContact'];
        $nameWebsite = strtoupper($data['nameWebsite']);
        $currentPicked = $data['currentPicked'];
        $currentPrice = $data['currentPrice'];
        $time = time();
        $status = 1;

        // Lưu vào database
        $sql = "INSERT INTO mauthue (nameWebsite, linkContact, currentPicked, currentPrice, time, status) 
                VALUES (:nameWebsite, :linkContact, :currentPicked, :currentPrice, :time, :status)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nameWebsite', $nameWebsite);
        $stmt->bindParam(':linkContact', $linkContact);
        $stmt->bindParam(':currentPicked', $currentPicked);
        $stmt->bindParam(':currentPrice', $currentPrice);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':status', $status);
        $stmt->execute();

        // Gửi thông báo qua Telegram
        $botToken = '8143306264:AAGLUJxIZkj_QMrlms1M19YezwySv41nnRo';
        $chatId = '7114174347'; // Chat ID của bạn
        $message = "📦 <b>Đơn hàng mới</b>\n"
                 . "🌐 <b>Khách Hàng:</b> $nameWebsite\n"
                 . "📞 <b>Liên hệ:</b> $linkContact\n"
                 . "🎯 <b>Gói chọn:</b> $currentPicked\n"
                 . "💰 <b>Giá:</b> $currentPrice\n"
                 . "⏰ <b>Thời gian:</b> " . date('d/m/Y H:i:s', $time);

        $url = "https://api.telegram.org/bot$botToken/sendMessage";
        $params = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML'
        ];

        // Gửi yêu cầu đến Telegram
        file_get_contents($url . '?' . http_build_query($params));
    }
}
?>