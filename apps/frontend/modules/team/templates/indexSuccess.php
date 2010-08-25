<h1>Teams List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Photo image</th>
      <th>Description</th>
      <th>Due date</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($teams as $team): ?>
    <tr>
      <td><a href="<?php echo url_for('team/show?id='.$team->getId()) ?>"><?php echo $team->getId() ?></a></td>
      <td><?php echo $team->getName() ?></td>
      <td><?php echo $team->getPhotoImageId() ?></td>
      <td><?php echo $team->getDescription() ?></td>
      <td><?php echo $team->getDueDate() ?></td>
      <td><?php echo $team->getCreatedAt() ?></td>
      <td><?php echo $team->getUpdatedAt() ?></td>
      <td><?php echo $team->getCreatedBy() ?></td>
      <td><?php echo $team->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('team/new') ?>">New</a>
