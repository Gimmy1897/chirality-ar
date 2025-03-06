<?php
// Verifica se la variabile 'model' è impostata
if (isset($_GET['model'])) {
    // Prende il valore della variabile 'model'
    $model = htmlspecialchars($_GET['model']);

    // Crea il link con la variabile 'model' inclusa nell'URL
    $link = "intent://arvr.google.com/scene-viewer/1.0?file=https://raw.githubusercontent.com/KhronosGroup/glTF-Sample-Models/master/2.0/Avocado/glTF/Avocado.gltf#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;";

    // Redirige alla nuova pagina con la variabile 'model' nell'URL
    header("Location: $link");
    exit();
} else {
    echo "Il parametro 'model' non è stato fornito.";
}
?>
