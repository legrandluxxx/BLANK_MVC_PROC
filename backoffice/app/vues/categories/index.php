<?php
/*
  ./app/vues/categories/index.php
  Liste des catégories
  Variables disponibles :
      - $categories : ARRAY(ARRAY(id, titre, slug))
 */
 ?>

<h1>Gestion des catégories</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>slug</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($categories as $categorie): ?>
    <tr>
      <td><?php echo $categorie['id']; ?></td>
      <td><?php echo $categorie['titre']; ?></td>
      <td><?php echo $categorie['slug']; ?></td>
      <td>
        <a href="#">Edit</a> | <a href="#">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
