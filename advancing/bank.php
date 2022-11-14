<?php

require_once 'bankActions.php';

$checkingAccounts = [
    "123.123.123-12" => [
        "name" => "Gabriel Borel",
        "balance" => 1000
    ],
    "231.231.231-12" => [
        "name" => "Jonas Silva",
        "balance" => 1000
    ],
    "312.312.312-12" => [
        "name" => "Carlos NaoSei",
        "balance" => 1000
    ]
];

deposit($checkingAccounts['123.123.123-12'], 500);
withdraw($checkingAccounts['312.312.312-12'], 300);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank</title>
</head>
<body>
    <h1>Accounts</h1>

    <dl>
        <?php foreach ($checkingAccounts as $cpf => $account) { ?>
            <dt>
                <h3><?= $cpf; ?> - <?= $account['name']; ?></h3>
            </dt>
            <dt>
                <?= $account['balance'] ?>
            </dt>
        <?php } ?>
    </dl>
</body>
</html>
