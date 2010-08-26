<h1>Groupings List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($groupings as $grouping): ?>
    <tr>
      <td><a href="<?php echo url_for('g/show?id='.$grouping->getId()) ?>"><?php echo $grouping->getName() ?></a></td>
      <td><?php echo $grouping->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('g/new') ?>">New</a>
