<!-- Affiche le nom de l'auteur -->
<?php 
    // Cette fonction prend en paramètres: l'email de l'auteur : authorEmail et le tableau des utilisateurs
    function displayAuthor(string $authorEmail, array $users): string {
        foreach($users as $user) {
            if($authorEmail === $user['email']) {
                return $user['full_name'] . '(' . $user['age'] . ' ans)' ;
            }
        }
    }
?>

<!-- Vérifie une recette valide -->
<?php 
    function isValideRecipe(array $recipe): bool {
        if (array_key_exists('is_enabled', $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            return false;
        }
        return $isEnabled;
    }
?>

<!-- Récupère les recettes valides -->
<?php 
    function getRecipes(array $recipes): array {
        // On déclare un tableau de recette à récupérer
        $validRecipes = [];

        foreach($recipes as $recipe) {
            if(isValideRecipe($recipe)) {
                $validRecipes[] = $recipe;
            }
        }
        return $validRecipes;
    }
?>