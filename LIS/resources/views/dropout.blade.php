
@extends('layouts.app4')
@section('content')
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">




  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>


  <div class="page">
 <h1>Dropout Form</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
            <th>Number</th>
            <th colspan="2">Name</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td class="organisationnumber">140406</td>
            <td class="organisationname">ANO, JOYET  POTOT</td>
            <td class="actions">
              <select>
            <option value="options">Options</option>
            <option value="drop out">Drop Out</option>
            <option value="transferred in">Transferred In</option>
            <option value="transferred out">Transferred Out</option>
          </select>
            </td>
        </tr>

        <tr>
            <td class="organisationnumber">140412</td>
            <td class="organisationname">APOLE, EZEKIEL  MORALES</td>
            <td class="actions">
              <select>
              <option value="options">Options</option>
              <option value="drop out">Drop Out</option>
              <option value="transferred in">Transferred In</option>
              <option value="transferred out">Transferred Out</option>
            </select>
            </td>
        </tr>

        <tr>
            <td class="organisationnumber">140404</td>
            <td class="organisationname">AREGLO, RONALD  LUNA</td>
            <td class="actions">
              <select>
              <option value="options">Options</option>
              <option value="drop out">Drop Out</option>
              <option value="transferred in">Transferred In</option>
              <option value="transferred out">Transferred Out</option>
            </select>
            </td>
        </tr>

        <tr>
            <td class="organisationnumber">140408</td>
            <td class="organisationname">BALAGUER, FRIDDY</td>
            <td class="actions">
              <select>
              <option value="options">Options</option>
              <option value="drop out">Drop Out</option>
              <option value="transferred in">Transferred In</option>
              <option value="transferred out">Transferred Out</option>
            </select>
            </td>
        </tr>

        <tr>
            <td class="organisationnumber">140410</td>
            <td class="organisationname">
                BARDOS, RODOLFO  ROTUBIO
            </td>
            <td class="actions">
              <select>
              <option value="options">Options</option>
              <option value="drop out">Drop Out</option>
              <option value="transferred in">Transferred In</option>
              <option value="transferred out">Transferred Out</option>
            </select>
            </td>
        </tr>


    </tbody>
</table>
  <button type="button">Save and Update</button>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!DOCTYPE html>
  <html >
  <head>
    <meta charset="UTF-8">
    <title>Infield Top Aligned Form Labels</title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


        <link rel="stylesheet" href="css/style.css">


  </head>

  <body>
    <h1>Drop Out</h1>


  <form>
  		<ul>
  				<li>
  						<input id="first-name" type="text" />
  						<label for="first-name">Date of Drop Out</label>
  				</li>
  				<li>
  						<input id="last-name" type="text" />
  						<label for="last-name">Cause of Drop Out</label>
  				</li>
  						</ul>
  </form>
  <center>
  <button type="button">Save and Update</button>
  <button type="button">Cancel</button>
  </center>


      <script  src="js/index.js"></script>

  </body>
  </html>


</body>

</html>
@endsection('content')
