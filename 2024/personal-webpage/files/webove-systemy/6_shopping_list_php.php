<?php
// Cesta k souboru, kde bude uložen nákupní seznam
$file = '/tmp/shopping_list_jenda.txt';

// Funkce pro načtení seznamu ze souboru
function loadShoppingList($file) {
    if (file_exists($file)) {
        return file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return [];
}

// Funkce pro uložení seznamu do souboru
function saveShoppingList($file, $list) {
    file_put_contents($file, implode(PHP_EOL, $list));
}

// Načti seznam ze souboru
$shopping_list = loadShoppingList($file);

// Zpracování formuláře pro přidání položky
if (isset($_POST['add_item'])) {
    $item = trim($_POST['item']);
    if ($item !== '') {
        $shopping_list[] = htmlspecialchars($item);
        saveShoppingList($file, $shopping_list);
    }
}

// Zpracování požadavku na smazání položky
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (isset($shopping_list[$index])) {
        unset($shopping_list[$index]);
        $shopping_list = array_values($shopping_list); // Přeindexování pole
        saveShoppingList($file, $shopping_list);
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Nákupní seznam</title>
</head>
<body>
    <h1>Nákupní seznam</h1>
    
    <!-- Formulář pro přidání nové položky -->
    <form method="post" action="?">
        <input type="text" name="item" placeholder="Přidej položku">
        <button type="submit" name="add_item">Přidat</button>
    </form>

    <ul>
        <?php foreach ($shopping_list as $index => $item): ?>
            <li>
                <?php echo $item; ?>
                <a href="?delete=<?php echo $index; ?>">Vyhodit</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
