
<input id="date-picker" class="date-picker" capriza-date-format="yyyy-MM-dd" type="date"></input>
<link rel="stylesheet" href="/css/grading.css">
<table id="time-entry-table" class="should-use-web-color">
  <thead>
    <tr>
      <th class='day-column' capriza-date='02/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Sun 2</th>
      <th class='day-column' capriza-date='03/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Mon 3</th>
      <th class='day-column' capriza-date='04/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Tue 4</th>
      <th class='day-column' capriza-date='05/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Wed 5</th>
      <th class='day-column' capriza-date='06/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Thu 6</th>
      <th class='day-column' capriza-date='07/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Fri 7</th>
      <th class='day-column' capriza-date='08/07/2017' capriza-date-format="dd/MM/yyyy" capriza-multiline=true>Sat 8</th>
      <th style="width:70px">Project</th>
      <th style="width:188px">Desc.</th>
      <th style="width:105px">Comments</th>
      <th style="width:22px"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input value=2></td>
      <td><input value=0></td>
      <td><input value=1></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=8></td>
      <td><input static=true value="Project A"></td>
      <td><input static=true value="Some description with long text"></td>
      <td><input static=true value="my notes about the project"></td>
      <td><button class="delete-row" static=true>x</button></td>
    </tr>
    <tr>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=4></td>
      <td><input value=0></td>
      <td><input static=true value="Project B"></td>
      <td><input static=true value="Some description"></td>
      <td><input static=true value="my notes about the project"></td>
      <td><button class="delete-row" static=true>x</button></td>
    </tr>
    <tr>
      <td><input value=5></td>
      <td><input value=0></td>
      <td><input value=6></td>
      <td><input value=0></td>
      <td><input value=4></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input static=true value="Project C"></td>
      <td><input static=true value="Another prject to report"></td>
      <td><input static=true value="my notes about the project"></td>
      <td><button class="delete-row" static=true>x</button></td>
    </tr>
    <tr>
      <td><input value=9></td>
      <td>Hedva</td>
      <td><input value=0></td>
      <td><input value=4></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input static=true value="Project D"></td>
      <td><input static=true value="Nothing to write"></td>
      <td><input static=true value="my notes about the project"></td>
      <td><button class="delete-row" static=true>x</button></td>
    </tr>
    <tr>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=7></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input value=0></td>
      <td><input static=true value="Project E"></td>
      <td><input static=true value="Last one"></td>
      <td><input static=true value="my notes about the project"></td>
      <td><button class="delete-row" static=true>x</button></td>
    </tr>
    <tr>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td></td>
    </tr>
    <tr>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td><input></td>
      <td></td>
    </tr>
  </tbody>
</table>

<button onclick="addRow();">New Row</button>
<button id="fill-table-btn">Fill Table</button>
