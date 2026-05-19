<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Họ và Tên</th>
            <th>MSSV</th>
            <th>Giới Tính</th>
        </tr>
        
        <?php if (!empty($dssinhvien)): ?>
            <?php foreach ($dssinhvien as $sv): ?>
            <tr>
                <td><?php echo htmlspecialchars($sv->hoten); ?></td>
                <td><?php echo htmlspecialchars($sv->mssv); ?></td>
                <td><?php echo htmlspecialchars($sv->gioitinh); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" style="text-align: center;">Chưa có dữ liệu</td>
            </tr>
        <?php endif; ?>
        
    </table>
</body>
</html>