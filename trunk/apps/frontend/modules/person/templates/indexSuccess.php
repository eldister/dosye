<h1>Persons List</h1>

<table>
  <thead>
    <tr>
      <th>Expediente</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Identificaci&oacute;n</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($persons as $person): ?>
    <tr>
      <td><a href="<?php echo url_for('person/show?id='.$person->getId()) ?>"><?php echo $person->getInternalId() ?></a></td>
      <td><?php echo $person->getFirstName() ?></td>
      <td><?php echo $person->getLastName() ?></td>
      <td><?php echo $person->getIdentification() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('person/new') ?>">New</a>
