<?php
    $handle = fopen("pedido_554155.csv", "w");
    fwrite($handle, "Pedido;");
    fwrite($handle, "Tipo;");
    fwrite($handle, "Cliente;");
    fwrite($handle, "Endereco;");
    fwrite($handle, "Valor Produtos (R$);");
    fwrite($handle, "Valor Frete (R$);");
    fwrite($handle, "Valor Total (R$);");
    fwrite($handle, "\n");
    fwrite($handle, "554155;");
    fwrite($handle, "Retirada;");
    fwrite($handle, "Alexandre Santos;");
    fwrite($handle, "Rua xxx xxx, xxx, xx xx xx , xx-Es;");
    fwrite($handle, "126.95;");
    fwrite($handle, "10.00;");
    fwrite($handle, "136.95;");
    fwrite($handle, "\n");
    fwrite($handle, "Cod Interno;");
    fwrite($handle, "Cod Barras/SEAN;");
    fwrite($handle, "Descricao;");
    fwrite($handle, "Quantidade Un/Kg;");
    fwrite($handle, "Valor Unitario (R$);");
    fwrite($handle, "Valor Total (R$);");
    fwrite($handle, "\n");
    fwrite($handle, "1235;");
    fwrite($handle, "7892321654163655;");
    fwrite($handle, "Café Cafuso;");
    fwrite($handle, "5;");
    fwrite($handle, "2.99;");
    fwrite($handle, "14.95;");
    fwrite($handle, "\n");
    fwrite($handle, "63254;");
    fwrite($handle, "78933015232215232;");
    fwrite($handle, "Coador de Café;");
    fwrite($handle, "2;");
    fwrite($handle, "4.92;");
    fwrite($handle, "9.84;");
    fclose($handle);

    header('Content-Type: application/octet-stream');
    header('Content-Type: text/html; charset=utf-8');
    header('Content-Disposition: attachment; filename='.basename('pedido_554155.csv'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('pedido_554155.csv'));
    readfile('pedido_554155.csv');
    exit;
?>
