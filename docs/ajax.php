<? if (!isset($_FILES['PERSONAL_PHOTO'])) {
    return false;
}

echo "<pre>";
print_r($_FILES['PERSONAL_PHOTO']);
echo "</pre>";

