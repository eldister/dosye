<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $person->getId() ?></td>
    </tr>
    <tr>
      <th>Internal:</th>
      <td><?php echo $person->getInternalId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $person->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $person->getLastName() ?></td>
    </tr>
    <tr>
      <th>Photo image:</th>
      <td><?php echo $person->getPhotoImageId() ?></td>
    </tr>
    <tr>
      <th>Date of birth:</th>
      <td><?php echo $person->getDateOfBirth() ?></td>
    </tr>
    <tr>
      <th>Cell phone:</th>
      <td><?php echo $person->getCellPhone() ?></td>
    </tr>
    <tr>
      <th>Home phone:</th>
      <td><?php echo $person->getHomePhone() ?></td>
    </tr>
    <tr>
      <th>Job phone:</th>
      <td><?php echo $person->getJobPhone() ?></td>
    </tr>
    <tr>
      <th>Other phone:</th>
      <td><?php echo $person->getOtherPhone() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $person->getEmail() ?></td>
    </tr>
    <tr>
      <th>Nationality:</th>
      <td><?php echo $person->getNationalityId() ?></td>
    </tr>
    <tr>
      <th>Identification:</th>
      <td><?php echo $person->getIdentification() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $person->getGender() ?></td>
    </tr>
    <tr>
      <th>Marital status:</th>
      <td><?php echo $person->getMaritalStatusId() ?></td>
    </tr>
    <tr>
      <th>Has a job:</th>
      <td><?php echo $person->getHasAJob() ?></td>
    </tr>
    <tr>
      <th>Employment:</th>
      <td><?php echo $person->getEmployment() ?></td>
    </tr>
    <tr>
      <th>Paid job:</th>
      <td><?php echo $person->getPaidJob() ?></td>
    </tr>
    <tr>
      <th>Temporal job:</th>
      <td><?php echo $person->getTemporalJob() ?></td>
    </tr>
    <tr>
      <th>Address area1:</th>
      <td><?php echo $person->getAddressArea1() ?></td>
    </tr>
    <tr>
      <th>Address area2:</th>
      <td><?php echo $person->getAddressArea2() ?></td>
    </tr>
    <tr>
      <th>Address area3:</th>
      <td><?php echo $person->getAddressArea3() ?></td>
    </tr>
    <tr>
      <th>Address neighborhood:</th>
      <td><?php echo $person->getAddressNeighborhood() ?></td>
    </tr>
    <tr>
      <th>Address directions:</th>
      <td><?php echo $person->getAddressDirections() ?></td>
    </tr>
    <tr>
      <th>Church:</th>
      <td><?php echo $person->getChurch() ?></td>
    </tr>
    <tr>
      <th>Educational level:</th>
      <td><?php echo $person->getEducationalLevel() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $person->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $person->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $person->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $person->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('p/edit?id='.$person->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('p/index') ?>">List</a>
