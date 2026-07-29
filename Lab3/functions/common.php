<?php
function formatPrice($price, $currency = "đ")
{
    return number_format($price, 0, ",", ".") . " " . $currency;
}

function getTotalQuantity($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'];
    }
    return $total;
}

function getTotalPrice($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return $total;
}

function renderProductTable($products, $tableTitle, $currency = "đ")
{
    echo '<h3 class="mt-4 mb-3">' . $tableTitle . '</h3>';
    echo '<table class="table table-bordered table-hover table-striped align-middle">';
    echo '
        <thead class="table-dark">
            <tr>
                <th width="60">STT</th>
                <th width="120">Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th width="120" class="text-center">Số lượng</th>
                <th width="180" class="text-end">Đơn giá</th>
            </tr>
        </thead>
        <tbody>';
    foreach ($products as $index => $product) {
        echo '<tr>';
        echo '<td>' . ($index + 1) . '</td>';
        echo '<td>' . $product['id'] . '</td>';
        echo '<td>' . $product['name'] . '</td>';
        echo '<td class="text-center">' . $product['quantity'] . '</td>';
        echo '<td class="text-end">' . formatPrice($product['price'], $currency) . '</td>';
        echo '</tr>';
    }
    echo '
        </tbody>
        <tfoot class="table-warning fw-bold">
            <tr>
                <td colspan="3" class="text-end">Tổng cộng</td>
                <td class="text-center">' . getTotalQuantity($products) . '</td>
                <td class="text-end">' . formatPrice(getTotalPrice($products), $currency) . '</td>
            </tr>
        </tfoot>';
    echo '</table>';
}
?>
