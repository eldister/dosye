<h1>Persons List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Internal</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Photo image</th>
      <th>Date of birth</th>
      <th>Cell phone</th>
      <th>Home phone</th>
      <th>Job phone</th>
      <th>Other phone</th>
      <th>Email</th>
      <th>Nationality</th>
      <th>Identification</th>
      <th>Gender</th>
      <th>Marital status</th>
      <th>Has a job</th>
      <th>Employment</th>
      <th>Paid job</th>
      <th>Temporal job</th>
      <th>Address area1</th>
      <th>Address area2</th>
      <th>Address area3</th>
      <th>Address neighborhood</th>
      <th>Address directions</th>
      <th>Church</th>
      <th>Educational level</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($persons as $person): ?>
    <tr>
      <td><a href="<?php echo url_for('person/show?id='.$person->getId()) ?>"><?php echo $person->getId() ?></a></td>
      <td><?php echo $person->getInternalId() ?></td>
      <td><?php echo $person->getFirstName() ?></td>
      <td><?php echo $person->getLastName() ?></td>
      <td><?php echo $person->getPhotoImageId() ?></td>
      <td><?php echo $person->getDateOfBirth() ?></td>
      <td><?php echo $person->getCellPhone() ?></td>
      <td><?php echo $person->getHomePhone() ?></td>
      <td><?php echo $person->getJobPhone() ?></td>
      <td><?php echo $person->getOtherPhone() ?></td>
      <td><?php echo $person->getEmail() ?></td>
      <td><?php echo $person->getNationalityId() ?></td>
      <td><?php echo $person->getIdentification() ?></td>
      <td><?php echo $person->getGender() ?></td>
      <td><?php echo $person->getMaritalStatusId() ?></td>
      <td><?php echo $person->getHasAJob() ?></td>
      <td><?php echo $person->getEmployment() ?></td>
      <td><?php echo $person->getPaidJob() ?></td>
      <td><?php echo $person->getTemporalJob() ?></td>
      <td><?php echo $person->getAddressArea1() ?></td>
      <td><?php echo $person->getAddressArea2() ?></td>
      <td><?php echo $person->getAddressArea3() ?></td>
      <td><?php echo $person->getAddressNeighborhood() ?></td>
      <td><?php echo $person->getAddressDirections() ?></td>
      <td><?php echo $person->getChurch() ?></td>
      <td><?php echo $person->getEducationalLevel() ?></td>
      <td><?php echo $person->getCreatedAt() ?></td>
      <td><?php echo $person->getUpdatedAt() ?></td>
      <td><?php echo $person->getCreatedBy() ?></td>
      <td><?php echo $person->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('person/new') ?>">New</a>
