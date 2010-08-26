<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $grouping->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $grouping->getName() ?></td>
    </tr>
    <tr>
      <th>Photo image:</th>
      <td><?php echo $grouping->getPhotoImageId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $grouping->getDescription() ?></td>
    </tr>
    <tr>
      <th>Due date:</th>
      <td><?php echo $grouping->getDueDate() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $grouping->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $grouping->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $grouping->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $grouping->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('g/edit?id='.$grouping->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('g/index') ?>">List</a>
