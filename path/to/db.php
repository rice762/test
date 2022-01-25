
<?PHP
    header('Content-Type: text/html; charset=UTF-8');
    
    $sql = "SELECT * FROM order_table2";
    // $sql = "SELECT * FROM table5 ORDER BY RAND() LIMIT 1";
    $ps = $db->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset='utf-8'>
        <title>練習</title>
        <link rel="stylesheet" href="sample.css">
        <script type="text/javascript" src="practice.js"></script>
        <link rel="manifest" href="manifest.json">
    </head>
    <body>
        <div>
            <h1>練習</h1>
            <p>コインを入れて下さい<br>飲み物は200円です</p>
            <button onclick="buy()">飲み物を買う</button>
            <button onclick="insert()">お金を入れる</button>
            <?PHP
                foreach ($ps as $val) {
                    print '<table><tr><th>注文番号</th><th>テーブル番号</th><th>商品名</th><th>個数</th><tr>' .$val['order_num'] . '</tr>' .$val['table_num'] .$val['order_name'] .$val['quantity'] . '</tr></table>';
                }
            ?>
        </div>
    </body>
</html>
