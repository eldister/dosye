<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $team->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $team->getName() ?></td>
    </tr>
    <tr>
      <th>Photo image:</th>
      <td><?php echo $team->getPhotoImageId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $team->getDescription() ?></td>
    </tr>
    <tr>
      <th>Due date:</th>
      <td><?php echo $team->getDueDate() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $team->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $team->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $team->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $team->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('team/edit?id='.$team->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('team/index') ?>">List</a>
